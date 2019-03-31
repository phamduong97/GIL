<h3 class="text-center">Thông báo đơn hàng</h3>
<div style="margin: 20px 0;
    padding: 30px 10px;
    border-radius: 5px;
    border: 2px solid white;
    /* box-shadow: 2px 2px white; */
    text-align: center;">
	<h3 style="padding:20px 0;"><b style="text-align: center;color: yellow;"><i class="fa fa-check-circle" style="color: green;"></i>  Thanh toán thành công</b></h3>
	<p>Đơn hàng của khách hàng <span style="color: red;"><?php echo $_SESSION['username']; ?></span> đã thanh toán thành công</p>
	<p>Mã kích hoạt game sẽ được gửi đến email của bạn.<br> Vui lòng check mail để lấy key sản phẩm</p>
	<div><a href="?controller=home&action=index">Tiếp tục mua hàng</a></div>
	<a href="?controller=home&action=index" class="btn btn-primary" style="font-size: 13px;margin-top: 10px;"><i class="fa fa-undo-alt"></i> Quay lại trang chủ</a>
</div>