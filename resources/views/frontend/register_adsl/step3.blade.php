@extends('frontend.register_adsl_layout.register_adsl_layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <h5 class="separator_gradient_line">
                    تکمیل اطلاعات
                </h5>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-xs-4 col-xl-4">
                <div class="col-12 text-centerc company_person_select">

                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        شخصی
                    </label>


                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        سازمان ها و شرکت ها
                    </label>


                </div>
                <div class="col-12 form_information_wrap">
                    <form>
                        <div class="row mb-3">
                            <label for="inputName3" class="col-sm-4 col-form-label">نام</label>
                            <div class="col-sm-8  input-group-sm">
                                <input type="text " name="name" class="form-control" id="inputName3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputLastName3" class="col-sm-4 col-form-label">نام خانوادگی</label>
                            <div class="col-sm-8  input-group-sm">
                                <input type="text" name="lastName" class="form-control" id="inputLastName3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputMobile3" class="col-sm-4 col-form-label">شماره همراه</label>
                            <div class="col-sm-8  input-group-sm">
                                <input type="number" name="mobile" class="form-control" id="inputMobile3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">ایمیل</label>
                            <div class="col-sm-8  input-group-sm">
                                <input type="email" name="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xs-4 col-xl-4 ">
                6546546
            </div>
        </div>

    </div>
@endsection
