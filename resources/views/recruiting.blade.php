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
                    @forelse($recruitings as $recruiting)
                        <div class="single-exibition item">
                            <img src="{{ asset(Voyager::image($recruiting->thumbnail('medium'))) }}" alt="">
                            <ul class="tags">
                                <li><a href="javascript:;">{{ $recruiting->tag }}</a></li>
                            </ul>
                            <a href="{{ route('recruiting.detail', ['slug' => $recruiting->slug]) }}">
                                <h4>{{ $recruiting->title }}</h4>
                            </a>
                            <p class="limited-text">
                                {{ $recruiting->excerpt }}
                            </p>
                            <h6 class="date">{{ formatDate($recruiting->updated_at) }}</h6>
                        </div>
                    @empty
                        <div class="single-exibition item"></div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <div class="section-top-border">
        <h3 class="mb-30 text-center">Tất cả tin tuyển dụng</h3>
        <div class="progress-table-wrap">
            <div class="progress-table">
                <div class="table-head">
                    <div class="serial">#</div>
                    <div class="country">Vị trí tuyển dụng</div>
                    <div class="serial">Phòng ban/Đơn vị</div>
                    <div class="serial">Số lượng</div>
                    <div class="serial">Địa điểm</div>
                    <div class="serial">Hạn nộp hồ sơ</div>
                </div>
                @php($i = 1)
                @forelse($recruitings as $recruiting)
                    <a href="{{ route('recruiting.detail', ['slug' => $recruiting->slug]) }}">
                        <div class="table-row">
                            <div class="serial">{{ $i++ }}</div>
                            <div class="country">
                                <img src="{{ asset(Voyager::image($recruiting->thumbnail('small'))) }}" alt="flag">
                                {{ $recruiting->title }}
                            </div>
                            <div class="serial">{{ $recruiting->department }}</div>
                            <div class="serial">3</div>
                            <div class="serial">{{ $recruiting->location }}</div>
                            <div class="serial">{{ formatDate($recruiting->expired) }}</div>
                        </div>
                    </a>
                @empty
                    <div class="table-row">
                        Không có tin tuyển dụng nào !
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/frontend/recruiting.js') }}"></script>
@endsection
