@extends('user.master')
@section('content')
<div class="col-md-9">
    <div class="col-md-5">
        <div class="thumbnail">
            <img  src="img/product_02-1.jpg" class="img-responsive"/>
        </div>
    </div>
    <div class="col-md-7">
        <h3>INNER CIRCLE by ZALORA</h3>
        <em class="text-danger">Quần tây</em>
        <p class="text-justify" style="margin: 10px 0;">Phá cách cho phong cách công sở thường ngày của bạn với quần dáng suông đến từ thương hiệu INNER CIRCLE BY ZALORA. Quần có thiết kế ôm theo dáng chân để bạn trông cao hơn, màu sắc nhã nhặn mang đến sự thanh lịch, hiện đại.</p>
        <form class="form-inline">
            <div class="col-md-8">
                <label for="price"><h4>Giá: <em class="text-info">449.000 VNĐ</em></h4> </label>
            </div>
            <div class="col-md-4">
                <input style="width: 40%;" type="number" value="1" class="form-control"/>
            </div>
            <div class="col-md-offset-5 col-md-7">
                <button style="margin: 20px 0;" class="btn btn-warning btn-block">Mua Hàng</button>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Chính sách hoàn trả</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>Hoàn trả</h3>
                <p class="text-justify">Tận hưởng 30 ngày miễn phí đổi trả cho sản phẩm này. 
                    Lưu ý các sản phẩm cung cấp bởi các nhà bán hàng (Marketplace), hàng nhập khẩu từ Singapore/ Malaysia sẽ không được áp dụng chính sách đổi sản phẩm.
                    Xem chi tiết tại đây.


                    Nếu bạn có thắc mắc về sản phẩm, vui lòng liên hệ với bộ phận Chăm Sóc Khách Hàng tại customer@vn.zalora.com..</p>
                </div>
            </div>
        </div>
        <div id="facbook">
            
        </div><!--end facebook-->
    </div>
</div>
</div>
@endsection