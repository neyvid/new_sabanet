<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required', 'regex:/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)|09(0[1-5]|1[0-9]|2[0-2]|3[0-9]|9[4|8|9])-?[0-9]{3}-?[0-9]{4}$/'],
            'password' => 'required|confirmed|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'شماره همراه و یا ایمیل خود را وارد نمایید',
            'username.regex' => 'شماره همراه و یا ایمیل معتبر نمی باشد',
            'password.required' => 'کلمه عبورخودراواردنمایید',
            'password.regex' => 'رمز عبور حداقل باید ۸ کاراکتر باشد وترکیبی ازحروف کوچک وبزرگ واعداد باشد',
            'password.confirmed' => 'رمز عبور با تکرار رمز عبور همخوانی ندارد',
            ];
    }
}
