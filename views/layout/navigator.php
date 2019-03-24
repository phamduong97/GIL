<div id="navigator" class="sticky-top">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="nav-box">
                        <ul class="nav">
                            <li class="nav-item"><a href="?controller=home&action=index">Trang chủ</a></li>
                            <li class="nav-item"><a href="">Thể Loại</a>
                                <ul>
                                    <li><a href="?controller=product&action=search">Hành động</a>
                                        <ul>
                                            <li><a href="#">2D</a></li>
                                            <li><a href="#">3D</a></li>
                                            <li><a href="#">Play Station</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Võ thuật</a></li>
                                    <li><a href="#">Kiếm hiệp</a></li>
                                    <li><a href="#">Phiêu lưu</a></li>
                                    <li><a href="#">Kinh dị</a></li>
                                    <li><a href="#">Thể thao</a></li>
                                    <li><a href="#">Trí tuệ</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="?controller=product&action=search&tag=Garena">Garena</a></li>
                            <li class="nav-item"><a href="?controller=product&action=search&tag=Steam">Steam</a></li>
                            <li class="nav-item"><a href="?controller=news&action=home">Tin tức</a></li>
                            <li class="nav-item"><a href="">Mua tại đại lý</a></li>
                            <li class="nav-item"><a href="">Nạp tiền</a>
                                <ul>
                                    <li><a href="#">Nạp bằng thẻ nạp</a></li>
                                    <li><a href="#">Chuyển khoản</a></li>
                                    <li><a href="#">Gifcode</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".nav li").hover(function(){
            $(this).find("ul:first").slideDown(0);
        },function(){
            $(this).find("ul:first").hide(0);
        });

    });
</script>