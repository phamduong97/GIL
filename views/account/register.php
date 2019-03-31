 <script>
        function checkValidate() {
            
                    var name = document.getElementById("txtName").value;
                    var ho = document.getElementById("txtHo").value;
                    var email = document.getElementById("txtEmail").value;
                    var mobile = document.getElementById("txtMobile").value;
                    var pass = document.getElementById("txtPass").value;
                    var repass = document.getElementById("txtRepass").value;

                    var status = false; //Biến trạng thái
                     //Kiểm tra username
                    var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (name == "") {
                        document.getElementById("txtName").style.borderColor = "red";
                        document.getElementById("lbName").style.display = "block";
                        document.getElementById("lbName").innerHTML = "Hãy nhập tên người dùng";
                        status = true;
                    }else{
                        
                        document.getElementById("txtName").style.borderColor = "#D8D8D8";
                        document.getElementById("lbName").style.display = "none";
                    }

                    if (ho == "") {
                        document.getElementById("txtHo").style.borderColor = "red";
                        document.getElementById("lbHo").style.display = "block";
                        document.getElementById("lbHo").innerHTML = "Hãy nhập họ và tên lót";
                        status = true;
                    }else{
                        
                        document.getElementById("txtHo").style.borderColor = "#D8D8D8";
                        document.getElementById("lbHo").style.display = "none";
                    }

                    if (email == "") {
                        document.getElementById("txtEmail").style.borderColor = "red";
                        document.getElementById("lbEmail").style.display = "block";
                        document.getElementById("lbEmail").innerHTML = "Email không được để trống";
                        status = true;
                    }else{
                        if (re.test(email) == false ) {
                            document.getElementById("txtEmail").style.borderColor = "red";
                            document.getElementById("lbEmail").style.display = "block";
                            document.getElementById("lbEmail").innerHTML = "Email không đúng định dạng";
                            status = true;
                        }else{
                            document.getElementById("txtEmail").style.borderColor = "#D8D8D8";
                            document.getElementById("lbEmail").style.display = "none";
                        }                    
                    }

                    var mo = /^([0-9]{10,11})$/;
                    if (mobile == "") {
                        document.getElementById("txtMobile").style.borderColor = "red";
                        document.getElementById("lbMobile").style.display = "block";
                        document.getElementById("lbMobile").innerHTML = "SĐT không được để trống.";
                        status = true;
                    }else{
                        if (mo.test(mobile) == false) {
                            document.getElementById("txtMobile").style.borderColor = "red";
                            document.getElementById("lbMobile").style.display = "block";
                            document.getElementById("lbMobile").innerHTML = "Số điện thoại không đúng định dạng";
                            status = true;
                        }else{
                            document.getElementById("txtMobile").style.borderColor = "#D8D8D8";
                            document.getElementById("lbMobile").style.display = "none";
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

                         if (length(pass) < 8) {
                            document.getElementById("txtPass").style.borderColor = "red";
                            document.getElementById("lbPass").style.display = "block";
                            document.getElementById("lbPass").innerHTML = "Mật khẩu phải lớn hơn 8 ký tự";
                            status = true;
                        }else{
                            document.getElementById("txtPass").style.borderColor = "#D8D8D8";
                            document.getElementById("lbPass").style.display = "none";
                        }
                    }

                    if (repass == "") {
                        //msg += "Mật khẩu không được phép để trống.\n";
                        document.getElementById("txtRepass").style.borderColor = "red";
                        document.getElementById("lbRepass").style.display = "block";
                        document.getElementById("lbRepass").innerHTML = "Hãy nhập lại mật khẩu";
                        status = true;
                    }else{
                        if (repass != pass) {
                            
                            document.getElementById("txtRepass").style.borderColor = "red";
                            document.getElementById("lbRepass").style.display = "block";
                            document.getElementById("lbRepass").innerHTML = "Mật khẩu không khớp";
                            status = true;
                        }else{
                            document.getElementById("txtRepass").style.borderColor = "#D8D8D8";
                            document.getElementById("lbRepass").style.display = "none";
                        }
                    }

                    //Kiểm tra biến trạng thái 'Lỗi' hay 'Không'
                    if (status == true) {
                        return false;
                    } else {
                        return true;
                    }
                }
                $(document).ready(function() {
                    $('.btnShow').click(function(event) {
                        $('.password').attr({
                            type: 'text'
                        });
                    });
                });
</script>
<div class="row" id="register" >
    <div class="col-lg-9 rightRegister">
        <div style="clear: both;"></div>
        <div class="content">
            <h4 style="color: orange;">Đăng ký tài khoản</h4>
            <div style="margin-bottom: 20px;">Nếu bạn đã có tài khoản hãy đăng nhập <a href="?controller=account&action=login">Tại đây</a></div>
            <div style="border-bottom: 1px solid white;padding-bottom: 10px;"><b>Thông tin cá nhân</b></div>
            <form  method="get" onsubmit="return checkValidate();">
                <input type="hidden" name="controller" value="account">
                <input type="hidden" name="action" value="registermember">
                <div class="form-group form1" >
                    <label >Tên:</label>
                    <input type="text" class="form-control" id="txtName" placeholder="Hãy nhập tên của bạn" name="name" style="width: 400px;">
                    <p style="color: red;" id="lbName"></p>
                </div>
                <div class="form-group form1" >
                    <label >Họ và tên</label>
                    <input type="text" class="form-control" id="txtHo" placeholder="Hãy nhập họ và chữ lót" name="fullname" style="width: 400px;">
                    <p style="color: red;" id="lbHo"></p>
                </div>
                <div class="form-group form1" >
                    <label >Địa chỉ Email:</label>
                    <input type="text" class="form-control" id="txtEmail" placeholder="Hãy nhập địa chỉ email" name="email" style="width: 400px;">
                    <p style="color: red;" id="lbEmail"></p>
                </div>
                <div class="form-group form1" >
                    <label >Điện thoại:</label>
                    <input type="text" class="form-control" id="txtMobile" placeholder="Hãy nhập số điện thoại" name="mobile" style="width: 400px;">
                    <p style="color: red;" id="lbMobile"></p>
                </div>
                <div class="form-group2 form2">
                    <label>Mật khẩu:</label>
                    <input type="password" class="form-control password" id="txtPass" placeholder="Hãy nhập mật khẩu" name="password" style="width: 400px;">
                    <p style="color: red;" id="lbPass"></p>                  
                </div>
                <span class="btn btn-primary btnShow" style="font-size: 12px;"><i class="fa fa-eye"></i>&nbsp;Hiển thị mật khẩu</span><br><br>
                <div class="form-group2 form2">
                    <label>Nhập lại mật khẩu:</label>
                    <input type="password" class="form-control" id="txtRepass" placeholder="Nhập lại mật khẩu" name="repassword" style="width: 400px;">
                    <p style="color: red;" id="lbRepass"></p>                  
                </div>
                <?php
                    if(isset($_GET['success'])){
                ?>
                    <script>window.alert("Đăng ký tài khoản thành công");</script>
                <?php
                }
                ?>
                <button class="btn btn-warning btnResgiter">Đăng ký tài khoản</button>
            </form>
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
<div class="clearfix"></div>
