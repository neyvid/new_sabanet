@extends('frontend.register_adsl_layout.register_adsl_layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <h5 class="separator_gradient_line">
                    بازبینی سفارش
                </h5>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-xs-5  offset-xxl-2">
                <p>مشخصات اشتراک</p>
                <div class=" step4_info_wrap">
                    <ul class="list-unstyled">
                        <li>
                            <p>نوع اشتراک :

                                <span>
                                شخصی
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>نام خانوادگی :

                                <span>
                                نوید سخی طبع
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>شماره تلفن :

                                <span>
                                34342773
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>شماره موبایل :

                                <span>
                                09131011538
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>ایمیل :

                                <span>
                                n.sakhitabe@gmail.com
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>مودم انتخابی :

                                <span>
                                ---
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>جشنواره انتخابی :

                                <span>
                                ----
                            </span>
                            </p>
                        </li>
                        <li>
                            <p>درخواست اشتراک نماوا :

                                <span>
                                ندارد
                            </span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="discount_coupon_wrap step4_info_wrap mt-3">
                    <div class="form-check d-flex justify-content-end flex-row-reverse mb-2">
                        <label class="form-check-label" for="flexCheckChecked">
                            آخرین قبض شماره تلفن
                            <span> &nbsp; <strong><u>34342773</u></strong>  &nbsp; </span>
                            پرداخت شده است.
                        </label>
                        <input class="form-check-input mt5px ms-2" type="checkbox" value="" id="flexCheckChecked" >

                    </div>

                </div>

            </div>
            <div class="col-xl-5  col-xs-5">
                <p> مشخصات سرویس انتخابی </p>
                <div class="step4_info_wrap ">

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
                    </div>
                </div>
                <div class="discount_coupon_wrap step4_info_wrap mt-3">
                    <label for="inputEmail4" class="form-label">کد تخفیف (پیمانی)</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
