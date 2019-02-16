<div id="login1" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 rightLogin">
                <div class="path">
                    <span><a href="" title="Trang Chủ"><i class="fa fa-home"></i></a></span>&nbsp;/
                    <span><a href="">Tài khoản</a></span>&nbsp;/
                    <span><a href="">Đăng nhập</a></span>
                </div>
                <div style="clear: both;"></div>
                <div class="content">
                    <form action="loginControl.php" method="post" onsubmit="return checkValidate();">
                        <div class="form-group form1" >
                            <label style="margin-right: 395px">Số điện thoại hoặc email:</label>
                            <input type="text" class="form-control" id="txtUser" placeholder="Enter phone number or email" name="username" style="width: 400px;">
                            <p style="color: red;" id="lbUser"></p>
                        </div>
                        <div class="form-group2 form2">
                            <label style="margin-right: 501px;">Mật khẩu:</label>
                            <input type="password" class="form-control" id="txtPass" placeholder="Enter password" name="password" style="width: 395px;">
                            <p style="color: red;" id="lbPass"></p>
                            <div style="margin-top: 10px; margin-right: 454px;"><a href="forgetpass.html" target="_blank" style="text-decoration: none;">Quên mật khẩu ?</a></div>
                        </div>
                        <!-- <button type="submit" class="btn btn-warning">Đăng Nhập</button> -->
                        <input type="submit" value="Đăng nhập" class="btn btn-warning" name="btnLogin">
                        <div class="text">Hoặc đăng nhập bằng :</div>
                        <div class="socialIcon">
                            <a href="https://www.facebook.com" title="Facebook" class="btn btn-facebook btn-lg fb" target="_blank"><i class="fab fa-facebook fa-fw"></i> Facebook</a>
                            <a href="https://plus.google.com/discover" title="Google+" class="btn btn-googleplus btn-lg google" target="_blank"><i class="fab fa-google-plus fa-fw"></i> Google+</a>
                        </div>
                    </form>
                </div>
                <div class="bottom">
                    <h5><b>Nếu bạn chưa có tài khoản ?</b></h5>
                    <div>Đăng ký tài khoản</div>
                    <div>Bằng cách đăng ký tài khoản bạn có thể mua sắm nhanh hơn, cập nhật tình trạng đơn hàng,<br>
                        theo dõi những đơn hàng đã đặt
                    </div>
                    <button class="btn btn-warning">Đăng ký</button>
                </div>
            </div>
            <div class="col-lg-3 sidebar">
                <h5>TÀI KHOẢN</h5>
                <ul>
                    <li><a href="#">Đăng nhập</a></li>
                    <li><a href="#">Đăng ký</a></li>
                    <li><a href="#">Quên mật khẩu</a></li>
                    <li><a href="#">Tài khoản của tôi</a></li>
                    <li><a href="#">Yêu thích</a></li>
                    <li><a href="#">Giao dịch</a></li>
                    <li><a href="#">Đơn hàng</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>
<div class="clearfix"></div>