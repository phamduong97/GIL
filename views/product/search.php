<script>var search_res;</script>
<h4>TÌM KIẾM</h4>
<div id="p-search-bar" class="row">
    <form action="" class="form-inline w-100">
        <div class="input-group col-sm-6">
            <div class="input-group-prepend">
                <input type="button" class="btn btn-danger" id="sbtn" value="Tìm kiếm">
            </div>
            <input type="text" name="keysearch" value="<?=$keyword?>" class="form-control" placeholder="Từ khóa">
        </div>
        <div class="input-group col-lg-3 col-sm-6">
            <select name="category" id="" class="custom-select">
                <option value="0" selected>---Tất cả thể loại---</option>
                <?php
                foreach ($category as $key => $value) {
                    ?>  
                    <option value="<?=$key?>"><?=$value?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        
        <div class="input-group col-lg-3">
            <div class="form-check">
                <input type="checkbox" name="inwhere" value="name" class="form-check-input" checked>
                <label for="" class="form-check-label">Tên sản phẩm</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="inwhere" value="description" class="form-check-input">
                <label for="" class="form-check-label">miêu tả sản phẩm</label>
            </div>
        </div>
        
    </form>
</div>

<div id="p-sort-bar" class="row">
    <form action="" class="form-inline w-100">
        <div class="input-group col-sm-3">
            <div class="input-group-prepend">
                <div class="input-group-text">Hiển thị theo</div>
                <a class="btn bg-secondary displaybtn1"><i class="fas fa-bars"></i></a>
            </div>
            <div class="input-group-append">
                <a class="btn bg-dark displaybtn2"><i class="fas fa-th"></i></a>
            </div>
        </div>
        <div class="input-group col-sm-4 ml-auto">
            <div class="input-group-prepend">
                <div class="input-group-text">Sắp xếp theo</div>    
            </div>
            <select name="sortmode" id="" class="custom-select">
                <option value="1">Tên(A-Z)</option>
                <option value="2">Tên(Z-A)</option>
                <option value="3">Giá(Thấp-Cao)</option>
                <option value="4">Giá(Cao-Thấp)</option>
            </select>
        </div>
        <div class="input-group col-sm-3">
            <div class="input-group-prepend">
                <div class="input-group-text">Số lượng hiển thị</div>    
            </div>
            <select name="counter" id="" class="custom-select">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
        </div>
    </form>
</div>

<div id="p-search-list" class="">
    <!-- <h5>Danh sách sản phẩm phù hợp</h5> -->
<!-- Danh sách hàng -->
    <div id="row-list" style="display:none">
        <div class="product row">
            <div class="thumbnail col-md-4">
                <a href=""><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt=""></a>
            </div>
            <div class="info col-md-8">
                <div class="label"><a href="#">PUBG Steam Key</a></div>
                <div class="description">Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$</div>
                <div class="price"><span class="p1">100.000 VND</span><span class="p2 ml-5">90.000 VND</span></div>
                <input type="button" name="fastbuybtn" value="Mua ngay" class="btn btn-danger">
                <input type="button" name="addcartbtn" value="Thêm vào giỏ" class="btn btn-warning">
            </div>
        </div>
        <div class="product row">
            <div class="thumbnail col-md-4">
                <a href=""><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt=""></a>
            </div>
            <div class="info col-md-8">
                <div class="label"><a href="#">PUBG Steam Key</a></div>
                <div class="description">Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$</div>
                <div class="price"><span class="p1">100.000 VND</span><span class="p2 ml-5">90.000 VND</span></div>
                <input type="button" name="fastbuybtn" value="Mua ngay" class="btn btn-danger">
                <input type="button" name="addcartbtn" value="Thêm vào giỏ" class="btn btn-warning">
            </div>
        </div>
        <div class="product row">
            <div class="thumbnail col-md-4">
                <a href=""><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt=""></a>
            </div>
            <div class="info col-md-8">
                <div class="label"><a href="#">PUBG Steam Key</a></div>
                <div class="description">Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$</div>
                <div class="price"><span class="p1">100.000 VND</span><span class="p2 ml-5">90.000 VND</span></div>
                <input type="button" name="fastbuybtn" value="Mua ngay" class="btn btn-danger">
                <input type="button" name="addcartbtn" value="Thêm vào giỏ" class="btn btn-warning">
            </div>
        </div>
        <div class="product row">
            <div class="thumbnail col-md-4">
                <a href=""><img src="assets/image/steam_wallet_card_5-460x215-266x125.png" alt=""></a>
            </div>
            <div class="info col-md-8">
                <div class="label"><a href="#">PUBG Steam Key</a></div>
                <div class="description">Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$Key steam wallet 100$</div>
                <div class="price"><span class="p1">100.000 VND</span><span class="p2 ml-5">90.000 VND</span></div>
                <input type="button" name="fastbuybtn" value="Mua ngay" class="btn btn-danger">
                <input type="button" name="addcartbtn" value="Thêm vào giỏ" class="btn btn-warning">
            </div>
        </div>
    </div>
    <!-- Danh sách lưới -->
    <div class="row" id="net-list">
        <?php
        if(!isset($_POST['hsbtn'])) header("location: index.php");
        if(sizeof($product)==0) echo "<div class='text-center w-100'>Không tìm thấy sản phẩm phù hợp</div>";
        foreach ($product as $key => $value) {
            # code...
        ?>
        <div class="col-md-3">
            <div class="product">
                <div class="thumbnail">
                    <img src="assets/image/product/<?php $thumbnail=explode(";",$value['image'])[0];echo $thumbnail;?>" alt="Hình ảnh nào đó">
                    <a class="addcartbtn" onclick="addcart('<?=$value['code']?>',undefined)">THÊM VÀO GIỎ</a>
                    <a href="" class="fastbuybtn">MUA NGAY</a>
                </div>
                <div class="label"><a href="<?=rootPath."?controller=product&action=view&code={$value['code']}"?>"><?=$value['name']?></a></div>
                <div class="price"><?=$value['price']?> VNĐ</div>
                <div class="saleprice"><?=$value['price']-($value['price']*$value['sale']/100)?> VNĐ</div>
            </div>
        </div>
        <?php
        }
        ?>
        
        
    </div>

    
</div>

<script>

</script>
