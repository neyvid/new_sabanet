@extends('layouts.frontend.layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                @include('flashMessages.flash-message')

                <div class="col-lg-3 col-sm-12  mt-5 mb-5 register_form">
                    <div class="content">

                        <img class="img-fluid d-block m-auto" width="150px" height="150px"
                             src="{{url('images/frontend/register_icon.svg')}}" alt="">
                        <h5 class="text-center mt-4 separator_gradient_line">ورود به صبا نت</h5>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="align-items-centerc " method="post">
                            @csrf
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">ایمیل یا موبایل</label>
                                <div class="col-sm-12">
                                    <input type="text" name="username" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-12 col-form-label">رمز عبور</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>

                            <div class="form-check d-flex justify-content-end flex-row-reverse mb-2">
                                <label class="form-check-label" for="flexCheckChecked">
                                    من را بخاطر بسپار!
                                </label>
                                <input class="form-check-input mt5px ms-2" type="checkbox" value=""
                                       id="flexCheckChecked" name="remember_me" checked>

                            </div>
                            <div class="form-check d-flex justify-content-end flex-row-reverse mb-2">
                                <a href="{{route('frontend.forgotPassword.form')}}">رمزورودخودرافراموش کرده اید؟</a>

                            </div>
                            <div class="d-grid gap-2">

                                <button type="submit" class="btn btn-success d-block">ورود</button>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="col-lg-6 mt-sm-1 mb-sm-5 mt-lg-5 col-sm-12">
                    <section class="slider_resgiter_form">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{url('/images/logo/reg-1.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('/images/logo/reg-2.jpg')}}" class="d-block w-100" alt="...">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
