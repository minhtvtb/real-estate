@extends('layouts.default')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">Thông tin</h1>
                    <p class="text-white link-nav">
                        <a href="{{route('home')}}">Trang chủ </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="{{route('about')}}"> Thông tin</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start quote Area -->
    <section class="quote-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 quote-left">
                    <h1>
                        <span>House</span> gives warmth to the people, <br>
                        wings to the <span>peace</span>, flight <br>
                        to the <span>happiness</span>.
                    </h1>
                </div>
                <div class="col-lg-6 quote-right">
                    <img src="{{ asset('img/t1.jpg') }}" style="height: 100px" width="600px">
                </div>
            </div>
        </div>
    </section>
    <!-- End quote Area -->
    <!-- Start service Area -->
    <section class="service-area section-gap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service">
                        <span class="lnr lnr-clock"></span>
                        <h4>Thời gian làm việc</h4>
                        <p>
                            Thứ 2-6: 8.00am to 05.30pm<br>
                            Thứ Bảy: 8.00pm to 04.00 pm<br>
                            Chủ nhật nghỉ.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Thời gian mở bán dự án</h4>
                        <p>
                            Thứ 2-6: 8.00am to 05.30pm<br>
                            Thứ Bảy: 8.00pm to 04.00 pm<br>
                            Chủ nhật nghỉ.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>Thời gian sự kiện dự án</h4>
                        <p>
                            Thứ 2-6: 10.00am to 05.00pm<br>
                            Thứ Bảy: 12.00pm to 03.00 pm<br>
                            Chủ nhật nghỉ.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Area -->
    <!-- Start about info Area -->
    <section class="section-gap info-area" id="about">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Thông tin về Công ty</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="single-info row mt-40">
                <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                    <div class="info-thumb">
                        <img src="img/pages/about-img.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        <h2 class="pb-30">Chúng tôi tin rằng<br>
                            bạn có nhà đẹp <br>
                            bạn thêm hạnh phúc!</h2>
                        <p>
                            Bất cứ ai trên thế giới này đều mang trong mình ước mơ sở hữu một căn nhà đẹp, đầy đủ tiện nghi.
                            Bạn thử tưởng tượng xem sau bao bộn bề cuộc sống nhà là chốn bình yên đón bạn trở về, vậy
                            thì căn nhà đẹp sẽ mang đến cho bạn cảm giác hạnh phúc hơn bao giờ hết.
                        </p>
                        <br>
                        <p>
                            Tân Long Land mang đến cho bạn những giá trị đó. Công ty chúng tôi luôn muốn phục vụ tới khách
                            hàng những gì tốt đẹp nhất. Chúng tôi kiến tạo lên những ngôi nhà mang tên "bình yên". Để bạn dù
                            có đi đâu vẫn luôn móng ngóng ngày trở về ngôi nhà thân yêu.
                        </p>
                        <br>
                        <p>
                            Là con người bạn đều mong muốn những điều tốt đẹp nhất cho những người thân yêu trong gia đình.
                            Những dự án của chúng tôi sẽ mang đến cho bạn những ngôi nhà đẳng cấp nhất, đẹp nhất, lung linh
                            nhất và đặc biệt không gian vô cùng ấm cúng.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about info Area -->
@endsection
