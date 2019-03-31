<?php 
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true&&$_SESSION['user']==true){

 ?>
  <div class="container"> 
    <div class="wrap row" >
      <div class="col-lg-9 leftbar">
        <!-- <div class="path">
          <span><a href="" title="Trang Chủ"><i class="fa fa-home"></i></a></span>&nbsp;/
          <span><a href="">Tài khoản</a>&nbsp;/
            <span><a href="">Lịch sử đơn hàng</a>
        </div> -->
            <div style="clear: both;"></div>
            <div class="content">
              <h3 style="color: yellow;"><b>Lịch Sử Đơn Hàng</b></h3>
              <div style="font-size: 14px;margin: 10px 0;">Tổng đơn hàng: <b><?php echo count($orders); ?></b></div>
              <div class="search">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group" >
                      <label>Số đơn hàng</label>
                      <select class="form-control" name="" id="">
                        <option value="">Số đơn hàng</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group" >
                      <label>Số tiền từ</label>
                      <select class="form-control" name="" id="">
                        <option value="">Số tiền từ</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group" >
                      <label>Ngày tạo từ</label>
                      <input type="date" class="form-control">
                    </div>
                  </div>
                </div>
                <button type="button" style="font-size: 12px;" class="btn btn-primary pull-right"><i class="fa fa-filter"></i> Lọc</button>
              </div>

              <div class="table-responsive">          
                <table class="table table-hover table-condensed table-bordered">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Số loại game</th>
                      <th>Số lượng key</th>
                      <th>Ngày đặt hàng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        foreach ($orders as $k => $v) {
                     ?>
                    <tr>
                      <td><?php echo $v['id']; ?></td>
                      <td><?php echo $v['nump']; ?></td>
                      <td><?php echo $v['numkey']; ?></td>
                      <td><?php echo $v['order_date']; ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <a href="?controller=account&action=accountmanager" class="btn btn-primary" style="font-size: 13px;"><i class="fa fa-undo"></i> Quay lại</a>
            </div>
          </div>
      <div class="col-lg-3 rightbar">
        <h5>TÀI KHOẢN</h5>
        <ul>
          <li><a href="#">Tài khoản của tôi</a></li>
          <li><a href="#">Thay đổi thông tin</a></li>
          <li><a href="#">Đổi mật khẩu</a></li>
          <li><a href="#">Tài khoản của tôi</a></li>
          <li><a href="#">Sản phẩm yêu thích</a></li>
          <li><a href="#">Giao dịch</a></li>
          <li><a href="#">Đơn hàng</a></li>
        </ul>
      </div>
    </div>
  </div>
<?php 
}else{
  header("location:?controller=account&action=login");
}

 ?>
