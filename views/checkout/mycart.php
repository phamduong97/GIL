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
        <tr>
            <td><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt="" style="width:100%"></td>
            <td>Steam wallet card 100$</td>
            <td>swc100</td>
            <td>
                <div class="input-group">
                    <input type="text" name="" id="" class="form-control" value="100">
                    <div class="input-group-append">
                        <button class="btn btn-success" title="Lưu"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="input-group-append" title="Hủy">
                        <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </td>
            <td>100 $</td>
            <td>100.000 $</td>
        </tr>
        <tr>
            <td><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt="" style="width:100%"></td>
            <td>Steam wallet card 100$</td>
            <td>swc100</td>
            <td>
                <div class="input-group">
                    <input type="text" name="" id="" class="form-control" value="100">
                    <div class="input-group-append">
                        <button class="btn btn-success" title="Lưu"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="input-group-append" title="Hủy">
                        <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </td>
            <td>100 $</td>
            <td>100.000 $</td>
        </tr>
        <tr>
            <td><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt="" style="width:100%"></td>
            <td>Steam wallet card 100$</td>
            <td>swc100</td>
            <td>
                <div class="input-group">
                    <input type="text" name="" id="" class="form-control" value="100">
                    <div class="input-group-append">
                        <button class="btn btn-success" title="Lưu"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="input-group-append" title="Hủy">
                        <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </td>
            <td>100 $</td>
            <td>100.000 $</td>
        </tr>
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
                    <input type="text" class="form-control">
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
                    <td>$10,000</td>
                </tr>
                <tr>
                    <td>Cần nạp thêm</td>
                    <td>$50,000</td>
                </tr>
            </table>
            <div class="row">
                <div class="col-md-6" style="">
                    <button class="btn btn-primary w-100">Mua thêm</button>
                </div>
                <div class="col-md-6" style="">
                    <button class="btn btn-secondary w-100">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</div>

