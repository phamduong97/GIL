<?php 
if(!isset($_SESSION['logged_in'])&&!isset($_SESSION['user'])){
?>
<script>
function checkValidate() {
            //Tiến hành lấy dữ liệu trên Form
            var user = document.getElementById("txtUser").value;
            var pass = document.getElementById("txtPass").value;
            //alert(user + pass + email + mobile);

            //var msg = ""; //Biến thông điệp các lỗi
            var status = false; //Biến trạng thái
                //Kiểm tra username
            var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (user == "") {
                document.getElementById("txtUser").style.borderColor = "red";
                document.getElementById("lbUser").style.display = "block";
                document.getElementById("lbUser").innerHTML = "Hãy nhập tên tài khoản";
                status = true;
            }else{
                //Kiểm tra giá trị email có khớp với biểu thức RegExp
                if (re.test(user) == false ) {
                    document.getElementById("txtUser").style.borderColor = "red";
                    document.getElementById("lbUser").style.display = "block";
                    document.getElementById("lbUserb").innerHTML = "Tên người dùng không tồn tại";
                    status = true;
                }else{
                    document.getElementById("txtUser").style.borderColor = "#D8D8D8";
                    document.getElementById("lbUser").style.display = "none";
                }
            }

            //Kiểm tra password
            if (pass == "") {
                //msg += "Mật khẩu không được phép để trống.\n";
                document.getElementById("txtPass").style.borderColor = "red";
                document.getElementById("lbPass").style.display = "block";
                document.getElementById("lbPass").innerHTML = "Hãy nhập mật khẩu";
                status = true;
            }else{
                document.getElementById("txtPass").style.borderColor = "#D8D8D8";
                document.getElementById("lbPass").style.display = "none";
            }

            //Kiểm tra biến trạng thái 'Lỗi' hay 'Không'
            if (status == true) {
                //alert(msg);
                return false;
            } else {
                return true;
            }
        }
</script>
<div class="row">
    <div class="col-lg-9 rightLogin">
        <div style="clear: both;"></div>
        <div class="content">
            <form method="get" onsubmit="return checkValidate();">
                <input type="hidden" name="controller" value="home">
                <input type="hidden" name="action" value="loginmember">
                <div class="form-group form1" >
                    <label style="margin-right: 395px">Địa chỉ Email:</label>
                    <input type="text" class="form-control" id="txtUser" placeholder="Enter phone number or email" name="email" style="width: 400px;">
                    <p style="color: red;" id="lbUser"></p>
                </div>
                <div class="form-group2 form2">
                    <label style="margin-right: 501px;">Mật khẩu:</label>
                    <input type="password" class="form-control" id="txtPass" placeholder="Enter password" name="password" style="width: 395px;">
                    <p style="color: red;" id="lbPass"></p>
                    <div style="margin-top: 10px; margin-right: 454px;"><a href="?controller=account&action=forgetpass" target="_blank" style="text-decoration: none;">Quên mật khẩu ?</a></div>
                </div>
                <?php 
                    if(isset($_GET['fail'])){
                    ?>
                    <div class="alert alert-danger" style="width: 393px;">Sai thông tin đăng nhập</div>
                    <?php 
                    }
                    ?>
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
            <a class="btn btn-warning" href="?controller=account&action=register" style="margin-top: 10px;">Đăng ký</a>
        </div>
    </div>
    <div class="col-lg-3 sidebar">
        <h5>TÀI KHOẢN</h5>
        <ul>
            <li><a href="?controller=account&action=login">Đăng nhập</a></li>
            <li><a href="?controller=account&action=register">Đăng ký</a></li>
            <li><a href="#">Quên mật khẩu</a></li>
            <li><a href="#">Tài khoản của tôi</a></li>
            <li><a href="#">Yêu thích</a></li>
            <li><a href="#">Giao dịch</a></li>
            <li><a href="?controller=account&action=order">Đơn hàng</a></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<?php 
}else{
    header("location:?controller=home&action=index");
}
 ?>