@extends('layouts.frontend.layout')
@section('content')
    <div class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="col">
                        <h4>بررسی وضعیت دسترسی به +</h4>
                        <form action="">
                            <div class="row g-3 mt-1">
                                <label for="formGroupExampleInput" class="form-label p-0">پیش شماره</label>
                                <div class="col-sm-4 input-group-sm p-0 m-0">
                                    <input type="number" class="form-control" placeholder="City" aria-label="City">
                                </div>
                            </div>
                            <div class="row g-3 mt-1">
                                <label for="formGroupExampleInput" class="form-label p-0">شماره تلفن</label>
                                <div class="col-sm-4  input-group-sm p-0 m-0">
                                    <input type="number" class="form-control" placeholder="City" aria-label="City">
                                </div>

                            </div>
                            <button type="button" class="btn btn-primary btn-sm mt-4">بررسی شماره</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="col adsl_check_table_result mt-4">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="table-sabanet">
                                <th scope="col">شهر</th>
                                <th scope="col">نام مرکز</th>
                                <th scope="col">پیش شماره شما</th>
                                <th scope="col">وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="/registerAdslUser" class="btn btn-success">خرید آنلاین</a>
                </div>

                <div class="col-lg-4 d-flex flex-column">
                    <div class="col-lg-12 first_row_of_sidebar">
                        <div class="left_side_bar d-flex mb-3 justify-content-between border border-2">
                            <div class="link-widget__icon border-start border-2">
                                <img src="{{url('/images/frontend/speed-test-logo.png')}}" alt="">
                            </div>
                            <div class="link-widget__content flex-grow-1 d-flex flex-column justify-content-center">
                                <strong>
                                    تست آنلاین سرعت
                                </strong>
                                <p class="m-0">
                                    سرعت اینترنت خود را تست کنید
                                </p>
                            </div>
                        </div>
                        <div class="left_side_bar d-flex mb-3 justify-content-between border border-2">
                            <div class="link-widget__icon border-start border-2">
                                <img src="{{url('/images/frontend/speed-test-logo.png')}}" alt="">
                            </div>
                            <div class="link-widget__content flex-grow-1 d-flex flex-column justify-content-center">
                                <strong>
                                    تست آنلاین سرعت
                                </strong>
                                <p class="m-0">
                                    سرعت اینترنت خود را تست کنید
                                </p>
                            </div>
                        </div>
                        <div class="left_side_bar d-flex mb-3 justify-content-between border border-2">
                            <div class="link-widget__icon border-start border-2">
                                <img src="{{url('/images/frontend/speed-test-logo.png')}}" alt="">
                            </div>
                            <div class="link-widget__content flex-grow-1 d-flex flex-column justify-content-center">
                                <strong>
                                    تست آنلاین سرعت
                                </strong>
                                <p class="m-0">
                                    سرعت اینترنت خود را تست کنید
                                </p>
                            </div>
                        </div>
                        <div class="left_side_bar d-flex mb-3 justify-content-between border border-2">
                            <div class="link-widget__icon border-start border-2">
                                <img src="{{url('/images/frontend/speed-test-logo.png')}}" alt="">
                            </div>
                            <div class="link-widget__content flex-grow-1 d-flex flex-column justify-content-center">
                                <strong>
                                    تست آنلاین سرعت
                                </strong>
                                <p class="m-0">
                                    سرعت اینترنت خود را تست کنید
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
