<div id="resetpass" class="container-fluid">
  <div class="content container">
    <div class="wrap">
      <div class="page-header"><h3>ĐỔI MẬT KHẨU ?</h3></div>
      <div style="padding-top: 30px;"><b style="color: #c5b329;">Hãy nhập mật khẩu mới và tiến hành đăng nhập</b></div>
      <form action="" method="get">
       <input type="hidden" name="controller" value="account">
       <input type="hidden" name="action" value="changepass">
       <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
       <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
        <div class="form-group">
          <label for="comment" style="color: red;"><b>Nhập mật khẩu mới</b></label>
          <input type="password" class="form-control" name="newpass" style="width: 47%;" placeholder="Vui lòng nhập mật khẩu mới...">
        </div>            

        <div class="form-group">
          <label for="comment" style="color: red;"><b>Nhập lại mật khẩu:</b></label>
          <input type="password" class="form-control" style="width: 47%;" placeholder="Vui lòng nhập lại mật khẩu...">
        </div>

        <button class="btn btn-danger" type="submit"  style="width: 47%;border-radius: 15px;">Đổi mật khẩu</button>
      </form>
    </div>
  </div>
</div>
