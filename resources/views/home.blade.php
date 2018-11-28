@extends('layouts.default')
@section('content')
    <!-- start banner  -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="my-container">
            <div class="my-row fullscreen my-d-flex align-items-center justify-content-center"></div>
        </div>
    </section>
    <!-- End banner  -->
    <section class="quote-area section-gap">
        <div class="container">
            <div class="row">
                <div class="my-col-lg-6 quote-left">
                    <h1>
                        <span>House</span> gives warmth to the people, <br>
                        wings to the <span>peace</span>, flight <br>
                        to the <span>happiness</span>.
                    </h1>
                </div>
                <div class="my-col-lg-6 quote-right">
                    <img src="{{ asset('img/t1.jpg') }}" style="height: 100px" width="600px">
                </div>
            </div>
        </div>
    </section>
    <!-- Start upcoming-event  -->
    <section class="upcoming-event-area section-gap" id="events">
        <div class="my-container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Dư án sắp tới</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="my-col-lg-6 event-left">
                    <div class="single-events">
                        <img class="img-fluid" src="{{ asset('img/u1.jpg') }}" alt=""style="width: 530px">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                    </div>
                    <div class="single-events">
                        <img class="img-fluid" src="{{ asset('img/u3.jpg') }}" alt=""style="width: 530px">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                    </div>
                </div>
                <div class="my-col-lg-6 event-right">
                    <div class="single-events">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                        <img class="img-fluid" src="{{ asset('img/u2.jpg') }}" alt=""style="width: 530px">
                    </div>
                    <div class="single-events">

                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                        <img class="img-fluid" src="{{ asset('img/u4.jpg') }}" alt=""style="width: 530px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event  -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Blog bài viết về blog</h1>
                        <p>Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao thông ngầm hiện đại, tiện ích trường học hoàng gia.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Dự án của chúng tôi</h1>
                        <p>Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án Ảnh dự án </p>
                    </div>
                </div>
            </div>
            <div id="grid-container" class="row">
                <a class="single-gallery" href="img/g1.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g1.jpg" data-index="0" style="padding: 15px; height: 227.984px; width: 328.296px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g2.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g2.jpg" data-index="1" style="padding: 15px; height: 227.984px; width: 239.839px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g3.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g3.jpg" data-index="2" style="padding: 15px; height: 227.984px; width: 150.469px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g4.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g4.jpg" data-index="3" style="padding: 15px; height: 227.984px; width: 238.927px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g5.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g5.jpg" data-index="4" style="padding: 15px; height: 227.984px; width: 150.469px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g6.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g6.jpg" data-index="5" style="padding: 15px; height: 241.079px; width: 253.615px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g7.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g7.jpg" data-index="6" style="padding: 15px; height: 241.079px; width: 253.615px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g8.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g8.jpg" data-index="7" style="padding: 15px; height: 241.079px; width: 347.154px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g9.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g9.jpg" data-index="8" style="padding: 15px; height: 241.079px; width: 253.615px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g10.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g10.jpg" data-index="9" style="padding: 15px; height: 228.171px; width: 239.124px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g11.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g11.jpg" data-index="10" style="padding: 15px; height: 228.171px; width: 328.567px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g12.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g12.jpg" data-index="11" style="padding: 15px; height: 228.171px; width: 150.593px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g4.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g4.jpg" data-index="12" style="padding: 15px; height: 228.171px; width: 239.124px; opacity: 1;"></a>
                <a class="single-gallery" href="img/g5.jpg"><img class="grid-item hgrid-item loaded resized" src="img/g5.jpg" data-index="13" style="padding: 15px; height: 228.171px; width: 150.593px; opacity: 1;"></a>
            </div>
        </div>
    </section>
    <!-- Start gallery -->
    <section>
        <div class="my-container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <video id="video1">
                            <source src="{{ asset('img/video.mp4') }}">
                        </video>
                        <button id="bnt1" onclick="playPause()">Play/Pause</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery -->
@endsection
