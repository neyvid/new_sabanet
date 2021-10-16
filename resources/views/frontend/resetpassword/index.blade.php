@extends('layouts.frontend.layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12  mt-5 mb-5 register_form">
                    <div class="content">
                        @include('flashMessages.flash-message')
                        <img class="img-fluid d-block m-auto" width="150px" height="150px"
                             src="{{url('images/frontend/register_icon.svg')}}" alt="">
                        <h5 class="text-center mt-4 separator_gradient_line">تغییر رمز عبور</h5>

                        <form class="align-items-center " method="post">
                            @csrf
                            <input type="text" name="token" hidden value="{{$token}}">

                            <div class="row mb-3 ">
                                <label for="inputPass3" class="col-sm-12 col-form-label">ایمیل </label>
                                <div class="col-sm-12">
                                    <input type="text" disabled name="username" class="form-control" id="inputPass3"
                                           value="{{$username}}">
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <label for="inputPass3" class="col-sm-12 col-form-label">رمز عبور </label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" class="form-control" id="inputPass3"
                                           placeholder="رمز عبور جدید را وارد نمایید">
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <label for="inputpass_confirmation3" class="col-sm-12 col-form-label">تکرار رمز
                                    عبور </label>
                                <div class="col-sm-12">
                                    <input type="password" name="password_confirmation" class="form-control"
                                           id="inputpass_confirmation3" placeholder="رمز عبور را تکرار کنید.">
                                </div>
                            </div>

                            <div class="d-grid gap-2">

                                <button type="submit" class="btn btn-success d-block">ارسال</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
