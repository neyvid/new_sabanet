@extends('frontend.layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12  mt-5 mb-5 register_form">
                    <div class="content">
                        @include('flashMessages.flash-message')
                        <img class="img-fluid d-block m-auto" width="150px" height="150px"
                             src="{{url('images/frontend/register_icon.svg')}}" alt="">
                        <h5 class="text-center mt-4 separator_gradient_line">لینک تغییر رمز عبور برای شما ارسال
                            گردید.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
