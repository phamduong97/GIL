<div id="navigator" class="sticky-top">
    <div class="container-fluid">
        <div class="container" style="padding:0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="nav-box">
                        <ul class="nav nav-tier1">
                            <li class="nav-item"><a href="?controller=home&action=index">Trang chủ</a></li>
                            <li class="nav-item">Thể Loại</a>
                                <ul class="nav-tier2">
                                    <?php
                                    foreach ($nav_category as $key => $value) {
                                        ?>
                                        <li><a href="?controller=product&action=search&tag=<?=$value['tag']?>"><?=$value['name']?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="?controller=product&action=search&tag=Garena">Garena</a></li>
                            <li class="nav-item"><a href="?controller=product&action=search&tag=Steam">Steam</a></li>
                            <li class="nav-item"><a href="?controller=news&action=home">Tin tức</a></li>
                            <li class="nav-item"><a href="">Mua tại đại lý</a></li>
                            <li class="nav-item">
                                <a href="?controller=account&action=addmoney&id=<?=$_SESSION['userid']?>">Nạp tiền</a>
                                <ul class="nav-tier2">
                                    <li><a href="#">Thẻ điện thoại</a></li>
                                    <li><a href="#">Chuyển khoản</a></li>
                                    <li><a href="#">Giftcode</a></li>
                                    <li><a href="#">Thẻ garena</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="navigator-m" class="sticky-top">
    <button class="btn btn-light" data-toggle="collapse" data-target="#navm"><i class="fas fa-list-alt"></i></button>
    <div class="nav-box collapse" id="navm" >
        <ul class="nav nav-tier1">
            <li class="nav-item"><a href="?controller=home&action=index">Trang chủ</a></li>
            <li class="nav-item">Thể Loại</a>
                <ul class="nav-tier2">
                    <?php
                    foreach ($nav_category as $key => $value) {
                        ?>
                        <li><a href="?controller=product&action=search&tag=<?=$value['tag']?>"><?=$value['name']?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="nav-item"><a href="?controller=product&action=search&tag=Garena">Garena</a></li>
            <li class="nav-item"><a href="?controller=product&action=search&tag=Steam">Steam</a></li>
            <li class="nav-item"><a href="?controller=news&action=home">Tin tức</a></li>
            <li class="nav-item"><a href="">Mua tại đại lý</a></li>
            <li class="nav-item"><a href="">Nạp tiền</a>
                <ul class="nav-tier2">
                    <li><a href="#">Thẻ điện thoại</a></li>
                    <li><a href="#">Chuyển khoản</a></li>
                    <li><a href="#">Giftcode</a></li>
                    <li><a href="#">Thẻ garena</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script>
    // $(document).ready(function(){
    //     $(".nav li").hover(function(){
    //         $(this).find("ul:first").slideDown(0);
    //     },function(){
    //         $(this).find("ul:first").hide(0);
    //     });

    // });
</script>