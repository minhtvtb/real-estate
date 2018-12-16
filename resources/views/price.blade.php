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
                @forelse($projects as $project)
                    @if($project->featured)
                        <div class="col-lg-4 col-md-6 single-exhibition">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset(Voyager::image($project->thumbnail('medium'))) }}" alt="">
                            </div>
                            <p class="date">{{ formatDate($project->updated_at) }}</p>
                            <a href="{{ route('projects.detail', ['type' => $project->category->slug, 'slug' => $project->slug]) }}">
                                <h4>{{ $project->title }}</h4>
                            </a>
                            <p class="limited-text">{{ $project->quy_mo_content }}</p>
                            <div class="meta-bottom d-flex justify-content-start">
                                <p class="price">Từ {{ !empty($project->price) ? $project->price : '3 - 5 tỷ' }}</p>
                            </div>
                        </div>
                    @endif
                @empty
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
                @endforelse
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
                @forelse($projects as $project)
                    @if($project->category->order == '1')
                        <div class="col-lg-4 col-md-6 single-exhibition">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset(Voyager::image($project->thumbnail('medium'))) }}" alt="">
                            </div>
                            <p class="date">{{ formatDate($project->updated_at) }}</p>
                            <a href="{{ route('projects.detail', ['type' => $project->category->slug, 'slug' => $project->slug]) }}">
                                <h4>{{ $project->title }}</h4>
                            </a>
                            <p class="limited-text">{{ $project->quy_mo_content }}</p>
                            <div class="meta-bottom d-flex justify-content-start">
                                <p class="price">Từ {{ !empty($project->price) ? $project->price : '3 - 5 tỷ' }}</p>
                            </div>
                        </div>
                    @endif
                @empty
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
                @endforelse
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
                @forelse($projects as $project)
                    @if($project->category->order == '2')
                        <div class="col-lg-4 col-md-6 single-exhibition">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset(Voyager::image($project->thumbnail('medium'))) }}" alt="">
                            </div>
                            <p class="date">{{ formatDate($project->updated_at) }}</p>
                            <a href="{{ route('projects.detail', ['type' => $project->category->slug, 'slug' => $project->slug]) }}">
                                <h4>{{ $project->title }}</h4>
                            </a>
                            <p class="limited-text">{{ $project->quy_mo_content }}</p>
                            <div class="meta-bottom d-flex justify-content-start">
                                <p class="price">Từ {{ !empty($project->price) ? $project->price : '3 - 5 tỷ' }}</p>
                            </div>
                        </div>
                    @endif
                @empty
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
                @endforelse
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
                @forelse($projects as $project)
                    @if($project->category->order == '3')
                        <div class="col-lg-4 col-md-6 single-exhibition">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset(Voyager::image($project->thumbnail('medium'))) }}" alt="">
                            </div>
                            <p class="date">{{ formatDate($project->updated_at) }}</p>
                            <a href="{{ route('projects.detail', ['type' => $project->category->slug, 'slug' => $project->slug]) }}">
                                <h4>{{ $project->title }}</h4>
                            </a>
                            <p class="limited-text">{{ $project->quy_mo_content }}</p>
                            <div class="meta-bottom d-flex justify-content-start">
                                <p class="price">Từ {{ !empty($project->price) ? $project->price : '3 - 5 tỷ' }}</p>
                            </div>
                        </div>
                    @endif
                @empty
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
                @endforelse
            </div>
        </div>
    </section>

    <section class="upcoming-exibition-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="fade-down">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Tổ hợp</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row selling">
                @forelse($projects as $project)
                    @if($project->category->order == '4')
                        <div class="col-lg-4 col-md-6 single-exhibition">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset(Voyager::image($project->thumbnail('medium'))) }}" alt="">
                            </div>
                            <p class="date">{{ formatDate($project->updated_at) }}</p>
                            <a href="{{ route('projects.detail', ['type' => $project->category->slug, 'slug' => $project->slug]) }}">
                                <h4>{{ $project->title }}</h4>
                            </a>
                            <p class="limited-text">{{ $project->quy_mo_content }}</p>
                            <div class="meta-bottom d-flex justify-content-start">
                                <p class="price">Từ {{ !empty($project->price) ? $project->price : '3 - 5 tỷ' }}</p>
                            </div>
                        </div>
                    @endif
                @empty
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
                @endforelse
            </div>
        </div>
    </section>
    <!-- End upcoming-exibition Area -->
@endsection
@section('script')
    <script src="{{ asset('js/frontend/price.js') }}"></script>
@endsection
