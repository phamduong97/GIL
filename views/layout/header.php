<div id="header">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" id="logo">
                    <a href="?controller=home&action=index"><img src="assets/image/logo2.jpg" alt="" style="border-radius: 50%;"></a>
                </div>
                <div class="col-lg-6" id="search-box">
                    <form action="index.php?controller=product&action=search" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button name="hsbtn" type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                            </div>
                            <input type="text" name="keyword" id="inputsearch" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3" id="login">
                    <?php
                        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true &&$_SESSION['user']==true){
                    ?>
                        <div class="row" >
                            <div class="col-lg-5"><a href="?controller=account&action=accountmanager"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></a></div>
                            <div class="col-lg-7"><a href="?controller=home&action=logout">Đăng Xuất</a></div>
                        </div>
                        <div class="row" style="font-size: 14px;color:#09f508;">
                            <div class="col-lg-5"><a href="?controller=account&action=addmoney&id=<?php echo $_SESSION['userid'];?>" style="color:#09f508; "><b>NẠP TIỀN</b>&nbsp;&nbsp;<i class="fa fa-plus-circle"></i></a></div>
                            <div class="col-lg-7"><b>SỐ DƯ</b>：<?php echo $_SESSION['usermoney']; ?> VNĐ</div>
                        </div>
                    <?php 
                        }else{
                    ?>
                    <a href="?controller=account&action=login">Đăng nhập</a> | <a href="?controller=account&action=register">Đăng ký</a>
                    <?php 
                        }
                        ?>
                    <div style="font-size: 14px;">
                        <span><i class="fa fa-phone"></i>&nbsp;&nbsp;19006969</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span><i class="fa fa-envelope"></i>&nbsp;&nbsp;gilshop@gmail.com</span>
                    </div>
                    <div id="mycart">
                        <i class="fa fa-shopping-bag" style="color: orange;"></i>       
                        <a id="carthover" href="?controller=cart&action=view"><span id="numproduct"><?=isset($_SESSION['cart'])?count($_SESSION['cart']):"0"?></span>
                        <?php
                        ?>
                        Sản phẩm
                        <!-- <span>
                            <?php
                            // $total = 0;
                            // if(isset($_SESSION['cart'])){ 
                            //     foreach ($_SESSION['cart'] as $k => $v) {
                                
                            //         $total+= $v['quantity']*$v['price'];
                            //     }
                            // echo $total;
                            ?>
                        </span> VNĐ</a> -->
                        <div id="boxcart" style="position: relative;left: -80px;background-color: black;display: none;">
                            <div  style="width: 400px;height: 300px;padding: 10px 10px;
                            text-align: center;background-color: black;position: absolute;
                            z-index: 100;border-radius: 5px;">
                                <div class="row" style="margin: 10px 0;border-bottom: 1px solid grey;padding-bottom: 10px;">
                                    <div class="col-lg-3">
                                        <img src="" alt="" width="20px" height="20px" style="border-radius: 50%;">
                                    </div>
                                    <div class="col-lg-4">PUBG</div>
                                    <div class="col-lg-2">X 1</div>
                                    <div class="col-lg-3">40000 VNĐ</div>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <tbody><tr>
                                            <td class="text-right"><strong>Thành tiền</strong></td>
                                            <td class="text-right">400.000 VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Tổng đơn hàng</strong></td>
                                            <td class="text-right">400.000 VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Tổng tiền phải nạp thêm</strong></td>
                                            <td class="text-right">400.000 VNĐ</td>
                                        </tr>
                                    </tbody></table>
                                    <p class="checkout"><a class="btn btn-primary" href="https://divineshop.vn/index.php?route=checkout/cart"><i class="fa fa-shopping-cart"></i> Xem chi tiết giỏ hàng</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="https://divineshop.vn/index.php?route=checkout/checkout"><i class="fa fa-share"></i> Thanh toán</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>