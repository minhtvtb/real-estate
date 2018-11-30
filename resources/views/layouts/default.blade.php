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
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
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
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/">
                    <img src="{{asset('img/logo.png')}}" alt="" title="" style="height: 100px; display: none"/>
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                    <li><a href="{{ route('projects') }}">Dự án</a></li>
                    <li><a href="#">Đối tác</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="{{ route('blog') }}">YGM TV</a></li>
                    <li class="menu-has-children"><a href="#">Liên Hệ</a>
                        <ul>
                            <li><a href="#">Tuyển dụng</a></li>
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
                        Giới thiệu ngắn gọn về công ty ...
                    </p>
                    <p class="footer-text">
                        Copyright &copy;<script>document.write(new Date().getFullYear())</script>
                        All rights reserved | This page is made with
                        <i class="fa fa-heart-o" aria-hidden="true"></i> by
                        <a href="https://nguyenthuthao.com.vn" target="_blank">Trần Văn Minh</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Nhận Tin mới</h6>
                    <p>Luôn cập nhật tin tức mới nhất</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="" method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                   required="" type="email">
                            <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Liên hệ với tôi</h6>
                    <p>Mạng xã hội</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/justified.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
