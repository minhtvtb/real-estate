<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YGM Group</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    @yield('more-style')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('style')
    {{--<link rel="stylesheet" href="css/aos.css">--}}
</head>
<body>
<header id="header" id="home">
    <div class="container header-top">
        <div class="row">
            <div class="col-6 top-head-left">
                <ul class="menu-right">
                    <li><a href="#">Tham khảo</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-6 top-head-right">
                <ul>
                    <li>
                        <a href="tel:{{getPhoneSetting()}}" class="font-weight-bold" style="color: #fca940; font-size: 14px">
                            Hotline : {{getPhoneSetting()}}
                        </a>
                    </li>
                    <li><a href="#" style="font-size: 16px"><i class="fa fa-facebook social-header"></i></a></li>
                    <li><a href="#" style="font-size: 16px"><i class="fa fa-twitter social-header"></i></a></li>
                    <li><a href="#" style="font-size: 16px"><i class="fa fa-dribbble social-header"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/">
                    <img src="{{asset('img/logo-pc.png')}}" alt="" title="" style="height: 100px; display: none"/>
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                    <li><a href="{{ route('projects') }}">Dự án</a></li>
                    <li><a href="#">Đối tác</a></li>
                    <li><a href="{{ route('recruiting') }}">Tuyển dụng</a></li>
                    <li><a href="{{ route('blog') }}">YGM TV</a></li>
                    <li class="menu-has-children"><a href="#">Liên Hệ</a>
                        <ul>
                            <li><a href="{{ route('recruiting') }}">Tuyển dụng</a></li>
                            <li><a href="#">Thông tin nhân sự</a></li>
                            <li><a href="#">Thông tin liên lạc</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

@yield('content')

<!-- start footer -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Về chúng tôi</h6>
                    <p>
                        Chúng tôi phát triển dự án, không chỉ ở những mét vuông xây dựng mà góp phần kiến tạo cộng đồng nhân văn tiên tiến, có phong cách sống hiện đại với nhiều tiện ích, qua đó tạo nên giá trị sống gia tăng bền vững cho mình và cho xã hội.
                    </p>
                    <p>
                        <span style="color: #0e3950">Email:</span> ygmland@gmail.com
                    </p>
                    <p>
                        Liên hệ: <a href="tel:{{getPhoneSetting()}}">{{getPhoneSetting()}}</a>
                    </p>
                    <p>
                        website: <a href="http://ygm.com.vn">ygm.com.vn</a>
                    </p>
                    <p>
                        <span style="color: #0e3950">Địa chỉ:</span> Tầng 9 toà nhà Detech - 107 Nguyễn Phong Sắc, Cầu Giấy, Hà Nội
                    </p>
                    <p class="footer-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | YGM <i class="fa fa-heart-o" aria-hidden="true"></i> <br> <a href="#" target="_blank">Nơi niềm tin tạo dựng</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Nhận tin từ chúng tôi</h6>
                    <p>Cập nhật tin tức bất động sản mới nhất</p>
                    <div class="" id="mc_embed_signup">
                        <form class="form-inline">
                            <input class="form-control" name="mobile" placeholder="Nhập số điện thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập số điện thoại'" required="" type="number">
                            <button class="click-btn btn btn-default" id="btn-submit-email">
                                <span class="lnr lnr-arrow-right"></span>
                            </button>
                            <input class="form-control" name="email" placeholder="Nhập email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập email'" required="" type="email">
                            <button class="click-btn btn btn-default" id="btn-submit-email">
                                <span class="lnr lnr-arrow-right"></span>
                            </button>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Theo dõi chúng tôi trên mạng xã hội</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA" type="text/javascript" ></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/hoverIntent.js') }}"></script>
<script src="{{ asset('js/superfish.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/justified.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('slick/slick.js') }}"></script>
@yield('more-js')
<script src="{{ asset('js/main.js') }}"></script>
@yield('script')
</body>
