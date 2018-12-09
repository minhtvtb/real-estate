@extends('layouts.default')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/frontend/price.css') }}">
@endsection
@section('content')
    <!-- start banner Area -->
    @include('partitions.banner', ['pageTitle' => 'Dự án', 'routeName' => 'projects'])
    <!-- End banner Area -->
    <!-- Start upcoming-exibition Area -->
    <section class="upcoming-exibition-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="flip-left">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Dự án đang mở bán</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row selling">
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex1.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="{{ route('projects.tenement', ['slug' => 'du-an-florence']) }}">
                        <h4>Dự án Best Western Premier Sapphire</h4>
                    </a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex2.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex3.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-exibition-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="fade-zoom-in">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Chung cư</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row selling">
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex1.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex2.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex3.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-exibition-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="fade-left">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Nghỉ dưỡng</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row selling">
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex1.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex2.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex3.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-exibition-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="fade-right">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Biệt thự</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row selling">
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex1.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex2.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex3.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-exibition-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="fade-down">
                <div class="menu-content pb-70 col-lg-8">j
                    <div class="title text-center">
                        <h1 class="mb-10">Tổ hợp</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row selling">
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex1.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex2.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex3.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Dự án Best Western Premier Sapphire</h4></a>
                    <p>
                        Với mục tiêu đem đến cho khách hàng một không gian sống đẳng cấp, DOJI còn mang đến một thiên đường
                        nghỉ dưỡng hàng đầu khu vực.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-5 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine City</h4></a>
                    <p>
                        Tọa lạc tại bờ Nam sông Hồng,Sunshine City hưởng trọn dòng sinh khí đất trời, dòng chảy tài lộc để
                        trở thành KDT đáng sống bậc nhất Thủ đô.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price">Từ 3-7 tỷ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 single-exhibition">
                    <div class="thumb">
                        <img class="img-fluid" src="img/pages/ex4.jpg" alt="">
                    </div>
                    <p class="date">29/09/2018</p>
                    <a href="#"><h4>Chung cư Sunshine Riverside</h4></a>
                    <p>
                        Sunshine Riverside nằm ở đầu cầu Nhật Tân phía bờ Nam sông Hồng,vùng của địa linh sinh nhân kiệt đó,
                        cát tường,thịnh vượng như hội tụ về đây.
                    </p>
                    <div class="meta-bottom d-flex justify-content-start">
                        <p class="price"> >3 tỷ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-exibition Area -->
@endsection
@section('script')
    <script src="{{ asset('js/frontend/price.js') }}"></script>
@endsection
