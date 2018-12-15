@extends('layouts.default')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/frontend/clone/project-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/tenement.css') }}">
@endsection
@section('more-style')
    {!! $post->header !!}
@endsection
@section('content')
    <!-- start banner Area -->
    @include('partitions.banner', ['pageTitle' => 'Dự án', 'routeName' => 'projects'])
    <!-- End banner Area -->
    <section id="slider-wrapper">
        <div class="bg-lopphu">
            <div class="slider-wrapper container section" id="Slider ảnh Giới thiệu">
                <div class="widget Text" data-version="1" id="Text4">
                    <div class="widget-content">
                        <h3>{{ $post->title }} </h3><h4></h4>
                        <p>{{ $post->excerpt }}</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget HTML" data-version="1" id="HTML2">
                    <h2 class="title">ĐĂNG KÝ ĐỂ ĐƯỢC NHẬN BÁO GIÁ NGAY!!! HOẶC LIÊN HỆ: 0971.262.223</h2>
                    <div class="widget-content">
                        <div id="form-bieu-mau-blogdep">
                            <div class="noi-dung-form-blogdep">
                                <iframe id="hidden_iframe"
                                        name="hidden_iframe"
                                        onload="if(submitted){};"
                                        style="display:none;">
                                </iframe>
                                <div class="thong-tin-form-blogdep">
                                    <form action=""
                                          id="t_form_1" method="POST" target="hidden_iframe">
                                        <div class="truong-thong-tin-form">
                                            <input type="text" class="quantumWizTextinputPaperinputInput exportInput"
                                                   jsname="YPqjbf" autocomplete="off" placeholder="From website"
                                                   style="display:none;" tabindex="0" aria-label="Link dự án"
                                                   aria-describedby="i.desc.2003410264 i.err.2003410264"
                                                   name="entry.572387537" value="" dir="auto" id="entry_572387537"
                                                   data-initial-dir="auto" data-initial-value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.169159321 i.err.169159321"
                                                   aria-label="Họ Và Tên" autocomplete="off"
                                                   class="quantumWizTextinputPaperinputInput exportInput"
                                                   data-initial-dir="auto" data-initial-value="" dir="auto"
                                                   jsname="YPqjbf" name="entry.787819960" placeholder="Họ Và Tên*"
                                                   required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.1515393480 i.err.1515393480"
                                                   aria-label="Số Điện Thoại" autocomplete="off"
                                                   class="quantumWizTextinputPaperinputInput exportInput"
                                                   data-initial-dir="auto" data-initial-value="" dir="auto"
                                                   jsname="YPqjbf" name="entry.1043070526" placeholder="Số điện thoại*"
                                                   required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.1627743852 i.err.1627743852"
                                                   aria-label="Địa Chỉ Email" autocomplete="off"
                                                   class="quantumWizTextinputPaperinputInput exportInput"
                                                   data-initial-dir="auto" data-initial-value="" dir="auto"
                                                   jsname="YPqjbf" name="entry.119168554" placeholder="Địa chỉ email"
                                                   required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="nuf-gui-form-di">
                                            <input onclick="javascript:;" type="submit" value="NHẬN BÁO GIÁ">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <div id="main-home">
        {!! $post->body !!}
        <div id="dang-ky-nhan-thong-tin">
            <div class="dang-ky-nhan-thong-tin container section" id="Đăng ký nhận thông tin">
                <div class="widget HTML" data-version="1" id="HTML7">
                    <h2 class="title">LIÊN HỆ HOTLINE: 0971.262.223</h2>
                    <div class="widget-content">
                        <div id="form-bieu-mau-blogdep">
                            <div class="noi-dung-form-blogdep">
                                <iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){};"
                                        style="display:none;"></iframe>
                                <div class="thong-tin-form-blogdep">
                                    <form action="#" id="t_form_1" method="POST" target="hidden_iframe">
                                        <div class="truong-thong-tin-form">
                                            <input type="text" class="quantumWizTextinputPaperinputInput exportInput"
                                                   jsname="YPqjbf" autocomplete="off" placeholder="From website"
                                                   style="display:none;" tabindex="0" aria-label="Link dự án"
                                                   aria-describedby="i.desc.2003410264 i.err.2003410264"
                                                   name="entry.572387537" value="" dir="auto" id="entry_572387537"
                                                   data-initial-dir="auto" data-initial-value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.169159321 i.err.169159321"
                                                   aria-label="Họ Và Tên" autocomplete="off"
                                                   class="quantumWizTextinputPaperinputInput exportInput"
                                                   data-initial-dir="auto" data-initial-value="" dir="auto"
                                                   jsname="YPqjbf" name="entry.787819960" placeholder="Họ Và Tên*"
                                                   required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.1515393480 i.err.1515393480"
                                                   aria-label="Số Điện Thoại" autocomplete="off"
                                                   class="quantumWizTextinputPaperinputInput exportInput"
                                                   data-initial-dir="auto" data-initial-value="" dir="auto"
                                                   jsname="YPqjbf" name="entry.1043070526" placeholder="Số điện thoại*"
                                                   required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.1627743852 i.err.1627743852"
                                                   aria-label="Địa Chỉ Email" autocomplete="off"
                                                   class="quantumWizTextinputPaperinputInput exportInput"
                                                   data-initial-dir="auto" data-initial-value="" dir="auto"
                                                   jsname="YPqjbf" name="entry.119168554" placeholder="Địa chỉ email"
                                                   required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="nuf-gui-form-di">
                                            <input onclick="javascript:;" type="submit" value="Đăng ký nhận tài liệu">
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        {!! $post->sub_body_1 !!}
        <div id="dang-ky-tu-van">
            <div class="dang-ky-tu-van container section" id="Đăng ký tư vấn">
                <div class="widget HTML" data-version="1" id="HTML10">
                    <div class="widget-content">
                        <div class="col-xs-12 col-sm-8 left">
                            <h2 class="title">BẠN THỰC SỰ MUỐN SỞ HỮU CĂN HỘ FLORENCE?</h2>
                        </div>
                        <div class="col-xs-12 col-sm-4 right">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#myModal">Đăng ký tư vấn
                            </button>


                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title">Đăng ký tư vấn dự án</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div id="form-bieu-mau-blogdep">
                                                <div class="noi-dung-form-blogdep">
                                                    <iframe id="hidden_iframe" name="hidden_iframe"
                                                            onload="if(submitted){};" style="display:none;"></iframe>
                                                    <div class="thong-tin-form-blogdep">
                                                        <form action="https://docs.google.com/forms/d/e/1FAIpQLSebV4X0dFJA7YZimFntLwPfojg_fsXYP9TkAm4yRCZhPdFCaw/formResponse"
                                                              id="t_form_1" method="POST" target="hidden_iframe">
                                                            <div class="truong-thong-tin-form">
                                                                <input type="text"
                                                                       class="quantumWizTextinputPaperinputInput exportInput"
                                                                       jsname="YPqjbf" autocomplete="off"
                                                                       placeholder="From website" style="display:none;"
                                                                       tabindex="0" aria-label="Link dự án"
                                                                       aria-describedby="i.desc.2003410264 i.err.2003410264"
                                                                       name="entry.572387537" value="" dir="auto"
                                                                       id="entry_572387537" data-initial-dir="auto"
                                                                       data-initial-value="">
                                                            </div>
                                                            <div class="truong-thong-tin-form">
                                                                <input aria-describedby="i.desc.169159321 i.err.169159321"
                                                                       aria-label="Họ Và Tên" autocomplete="off"
                                                                       class="quantumWizTextinputPaperinputInput exportInput"
                                                                       data-initial-dir="auto" data-initial-value=""
                                                                       dir="auto" jsname="YPqjbf" name="entry.787819960"
                                                                       placeholder="Họ Và Tên*" required="" tabindex="0"
                                                                       type="text" value="">
                                                            </div>
                                                            <div class="truong-thong-tin-form">
                                                                <input aria-describedby="i.desc.1515393480 i.err.1515393480"
                                                                       aria-label="Số Điện Thoại" autocomplete="off"
                                                                       class="quantumWizTextinputPaperinputInput exportInput"
                                                                       data-initial-dir="auto" data-initial-value=""
                                                                       dir="auto" jsname="YPqjbf"
                                                                       name="entry.1043070526"
                                                                       placeholder="Số điện thoại*" required=""
                                                                       tabindex="0" type="text" value="">
                                                            </div>
                                                            <div class="truong-thong-tin-form">
                                                                <input aria-describedby="i.desc.1627743852 i.err.1627743852"
                                                                       aria-label="Địa Chỉ Email" autocomplete="off"
                                                                       class="quantumWizTextinputPaperinputInput exportInput"
                                                                       data-initial-dir="auto" data-initial-value=""
                                                                       dir="auto" jsname="YPqjbf" name="entry.119168554"
                                                                       placeholder="Địa chỉ email" required=""
                                                                       tabindex="0" type="text" value="">
                                                            </div>
                                                            <div class="nuf-gui-form-di">
                                                                <input onclick="myFunction()" type="submit"
                                                                       value="Đăng ký tư vấn">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        {!! $post->sub_body_2 !!}
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/frontend/price.js') }}"></script>
@endsection
@section('more-js')
    {!! $post->footer !!}
@endsection
