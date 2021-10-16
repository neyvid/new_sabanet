<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('/css/frontend_assets/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/frontend_assets/frontend_custom.css')}}">

    {{--    <script src="{{ asset('/js/app.js') }}" crossorigin="anonymous"></script>--}}
    <link rel="stylesheet" href="{{asset('/css/common/common.css')}}">


    <title>شرکت ارتباطات صبا نت</title>
</head>
<body>
<header>
    <div class="topMenu">
        <div class="container">
            <div class="row d-flex flex-column">
                <div class="col  d-none d-lg-flex d-flex justify-content-end mt-2 ">
                    <ul class="list-inline list-unstyled">
                        <li class="list-inline-item border-start  p-2"><a href="">راه کارهای سازمانی</a></li>
                        <li class="list-inline-item border-start  p-2"><a href="">تماس با ما</a></li>
                        <li class="list-inline-item border-start  p-2"><a href="">همکاری با صبا نت</a></li>
                        <li class="list-inline-item   p-2"><a href="">شارژ مجدد</a></li>


                    </ul>
                </div>
                <div class="collapse d-lg-none" id="navbarToggleExternalContent">
                    <div class=" p-4">
                        <ul class="list-unstyled">
                            <li class=" border-start  p-2"><a href="">راه کارهای سازمانی</a></li>
                            <li class=" border-start  p-2"><a href="">تماس با ما</a></li>
                            <li class=" border-start  p-2"><a href="">همکاری با صبا نت</a></li>
                            <li class=" border-start  p-2"><a href="">شارژ مجدد</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-dark d-lg-none">
                    <div class="container justify-content-center">
                        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarToggleExternalContent"
                                aria-controls="navbarToggleExternalContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>

                        </button>
                    </div>
                </nav>
                <div class="col  d-flex mb-4">
                    <img class="d-flex  ms-auto img-fluid" src="{{url('/images/logo/SabanetRedLogo.png')}}" alt="">
                    @guest()
                        <div class="regLogBtn d-flex align-items-center ">
                            <a class="btn btn-info ms-1" href="{{route('login')}}">ورود</a>
                            <a class="btn btn-danger" href="{{route('frontend.register.form')}}">عضویت</a>
                        </div>
                    @endguest
                    @auth()
                        <div class="regLogBtn d-flex align-items-center ">
                            <a class="btn btn-danger ms-1" href="{{route('logout')}}">خروج</a>
                            @can(\App\Models\Permissions\Permissions::getPermissionName(\App\Models\Permissions\Permissions::USERACCESS))
                                <a class="btn btn-info" href="{{route('userpanel.home')}}">پنل کاربری</a>
                            @endcan
                            @can(\App\Models\Permissions\Permissions::getPermissionName(\App\Models\Permissions\Permissions::TOTALACCESS))
                                <a class="btn btn-info" href="{{route('admin.home')}}">پنل کاربری</a>
                            @endcan
                        </div>


                    @endauth

                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 main_menu_ul ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">خرید اینترنت</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">مقالات</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                خدمات
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">خرید خط</a></li>
                                <li><a class="dropdown-item" href="#">خرید اینترنت</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">تماس با ما</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</header>
