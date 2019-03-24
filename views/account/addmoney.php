
 <div id="addmoney" class="container-fluid">
        <div class="container">
            <div class="path">
                <span><a href="" title="Trang Chủ"><i class="fa fa-home"></i></a></span>&nbsp;/
                <span><a href="">Giỏ hàng</a>&nbsp;/
                <span><a href="">Thanh toán</a>
            </div>
            <div class="wrap">
                <h3 style="color: yellow;padding-bottom: 10px;border-bottom: 1px solid grey;"><b>NẠP TIỀN VÀO TÀI KHOẢN</b></h3>
                <div class="content">
                    <div>Số tiền cần nạp thêm để thanh toán đơn hàng : <span style="color: red;">490.000 VNĐ</span></div>
                    <div>Phương thức nạp tiền</div>
                    <div style="margin-top: 20px;color: blue;">Vui lòng chọn phương thức thanh toán cho đơn hàng này.</div>
                    <input type="radio" class="addmoney1" name="gender" value="male"> <span style="font-size: 13px">Nạp thẻ Garena ( Cần nạp 660.000 VNĐ)</span><br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Chuyển khoản ngân hàng</span> <br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Thanh toán qua ví VTC</span>  <br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Nạp tiền tự động bằng thẻ ngân hàng</span>  <br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Chuyển khoản Momo - Nạp tiền tại FPT Shop, TGDĐ, ĐMX, Circlek</span> <br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Nạp tiền tại điểm giao dịch Viettel - Viettel Pay</span> <br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Giao dịch trực tiếp</span> <br>
                    <input type="radio" name="gender" value="male"><span style="font-size: 13px">Nạp tiền tại nhà</span> <br>
                </div>
            </div>

            <div class="wrap" id="wrap-money" style="display: none;">
                <div ><b>CẦN NẠP 660.000 VNĐ THẺ GARENA</b></div>
                <div class="content padding-item">
                    <div style="font-size: 13px;">Phí nạp thẻ Garena là <span style="color: green;">25%</span><br>

                    Quý khách vui lòng kiểm tra email, mọi thông báo (thẻ nạp thành công, thẻ bị sai) sẽ được gửi về email.</div>
                    <div style="font-size: 13px;padding: 10px 0;">Xem địa điểm mua thẻ Garena: <a href="https://hotro.garena.vn/mua-the-garena/">https://hotro.garena.vn/mua-the-garena/</a></div>
                    <img src="http://divineshop.vn/image/catalog/huong-dan/canh-bao-nap-the.png" alt="" width="50%" height="auto"><br><br>
                    <div style="font-size: 13px;">Mệnh giá thẻ bạn chọn chính là mệnh giá chúng tôi bán cho khách hàng khác. Khi bạn chọn mệnh giá sai chúng tôi không chịu trách nhiệm giải quyết. <br>
                    Ví dụ: Thẻ 200k nhưng bạn ghi 100k thì bạn sẽ chỉ được cộng 75k. <br>
                    Nếu ghi thừa, thẻ của bạn sẽ được giải quyết sau 72h để chúng tôi kiểm tra lại với support của Garena.</div><br>
                    <div style="margin-top: 20px;color: blue;">Vui lòng chọn phương thức thanh toán cho đơn hàng này.</div><br>
                    <form action="#" method="get">
                        <input  name="controller" value="account" type="hidden">
                        <input  name="action" value="processaddmoney" type="hidden">
                        <input  name="id" value="<?php echo $_SESSION['userid']; ?>" type="hidden">
                        <input  name="usermoney" value="<?php echo $_SESSION['usermoney']; ?>" type="hidden">
                        <div class="form-group">
                            <label for="sel1">Mệnh giá:</label>
                            <select class="form-control" id="sel1" name="sale" style="width: 47%;">
                                <option>Chọn mệnh giá</option>
                                <option value="20000">20000</option>
                                <option value="50000">50000</option>
                                <option value="100000">100000</option>
                                <option value="200000">200000</option>
                            </select>
                       </div>

                       <div class="form-group">
                          <label for="comment">Số series</label>
                          <input type="text" class="form-control" name="series" style="width: 47%;" placeholder="Vui lòng nhập số series">
                      </div>            

                      <div class="form-group">
                          <label for="comment">Mã thẻ:</label>
                          <input type="text" class="form-control" name="code" style="width: 47%;" placeholder="Vui lòng nhập mã thẻ">
                      </div>
                      <button class="btn btn-danger" type="submit">Nạp thẻ</button>
                    </form>
                </div>
            </div>
            <?php 
            if(isset($_GET['success'])){

               ?>

               <div class="alert alert-success" style="margin-top: 20px;">Nạp thẻ thành công !</div>
               <script>
                   $(".alert").show(300);

               </script>
           <?php } ?>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".addmoney1").click(function(event) {
                $("#wrap-money").show(200);
            });
        });
    </script>