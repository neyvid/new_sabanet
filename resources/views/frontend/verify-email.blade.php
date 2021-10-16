<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fontawesome/app.css')}}">
    {{--    <script src="{{ asset('/js/app.js') }}" crossorigin="anonymous"></script>--}}

    <title>شرکت ارتباطات صبا نت</title>
</head>
<body></body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-5">
            <div class="card">
                <h5 class="card-header">تایید ایمیل</h5>
                <div class="card-body">
                    <h5 class="card-title">لطفا ایمیل خود را تایید کنید.</h5>
                    <p class="card-text">یک ایمیل حاوی لینک تایید برای ایمیل شما ارسال گردیده است لطفا با مراجعه به ایمیل خود آن را تایید کنید !</p>
                    <form action="{{route('verification.send')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary" >ارسال مجدد لینک تایید ایمیل</button>
                    </form>
                </div>
            </div>        </div>
    </div>
</div>
</html>
