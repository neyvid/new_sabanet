<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterValidation;
use App\Mail\sendResetPasswordLink;
use App\Models\Permissions\Permissions;
use App\Models\Roles\Roles;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\SendSms\SendSms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

//    Show Register User Form
    public function register()
    {
        return view('frontend.register.index');

    }

    public function authType(string $usernameValue)
    {
        //usernameValue = n@n.com or 09131011538 or each value that come from input that have username name

        return filter_var($usernameValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

    }

    public function doRegister(UserRegisterValidation $request)
    {
        //Get and Set Data From Client

        $userData = [
            $this->authType($request->input('username')) => $request->username,
            'password' => Hash::make($request->input('password'))
        ];
//        try catch use for duplication mobile or email create
        try {
            $userCreated = $this->userRepository->create($userData);

        } catch (\Exception $exception) {
            return redirect()->back()->with('warning', 'این نام کاربری قبلا ثبت شده است.');
        }
        if ($userCreated && $userCreated instanceof User) {
            //assign role and permision in here
            $userCreated->assignRole(Roles::NORMAL_USER);
            $userCreated->givePermissionTo(Permissions::USERACCESS);
            Auth::login($userCreated, true);
            return redirect()->route('frontend.home');
        }


    }

// Show Login User Form
    public function login()
    {
        return view('frontend.login.index');

    }

    public function doLogin(Request $request)
    {
        $authType = $this->authType($request->input('username'));
        if (Auth::attempt([$authType => $request->input('username'), 'password' => $request->input('password')], $request->has('remember_me') ? true : false)) {

            return redirect()->route('frontend.home');
        }
        return redirect()->back()->with('warning', 'اطلاعات کاربری وارد شده صحیح نمی باشد!');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }

    public function forgotPassword()
    {
        return view('frontend.forgotpassword.index');
    }

    public function sendPasswordResetLink(Request $request)
    {
        $authType = $this->authType($request->input('username'));
        $user = $this->userRepository->findBy([$authType => $request->input('username')]);
        if ($user && $user instanceof User) {
//            Delete All Row Of password_resets Table If is Exist
            DB::table('password_resets')->where($authType, $request->input('username'))->delete();
            DB::table('password_resets')->insert(
                [
                    $authType => $request->input('username'),
                    'token' => bcrypt(15),
                    'created_at' => Carbon::now(),
                ]
            );
            $currentResetPassToken = DB::table('password_resets')->where($authType, $request->input('username'))->orderBy('created_at', 'desc')->first()->token;
            if ($authType == 'email') {
                Mail::to($user)->send(new sendResetPasswordLink($user->email, $currentResetPassToken));

            } else {
                $link = 'http://sabanet1400.me/reset-password?token=' . $currentResetPassToken . '&username=' . $user->mobile;
                $sms_result = SendSms::SendSms($user->mobile, $link);
                return $sms_result == '2' ? redirect()->route('forgot-password-result') : 'error';
            }
        }
    }


    public function resetPassword(Request $request)
    {

//Notice:Remmember Me : Security should be check and fix
        $username = $request->username;
        $token = $request->token;
        return view('frontend.resetpassword.index', compact('username', 'token'));
    }

    public function doResetPassword(Request $request)
    {
        $authType = $this->authType($request->input('username'));
        $username = $request->input('username');
        $token = $request->input('token');
        $password = $request->input('password');
        $chekToken_Email = DB::table('password_resets')->where($authType, $username)->where('token', $token);
        if ($chekToken_Email->first()) {
            $validated = $request->validate([
                'password' => 'required|confirmed|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/',
            ], ['password.required' => 'رمزعبور اجباری است',
                'confirmed' => 'رمزعبور با تکرار رمز عبور همخوانی ندارد',
                'regex' => 'رمز عبورحداقل باید 8 کاراکتر و شامل یک حرف بزرگ و کوچک باشد']);
            $user = $this->userRepository->findBy([$authType => $username]);
            $user->password = Hash::make($password);
            $user->save();
            $chekToken_Email->delete();
            return redirect()->route('frontend.login.form')->with('success', 'رمز عبور شما با موفقیت تغییر کرد.');
        }
        return redirect()->back()->with('warning', 'در بازیابی رمز عبور خطایی رخ داده است ، لطفا مجددا تلاش نمایید.');
    }
}
