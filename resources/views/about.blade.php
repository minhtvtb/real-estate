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
                        <h2 class="pb-30">Chúng tôi tin rằng<br>
                            bạn có nhà đẹp <br>
                            bạn thêm hạnh phúc!</h2>
                        <h5>Thành lập</h5>
                        <p>
                            Là tiền thân của HaNoiLand, đã từng có hơn 10 năm kinh nghiệm trong lĩnh vực bất động sản.
                            Và mới được tách ra từ năm 2016.
                            Hiện nay, YGM là một trong những công ty có nhiều uy tín trong lĩnh vực đầu tư và phát triển bất động sản

                        </p>
                        <h5>Tầm nhìn</h5>
                        <p>
                            Là một Tập đoàn bất động sản đẳng cấp quốc tế, vị thế cao, phát triển vững mạnh, góp phần mang lại cuộc sống hạnh phúc và thịnh vượng cho cộng đồng.
                        </p>
                        <h5>Sứ mạng</h5>
                        <p>
                            Chúng tôi phát triển dự án, không chỉ ở những mét vuông xây dựng mà góp phần kiến tạo cộng đồng nhân văn tiên tiến, có phong cách sống hiện đại với nhiều tiện ích, qua đó tạo nên giá trị sống gia tăng bền vững cho mình và cho xã hội.
                        </p>
                        <h5>Giá trị cốt lõi</h5>
                        <ul class="unordered-list">
                            <li>Cam kết chất lượng dịch vụ</li>
                            <li>Phục vụ khách hàng tận tâm - chuyên nghiệp</li>
                            <li>Môi trường làm việc thân thiện tạo nhiều cơ hội phát triển</li>
                            <li>Trung thực, uy tín, tôn trọng đạo đức kinh doanh.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about info Area -->
@endsection
