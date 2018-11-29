<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">{{ $pageTitle }}</h1>
                <p class="text-white link-nav">
                    <a href="{{route('home')}}">Trang chủ </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="{{route($routeName)}}">{{ $pageTitle }}</a>
                </p>
            </div>
        </div>
    </div>
</section>
