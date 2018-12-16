@extends('layouts.default')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/frontend/recruiting.css') }}">
@endsection
@section('content')
    <!-- start banner Area -->
    @include('partitions.banner', ['pageTitle' => 'Tuyển dụng', 'routeName' => 'recruiting'])

    <section class="exibition-area section-gap" id="exhibitions">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Tin tuyển dụng nổi bật</h1>
                        <p>Bạn mong muốn một cơ hội phát triển và chứng tỏ bản thân hãy đến với chúng tôi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-exibition-carusel">
                    <div class="single-exibition item">
                        <img src="img/e1.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="img/e2.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="img/e3.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>
                    <div class="single-exibition item">
                        <img src="img/e1.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="img/e2.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="img/e3.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>
                    <div class="single-exibition item">
                        <img src="img/e1.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>

                    <div class="single-exibition item">
                        <img class="img-fluid" src="img/e2.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>

                    <div class="single-exibition item">
                        <img class="img-fluid" src="img/e3.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li>
                        </ul>
                        <a href="#"><h4>Portable latest blog for women</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <h6 class="date">31st January, 2018</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('js/frontend/recruiting.js') }}"></script>
@endsection
