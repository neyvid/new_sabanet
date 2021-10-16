@extends('frontend.register_adsl_layout.register_adsl_layout')
@section('content')


    <div class="container">
        <div class="row">
            <div class="mt-5">
                <h5 class="separator_gradient_line">
                    انتخاب خدمات تکمیلی
                </h5>
                <p>
                    برای تامین امنیت شبکه اینترنت خود بر روی سیستم عامل‌های ویندوز یا اندروید می‌توانید از خدمات تکمیلی
                    شاتل بهره‌مند شوید.
                    <br>
                    همچنین از این بخش می‌توانید نسبت به خرید اشتراک نماوا اقدام نمایید.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="complementary_services_wrap text-center">
                    <img src="{{url('../../../../images/serv.png')}}" alt="">
                    <p>اشتراک فیلم و سریال نماوا </p>
                    <a href="" class="d-inline-block mb-4">توضیحات بیشتر</a>

                    <select name="namava_plan" class="form-select text-center" aria-label="Default select example">

                        <option selected>یک دوره را انتخخاب نمایید</option>
                        <option value="1">یک ماهه</option>
                        <option value="3">سه ماهه</option>
                        <option value="6">شش ماهه</option>
                        <option value="12">دوازده ماهه</option>

                    </select>

                </div>
            </div>
        </div>
    </div>
@endsection
