 <script>
  function checkValidate() {
                
                    var email = document.getElementById("emailvalue").value;
              
                    var status = false; 
        
                     var re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                     if (email == "") {
                      document.getElementById("emailvalue").style.borderColor = "red";
                      document.getElementById("lbEmail").style.display = "block";
                      document.getElementById("lbEmail").innerHTML = "Hãy nhập địa chỉ email";
                      status = true;
                    }else{
                      
                        if (re.test(email) == false ) {
                          document.getElementById("emailvalue").style.borderColor = "red";
                          document.getElementById("lbEmail").style.display = "block";
                          document.getElementById("lbEmailb").innerHTML = "Tên email không hợp lệ";
                          status = true;
                        }else{
                          document.getElementById("emailvalue").style.borderColor = "#D8D8D8";
                          document.getElementById("lbEmail").style.display = "none";
                        }
                      }

                    if (status == true) {
                        
                        return false;
                      } else {
                        return true;
                      }
                  }
 </script>

 <script>
   $(document).ready(function() {
        $('.emailvalue').blur(function(event) {
          var text = $('.emailvalue').val();
          $.post("ajax/checkemail.php",{thamso:text},function(data){
            $('#lbEmail').html(data);
          });
        });
   });
 </script> 
 <div id="forgetpass" class="container-fluid">
        <div class="container">
          <div class="wrap row" >
            <div class="col-lg-9 leftbar">
              <div class="path">
                <span><a href="" title="Trang Chủ"><i class="fa fa-home"></i></a></span>&nbsp;/
                <span><a href="">Tài khoản</a></span>&nbsp;/
                <span><a href="">Quên mật khẩu</a></span>
              </div>
              <div style="clear: both;"></div>
              <div class="content">
                  <h3 style="color: yellow;">BẠN QUÊN MẬT KHẨU ?</h3>
                  <div style="font-size: 14px;">Nhập địa chỉ email đã đăng kí với tài khoản này. Bấm Submit và vào email của bạn để lấy lại mật khẩu</div>
                  <form class="form" action="" method="get" onsubmit="return checkValidate();">
                    <input type="hidden" name="controller" value="account">
                    <input type="hidden" name="action" value="sendmail">
                      <label><i class="fa fa-envelope"></i>&nbsp;&nbsp;Nhập địa chỉ email:</label>
                      <input type="text" style="width: 100%;" class="emailvalue form-control" id="emailvalue" name="email" placeholder="Nhập email của bạn........">
                      <div style="color: red" id="lbEmail"></div>
                      <button class="btn btn-danger btnsubmit" type="submit" style="margin-top: 10px;margin-left: 45%;">Tiếp tục</button>
                  </form>
              </div>
            </div>
            <div class="col-lg-3 rightbar">
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
  