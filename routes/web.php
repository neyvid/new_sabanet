<?php

use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\FrontEnd\UserController;
use App\Http\Controllers\UserPanel\PanelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/userFactory',function (){
  \App\Models\User::factory()->count(10)->create();
});


//All Route For FRONT-END
Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
//   Register Routes
    Route::get('register', [UserController::class, 'register'])->name('frontend.register.form');
    Route::post('register', [UserController::class, 'doRegister'])->name('frontend.doRegister');
//   Login/Logout Routes
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'doLogin'])->name('frontend.doLogin');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
// Password Routes
    Route::get('forgot-password', [UserController::class, 'forgotPassword'])->name('frontend.forgotPassword.form');
    Route::post('forgot-password', [UserController::class, 'sendPasswordResetLink'])->name('frontend.sendPasswordResetLink');
    Route::get('reset-password', [UserController::class, 'resetPassword'])->name('frontend.resetPassword.form');
    Route::post('reset-password', [UserController::class, 'doResetPassword'])->name('frontend.doResetPassword');
    Route::get('forgot-password-result', function () {
        return view('frontend.forgotpassword.forgot-password-result');
    })->name('forgot-password-result');
});


//All Route For Normal-USer-Panel (NORMAL USER ACCESS)
Route::group(['middleware' => ['auth', 'role:' . \App\Models\Roles\Roles::getRoleName(\App\Models\Roles\Roles::NORMAL_USER) .'|'. \App\Models\Roles\Roles::getRoleName(\App\Models\Roles\Roles::MANAGER)], 'prefix' => 'panel'], function () {
    Route::get('/', [PanelController::class, 'index'])->name('userpanel.home');
});


//All Route For Admin-Panel  (ADMIN ADN SUPPORTER ACCESS)
Route::group(['middleware' => ['auth', 'role:' . \App\Models\Roles\Roles::getRoleName(\App\Models\Roles\Roles::MANAGER)],'prefix' => 'admin'], function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'allUser'])->name('admin.user.all.list');
    Route::post('/users', [\App\Http\Controllers\Admin\UserController::class, 'doDeleteAll'])->name('admin.user.delete.all');
    Route::get('/user/delete/{userId}', [\App\Http\Controllers\Admin\UserController::class, 'userDelete'])->name('admin.user.delete');
    //Change User Status With Admin
    Route::post('/user/change_status', [\App\Http\Controllers\Admin\UserController::class, 'userChangeStatus'])->name('admin.userstatus.change');

});


