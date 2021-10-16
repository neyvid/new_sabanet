@extends('frontend.register_adsl_layout.register_adsl_layout')
@section('content')

    <div class="container">
        <div class="row">

                <div class="mt-5">
                    <h5 class="separator_gradient_line">
                        سرویس های پیشنهادی
                    </h5>
                    <p>شما می‌توانید سرویس مورد نظر خود را از میان فهرست پیشنهادی زیر انتخاب فرمایید. برای مشاهده
                        سرویس‌های دیگر شاتل بر روی کلید انتخاب‌های بیش‌تر کلیک کنید. </p>
                </div>

        </div>
        <div class="row mb-4">
            <div class="col-lg-4 col-12  mb-3">
                <div class="row service_offer_content_wrap position-relative">
                    <div class="col-4 service_offer_picture_wrap  position-relative">
                        <div class="picture_content position-absolute">
                            <p>Fair</p>
                            <p>82912</p>
                        </div>
                    </div>
                    <div class="col-8 p-2 service_description_wrap">
                        <p>
                            <span>سرعت:</span>
                            <span>کیلوبیت بر ثانیه </span>
                        </p>
                        <p>
                            <span>دوره: </span>
                            <span>12 ماهه</span>
                        </p>
                        <p class="m-0">
                            <span>حد آستانه مصرف:</span>
                            <span>ماهانه 120 گیگ ترافیک ایران</span>
                        </p>
                        <span class="span_equal_service_value">معادل 60 گیگ ترافیک بین الملل</span>
                        <p>
                            <span class="span_service_price">8,640,000 </span>
                            <span>تومان</span>
                        </p>
                    </div>
                    <span class="service_selected_icon  d-none" >
                                            <i class="fas fa-check-circle fa-2x "></i>

                    </span>
                </div>

            </div>
            <div class="col-lg-4 col-12  mb-3">
                <div class="row service_offer_content_wrap">
                    <div class="col-4 service_offer_picture_wrap position-relative">
                        <div class="picture_content position-absolute">
                            <p>Fair</p>
                            <p>82912</p>
                        </div>
                    </div>

                    <div class="col-8 p-2 service_description_wrap">
                        <p>
                            <span>سرعت:</span>
                            <span>کیلوبیت بر ثانیه </span>
                        </p>
                        <p>
                            <span>دوره: </span>
                            <span>12 ماهه</span>
                        </p>
                        <p class="m-0">

                            <span>حد آستانه مصرف:</span>
                            <span>ماهانه 120 گیگ ترافیک ایران</span>
                        </p>
                        <span class="span_equal_service_value">معادل 60 گیگ ترافیک بین الملل</span>
                        <p>
                            <span class="span_service_price">8,640,000 </span>
                            <span>تومان</span>
                        </p>


                    </div>
                    <span class="service_selected_icon d-none"><i class="fas fa-check-circle fa-2x "></i></span>
                </div>

            </div>
            <div class="col-lg-4 col-12  mb-3">
                <div class="row service_offer_content_wrap">
                    <div class="col-4 service_offer_picture_wrap position-relative">
                        <div class="picture_content position-absolute">
                            <p>Fair</p>
                            <p>82912</p>
                        </div>
                    </div>
                    <div class="col-8 p-2 service_description_wrap">
                        <p>
                            <span>سرعت:</span>
                            <span>کیلوبیت بر ثانیه </span>
                        </p>
                        <p>
                            <span>دوره: </span>
                            <span>12 ماهه</span>
                        </p>
                        <p class="m-0">

                            <span>حد آستانه مصرف:</span>
                            <span>ماهانه 120 گیگ ترافیک ایران</span>
                        </p>
                        <span class="span_equal_service_value">معادل 60 گیگ ترافیک بین الملل</span>
                        <p>
                            <span class="span_service_price">8,640,000 </span>
                            <span>تومان</span>
                        </p>

                    </div>
                    <span class="service_selected_icon d-none"><i class="fas fa-check-circle fa-2x "></i></span>

                </div>

            </div>
        </div>
        <div class="row">

                <div class="mt-5">
                    <h5 class="separator_gradient_line">
                        تجهیزات پیشنهادی
                    </h5>

                </div>

        </div>
        <div class="row mb-4">
            <div class="col-lg-3 col-12  mb-3 text-center">
                <img src="{{url('../../images/modem.jpg')}}" alt="">
                <h5>Combo P-660RU Zyxel </h5>
                <a href="">
                    مهم ترین امکانات و ویژگی ها
                </a>
                <p>1450000تومان</p>
                <div class="d-grid gap-2 equipment_btn_select">
                    <button class="btn btn-primary" type="button">انتخاب</button>
                    <button class="btn btn-success d-none" type="button"><i class="fa fa-check-circle"></i></button>
                </div>
            </div>
            <div class="col-lg-3 col-12  mb-3 text-center">
                <img src="{{url('../../images/modem.jpg')}}" alt="">
                <h5>Combo P-660RU Zyxel </h5>
                <a href="">
                    مهم ترین امکانات و ویژگی ها
                </a>
                <p>1450000تومان</p>
                <div class="d-grid gap-2 equipment_btn_select">
                    <button class="btn btn-primary" type="button">انتخاب</button>
                    <button class="btn btn-success d-none" type="button"><i class="fa fa-check-circle"></i></button>

                </div>
            </div>



        </div>

    </div>

@endsection
