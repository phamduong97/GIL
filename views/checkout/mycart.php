<h3 class="text-center">Giỏ hàng</h3>


<table class="table table-hover">
    <thead>
        <tr>
            <td>Hình ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Mã sản phẩm</td>
            <td>Số lượng</td>
            <td>Đơn giá</td>
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
            <td><img src="assets/image/product/<?=$value['thumbnail']?>" alt="" style="width:200px"></td>
            <td><?=$value['name']?></td>
            <td><?=$key?></td>
            <td>
                <div class="input-group">
                    <input type="text" name="" id="" class="form-control" value="<?=$value['quantity']?>">
                    <div class="input-group-append">
                        <button class="btn btn-success" title="Lưu" onclick="addcart('<?=$key?>',this)"><i class="far fa-edit"></i></button>
                    </div>
                </div>
            </td>
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
                    <input type="text" class="form-control" name="vcode" value="<?php echo $voucher;?>">
                    <div class="input-group-append">
                        <input type="button" value="Áp dụng" class="btn btn-success" onclick="addVoucher()">
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
                    <td>$50,000</td>
                </tr>
            </table>
            <div class="row">
                <div class="col-md-4" style="">
                    <a href="<?=rootPath?>" class="btn btn-primary w-100">Mua thêm</a>
                </div>
                <div class="col-md-4" style="">
                    <button class="btn btn-danger w-100" onclick="destroyCart()">Hủy rỏ hàng</button>
                </div>
                <div class="col-md-4" style="">
                    <a href="<?=rootPath."?controller=checkout&action=checkout"?>" class="btn btn-secondary w-100">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>

