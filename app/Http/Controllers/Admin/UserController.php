<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct()
    {
        $this->userRepository=new UserRepository();
    }

    public function allUser()
    {
        $title = 'لیست کاربران ';
        $allUsers = $this->userRepository->all();
        return view('admin.user.index', compact('title', 'allUsers'));
    }

    public function userChangeStatus(Request  $request)
    {
        $user_id=$request->user_id;
        $user_exist_check=$this->userRepository->find($user_id);
        if($user_exist_check && $user_exist_check instanceof User){
          $user_exist_check->status=='active' ? $user_exist_check->status='deactivate' : $user_exist_check->status='active';
          $user_exist_check->save();
          return $user_exist_check;
        }
    }

    public function userDelete(Request $request)
    {
        $user=$this->userRepository->find($request->userId);
        if($user && $user instanceof User){
            $user->delete();
        }
    }

    public function doDeleteAll(Request $request)
    {
        return $request->all();
    }
}
