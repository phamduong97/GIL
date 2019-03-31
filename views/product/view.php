<div class="row">
    <?php
    include "views/layout/leftsection.php";
    $image_arr = explode(";",$data['image']);
    $imageroot = "assets/image/product/";
    // print_r($data);
    ?>

    <div class="col-md-9">
        <h4 class="text-center title" style=""><?=$data['name']?></h4>
        <div id="p-image">
            <div class="pfw-image">
                <img src="<?=$imageroot.$image_arr[0]?>" alt="">
            </div>
            <div id="thumbnail-box">
                <div id="list-image">
                    <?php
                    foreach ($image_arr as $key => $value) {
                        # code...?>
                        <div class="thumbnail">
                            <img src="<?=$imageroot.$value?>" alt="">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <script>
                $('.thumbnail').click(function(){
                    let url = $(this).children().attr("src");
                    $('.pfw-image').children().attr("src",url);
                })
            </script>
        </div>
        <div id="p-info">
            <div class="row">
                <div class="col-lg-12" id="main-info">
                    <h4 class="text-center">Thông tin</h4>
                    <div><?=$data['description']?></div>
                </div>
                <div class="col-lg-9 p-content">
                    <table class="table table-bordered" style="margin:0">
                        <tbody>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <td><?=$data['code']?></td>
                                <th>Tình trạng</th>
                                <td><?=$data['status']?></td>
                            </tr>
                            <tr>
                                <th>Nhà sản xuất</th>
                                <td><?=$data['proname']?></td>
                                <th>Giá sản phẩm</th>
                                <td>
                                    <?php
                                    if($data['sale']==0){
                                        echo $data['price'];
                                    }else{
                                        $price = $data['price']-$data['price']*$data['sale']/100;
                                        echo "on sale: ".$price;
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Cấu hình đề nghị</th>
                                <td colspan=3>
                                <?php
                                $minConfig = explode(";",$data['config']);
                                echo "OS: ".$minConfig[0]."<br>";
                                echo "Processor: ".$minConfig[1]."<br>";
                                echo "RAM: ".$minConfig[2]."<br>";
                                echo "Graphic Card: ".$minConfig[3]."<br>";
                                echo "DirectX: ".$minConfig[4]."<br>";
                                echo "Network: ".$minConfig[5]."<br>";
                                echo "Storage: ".$minConfig[6]."<br>";
                                echo "Sound Card: ".$minConfig[7]."<br>";
                                ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>                   
                </div>
                <div class="col-lg-3">
                    <div class="button-group">
                        <a href="https://steamcommunity.com" class="btn btn-primary w-100 text-left"><span class="fas fa-chevron-circle-right w-25"></span><span class="w-75">Đi tới steam</span></a>
                        <a href="<?=rootPath."?controller=checkout&action=cart"?>" class="btn btn-primary w-100 text-left"><span class="fas fa-chevron-circle-right w-25"></span></span class="w-75">Mua ngay</span></a>
                        <a class="btn btn-primary w-100 text-left" onclick="addcart('<?=$data['code']?>',null)"><span class="fas fa-chevron-circle-right w-25"></span></span class="w-75">Thêm vào giỏ</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="p-comment">
            <div class="editor">
                <?php
                if(isset($_SESSION['logged_in'])){
                    ?>
                    <input type="text" hidden name="product_id" value=<?=$data['ID']?>>
                    <textarea name="comment-box" id="comment-box" cols="" rows="2" class="form-control"></textarea>
                    <script>
                    // CKEDITOR.config.toolbar = []
                    // CKEDITOR.replace('comment-box');
                    </script>
                    <input type="button" value="Đăng" class="btn btn-success w-100" name="commentBtn">
                    <?php
                }else{
                    ?>
                    <div class="alert alert-warning">Bạn phải đăng nhập để bình luận</div>
                    <?php
                }
                ?>
                
            </div>
            <div class="comment-box">
                
            </div>
        </div>
    </div>
</div>



