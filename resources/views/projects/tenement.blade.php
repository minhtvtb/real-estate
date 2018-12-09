@extends('layouts.default')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/frontend/clone/project-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/tenement.css') }}">
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
                        <h3>FLORENCE </h3><h4></h4>
                        <p>NƠI THỊNH VƯỢNG AN VUI</p>
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
                                            <input onclick="myFunction()" type="submit" value="NHẬN BÁO GIÁ">
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
        <div id="quy-mo-du-an">
            <div class="quy-mo-du-an container section" id="Quy mô dự án">
                <div class="widget Text" data-version="1" id="Text1">
                    <h2 class="title">QUY MÔ DỰ ÁN FLORENCE</h2>
                    <div class="widget-content">
                        <div class="separator" style="clear: both; text-align: center;">
                            <span style="font-size: large">
                            ;">Florence chính là một nơi chốn đất vàng, kiến trúc tuyệt đẹp trong chuỗi các dự án bất
                            động sản của Phục Hưng Holdings. Florence được nhiều cư dân và nhà đầu tư ở trong nước và
                            quốc tế chọn làm nơi sinh sống và đầu tư của mình vì sức cuốn hút đặc biệt vô hình và hữu
                            hình. Đúng như thông điệp của Florence – Nơi thịnh vượng an vui, vùng đất địa linh nhân kiệt
                            nơi này và kiến trúc Italia tuyệt vời đã khiến Florence trở thành biểu tượng của một cuộc
                            sống tốt đẹp, giàu mạnh, tươi sáng, bình an và hạnh phúc…
                            </span>
                        </div>
                        <div class="separator" style="clear: both; text-align: center;"><br>
                            <span style="font-size: large  ;">
                            <h3>Tổng quan khu căn hộ cao cấp Florence</h3>
                            </span>
                        </div>
                        <div class="separator" style="clear: both; text-align: center;"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget HTML" data-version="1" id="HTML1">
                    <h2 class="title">Tổng diện tích</h2>
                    <div class="widget-content">
                        9.976 m2
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget HTML" data-version="1" id="HTML5">
                    <h2 class="title">Số tầng hầm</h2>
                    <div class="widget-content">
                        03
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget HTML" data-version="1" id="HTML3">
                    <h2 class="title">Số tầng nổi</h2>
                    <div class="widget-content">
                        25
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget HTML" data-version="1" id="HTML4">
                    <h2 class="title">Tổng số căn hộ</h2>
                    <div class="widget-content">
                        480
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div id="mat-bang-tong-the">
            <div class="mat-bang-tong-the container section" id="Mặt bằng tổng thể dự án"><div class="widget HTML" data-version="1" id="HTML6">
                    <h2 class="title">TỔNG THỂ  DỰ ÁN FLORENCE</h2>
                    <div class="widget-content">
                        <!-- chỉnh sửa tiêu đề-->
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget Image" data-version="1" id="Image1">
                    <div class="widget-content">
                        <img alt="" height="843" id="Image1_img" src="https://lh4.googleusercontent.com/-mLi19Zdfku0/W7LhhqEBcxI/AAAAAAAAF34/pd2pbGYh1BE_3GaHZlUEFG8ljmBLsdPBACLcBGAs/s1600/TONG%2BQUAN.jpg" width="1500">
                        <br>
                    </div>
                    <div class="clear"></div>
                </div><div class="widget Text" data-version="1" id="Text2">
                    <div class="widget-content">
                        <h3>Ý TƯỞNG THIẾT KẾ</h3> Tái hiện một không gian Châu Âu trong lòng Hà Nội, ý tưởng thiết kế Tòa tháp đã được lấy cảm hứng từ phong cách kiến trúc của thời kỳ Phục Hưng (Renaissence) - phong cách tân cổ điển đỉnh cao được phát triển đầu tiên tại thành phố Florence - Italia., các kiến trúc sư đã kiến tạo một bức tranh đa sắc với màu nâu của những con đường dạo bộ, màu xanh của cỏ cây, màu lam của trời, nước..<h3>CỘNG ĐỒNG TRI THỨC</h3>Florence nằm trong khu vực dân trí cao, tại khu vực trung tâm mới của Hà Nội, cư dân được thừa hưởng cơ sở hạ tầng phát triển, ngay trong khu vực cũng đã có đầy đủ các công trình văn hóa, cộng đồng, trung tâm thương mại, khu vui chơi giải trí, trung tâm thể thao văn hóa thể dục thể thao, phục vụ đời sống cư dân một cách trọn vẹn nhất.<h3>CẢM HỨNG TỪ LOÀI HOA DIÊN VỸ</h3>Ý tưởng thiết kế cảnh quan sân vườn lấy cảm hứng từ hình ảnh hoa Diên vỹ, loài hoa linh thiêng, một biểu tượng của thành phố Florence.
                    </div>
                    <div class="clear"></div>
                </div></div>
        </div>
        <div id="vi-tri-dac-dia">
            <div class="vi-tri-dac-dia container section" id="Vị trí dự án"><div class="widget Text" data-version="1" id="Text3">
                    <h2 class="title">VỊ TRÍ ĐẮC ĐỊA</h2>
                    <div class="widget-content">
                        FLORENCE ở mặt tiền phố lớn, số 28 Trần Hữu Dực - tuyến phố đẹp và phát triển bậc nhất Mỹ Đình, Hà Nội.<br>Có hệ thống giao thông thuận lợi, liên kết các tuyến đường huyết mạch và kế cận các khu vực quan trọng hàng đầu của thành phố như Sân vận động quốc gia Mỹ Đình, Khách sạn Crowne Plaza, Khách sạn JW Marriott, Bến xe khách Mỹ Đình, Đại học Quốc gia Hà Nội, Đại học Thương mại, Bệnh viện 19-8. Viện huyết học, Trung tâm Hội nghị quốc gia, Sân bay quốc tế Nội Bài,v.v...<br>
                    </div>
                    <div class="clear"></div>
                </div><div class="widget Image" data-version="1" id="Image2">
                    <div class="widget-content">
                        <img alt="" height="759" id="Image2_img" src="http://lh4.googleusercontent.com/-B-SL_jS4E3U/W7Lh7STpZzI/AAAAAAAAF4E/xeJgOyC-K18Y5WBsxlqobrm2yQSSZ4u4QCK4BGAYYCw/s1600/vi%2Btri.jpg" width="1228">
                        <br>
                    </div>
                    <div class="clear"></div>
                </div></div>
        </div>
        <div id="dang-ky-nhan-thong-tin">
            <div class="dang-ky-nhan-thong-tin container section" id="Đăng ký nhận thông tin"><div class="widget HTML" data-version="1" id="HTML7">
                    <h2 class="title">LIÊN HỆ HOTLINE: 0971.262.223</h2>
                    <div class="widget-content">
                        <div id="form-bieu-mau-blogdep">
                            <div class="noi-dung-form-blogdep">
                                <iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){};" style="display:none;"></iframe>
                                <div class="thong-tin-form-blogdep">
                                    <form action="https://docs.google.com/forms/d/e/1FAIpQLSebV4X0dFJA7YZimFntLwPfojg_fsXYP9TkAm4yRCZhPdFCaw/formResponse" id="t_form_1" method="POST" target="hidden_iframe">
                                        <div class="truong-thong-tin-form">
                                            <input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" placeholder="From website" style="display:none;" tabindex="0" aria-label="Link dự án" aria-describedby="i.desc.2003410264 i.err.2003410264" name="entry.572387537" value="" dir="auto" id="entry_572387537" data-initial-dir="auto" data-initial-value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.169159321 i.err.169159321" aria-label="Họ Và Tên" autocomplete="off" class="quantumWizTextinputPaperinputInput exportInput" data-initial-dir="auto" data-initial-value="" dir="auto" jsname="YPqjbf" name="entry.787819960" placeholder="Họ Và Tên*" required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.1515393480 i.err.1515393480" aria-label="Số Điện Thoại" autocomplete="off" class="quantumWizTextinputPaperinputInput exportInput" data-initial-dir="auto" data-initial-value="" dir="auto" jsname="YPqjbf" name="entry.1043070526" placeholder="Số điện thoại*" required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="truong-thong-tin-form">
                                            <input aria-describedby="i.desc.1627743852 i.err.1627743852" aria-label="Địa Chỉ Email" autocomplete="off" class="quantumWizTextinputPaperinputInput exportInput" data-initial-dir="auto" data-initial-value="" dir="auto" jsname="YPqjbf" name="entry.119168554" placeholder="Địa chỉ email" required="" tabindex="0" type="text" value="">
                                        </div>
                                        <div class="nuf-gui-form-di">
                                            <input onclick="myFunction()" type="submit" value="Đăng ký nhận tài liệu">
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div></div>
        </div>
        <div id="cac-du-an-khac">
            <div class="cac-du-an-khac container no-items section" id="Các dự án khác"></div>
        </div>
        <div id="ly-do-dau-tu">
            <div class="ly-do-dau-tu container-fluid no-items section" id="Lý do đầu tư"></div>
        </div>
        <div id="tien-ich-dang-cap">
            <div class="post-body">
                <div class="tien-ich-dang-cap container section" id="Tiện ích dự án"><div class="widget Text" data-version="1" id="Text7">
                        <h2 class="title">TIỆN ÍCH ĐẲNG CẤP TẠI FLORENCE</h2>
                        <div class="widget-content">
                            Hội tụ những tiện ích đẳng cấp, tinh tế và độc đáo, Florence đáp ứng mọi nhu cầu cao nhất về thư giãn – giải trí – mua sắm của các cư dân. Lựa chọn sống tại chung cư Florence là tấm hộ chiếu giúp gia chủ bước chân vào cộng đồng thượng lưu bậc nhất thủ đô.
                        </div>
                        <div class="clear"></div>
                    </div><div class="widget Image" data-version="1" id="Image8">
                        <div class="widget-content">
                            <a href="/">
                                <img alt="BỂ BƠI HIỆN ĐẠI" height="360" id="Image8_img" src="http://lh4.googleusercontent.com/-a9hJjbFqcx4/W7Lmm5gxlPI/AAAAAAAAF4U/ePOdI9_YAVgyNAyifVLmPyNrkVOOcgIeACK4BGAYYCw/s1600/be%2Bboi.jpg" width="640">
                                <span class="chitiet"><i aria-hidden="true" class="fa fa-search"></i></span>
                            </a>
                            <br>
                            <h2>BỂ BƠI HIỆN ĐẠI</h2>
                        </div>
                        <div class="clear"></div>
                    </div><div class="widget Image" data-version="1" id="Image9">
                        <div class="widget-content">
                            <a href="/">
                                <img alt="SÂN VƯỜN TẦNG THƯỢNG" height="360" id="Image9_img" src="http://lh4.googleusercontent.com/-EP3nRAb0WIw/W7LngfibBEI/AAAAAAAAF4g/V2i9MIHt5D897_Hl4tJ4tyulhfEvrDGBgCK4BGAYYCw/s1600/vuon%2Bthuong%2Buyen.jpg" width="640">
                                <span class="chitiet"><i aria-hidden="true" class="fa fa-search"></i></span>
                            </a>
                            <br>
                            <h2>SÂN VƯỜN TẦNG THƯỢNG</h2>
                        </div>
                        <div class="clear"></div>
                    </div><div class="widget Image" data-version="1" id="Image10">
                        <div class="widget-content">
                            <a href="/">
                                <img alt="PHÒNG GYM HIỆN ĐẠI" height="360" id="Image10_img" src="http://lh4.googleusercontent.com/-QhoPRI8JA4Y/WqZFJN8eF7I/AAAAAAAAFTA/aah6SPfqStgYJM-oCc9QnUeVpRgfC14NgCK4BGAYYCw/s1600/phong-gym-paragon.jpg" width="640">
                                <span class="chitiet"><i aria-hidden="true" class="fa fa-search"></i></span>
                            </a>
                            <br>
                            <h2>PHÒNG GYM HIỆN ĐẠI</h2>
                        </div>
                        <div class="clear"></div>
                    </div><div class="widget Image" data-version="1" id="Image11">
                        <div class="widget-content">
                            <a href="/">
                                <img alt="NỘI THẤT SANG TRỌNG" height="360" id="Image11_img" src="http://lh4.googleusercontent.com/-LmN1xHFHB_o/WuKdxLqbGQI/AAAAAAAAFdY/4L6OhIfm5nkjagODZtODLM3mya7y47cewCK4BGAYYCw/s1600/noithat-04.jpg" width="640">
                                <span class="chitiet"><i aria-hidden="true" class="fa fa-search"></i></span>
                            </a>
                            <br>
                            <h2>NỘI THẤT SANG TRỌNG</h2>
                        </div>
                        <div class="clear"></div>
                    </div><div class="widget Image" data-version="1" id="Image12">
                        <div class="widget-content">
                            <a href="/">
                                <img alt="NHÀ TRẺ TIÊU CHUẨN QUỐC TẾ" height="360" id="Image12_img" src="http://lh4.googleusercontent.com/-fkYQRNtAxFk/WuKeKTZr2bI/AAAAAAAAFdk/diAeQp1BN1IOg9pS1QnO-hy8-3vR9hCJwCK4BGAYYCw/s1600/Nh%25C3%25A0-tr%25E1%25BA%25BB-chung-c%25C6%25B0.png" width="640">
                                <span class="chitiet"><i aria-hidden="true" class="fa fa-search"></i></span>
                            </a>
                            <br>
                            <h2>NHÀ TRẺ TIÊU CHUẨN QUỐC TẾ</h2>
                        </div>
                        <div class="clear"></div>
                    </div><div class="widget Image" data-version="1" id="Image13">
                        <div class="widget-content">
                            <a href="/">
                                <img alt="THỎA SỨC MUA SẮM" height="506" id="Image13_img" src="http://lh4.googleusercontent.com/-Wie0I3ZM1Tg/WqanLGdkxuI/AAAAAAAAFUE/Ioe4Z4xLrHIZSuj1YPt6vBj7jIGRi0v4ACK4BGAYYCw/s1600/supermarket.jpg" width="900">
                                <span class="chitiet"><i aria-hidden="true" class="fa fa-search"></i></span>
                            </a>
                            <br>
                            <h2>THỎA SỨC MUA SẮM</h2>
                        </div>
                        <div class="clear"></div>
                    </div></div>
            </div>
        </div>
        <div id="dang-ky-tu-van">
            <div class="dang-ky-tu-van container section" id="Đăng ký tư vấn"><div class="widget HTML" data-version="1" id="HTML10">
                    <div class="widget-content">
                        <div class="col-xs-12 col-sm-8 left">
                            <h2 class="title">BẠN THỰC SỰ MUỐN SỞ HỮU CĂN HỘ FLORENCE?</h2>
                        </div>
                        <div class="col-xs-12 col-sm-4 right">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Đăng ký tư vấn</button>


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
                                                    <iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){};" style="display:none;"></iframe>
                                                    <div class="thong-tin-form-blogdep">
                                                        <form action="https://docs.google.com/forms/d/e/1FAIpQLSebV4X0dFJA7YZimFntLwPfojg_fsXYP9TkAm4yRCZhPdFCaw/formResponse" id="t_form_1" method="POST" target="hidden_iframe">
                                                            <div class="truong-thong-tin-form">
                                                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" placeholder="From website" style="display:none;" tabindex="0" aria-label="Link dự án" aria-describedby="i.desc.2003410264 i.err.2003410264" name="entry.572387537" value="" dir="auto" id="entry_572387537" data-initial-dir="auto" data-initial-value="">
                                                            </div>
                                                            <div class="truong-thong-tin-form">
                                                                <input aria-describedby="i.desc.169159321 i.err.169159321" aria-label="Họ Và Tên" autocomplete="off" class="quantumWizTextinputPaperinputInput exportInput" data-initial-dir="auto" data-initial-value="" dir="auto" jsname="YPqjbf" name="entry.787819960" placeholder="Họ Và Tên*" required="" tabindex="0" type="text" value="">
                                                            </div>
                                                            <div class="truong-thong-tin-form">
                                                                <input aria-describedby="i.desc.1515393480 i.err.1515393480" aria-label="Số Điện Thoại" autocomplete="off" class="quantumWizTextinputPaperinputInput exportInput" data-initial-dir="auto" data-initial-value="" dir="auto" jsname="YPqjbf" name="entry.1043070526" placeholder="Số điện thoại*" required="" tabindex="0" type="text" value="">
                                                            </div>
                                                            <div class="truong-thong-tin-form">
                                                                <input aria-describedby="i.desc.1627743852 i.err.1627743852" aria-label="Địa Chỉ Email" autocomplete="off" class="quantumWizTextinputPaperinputInput exportInput" data-initial-dir="auto" data-initial-value="" dir="auto" jsname="YPqjbf" name="entry.119168554" placeholder="Địa chỉ email" required="" tabindex="0" type="text" value="">
                                                            </div>
                                                            <div class="nuf-gui-form-di">
                                                                <input onclick="myFunction()" type="submit" value="Đăng ký tư vấn">
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
                </div></div>
        </div>
        <div id="mat-bang-can-ho">
            <div class="mat-bang-can-ho container no-items section" id="Mặt bằng căn hộ"></div>
        </div>
        <div id="thiet-ke-tong-the">
            <div class="thiet-ke-tong-the container section" id="Thiết kế tổng thể"><div class="widget Text" data-version="1" id="Text9">
                    <h2 class="title">MẶT BẰNG CĂN HỘ FLORENCE</h2>
                    <div class="widget-content">
                        <span =""="" style="color:#006600;"><span =""="" style="font-family:&quot;;font-size:medium;"><span =""="" style="font-size:180%;">Mặt bằng thiết kế căn hộ Florence là một bản vẽ hoàn hảo với thiết kế hợp lý tối ưu công năng sử dụng. Phù hợp với phong thủy của người Việt. Các căn hộ với các diện tích căn từ 75m2 tới 125m2 phù hợp với mọi đối tượng khách hàng và gia đình có nhiều thế hệ.</span></span><br></span><br><a href="#" style="font-family: georgia, serif; font-size: 100%; font-style: normal; font-weight: normal;"><img border="0" src="https://lh4.googleusercontent.com/-jVo2MFnVp1c/W7LvMvnqMJI/AAAAAAAAF5A/LBfGWzw-uwgaFbfGAThdZ8ma6g8qIBtiACLcBGAs/s1600/catpd_1521621636.png" width="100%"></a><br><a class="linkphantich" href="#" style="font-style: normal; font-weight: normal;font-family:&quot;;font-size:100%;"><b><span =""="" style="color:red;">XEM THIẾT KẾ CĂN HỘ </span></b></a>
                    </div>
                    <div class="clear"></div>
                </div></div>
        </div>
        <div id="video-du-an">
            <div class="video-du-an container section" id="Video dự án"><div class="widget Text" data-version="1" id="Text6">
                    <h2 class="title">CHÍNH SÁCH BÁN HÀNG ƯU ĐÃI</h2>
                    <div class="widget-content">
                        <h4 style="background-color: white; box-sizing: border-box; letter-spacing: -0.6px; line-height: 1.4; margin: 0px 0px 30px; text-align: center;font-family:&quot;;font-size:18px;color:#100f31;"><span style="box-sizing: border-box;color:#99cc00;"><img alt="��" class="emoji" draggable="false" src="https://s.w.org/images/core/emoji/2.4/svg/1f48e.svg" style="background: none !important; border: none !important; box-shadow: none !important; box-sizing: border-box; display: inline !important; height: auto; margin: 0px 0.07em !important; max-width: 100%; padding: 0px !important; vertical-align: -0.1em !important; width: 1em !important;"> </span><span style="box-sizing: border-box;color:#99cc00;">TẶNG SỔ TIẾT KIỆM TRỊ GIÁ 30TR + 1 NĂM PHÍ DỊCH VỤ</span></h4><h4 style="background-color: white; box-sizing: border-box; letter-spacing: -0.6px; line-height: 1.4; margin: 0px 0px 30px; text-align: center;font-family:&quot;;font-size:18px;color:#100f31;"><span style="box-sizing: border-box;color:#99cc00;"><img alt="��" class="emoji" draggable="false" src="https://s.w.org/images/core/emoji/2.4/svg/1f48e.svg" style="background: none !important; border: none !important; box-shadow: none !important; box-sizing: border-box; display: inline !important; height: auto; margin: 0px 0.07em !important; max-width: 100%; padding: 0px !important; vertical-align: -0.1em !important; width: 1em !important;"> HỖ TRỢ LÃI SUẤT 0%  + ÂN HẠN NỢ GỐC ĐẾN KHI NHẬN NHÀ</span></h4><div><span style="box-sizing: border-box;color:#99cc00;"><div style="color: black;"><span style="box-sizing: border-box;color:#99cc00;"><h4 style="background-color: white; box-sizing: border-box; letter-spacing: -0.6px; line-height: 1.4; margin: 0px 0px 30px; text-align: center;font-family:&quot;;font-size:18px;color:#100f31;"><span style="box-sizing: border-box;color:#99cc00;"><img alt="��" class="emoji" draggable="false" src="https://s.w.org/images/core/emoji/2.4/svg/1f48e.svg" style="background: none !important; border: none !important; box-shadow: none !important; box-sizing: border-box; display: inline !important; height: auto; margin: 0px 0.07em !important; max-width: 100%; padding: 0px !important; vertical-align: -0.1em !important; width: 1em !important;"> TẶNG THÊM TỦ LẠNH HAFELE</span></h4><div><span style="box-sizing: border-box;color:#99cc00;"><br></span></div></span></div><a href="#" style="color: black;"></a></span></div><div><span style="box-sizing: border-box;color:#99cc00;"><h4 style="background-color: white; box-sizing: border-box; letter-spacing: -0.6px; line-height: 1.4; margin: 0px 0px 30px; text-align: center;font-family:&quot;;font-size:18px;color:#100f31;"><span style="box-sizing: border-box;color:#99cc00;"><img alt="��" class="emoji" draggable="false" src="https://s.w.org/images/core/emoji/2.4/svg/1f48e.svg" style="background: none !important; border: none !important; box-shadow: none !important; box-sizing: border-box; display: inline !important; height: auto; margin: 0px 0.07em !important; max-width: 100%; padding: 0px !important; vertical-align: -0.1em !important; width: 1em !important;"> NỘI THẤT BÀN GIAO CAO CẤP NHẬP KHẨU.</span></h4></span></div><a href="#" style="font-weight: normal;"><img border="0" src="http://sv1.upsieutoc.com/2018/04/27/noithat-04.jpg" width="100%"></a><br>
                    </div>
                    <div class="clear"></div>
                </div></div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/frontend/price.js') }}"></script>
@endsection
