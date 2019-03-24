<div class="row">
    <?php include "views/layout/leftsection.php"?>
    <div class="col-md-9" id="right-section">
        <!-- Slider -->
        <div id="slider" style="height: 450px;" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
            <!-- Dots -->
            <ol class="carousel-indicators dotBtn">
                <li data-target="#slider" data-slide-to="0" class="active">1</li>
                <li data-target="#slider" data-slide-to="1">2</li>
                <li data-target="#slider" data-slide-to="2">3</li>
                <li data-target="#slider" data-slide-to="3">4</li>
                <li data-target="#slider" data-slide-to="4">5</li>
            </ol>
            <!-- Slide -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://divineshop.vn/image/cache/catalog/banner/banner-nap-tien-824x470.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/banner-824x470.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://divineshop.vn/image/cache/catalog/thẻ%20điện%20thoại/gui%20anh%20dong%20(1)-824x470.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://divineshop.vn/image/cache/catalog/slide/bao-mat-2-lop-824x470.png" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://divineshop.vn/image/cache/catalog/Anh-san-pham/candy/11-824x470.png" alt="">
                </div>
            </div>
            <a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="fa fa-chevron-left" style="font-size:40px"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#slider" class="carousel-control-next" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="fa fa-chevron-right"  style="font-size:40px"></span>
                <span class="sr-only">Next</span>
            </a>
            <script>
                $('.carousel').carousel();
            </script>
        </div>

        <div class="swiper-container" id="net-list">
            <div class="swiper-wrapper">
                <?php 
                foreach ($data1 as $k => $v) {
                    $image = explode(";", $v['image'])[0];
                ?>
                    <div class="swiper-slide">
                        <div class="product">
                            <a href="?controller=product&action=view&code=<?php echo $v['code']; ?>">
                                <div class="thumbnail">
                                    <img src="assets/image/product/<?=$image?>" alt="">
                                    <a class="fastbuybtn">MUA NGAY</a>
                                    <a class="addcartbtn" href="?controller=carts&action=addcart&code=<?php echo $v['code']; ?>">THÊM VÀO GIỎ</a>
                                </div>
                                <div class="label"><?=$v['name']; ?></div>
                                <div class="price"><span style="color: grey;">SALE:</span><?php echo $v['sale']; ?> %</div>
                                <div class="saleprice"><?=$v['price']; ?> VNĐ</div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
                pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            });
        </script>

        <div class="group-feature">
            <div class="feature-item-box container-fluid">
                <div class="row" id="net-list">
                    <?php 
                    foreach ($product as $key => $value) {
                        $image = explode(";", $v['image']);
                        ?>
                        <div class="col-md-4">
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
                    <?php } ?>
                </div>
                <!------- Pagination ----------------->
                <nav aria-label="" style="font-size: 12px;margin-left: 38%;margin-top:20px;">
                    <ul class="pagination">
                    <?php 
                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        if ($current_page > 1 && $_SESSION['total_page'] > 1){
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" tabindex="-1">Previous</a>
                    </li>
                    <?php } ?>
                    <?php 
                        for ($i = 1; $i <= $_SESSION['total_page']; $i++){

                        if ($i == $current_page){

                    ?>                             
                    <li class="page-item active">
                        <a class="page-link" href="#"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <?php 
                        }else{

                        ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php 
                            }
                        }
                        
                        if ($current_page <  $_SESSION['total_page'] &&  $_SESSION['total_page'] > 1){  
                        ?>
                    
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Next</a>
                    </li>
                    <?php 
                            }
                    ?>
                    </ul>
                </nav>
                <!------------------------------------------>
            </div>
        </div>

        <div style="margin: 20px auto;padding-top: 10px;border-top: 1px solid grey;">
            <div style="margin: 10px auto;padding-left: 100px;">
                <marquee width="80%" " >Ra mắt GTA 5 2019 phiên bản cực chất cho game thủ.</marquee>
            </div>
            <iframe width="95%" height="315" src="https://www.youtube.com/embed/VjZ5tgjPVfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="outline" style="margin:20px 0;">
            <div class="row">
                <div class="col-lg-6">
                    <a class="item" title="7 lý do mua game bản quyền">
                        <img src="assets/image/7lydo.png" alt="" width="380px">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="item" title="Giao dịch trực tiếp">
                        <img src="assets/image/giaodich.png" alt="" width="380px">
                    </a>
                </div>
            </div>
        </div>

        <div class="contentlast">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box">
                        <div class="title">🚀 GIAO HÀNG CỰC NHANH</div>
                        <p>Hệ thống giao hàng tự động chỉ 5 phút.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box">
                        <div class="title">✯ UY TÍN 5✩</div>
                        <p>2 năm liền từ khi ra mắt luôn được bình chọn là Shop Game Uy Tín nhất VN !</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box">
                        <div class="title">🎁 BẢO HÀNH TRỌN ĐỜI</div>
                        <p>Cam kết bảo hành trọn đời với mọi game DivineShop bán ra.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box">
                        <div class="title">✉ HỖ TRỢ TẬN TÌNH</div>
                        <p>Hệ thống support online liên tục từ 8h-24h.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="youtube" style="margin-left: 20px;">
            <script src="https://apis.google.com/js/platform.js"></script>
            <div class="g-ytsubscribe" data-channelid="UCTkIV69UcZvXnfTqL-oqpJg" data-layout="full" data-count="default">
            </div>
        </div>
    </div>
</div>
