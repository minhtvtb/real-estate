@extends('layouts.default')
@section('content')
    <!-- start banner Area -->
    @include('partitions.banner', ['pageTitle' => 'Giới thiệu', 'routeName' => 'about'])
    <!-- End banner Area -->
    <!-- Start service Area -->
    <section class="service-area section-gap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="flip-left">
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
                <div class="col-lg-4" data-aos="flip-right">
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
                <div class="col-lg-4" data-aos="flip-left">
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
            <div class="row d-flex justify-content-center" data-aos="flip-left">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Thông tin về Công ty</h1>
                        <p>Giới thiệu về sản Bất động sản YGM!</p>
                    </div>
                </div>
            </div>
            <div class="single-info row mt-40">
                <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                    <div class="info-thumb">
                        <img src="{{ asset('img/pages/van-phong.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        @if(!empty($settings))
                            {!! $settings->about !!}
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about info Area -->
@endsection
