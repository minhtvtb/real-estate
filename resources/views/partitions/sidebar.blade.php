<div class="col-lg-4 sidebar">
    <div class="single-widget search-widget">
        <form class="example" action="#" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Tìm kiếm bài viết" name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="single-widget protfolio-widget">
        <img src="{{ asset('img/logo.png') }}" width="150" alt="">
        <a href="#"><h4>Sàn Bất động sản YGM</h4></a>
        <p>
            Là tiền thân của Hanoiland, một công ty đã từng có hơn 10 năm kinh nghiệm
            trong lĩnh vực bất động sản nên khi tách ra hoạt động riêng vào năm 2016 thì
            YGM trở thành một trong những công ty có nhiều uy tín trong lĩnh vực đầu tư
            và phát triển bất động sản. Và đến nay, YGM đã vươn lên thành một Tập đoàn
            bất động sản đẳng cấp quốc tế, vị thế cao, phát triển vững mạnh, góp phần
            mang lại cuộc sống hạnh phúc và thịnh vượng cho cộng đồng.
        </p>
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
    </div>

    {{--<div class="single-widget category-widget">--}}
    {{--<h4 class="title">Danh mục bài viết</h4>--}}
    {{--<ul>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Techlology</h6> <span>37</span></a></li>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Lifestyle</h6> <span>24</span></a></li>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Fashion</h6> <span>59</span></a></li>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Art</h6> <span>29</span></a></li>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Food</h6> <span>15</span></a></li>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Architecture</h6> <span>09</span></a></li>--}}
    {{--<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Adventure</h6> <span>44</span></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}

    <div class="single-widget recent-posts-widget">
        <h4 class="title">Bài đăng gần đây</h4>
        <div class="blog-list ">
            @forelse($blogs as $blog)
                <div class="single-recent-post d-flex flex-row">
                    <div class="recent-thumb">
                        <img class="img-fluid" src="{{ asset(Voyager::image($blog->thumbnail('small'))) }}" alt="">
                    </div>
                    <div class="recent-details">
                        <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}">
                            <h4>{{ $blog->title }}</h4>
                        </a>
                        <p>
                            {{ formatDate($blog->updated_at) }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="single-recent-post d-flex flex-row">
                    Thống kê đang được cập nhật ...
                </div>
            @endforelse
        </div>
    </div>

    <div class="single-widget category-widget">
        <h4 class="title">Thống kê lưu trữ</h4>
        <ul>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Dec '17</h6>
                    <span>37</span></a></li>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov '17</h6>
                    <span>24</span></a></li>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Oct '17</h6>
                    <span>59</span></a></li>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Sep '17</h6>
                    <span>29</span></a></li>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Aug '17</h6>
                    <span>15</span></a></li>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jul '17</h6>
                    <span>09</span></a></li>
            <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jun '17</h6>
                    <span>44</span></a></li>
        </ul>
    </div>

    <div class="single-widget tags-widget">
        <h4 class="title">Tag Bài viết</h4>
        <ul>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tuyển dụng</a></li>
            <li><a href="#">Xu hướng bất động sản</a></li>
            <li><a href="#">Giao dịch an toàn</a></li>
            <li><a href="#">Công nghệ</a></li>
        </ul>
    </div>

</div>
