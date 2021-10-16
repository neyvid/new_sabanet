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
                        <h5 class="text-center mt-4 separator_gradient_line">بازیابی شناسه کاربری و رمز عبور</h5>

                        <form class="align-items-center " method="post" action="">
                            @csrf

                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">ایمیل یا شماره همراه </label>
                                <div class="col-sm-12">
                                    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="ایمیل یا شماره همراه خود را وارد نمایید">
                                </div>
                            </div>

                            <div class="d-grid gap-2">

                                <button type="submit" class="btn btn-success d-block">بازیابی رمز عبور</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
