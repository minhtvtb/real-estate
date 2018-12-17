@extends('layouts.default')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/frontend/home.css') }}">
@endsection

@section('content')
    <!-- start banner  -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg">
            <a href="/" class="logo-image">
                <img src="{{asset('img/logo-pc.png')}}" alt="" title=""/>
            </a>
            <div class="banner-gradient1 logo-pc"></div>
        </div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8" data-aos="fade-up">
                    <div id="logo" class="logo-mobile">
                        <a href="/">
                            <img src="{{asset('img/logo.png')}}" alt="" title="" style="height: 250px"/>
                        </a>
                    </div>
                    <h1 class="text-white">
                        <span style="color: rgb(255,215,0); font-size: 100px">YGM</span> Group
                    </h1>
                    <p class="pt-20 pb-20 text-white banner-text-content">
                        Nơi niềm tin tạo dựng
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner  -->
    <!-- Start upcoming-event  -->
    <section class="upcoming-event-area section-gap" id="events" data-aos="fade-down">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">{{ __('frontend.home.comming_up_event') }}</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 event-left">
                    @for($i = 0; $i < 2; $i++)
                        @php($post = isset($posts[$i]) ? $posts[$i] : null)
                        @if($post)
                            <div class="single-events" data-aos="fade-right">
                                <img class="img-fluid" src="{{ asset(Voyager::image($post->thumbnail('cropped'))) }}" alt=""style="width: 530px">
                                <a href="#"><h4>{{ $post->title }}</h4></a>
                                <h6><span>{{ formatDate($post->updated_at) }}</span> tại {{ $post->location }}</h6>
                                <p class="limited-text">{{ $post->quy_mo_content }}</p>
                                <a href="{{ route('projects.detail', ['type' => $post->category->slug, 'slug' => $post->slug]) }}" class="primary-btn text-uppercase">
                                    Thông tin chi tiết
                                </a>
                            </div>
                        @endif
                    @endfor
                </div>
                <div class="col-lg-6 event-right">
                    @for($i = 2; $i < 4; $i++)
                        @php($post = isset($posts[$i]) ? $posts[$i] : null)
                        @if($post)
                            <div class="single-events" data-aos="fade-left">
                                <a href="#"><h4>{{ $post->title }}</h4></a>
                                <h6><span>{{ formatDate($post->updated_at) }}</span> tại {{ $post->location }}</h6>
                                <p class="limited-text">{{ $post->quy_mo_content }}</p>
                                <a href="{{ route('projects.detail', ['type' => $post->category->slug, 'slug' => $post->slug]) }}" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                                <img class="img-fluid" src="{{ asset(Voyager::image($post->thumbnail('cropped'))) }}" alt=""style="width: 530px">
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event  -->
    <section class="blog-area section-gap" id="blog" data-aos="fade-down">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Blog YGM</h1>
                        <p>Hãy tham gia Blog của YGM nơi chia sẻ kiến thức!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
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
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
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
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
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
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
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
    <section class="section-gap customer-logo-wrap">
        <div class="row d-flex justify-content-center" data-aos="zoom-out">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Đối tác chiến lược</h1>
                </div>
            </div>
        </div>
        <div class="customer-logo">
            <div class="thumb">
                <img alt="Dân trí" class="" src="{{ asset('img/cuslogo/Dan_tri_l_636783940366013828.png') }}">
            </div>
            <div class="thumb">
                <img alt="Capitaland" class="" src="{{ asset('img/cuslogo/captalan.png') }}">
            </div>
            <div class="thumb">
                <img alt="VTV" class="" src="{{ asset('img/cuslogo/VTV_201_636783940459229160.png') }}">
            </div>
            <div class="thumb">
                <img alt="FLC Group" class="" src="{{ asset('img/cuslogo/flc.png') }}">
            </div>
            <div class="thumb">
                <img alt="ICID Group" class="" src="{{ asset('img/cuslogo/idic.png') }}">
            </div>
            <div class="thumb">
                <img alt="Vietcombank" class="" src="{{ asset('img/cuslogo/vietcombank.png') }}">
            </div>
            <div class="thumb">
                <img alt="Vinh Hạnh Group" class="" src="{{ asset('img/cuslogo/vinh_hanh.png') }}">
            </div>
            <div class="thumb">
                <img alt="Ngân hàng Phương Đông" class="" src="http://dankogroup.com.vn/pic/QA/logo-doit_636751917038814660_HasThumb.png">
            </div>
            <div class="thumb">
                <img alt="Vin Group" class="" src="{{ asset('img/cuslogo/vingroup.png') }}">
            </div>
            <div class="thumb">
                <img alt="Holdings VietNam" class="" src="http://dankogroup.com.vn/pic/QA/xnew-logo_636783247395788198.png">
            </div>
            <div class="thumb">
                <img alt="MB Bank" class="" src="http://dankogroup.com.vn/pic/QA/mb_636783942021198499.png">
            </div>
            <div class="thumb">
                <img alt="Eurowindow Group" class="" src="http://dankogroup.com.vn/pic/QA/logo-euro_636783940787927960.png">
            </div>
            <div class="thumb">
                <img alt="Mipec" class="" src="http://dankogroup.com.vn/pic/QA/mipe_636783940882533371.png">
            </div>
        </div>
    </section>
    <!-- Start exibition Area -->
    <section class="exibition-area section-gap" id="exhibitions">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="flip-up">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Lãnh đạo YGM</h1>
                        <p>Những người đã xây dựng lên YGM thành công hôm nay.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-exibition-carusel text-center">
                    <div class="single-exibition item">
                        <img src="https://via.placeholder.com/360x360.png?text=HO%C3%80NG%20QU%E1%BB%90C%20GIA" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>HOÀNG QUỐC GIA</h4></a>
                        <p>
                            CHỦ TỊCH HỘI ĐỒNG QUẢNG TRỊ KIÊM TGĐ ĐIỀU HÀNH
                        </p>
                        <h6 class="date">CEO</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{ asset('img/pepple/nguyen_hong_phong.jpg') }}" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>NGUYỄN HỒNG PHONG</h4></a>
                        <p>
                            GIÁM ĐỐC DỰ ÁN- SÀN THƯƠNG MẠI VS SHOPHOUSE
                        </p>
                        <h6 class="date">0967185335</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{ asset('img/pepple/lien.jpg') }}" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>NGUYỄN KIM LIÊN</h4></a>
                        <p>
                            GIÁM ĐỐC DỰ ÁN - BĐS NGHỈ DƯỠNG VS CONDOTEL
                        </p>
                        <h6 class="date">0961331696</h6>
                    </div>
                    <div class="single-exibition item">
                        <img src="{{ asset('img/pepple/truong_xuan_vu.jpg') }}" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>TRƯƠNG XUÂN VŨ</h4></a>
                        <p>
                            GIÁM ĐỐC DỰ ÁN - BĐS NGHỈ DƯỠNG VS CONDOTEL
                        </p>
                        <h6 class="date">0936123169</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="https://via.placeholder.com/360x360.png?text=TR%E1%BA%A6N%20TH%E1%BB%8A%20H%E1%BB%92I" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>TRẦN THỊ HỒI</h4></a>
                        <p>
                            GIÁM ĐỐC HÀNH CHÍNH NHÂN SỰ
                        </p>
                        <h6 class="date">0382529984</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exibition Area -->
@endsection
@section('script')
@endsection
