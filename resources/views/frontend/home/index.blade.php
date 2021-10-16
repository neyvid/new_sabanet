@extends('layouts.frontend.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('/images/logo/banner.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('/images/logo/banner2.jpg')}}" class="d-block w-100" alt="...">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="primary_services">
        <div class="container mb-4">
            <div class="row text-center">
                <div class="col-lg-4 col-xs-12 ">
                    <div class="row">
                        <div class="col-12">
                            <div class="check_number_icon pt-4 mb-4">
                                <svg version="1.1" class="adsl-search-icon" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px"
                                     viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<path class="checkmark" fill="#55C45F" d="M61.414,41.586c-0.781-0.781-2.047-0.781-2.828,0L46,54.172l-4.586-4.586
c-0.781-0.781-2.047-0.781-2.828,0c-0.781,0.781-0.781,2.047,0,2.828l6,6C44.977,58.805,45.488,59,46,59
c0.512,0,1.023-0.195,1.414-0.586l14-14C62.195,43.633,62.195,42.367,61.414,41.586z"></path>
                                    <g class="magnifier">
                                        <path fill="#F5F5F5" d="M50,24c-14.336,0-26,11.664-26,26s11.664,26,26,26c14.336,0,26-11.664,26-26S64.336,24,50,24z M50,72
c-12.15,0-22-9.85-22-22s9.85-22,22-22c12.15,0,22,9.85,22,22S62.15,72,50,72z"></path>
                                        <path fill="#CFD8DC" d="M50,28c-12.15,0-22,9.85-22,22c0,12.15,9.85,22,22,22c12.15,0,22-9.85,22-22C72,37.85,62.15,28,50,28z
M50,68c-9.925,0-18-8.075-18-18c0-9.925,8.075-18,18-18c9.925,0,18,8.075,18,18C68,59.925,59.925,68,50,68z"></path>
                                        <path fill="#CFD8DC" d="M90.657,95.658c-1.068,0-2.072-0.417-2.829-1.173L76.515,83.172c-1.558-1.56-1.558-4.098,0-5.657
c0.757-0.756,1.761-1.173,2.828-1.173c1.068,0,2.072,0.417,2.829,1.173l11.313,11.313c1.559,1.56,1.559,4.098,0,5.657
C92.728,95.242,91.725,95.658,90.657,95.658z"></path>
                                        <path fill="#5A6171" d="M96.313,86L85,74.687c-1.512-1.512-3.521-2.345-5.657-2.345c-1.452,0-2.84,0.393-4.059,1.114l-3.179-3.179
C77.006,64.938,80,57.819,80,50c0-16.569-13.432-30-30-30c-16.569,0-30,13.431-30,30s13.431,30,30,30
c7.31,0,14.006-2.617,19.211-6.961l3.248,3.248c-1.805,3.066-1.402,7.083,1.228,9.713L85,97.313
c1.512,1.512,3.52,2.345,5.657,2.345c2.136,0,4.145-0.833,5.656-2.345C99.433,94.194,99.433,89.119,96.313,86z M24,50
c0-14.336,11.664-26,26-26c14.336,0,26,11.664,26,26S64.336,76,50,76C35.664,76,24,64.336,24,50z M93.485,94.485
c-0.757,0.756-1.761,1.173-2.828,1.173c-1.068,0-2.072-0.417-2.829-1.173L76.515,83.172c-1.558-1.56-1.558-4.098,0-5.657
c0.757-0.756,1.761-1.173,2.828-1.173c1.068,0,2.072,0.417,2.829,1.173l11.313,11.313C95.044,90.388,95.044,92.926,93.485,94.485z"></path>
                                    </g>
                                    <foreignObject>
                                        <div class="adsl-search-icon-fallback"></div>
                                    </foreignObject>
</svg>
                            </div>
                            <h5 class="separator_gradient_line">بررسی پوشش خدمات +ADSL2</h5>
                        </div>
                        <div class="col-12">
                            <form action="">
                                <div class="row g-3">
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" placeholder="شماره تلفن ثابت"
                                               aria-label="phone_number">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" placeholder="پیش شماره" aria-label="Zip">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" type="button">بررسی شماره تلفن</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-xs-12r">
                    <div class="row">
                        <a href="">
                            <div class="col-12">
                                <div class="price_of_services_icon pt-4 mb-4">
                                    <svg version="1.1" id="service-prices-icon" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px"
                                         height="120px"
                                         viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<path class="stack1" fill="#CFD8DC" d="M100,36c0,1.105-0.895,2-2,2H22c-1.105,0-2-0.895-2-2l0,0c0-1.105,0.895-2,2-2h76
C99.105,34,100,34.895,100,36L100,36z"></path>
                                        <path class="stack2" fill="#CFD8DC" d="M92,28c0,1.105-0.895,2-2,2H30c-1.105,0-2-0.895-2-2l0,0c0-1.105,0.895-2,2-2h60
C91.105,26,92,26.895,92,28L92,28z"></path>
                                        <g class="paper">
                                            <path fill="#F5F5F5" d="M102,82c0.702,0,1.374,0.127,2,0.349V53.651c-0.626,0.222-1.298,0.349-2,0.349c-3.314,0-6-2.686-6-6
c0-0.702,0.127-1.374,0.349-2H23.651C23.873,46.626,24,47.298,24,48c0,3.314-2.686,6-6,6c-0.702,0-1.374-0.127-2-0.349v28.698
C16.626,82.127,17.298,82,18,82c3.314,0,6,2.686,6,6c0,0.702-0.127,1.374-0.349,2h72.698C96.127,89.374,96,88.702,96,88
C96,84.686,98.686,82,102,82z"></path>
                                            <path fill="#5A6171" d="M102,42H18c-3.314,0-6,2.686-6,6v40c0,3.314,2.686,6,6,6h84c3.314,0,6-2.686,6-6V48
C108,44.686,105.314,42,102,42z M104,48c0,1.103-0.897,2-2,2c-1.103,0-2-0.897-2-2s0.897-2,2-2C103.103,46,104,46.897,104,48z
M96.349,90H23.651C23.873,89.374,24,88.702,24,88c0-3.314-2.686-6-6-6c-0.702,0-1.374,0.127-2,0.349V53.651
C16.626,53.873,17.298,54,18,54c3.314,0,6-2.686,6-6c0-0.702-0.127-1.374-0.349-2h72.698C96.127,46.626,96,47.298,96,48
c0,3.314,2.686,6,6,6c0.702,0,1.374-0.127,2-0.349v28.698c-0.626-0.222-1.298-0.349-2-0.349c-3.314,0-6,2.686-6,6
C96,88.702,96.127,89.374,96.349,90z M18,46c1.103,0,2,0.897,2,2s-0.897,2-2,2c-1.103,0-2-0.897-2-2S16.897,46,18,46z M16,88
c0-1.103,0.897-2,2-2c1.103,0,2,0.897,2,2s-0.897,2-2,2C16.897,90,16,89.103,16,88z M102,90c-1.103,0-2-0.897-2-2s0.897-2,2-2
c1.103,0,2,0.897,2,2S103.103,90,102,90z"></path>
                                            <circle fill="#55C45F" cx="60" cy="68" r="16"></circle>
                                            <circle fill="#FFFFFF" cx="102" cy="48" r="2"></circle>
                                            <circle fill="#FFFFFF" cx="18" cy="48" r="2"></circle>
                                            <circle fill="#FFFFFF" cx="102" cy="88" r="2"></circle>
                                            <circle fill="#FFFFFF" cx="18" cy="88" r="2"></circle>
                                            <g>
                                                <polygon fill="#FFFFFF"
                                                         points="56,72 54,72 54,69 52,69 52,72 52,74 56,74 58,74 58,62 56,62         "></polygon>
                                                <polygon fill="#FFFFFF"
                                                         points="65,69 65,67 63,67 63,69 61,69 61,62 59,62 59,69 59,71 65,71         "></polygon>
                                                <polygon fill="#FFFFFF"
                                                         points="66,67 66,72 64,72 64,74 66,74 68,74 68,67       "></polygon>
                                                <rect x="59" y="72" fill="#FFFFFF" width="4" height="2"></rect>
                                            </g>
                                            <path class="text2" fill="#CFD8DC" d="M92,84c0,1.105-0.895,2-2,2h-8c-1.105,0-2-0.895-2-2l0,0c0-1.105,0.895-2,2-2h8
C91.105,82,92,82.895,92,84L92,84z"></path>
                                            <path class="text1" fill="#CFD8DC" d="M40,52c0,1.105-0.895,2-2,2h-8c-1.105,0-2-0.895-2-2l0,0c0-1.105,0.895-2,2-2h8
C39.105,50,40,50.895,40,52L40,52z"></path>
                                        </g>
                                        <foreignObject>
                                            <div class="service-prices-icon-fallback"></div>
                                        </foreignObject>
</svg>
                                </div>
                                <h5 class="separator_gradient_line">بررسی پوشش خدمات +ADSL2</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="row">
                        <a href="">
                            <div class="col-12">
                                <div class="order_online_service_icon pt-4 mb-4">
                                    <svg version="1.1" id="online-order-icon" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px"
                                         height="120px"
                                         viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<g class="window">
    <path fill="#FFFFFF" d="M16,28c0-2.206,1.794-4,4-4h80c2.206,0,4,1.794,4,4v44H16V28z"></path>
    <g>
        <path fill="#ECEFF1" d="M92,37c0,0.552-0.448,1-1,1H41c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h50
C91.552,36,92,36.448,92,37L92,37z"></path>
        <circle fill="#FC764A" cx="29" cy="37" r="1"></circle>
        <circle fill="#FEC308" cx="33" cy="37" r="1"></circle>
        <circle fill="#2CD6AA" cx="37" cy="37" r="1"></circle>
        <path fill="#CFD8DC" d="M26,42h68v30h2V36c0-2.209-1.791-4-4-4H28c-2.209,0-4,1.791-4,4v36h2V42z M26,36c0-1.103,0.897-2,2-2h64
c1.103,0,2,0.897,2,2v4H26V36z"></path>
        <g class="box-orange">
            <path fill="#FEC308"
                  d="M72,66c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12c0.552,0,1,0.448,1,1l0,0c0,0.552-0.448,1-1,1"></path>
            <path fill="#FEC308" d="M84,48H72c-0.552,0-1,0.448-1,1v8c0,0.552,0.448,1,1,1h12c0.552,0,1-0.448,1-1v-8
C85,48.448,84.552,48,84,48L84,48z"></path>
            <path fill="#FEC308" d="M85,61c0,0.552-0.448,1-1,1H72c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12
C84.552,60,85,60.448,85,61L85,61z"></path>
            <polyline fill="#FFFFFF" points="83,50 83,56 73,56 73,50 83,50          "></polyline>
        </g>
        <g class="box-green">
            <path fill="#55C45F"
                  d="M54,66c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12c0.552,0,1,0.448,1,1l0,0c0,0.552-0.448,1-1,1"></path>
            <path fill="#55C45F" d="M66,48H54c-0.552,0-1,0.448-1,1v8c0,0.552,0.448,1,1,1h12c0.552,0,1-0.448,1-1v-8
C67,48.448,66.552,48,66,48L66,48z"></path>
            <path fill="#55C45F" d="M67,61c0,0.552-0.448,1-1,1H54c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12
C66.552,60,67,60.448,67,61L67,61z"></path>
            <polyline fill="#FFFFFF" points="65,50 65,56 55,56 55,50 65,50          "></polyline>
        </g>
        <g class="box-blue">
            <path fill="#3DB7FA"
                  d="M36,66c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12c0.552,0,1,0.448,1,1l0,0c0,0.552-0.448,1-1,1"></path>
            <path fill="#3DB7FA" d="M48,48H36c-0.552,0-1,0.448-1,1v8c0,0.552,0.448,1,1,1h12c0.552,0,1-0.448,1-1v-8
C49,48.448,48.552,48,48,48L48,48z"></path>
            <path fill="#3DB7FA" d="M49,61c0,0.552-0.448,1-1,1H36c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12
C48.552,60,49,60.448,49,61L49,61z"></path>
            <polyline fill="#FFFFFF" points="47,50 47,56 37,56 37,50 47,50          "></polyline>
        </g>
    </g>
</g>
                                        <g class="monitor">
                                            <path fill="#ECEFF1"
                                                  d="M104,80c0,2.206-1.794,4-4,4H20c-2.206,0-4-1.794-4-4v-4h88V80z"></path>
                                            <circle fill="#CFD8DC" cx="60" cy="80" r="2"></circle>
                                            <path fill="#5A6171" d="M100,20H20c-4.418,0-8,3.582-8,8v52c0,4.418,3.582,8,8,8h32v8h-6c-1.105,0-2,0.895-2,2s0.895,2,2,2h28
c1.105,0,2-0.895,2-2s-0.895-2-2-2h-6v-8h32c4.418,0,8-3.582,8-8V28C108,23.582,104.418,20,100,20z M16,28c0-2.206,1.794-4,4-4h80
c2.206,0,4,1.794,4,4v44H16V28z M64,96h-8v-8h8V96z M104,80c0,2.206-1.794,4-4,4H20c-2.206,0-4-1.794-4-4v-4h88V80z"></path>
                                            <rect x="56" y="88" fill="#CFD8DC" width="8" height="8"></rect>
                                        </g>
                                        <foreignObject>
                                            <div class="online-order-icon-fallback"></div>
                                        </foreignObject>
</svg>
                                </div>
                                <h5 class="separator_gradient_line">بررسی پوشش خدمات +ADSL2</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-light-gray">

        <div class="container mt-5 pt-4 pb-5">
            <div class="row text-center">
                <h5 class="separator_gradient_line">خدمات صبا نت</h5>
                <div class="col-lg-2 col-xs-12 d-flex flex-column justify-content-center">
                    <svg class="m-auto" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 120 120" width="120" height="120">
                        <style type="text/css">.st0 {
                                fill: #FFF
                            }

                            .st1 {
                                fill: #ECEFF1
                            }

                            .st2 {
                                fill: #F5F5F5
                            }

                            .st3 {
                                fill: #55C45F
                            }

                            .st4 {
                                fill: #CFD8DC
                            }

                            .st5 {
                                fill: #FC764A
                            }

                            .st6 {
                                fill: #FEC308
                            }

                            .st7 {
                                fill: #2CD6AA
                            }

                            .st8 {
                                fill: #5A6171
                            }</style>
                        <path class="st0" d="M8,28c0-2.2,1.8-4,4-4h80c2.2,0,4,1.8,4,4v44H8V28z"></path>
                        <path class="st1" d="M96,80c0,2.2-1.8,4-4,4H12c-2.2,0-4-1.8-4-4v-4h88V80z"></path>
                        <path class="st2" d="M86,72c0,1.1-0.9,2-2,2H20c-1.1,0-2-0.9-2-2V42h68V72z"></path>
                        <path class="st3" d="M34.9,62.2v-9.6c0-0.7,0.5-1.2,1.2-1.2h5.6c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1h-4.4v3
h3.4c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1h-3.4v3.5c0,0.7-0.5,1.2-1.2,1.2C35.4,63.4,34.9,62.9,34.9,62.2z"></path>
                        <path class="st3" d="M56.1,52.3v9.8c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-5.9l-2.2,3.5
c-0.3,0.5-0.7,0.8-1.2,0.8c-0.5,0-0.8-0.2-1.2-0.8l-2.2-3.5v5.9c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2v-9.8
c0-0.7,0.5-1.3,1.2-1.3c0.5,0,0.9,0.3,1.3,0.9l3.3,5.3l3.3-5.3c0.4-0.7,0.8-0.9,1.3-0.9C55.6,51.1,56.1,51.6,56.1,52.3z"></path>
                        <path class="st3" d="M58.2,57.2c0-3.5,2.8-6.2,6.3-6.2c1.8,0,3.5,0.8,4.6,2.1c0.3,0.3,0.4,0.6,0.4,0.9
c0,0.6-0.5,1.1-1.1,1.1c-0.3,0-0.7-0.2-0.9-0.5c-0.8-0.9-1.7-1.3-2.9-1.3c-2.2,0-3.8,1.6-3.8,3.9c0,2.3,1.6,3.9,3.8,3.9
c1.1,0,2.1-0.4,2.9-1.3c0.3-0.3,0.6-0.5,1-0.5c0.6,0,1.1,0.5,1.1,1.1c0,0.3-0.1,0.6-0.4,0.9c-1,1.3-2.8,2.1-4.6,2.1
C60.9,63.4,58.2,60.7,58.2,57.2z"></path>
                        <path class="st4" d="M87,41c0,0.6-0.4,1-1,1H18c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h68C86.6,40,87,40.4,87,41
L87,41z"></path>
                        <path class="st1" d="M84,37c0,0.6-0.4,1-1,1H33c-0.6,0-1-0.4-1-1l0,0c0-0.6,0.4-1,1-1h50C83.6,36,84,36.4,84,37
L84,37z"></path>
                        <circle class="st5" cx="21" cy="37" r="1"></circle>
                        <circle class="st6" cx="25" cy="37" r="1"></circle>
                        <circle class="st7" cx="29" cy="37" r="1"></circle>
                        <path class="st4" d="M84,34c1.1,0,2,0.9,2,2v36c0,1.1-0.9,2-2,2H20c-1.1,0-2-0.9-2-2V36c0-1.1,0.9-2,2-2H84 M84,32
H20c-2.2,0-4,1.8-4,4v36c0,2.2,1.8,4,4,4h64c2.2,0,4-1.8,4-4V36C88,33.8,86.2,32,84,32L84,32z"></path>
                        <circle class="st4" cx="52" cy="80" r="2"></circle>
                        <path class="st8" d="M92,20H12c-4.4,0-8,3.6-8,8v52c0,4.4,3.6,8,8,8h32v8h-6c-1.1,0-2,0.9-2,2s0.9,2,2,2h28
c1.1,0,2-0.9,2-2s-0.9-2-2-2h-6v-8h32c4.4,0,8-3.6,8-8V28C100,23.6,96.4,20,92,20z M8,28c0-2.2,1.8-4,4-4h80c2.2,0,4,1.8,4,4v44H8
V28z M56,96h-8v-8h8V96z M96,80c0,2.2-1.8,4-4,4H12c-2.2,0-4-1.8-4-4v-4h88V80z"></path>
                        <rect x="48" y="88" class="st4" width="8" height="8"></rect>
                        <path class="st1" d="M84,46c0-2.2,1.8-4,4-4h20c2.2,0,4,1.8,4,4v8H84V46z"></path>
                        <path class="st1" d="M112,92c0,2.2-1.8,4-4,4H88c-2.2,0-4-1.8-4-4v-6h28V92z"></path>
                        <rect x="84" y="58" class="st0" width="28" height="24"></rect>
                        <path class="st8" d="M108,38H88c-4.4,0-8,3.6-8,8v46c0,4.4,3.6,8,8,8h20c4.4,0,8-3.6,8-8V46
C116,41.6,112.4,38,108,38z M84,58h28v24H84V58z M84,46c0-2.2,1.8-4,4-4h20c2.2,0,4,1.8,4,4v8H84V46z M112,92c0,2.2-1.8,4-4,4H88
c-2.2,0-4-1.8-4-4v-6h28V92z"></path>
                        <circle class="st4" cx="98" cy="91" r="2"></circle>
                        <path class="st4" d="M103,48c0,1.1-0.9,2-2,2h-6c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2h6C102.1,46,103,46.9,103,48
L103,48z"></path>
                        <path class="st3" d="M104.4,64.3c-0.4-0.4-1.2-0.4-1.6,0l-7.1,7.1l-2.6-2.6c-0.4-0.4-1.2-0.4-1.6,0
c-0.4,0.4-0.4,1.2,0,1.6l3.4,3.4c0.2,0.2,0.5,0.3,0.8,0.3c0.3,0,0.6-0.1,0.8-0.3l7.9-7.9C104.9,65.4,104.9,64.7,104.4,64.3z"></path>
                    </svg>
                    <p class="dark_gray_font_color d-flex justify-content-center">سشیسش</p>
                </div>
                <div class="col-lg-2 col-xs-12 d-flex flex-column justify-content-center">
                    <svg class="m-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px"
                         viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<g class="cloud2">
    <path fill="#FFFFFF" d="M128,72c-2.8,0-5-2.2-5-5s2.2-5,5-5h2v3v-2c0-3.9,3.1-7,7-7s7,3.1,7,7v-1h2c2.8,0,5,2.2,5,5s-2.2,5-5,5H128
z"></path>
    <path fill="#ECEFF1" d="M137,57c3.3,0,6,2.7,6,6v2c0,0.6,0.4,1,1,1s1-0.4,1-1v-2h1c2.2,0,4,1.8,4,4s-1.8,4-4,4h-18
c-2.2,0-4-1.8-4-4s1.8-4,4-4h1v2c0,0.6,0.4,1,1,1s1-0.4,1-1v-2C131,59.7,133.7,57,137,57 M137,55c-3.7,0-6.9,2.6-7.7,6H129h-1
c-3.3,0-6,2.7-6,6s2.7,6,6,6h18c3.3,0,6-2.7,6-6s-2.7-6-6-6h-1h-0.3C143.9,57.6,140.7,55,137,55L137,55z"></path>
</g>
                        <rect x="40" y="38" fill="#F5F5F5" width="40" height="64"></rect>
                        <g>
                            <rect x="32" y="62" fill="#ECEFF1" width="4" height="40"></rect>
                            <rect x="84" y="62" fill="#ECEFF1" width="4" height="40"></rect>
                            <rect x="92" y="70" fill="#ECEFF1" width="4" height="32"></rect>
                            <rect x="24" y="70" fill="#ECEFF1" width="4" height="32"></rect>
                        </g>
                        <g>
                            <path fill="#3DB7FA"
                                  d="M50,42h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S51.1,42,50,42z"></path>
                            <path fill="#3DB7FA"
                                  d="M62,42h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S63.1,42,62,42z"></path>
                            <path fill="#3DB7FA"
                                  d="M70,46h4c1.1,0,2-0.9,2-2s-0.9-2-2-2h-4c-1.1,0-2,0.9-2,2S68.9,46,70,46z"></path>
                            <path fill="#3DB7FA"
                                  d="M50,50h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S51.1,50,50,50z"></path>
                            <path fill="#3DB7FA"
                                  d="M62,50h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S63.1,50,62,50z"></path>
                            <path fill="#3DB7FA"
                                  d="M74,50h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S75.1,50,74,50z"></path>
                            <path fill="#3DB7FA"
                                  d="M50,58h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S51.1,58,50,58z"></path>
                            <path fill="#3DB7FA"
                                  d="M62,58h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S63.1,58,62,58z"></path>
                            <path fill="#3DB7FA"
                                  d="M74,58h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S75.1,58,74,58z"></path>
                            <path fill="#3DB7FA"
                                  d="M50,66h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S51.1,66,50,66z"></path>
                            <path fill="#3DB7FA"
                                  d="M62,66h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S63.1,66,62,66z"></path>
                            <path fill="#3DB7FA"
                                  d="M74,66h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S75.1,66,74,66z"></path>
                            <path fill="#3DB7FA"
                                  d="M50,74h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S51.1,74,50,74z"></path>
                            <path fill="#3DB7FA"
                                  d="M62,74h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S63.1,74,62,74z"></path>
                            <path fill="#3DB7FA"
                                  d="M74,74h-4c-1.1,0-2,0.9-2,2s0.9,2,2,2h4c1.1,0,2-0.9,2-2S75.1,74,74,74z"></path>
                        </g>
                        <path fill="#55C45F" d="M105,104c0,1.1-0.9,2-2,2H17c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2h86C104.1,102,105,102.9,105,104L105,104z
"></path>
                        <path fill="#5A6171" d="M40,38h40v64h4V38c0-2.2-1.8-4-4-4H40c-2.2,0-4,1.8-4,4v64h4V38z"></path>
                        <g>
                            <path fill="#CFD8DC"
                                  d="M98,66h-6v-6c0-1.1-0.9-2-2-2h-6v4h4v6v34h4V70h4v32h4V68C100,66.9,99.1,66,98,66z"></path>
                            <path fill="#CFD8DC"
                                  d="M28,60v6h-6c-1.1,0-2,0.9-2,2v34h4V70h4v32h4V68v-6h4v-4h-6C28.9,58,28,58.9,28,60z"></path>
                        </g>
                        <path fill="#CFD8DC" d="M48,34v-2c0-1.1-0.9-2-2-2s-2,0.9-2,2v2H48z"></path>
                        <rect x="53" y="85" fill="#FFFFFF" width="14" height="17"></rect>
                        <circle fill="#CFD8DC" cx="63.5" cy="93.5" r="1.5"></circle>
                        <path fill="#CFD8DC" d="M53,102V85h14v17h3V84c0-1.1-0.9-2-2-2H52c-1.1,0-2,0.9-2,2v18H53z"></path>
                        <g class="cloud1">
                            <path fill="#FFFFFF" d="M-25,55c-2.8,0-5-2.2-5-5s2.2-5,5-5h2v3v-2c0-3.9,3.1-7,7-7s7,3.1,7,7v-1h2c2.8,0,5,2.2,5,5s-2.2,5-5,5H-25
z"></path>
                            <path fill="#ECEFF1" d="M-16,40c3.3,0,6,2.7,6,6v2c0,0.6,0.4,1,1,1c0.6,0,1-0.4,1-1v-2h1c2.2,0,4,1.8,4,4s-1.8,4-4,4h-18
c-2.2,0-4-1.8-4-4s1.8-4,4-4h1v2c0,0.6,0.4,1,1,1s1-0.4,1-1v-2C-22,42.7-19.3,40-16,40 M-16,38c-3.7,0-6.9,2.6-7.7,6H-24h-1
c-3.3,0-6,2.7-6,6s2.7,6,6,6h18c3.3,0,6-2.7,6-6s-2.7-6-6-6h-1h-0.3C-9.1,40.6-12.3,38-16,38L-16,38z"></path>
                        </g>
                        <g class="beams">
                            <path class="beam3" fill="#55C45F" d="M58,20.5c-0.3,0-0.5-0.1-0.7-0.3c-3-3-7-4.7-11.3-4.7s-8.3,1.7-11.3,4.7c-0.4,0.4-1,0.4-1.4,0
c-0.4-0.4-0.4-1,0-1.4c3.4-3.4,7.9-5.3,12.7-5.3s9.3,1.9,12.7,5.3c0.4,0.4,0.4,1,0,1.4C58.5,20.4,58.3,20.5,58,20.5z"></path>
                            <path class="beam2" fill="#55C45F" d="M54.2,24.4c-0.2,0-0.5-0.1-0.7-0.3c-4.1-4-10.9-4-15,0c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4
C42,18,50,18,54.9,22.7c0.4,0.4,0.4,1,0,1.4C54.7,24.3,54.5,24.4,54.2,24.4z"></path>
                            <path class="beam1" fill="#55C45F" d="M50.4,28c-0.2,0-0.5-0.1-0.7-0.3c-2.1-2-5.4-2-7.5,0c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4
c2.8-2.7,7.4-2.7,10.2,0c0.4,0.4,0.4,1,0,1.4C50.9,27.9,50.7,28,50.4,28z"></path>
                        </g>
                        <foreignObject>
                            <div class="buildings-icon-fallback"></div>
                        </foreignObject>
</svg>
                    <p class="dark_gray_font_color d-flex justify-content-center">سشیسش</p>
                </div>
                <div class="col-lg-2 col-xs-12 d-flex flex-column justify-content-center">
                    <svg class="m-auto" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px"
                         viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<g class="phone">
    <path fill="#ECEFF1" d="M85.017,90.778l5.477-5.477c2.185-2.185,1.962-5.791-0.477-7.689l-8.575-6.674
c-1.867-1.454-4.486-1.444-6.342,0.023l-1.907,1.507c-2.045,1.616-4.977,1.445-6.82-0.398L51.036,56.73
c-1.843-1.843-2.014-4.774-0.398-6.82l1.506-1.907c1.467-1.857,1.477-4.475,0.023-6.343l-6.674-8.575
c-1.898-2.439-5.504-2.662-7.689-0.477l-5.477,5.477c-3.774,3.774-5.504,15.825,15.543,36.872
C68.915,96.004,81.545,94.25,85.017,90.778z"></path>
    <path fill="#5A6171" d="M78.546,94.896C78.546,94.896,78.546,94.896,78.546,94.896c-6.189,0-16.781-3.214-32.092-18.524
c-26.846-26.847-16.778-38.464-15.542-39.7l5.477-5.477c1.349-1.349,3.141-2.091,5.046-2.091c2.22,0,4.274,1.004,5.636,2.754
l6.675,8.574c2.024,2.602,2.011,6.225-0.032,8.811l-1.507,1.907c-0.986,1.249-0.882,3.04,0.244,4.165l15.338,15.339
c1.097,1.097,2.946,1.206,4.165,0.243l1.908-1.506c1.254-0.991,2.826-1.537,4.425-1.537c1.58,0,3.138,0.535,4.385,1.505
l8.575,6.674c1.614,1.256,2.613,3.148,2.74,5.19c0.127,2.042-0.631,4.044-2.078,5.491l-5.477,5.477
C84.687,93.936,81.887,94.896,78.546,94.896z M41.435,33.104c-0.837,0-1.625,0.327-2.218,0.919L33.74,39.5
c-3.199,3.2-4.068,14.432,15.542,34.044c15.099,15.098,24.815,17.353,29.263,17.353c3.271,0,4.699-1.173,5.059-1.533l5.477-5.477
c0.646-0.646,0.97-1.503,0.914-2.415c-0.057-0.911-0.484-1.722-1.205-2.282l-8.575-6.674c-1.118-0.871-2.76-0.865-3.873,0.014
l-1.908,1.506c-1.254,0.991-2.825,1.538-4.424,1.538c-1.907,0-3.701-0.743-5.049-2.091L49.622,58.144
c-2.561-2.559-2.799-6.632-0.555-9.473l1.507-1.907c0.898-1.137,0.904-2.73,0.015-3.875l-6.675-8.574
C43.315,33.545,42.411,33.104,41.435,33.104z"></path>
</g>
                        <g class="beams">
                            <path class="beam1" fill="#55C45F" d="M98.125,58.428c-0.002,0-0.004,0-0.006,0c-1.104-0.003-1.997-0.901-1.994-2.006
c0.023-8.005-3.071-15.522-8.715-21.165c-5.621-5.621-13.103-8.714-21.073-8.714c-0.032,0-0.061,0.001-0.097,0
c-1.102,0-1.997-0.892-2-1.994c-0.003-1.104,0.89-2.002,1.994-2.006c9.087,0.018,17.603,3.484,24.005,9.885
c6.401,6.401,9.912,14.927,9.886,24.005C100.122,57.536,99.227,58.428,98.125,58.428z"></path>
                            <path class="beam2" fill="#55C45F" d="M87.939,58.543c-1.084,0-1.975-0.866-1.998-1.955c-0.24-10.712-9.149-19.621-19.861-19.861
c-1.104-0.025-1.979-0.94-1.954-2.044c0.023-1.104,0.923-2.008,2.044-1.955c12.82,0.287,23.483,10.95,23.77,23.77
c0.025,1.104-0.85,2.02-1.954,2.044C87.97,58.543,87.955,58.543,87.939,58.543z"></path>
                            <path class="beam3" fill="#55C45F" d="M78.091,58.323c-1.084,0-1.975-0.866-1.998-1.956c-0.118-5.281-4.511-9.674-9.792-9.792
c-1.104-0.025-1.979-0.94-1.954-2.044c0.023-1.104,0.943-1.994,2.044-1.955c7.39,0.166,13.536,6.312,13.7,13.702
c0.025,1.104-0.851,2.02-1.954,2.044C78.121,58.323,78.106,58.323,78.091,58.323z"></path>
                        </g>
                        <foreignObject>
                            <div class="voip-icon-fallback"></div>
                        </foreignObject>
</svg>
                    <p class="dark_gray_font_color d-flex justify-content-center">سشیسش</p>
                </div>
                <div class="col-lg-2 col-xs-12 d-flex flex-column justify-content-center">
                    <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="120" height="120" viewBox="0 0 120 120">
                        <g>
                            <path style="fill:#ECEFF1;" d="M40,28c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4v8H40V28z"></path>
                            <path style="fill:#ECEFF1;" d="M80,92c0,2.2-1.8,4-4,4H44c-2.2,0-4-1.8-4-4v-6h40V92z"></path>
                            <rect x="40" y="40" style="fill:#FFFFFF;" width="40" height="42"></rect>
                            <path style="fill:#5A6171;" d="M76,20H44c-4.4,0-8,3.6-8,8v64c0,4.4,3.6,8,8,8h32c4.4,0,8-3.6,8-8V28C84,23.6,80.4,20,76,20z
M40,40h40v42H40V40z M40,28c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4v8H40V28z M80,92c0,2.2-1.8,4-4,4H44c-2.2,0-4-1.8-4-4v-6h40V92z"></path>
                            <circle style="fill:#CFD8DC;" cx="60" cy="91" r="2"></circle>
                            <path style="fill:#CFD8DC;" d="M65,30c0,1.1-0.9,2-2,2h-6c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2h6C64.1,28,65,28.9,65,30L65,30
z"></path>
                        </g>
                        <g>
                            <circle style="fill:#F16322;" cx="60" cy="67.6" r="3.3"></circle>
                            <polygon style="fill:#002963;"
                                     points="60,49.1 48,70.9 53.4,70.9 60,58.9 66.6,70.9 72,70.9 	"></polygon>
                        </g>
                    </svg>
                    <p class="dark_gray_font_color d-flex justify-content-center">سشیسش</p>
                </div>
                <div class="col-lg-2 col-xs-12 d-flex flex-column justify-content-center">
                    <svg class="m-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px" viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<polyline fill="#FFFFFF" points="88,38 88,74 32,74 32,38 88,38   "></polyline>
                        <g class="content">
                            <path fill="#CFD8DC" d="M66,76H52c-0.552,0-1-0.448-1-1s0.448-1,1-1h14c0.553,0,1,0.448,1,1S66.553,76,66,76z"></path>
                            <path fill="#CFD8DC" d="M66,80H52c-0.552,0-1-0.448-1-1s0.448-1,1-1h14c0.553,0,1,0.448,1,1S66.553,80,66,80z"></path>
                            <path fill="#CFD8DC" d="M66,84H52c-0.552,0-1-0.448-1-1s0.448-1,1-1h14c0.553,0,1,0.448,1,1S66.553,84,66,84z"></path>
                            <path fill="#CFD8DC" d="M84,76H70c-0.553,0-1-0.448-1-1s0.447-1,1-1h14c0.553,0,1,0.448,1,1S84.553,76,84,76z"></path>
                            <path fill="#CFD8DC" d="M84,80H70c-0.553,0-1-0.448-1-1s0.447-1,1-1h14c0.553,0,1,0.448,1,1S84.553,80,84,80z"></path>
                            <path fill="#CFD8DC" d="M84,84H70c-0.553,0-1-0.448-1-1s0.447-1,1-1h14c0.553,0,1,0.448,1,1S84.553,84,84,84z"></path>
                            <path fill="#CFD8DC" d="M49,75c0,0.552-0.448,1-1,1H36c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12C48.552,74,49,74.448,49,75
L49,75z"></path>
                            <path fill="#CFD8DC" d="M49,79c0,0.552-0.448,1-1,1H36c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12C48.552,78,49,78.448,49,79
L49,79z"></path>
                            <path fill="#CFD8DC" d="M49,83c0,0.552-0.448,1-1,1H36c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h12C48.552,82,49,82.448,49,83
L49,83z"></path>
                            <path fill="#55C45F" d="M47,64v6H37v-6H47 M48,62H36c-0.552,0-1,0.448-1,1v8c0,0.552,0.448,1,1,1h12c0.552,0,1-0.448,1-1v-8
C49,62.448,48.552,62,48,62L48,62z"></path>
                            <path fill="#3DB7FA" d="M47,52v6H37v-6H47 M48,50H36c-0.552,0-1,0.448-1,1v8c0,0.552,0.448,1,1,1h12c0.552,0,1-0.448,1-1v-8
C49,50.448,48.552,50,48,50L48,50z"></path>
                            <polyline opacity="0.5" fill="#55C45F" points="47,64 47,70 37,70 37,64 47,64    "></polyline>
                            <polyline opacity="0.5" fill="#3DB7FA" points="47,52 47,58 37,58 37,52 47,52    "></polyline>
                            <path fill="#CFD8DC" d="M66,64H52c-0.552,0-1-0.448-1-1s0.448-1,1-1h14c0.553,0,1,0.448,1,1S66.553,64,66,64z"></path>
                            <path fill="#CFD8DC" d="M66,68H52c-0.552,0-1-0.448-1-1s0.448-1,1-1h14c0.553,0,1,0.448,1,1S66.553,68,66,68z"></path>
                            <path fill="#CFD8DC" d="M66,72H52c-0.552,0-1-0.448-1-1s0.448-1,1-1h14c0.553,0,1,0.448,1,1S66.553,72,66,72z"></path>
                            <path fill="#CFD8DC" d="M84,64H70c-0.553,0-1-0.448-1-1s0.447-1,1-1h14c0.553,0,1,0.448,1,1S84.553,64,84,64z"></path>
                            <path fill="#CFD8DC" d="M84,68H70c-0.553,0-1-0.448-1-1s0.447-1,1-1h14c0.553,0,1,0.448,1,1S84.553,68,84,68z"></path>
                            <path fill="#CFD8DC" d="M84,72H70c-0.553,0-1-0.448-1-1s0.447-1,1-1h14c0.553,0,1,0.448,1,1S84.553,72,84,72z"></path>
                            <path fill="#FEC308" d="M83,52v6H53v-6H83 M83.937,50H52.062C51.476,50,51,50.448,51,51v8c0,0.552,0.476,1,1.062,1h31.875
C84.524,60,85,59.552,85,59v-8C85,50.448,84.524,50,83.937,50L83.937,50z"></path>
                            <polyline opacity="0.5" fill="#FEC308" points="83,52 83,58 53,58 53,52 83,52    "></polyline>
                        </g>
                        <g class="laptop">
                            <rect x="32" y="38" fill="#FFFFFF" width="56" height="9"></rect>
                            <path fill="#ECEFF1" d="M92,30H28c-2.206,0-4,1.794-4,4v48h72V34C96,31.794,94.206,30,92,30z M88,74H32V38h56V74z"></path>
                            <path fill="#CFD8DC" d="M39,43h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1S39.552,43,39,43z"></path>
                            <path fill="#CFD8DC" d="M46,43h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1S46.552,43,46,43z"></path>
                            <path fill="#CFD8DC" d="M53,43h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1S53.552,43,53,43z"></path>
                            <path fill="#CFD8DC" d="M60,43h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1S60.552,43,60,43z"></path>
                            <path fill="#42C3DC" d="M84,43h-6c-0.553,0-1-0.448-1-1s0.447-1,1-1h6c0.553,0,1,0.448,1,1S84.553,43,84,43z"></path>
                            <path fill="#ECEFF1" d="M84,47H36c-0.552,0-1-0.448-1-1s0.448-1,1-1h48c0.553,0,1,0.448,1,1S84.553,47,84,47z"></path>
                            <circle fill="#CFD8DC" cx="60" cy="32" r="1"></circle>
                            <path fill="#CFD8DC" d="M100,90H20c-2.206,0-4-1.794-4-4h88C104,88.206,102.206,90,100,90z"></path>
                            <path fill="#5A6171" d="M88,38v36H32V38H88 M90,34H30c-1.105,0-2,0.895-2,2v40c0,1.105,0.895,2,2,2h60c1.105,0,2-0.895,2-2V36
C92,34.895,91.105,34,90,34L90,34z"></path>
                            <path fill="#5A6171" d="M106,82h-6V34c0-4.418-3.582-8-8-8H28c-4.418,0-8,3.582-8,8v48h-6c-1.105,0-2,0.896-2,2v2
c0,4.411,3.589,8,8,8h80c4.411,0,8-3.589,8-8v-2C108,82.896,107.104,82,106,82z M24,34c0-2.206,1.794-4,4-4h64c2.206,0,4,1.794,4,4
v48H24V34z M100,90H20c-2.206,0-4-1.794-4-4h88C104,88.206,102.206,90,100,90z"></path>
                        </g>
                        <foreignObject><div class="shatelland-icon-fallback"></div>
                        </foreignObject>
</svg>
                    <p class="dark_gray_font_color d-flex justify-content-center">سشیسش</p>

                </div>

                <div class="col-lg-2 col-xs-12 d-flex flex-column justify-content-center">
                    <svg class="m-auto" version="1.1" id="broadband" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px"
                         viewBox="0 0 120 120" enable-background="new 0 0 120 120" xml:space="preserve">
<g class="earth">
    <path fill="#F5F5F5" d="M59,20.778c21.076,0,38.222,17.146,38.222,38.222c0,21.076-17.146,38.222-38.222,38.222
c-21.076,0-38.222-17.146-38.222-38.222C20.778,37.924,37.924,20.778,59,20.778"></path>
    <path fill="#CFD8DC" d="M83.123,33.599c-2.043,0.715-4.099,1.542-5.297,2.741c-0.691,0.691-1.072,1.586-1.072,2.521
c0,2.793,2.836,4.52,5.11,5.905c1.026,0.639,2.746,1.709,3.053,2.252c1.497,3.334,3.481,10.587,2.104,11.964l-0.011,0.023
c-0.313,0.213-0.586,0.312-0.858,0.312c-0.882,0-2.054-1.065-3.901-3.023c-1.522-1.685-3.172-3.363-5.157-3.761
c-0.386-0.069-0.787-0.104-1.191-0.104c-1.729,0-3.342,0.596-5.255,1.369c-1.247,0.456-2.799,1.024-3.866,1.024
c-0.155,0-0.302-0.011-0.413-0.032c-0.93-0.227-3.594-2.809-5.652-6.338c-1.084-1.86-1.277-2.929-1.263-3.22
c0.301-0.567,0.727-1.128,1.268-1.669c0.994-0.994,2.422-1.93,3.559-2.636c1.969-1.239,3.399-2.314,3.973-3.517
c1.069-2.025,0.696-3.915,0.396-5.435l-0.036-0.178c-0.293-1.2-0.421-2.174-0.094-3.016c0.066-0.157,0.142-0.35,0.23-0.569
c0.483-1.215,1.385-3.621,2.439-4.676C71.297,23.429,71.583,23,71.787,23c0.003,0,0.006,0,0.01,0
c0.101,0.027,0.216,0.066,0.323,0.098c5.312,1.947,10.074,5.044,13.987,8.984C85.137,32.654,83.851,33.29,83.123,33.599z"></path>
    <path fill="#CFD8DC" d="M24.65,75.746c0.573,0.1,1.143,0.168,1.7,0.168c2.164,0,4.013-0.753,5.498-2.238l0.164-0.164
c2.062-2.21,1.997-6.604,1.68-12.577l-0.018-0.292c-0.074-1.18-0.139-2.199-0.063-2.857c-0.026-3.435,0.549-5.917,1.621-6.987
c0.3-0.3,0.575-0.476,1.218-0.553c0.27,0,1.385,0.438,4.412,6.088c1.132,2.049,2.25,3.99,3.48,5.22
c2.137,2.137,5.454,2.762,8.375,3.313c3.839,0.768,5.251,1.269,5.395,2.519c-0.268,0.083-0.744,0.171-1.057,0.23
c-0.217,0.041-0.433,0.081-0.566,0.113c-2.201,0.182-5.016,0.679-7.271,2.934c-1.343,1.342-2.348,3.263-2.992,5.721
c-1.006,4.318,2.376,7.063,5.132,9.299c1.117,0.891,3.195,2.55,3.091,3.334l-0.014,0.046c-0.168,0.063-0.595,0.176-1.658,0.303
l-0.529,0.066c-1.13,0.137-2.299,0.279-3.51,0.929c-0.354,0.194-0.768,0.436-1.191,0.859c-0.81,0.81-1.691,2.176-2.369,3.404
C36.199,91.129,28.858,84.342,24.65,75.746z"></path>
    <path fill="#525D6D" d="M59,16c-23.748,0-43,19.252-43,43s19.252,43,43,43c23.748,0,43-19.252,43-43S82.748,16,59,16z M97.222,59
c0,21.076-17.146,38.222-38.222,38.222c-3.338,0-6.576-0.433-9.664-1.241c0.466-0.759,0.867-1.31,1.194-1.638l0.184-0.184
c0.637-0.334,1.634-0.402,2.47-0.461c1.456-0.159,3.107-0.338,4.305-1.536c0.664-0.665,1.052-1.525,1.151-2.548
c0.34-2.969-2.081-5.17-4.582-7.164c-2.5-2.08-4.013-3.433-3.621-4.979c0.509-1.857,1.048-2.972,1.804-3.728
c1.316-1.315,3.178-1.657,4.83-1.874c1.448-0.219,3.089-0.466,4.145-1.521c0.844-0.844,1.232-2.009,1.069-3.173
c-0.425-4.821-5.328-5.772-8.911-6.467c-2.54-0.479-4.916-1.007-6.091-2.182c-0.589-0.589-1.499-2.009-2.706-4.225
c-2.157-3.877-4.602-8.271-8.112-8.271c-0.221,0-0.446,0.018-0.651,0.051c-1.374,0.153-2.628,0.761-3.626,1.759
c-2.604,2.604-2.765,7.294-2.853,9.859c0.005,0.355,0.019,0.748,0.033,1.173c0.023,0.681,0.049,1.451,0.05,2.326
c0.408,7.462-0.271,9.102-0.558,9.435l-0.084,0.083c-0.636,0.636-1.471,0.959-2.481,0.959c-1.793,0-3.486-0.967-3.724-1.099
c-1.164-3.654-1.797-7.543-1.797-11.578c0-21.076,17.146-38.222,38.222-38.222c2.768,0,5.465,0.303,8.068,0.865
c-1.09,1.52-1.897,3.401-2.625,5.108l-0.126,0.296c-0.834,2.2-0.385,4.165-0.088,5.465c0.313,1.375,0.333,2.052,0.066,2.696
l-0.236,0.236c-0.4,0.4-1.022,0.828-1.742,1.324l-0.563,0.39c-1.145,0.735-2.825,1.869-4.185,3.229
c-0.865,0.865-1.535,1.783-2.194,3.021c-0.597,1.454-0.356,3.196,0.786,5.655c1.447,2.981,5.593,8.91,9.052,9.775
c0.517,0.149,1.066,0.224,1.633,0.224c1.57,0,3.114-0.563,4.607-1.108l0.575-0.209c1.427-0.578,3.032-1.184,4.129-0.979
c0.379,0.068,1.34,0.751,2.816,2.474l0.094,0.099c1.722,1.828,4.079,4.332,7.004,4.332c1.084,0,2.163-0.351,3.209-1.043
l0.077-0.063c0.08-0.08,0.164-0.134,0.271-0.203c0.131-0.084,0.278-0.18,0.434-0.335c1.836-1.836,2.177-5.232,1.011-10.095
c-0.732-3.056-1.935-6.036-2.306-6.715l0.008-0.004c-0.864-1.728-2.828-2.974-4.605-4.008c-1.037-0.59-2.304-1.473-2.875-2.044
c0.909-0.631,2.763-1.416,3.433-1.7c1.526-0.652,3.071-1.345,4.253-2.125C94.134,41.848,97.222,50.068,97.222,59z M24.65,75.746
c0.573,0.1,1.143,0.168,1.7,0.168c2.164,0,4.013-0.753,5.498-2.238l0.164-0.164c2.062-2.21,1.997-6.604,1.68-12.577l-0.018-0.292
c-0.074-1.18-0.139-2.199-0.063-2.857c-0.026-3.435,0.549-5.917,1.621-6.987c0.3-0.3,0.575-0.476,1.218-0.553
c0.27,0,1.385,0.438,4.412,6.088c1.132,2.049,2.25,3.99,3.48,5.22c2.137,2.137,5.454,2.762,8.375,3.313
c3.839,0.768,5.251,1.269,5.395,2.519c-0.268,0.083-0.744,0.171-1.057,0.23c-0.217,0.041-0.433,0.081-0.566,0.113
c-2.201,0.182-5.016,0.679-7.271,2.934c-1.343,1.342-2.348,3.263-2.992,5.721c-1.006,4.318,2.376,7.063,5.132,9.299
c1.117,0.891,3.195,2.55,3.091,3.334l-0.014,0.046c-0.168,0.063-0.595,0.176-1.658,0.303l-0.529,0.066
c-1.13,0.137-2.299,0.279-3.51,0.929c-0.354,0.194-0.768,0.436-1.191,0.859c-0.81,0.81-1.691,2.176-2.369,3.404
C36.199,91.129,28.858,84.342,24.65,75.746z M83.123,33.599c-2.043,0.715-4.099,1.542-5.297,2.741
c-0.691,0.691-1.072,1.586-1.072,2.521c0,2.793,2.836,4.52,5.11,5.905c1.026,0.639,2.746,1.709,3.053,2.252
c1.497,3.334,3.481,10.587,2.104,11.964l-0.011,0.023c-0.313,0.213-0.586,0.312-0.858,0.312c-0.882,0-2.054-1.065-3.901-3.023
c-1.522-1.685-3.172-3.363-5.157-3.761c-0.386-0.069-0.787-0.104-1.191-0.104c-1.729,0-3.342,0.596-5.255,1.369
c-1.247,0.456-2.799,1.024-3.866,1.024c-0.155,0-0.302-0.011-0.413-0.032c-0.93-0.227-3.594-2.809-5.652-6.338
c-1.084-1.86-1.277-2.929-1.263-3.22c0.301-0.567,0.727-1.128,1.268-1.669c0.994-0.994,2.422-1.93,3.559-2.636
c1.969-1.239,3.399-2.314,3.973-3.517c1.069-2.025,0.696-3.915,0.396-5.435l-0.036-0.178c-0.293-1.2-0.421-2.174-0.094-3.016
c0.066-0.157,0.142-0.35,0.23-0.569c0.483-1.215,1.385-3.621,2.439-4.676C71.297,23.429,71.583,23,71.787,23
c0.003,0,0.006,0,0.01,0c0.101,0.027,0.216,0.066,0.323,0.098c5.312,1.947,10.074,5.044,13.987,8.984
C85.137,32.654,83.851,33.29,83.123,33.599z"></path>
</g>
                        <g class="cursor">
                            <polygon fill="#FFFFFF" points="101.993,98.536 93.992,90.534 99.888,86.006 77.993,78.095 85.903,99.99 90.431,94.094
98.434,102.097  "></polygon>
                            <path fill="#3DB7FA" d="M98.434,103.597c-0.397,0-0.779-0.158-1.061-0.439l-6.793-6.794l-3.487,4.541
c-0.334,0.434-0.876,0.649-1.42,0.569c-0.541-0.085-0.994-0.457-1.181-0.973l-7.91-21.896c-0.197-0.547-0.061-1.159,0.351-1.57
c0.411-0.412,1.025-0.548,1.57-0.35l21.895,7.911c0.516,0.186,0.889,0.639,0.973,1.18c0.084,0.542-0.134,1.086-0.568,1.42
l-4.541,3.487l6.793,6.794c0.586,0.585,0.586,1.535,0,2.121l-3.56,3.561C99.213,103.439,98.832,103.597,98.434,103.597z
M90.432,92.594c0.396,0,0.778,0.157,1.061,0.439l6.941,6.942l1.439-1.439l-6.941-6.942c-0.306-0.305-0.465-0.728-0.437-1.158
c0.028-0.431,0.241-0.829,0.583-1.092l3.724-2.859L80.49,80.592l5.893,16.311l2.859-3.723c0.263-0.343,0.661-0.555,1.092-0.583
C90.366,92.595,90.399,92.594,90.432,92.594z"></path>
                            <g class="click">
                                <path
                                    d="M79,73c-0.553,0-1-0.448-1-1v-3c0-0.552,0.447-1,1-1c0.553,0,1,0.448,1,1v3C80,72.552,79.553,73,79,73z"></path>
                                <path d="M74.05,75.05c-0.256,0-0.512-0.098-0.707-0.293l-2.121-2.122c-0.391-0.391-0.391-1.024,0-1.414
c0.391-0.391,1.023-0.391,1.414,0l2.121,2.122c0.391,0.391,0.391,1.024,0,1.414C74.561,74.953,74.306,75.05,74.05,75.05z"></path>
                                <path d="M83.95,75.05c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.39-0.391-1.023,0-1.414l2.121-2.122
c0.391-0.391,1.023-0.391,1.414,0c0.391,0.39,0.391,1.023,0,1.414l-2.121,2.122C84.462,74.953,84.206,75.05,83.95,75.05z"></path>
                                <path d="M71.929,87.071c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.39-0.391-1.023,0-1.414l2.121-2.122
c0.391-0.391,1.023-0.391,1.414,0c0.391,0.39,0.391,1.023,0,1.414l-2.121,2.122C72.44,86.974,72.185,87.071,71.929,87.071z"></path>
                                <path
                                    d="M72,80h-3c-0.553,0-1-0.448-1-1s0.447-1,1-1h3c0.553,0,1,0.448,1,1S72.553,80,72,80z"></path>
                            </g>
                        </g>
                        <foreignObject>
                            <div class="broadband-icon-fallback"></div>
                        </foreignObject>
</svg>
                    <p class="dark_gray_font_color d-flex justify-content-center">سشیسش</p>
                </div>


            </div>
        </div>
    </div>
@endsection
