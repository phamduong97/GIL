<h3 class="text-center">Đơn hàng</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Mã sản phẩm</td>
            <td>Số lượng</td>
            <td>Giá sản phẩm</td>
            <td>Tổng cộng</td>
        </tr>
    </thead>
    <tbody>
        <?php
        // echo "<pre>";
        // print_r($product);
        $total_price = 0;
        foreach ($product as $key => $value) {
            $total_price+= $value['price']*$value['quantity'];
        ?>
        <tr>
            <td><?=$value['name']?></td>
            <td><?=$key?></td>
            <td><?=$value['quantity']?></td>
            <td><?=$value['price']?> VND</td>
            <td><?=$value['price']*$value['quantity']?> VND</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<div class="row">
    <div class="col-md-6">
        <div class="" style="padding: 10px;
            border: 2px solid #747474;
            border-radius: 10px;">
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Mã giảm giá</div>
                    </div>
                    <input type="text" class="form-control" value="<?=$voucher?>">
                    <div class="input-group-append">
                        <input type="button" value="Áp dụng" class="btn btn-success">
                    </div>
                </div>
            </div>
            <div class="" style="margin-top:20px">
                <label for="">Đây có phải là một món quà?</label>
                <div class="form-check ml-1">
                    <input type="radio" class="form-check-input" name="gift" value="0" onclick="gift(this)">
                    <label for="" class="form-check-label">Phải, tôi mua tặng bạn bè.</label>
                    <input type="text" name="friendmail" id="" class="form-control w-75" placeholder="Nhập email người nhận" hidden>
                </div>
                <div class="form-check ml-1">
                    <input type="radio" class="form-check-input" name="gift" value="1" onclick="gift(this)" checked>
                    <label for="" class="form-check-label">Không, tôi mua cho bản thân.</label>
                </div>
                <script>
                    function gift(x){
                        if($(x).val()==0){
                            $('input[name=friendmail]').attr('hidden',false)
                        }else{
                            $('input[name=friendmail]').attr('hidden',true)
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div style="padding: 10px;
            border: 2px solid #747474;
            border-radius: 10px;">
            <table class="table table-bordered">
                <tr>
                    <td>Tổng giá đơn hàng</td>
                    <td><?=$total_price?> VND</td>
                </tr>
                <tr>
                    <td>Cần nạp thêm</td>
                    <td><?=($_SESSION['usermoney']-$total_price)<0?($total_price-$_SESSION['usermoney']):"0"?> VND</td>
                </tr>
            </table>
            <div class="row">
                <div class="col-md-6" style="">
                    <button class="btn btn-primary w-100">Nạp thêm</button>
                </div>
                <div class="col-md-6" style="">
                    <a href="?controller=cart&action=order" class="btn btn-secondary w-100">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>

