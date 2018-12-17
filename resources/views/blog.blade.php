@extends('layouts.default')
@section('content')
    <!-- start banner Area -->
    @include('partitions.banner', ['pageTitle' => 'YGM TV', 'routeName' => 'blog'])
    <!-- End banner Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                @forelse($blogs as $blog)
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="{{ Voyager::image($blog->thumbnail('cropped')) }}" alt="">
                        <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}">
                            <h1>{{ $blog->title }}</h1>
                        </a>
                        <p>{{ $blog->excerpt }}</p>
                        <div class="bottom-meta">
                            <div class="user-details row align-items-center">
                                <div class="comment-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-heart"></span>	4 lượt thích</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Bình luận</a></li>
                                    </ul>
                                </div>
                                <div class="social-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-lg-8 post-list blog-post-list">
                        Không có bài viết nào, mời bạn quay lại sau !
                    </div>
                @endforelse
                @include('partitions.sidebar')
            </div>
        </div>
    </section>
@endsection
