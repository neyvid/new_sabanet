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
                        <h5 class="text-center mt-4 separator_gradient_line">ثبت نام در صبا نت</h5>
                        <form class="align-items-center" method="post">
                            @csrf
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-sm-12 col-form-label">ایمیل</label>
                                <div class="col-sm-12">
                                    <input type="text" name="username"
                                           class="form-control @error('username') is-invalid @enderror"
                                           id="inputEmail3">
                                </div>
                            </div>

                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-12 col-form-label">رمز عبور</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password"
                                           class="form-control  @error('password') is-invalid @enderror"
                                           id="inputPassword3">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword4" class="col-sm-12 col-form-label">تکرار رمز عبور</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password_confirmation"
                                           class="form-control   @error('password') is-invalid @enderror"
                                           id="inputPassword4">
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success d-block">ثبت نام</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 mt-5 col-sm-12">
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
