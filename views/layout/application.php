<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="header">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" id="logo">
                        <a href=""><img src="assets/image/logo.png" alt=""></a>
                    </div>
                    <div class="col-lg-6" id="search-box">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-default "><i class="fa fa-search"></i></button>
                            </div>
                            <input type="text" name="" id="inputsearch" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3" id="login">
                        <a href="?controller=account&action=login">Đăng nhập</a> | <a href="register.html">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="navigator" class="sticky-top">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="nav-box">
                            <ul class="nav">
                                <li class="nav-item"><a href="">Trang chủ</a></li>
                                <li class="nav-item"><a href="">Thể Loại</a>
                                    <ul>
                                        <li><a href="#">Hành động</a>
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
                                <li class="nav-item"><a href="">Garena</a></li>
                                <li class="nav-item"><a href="">Steam</a></li>
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
                    <div class="col-lg-3" id="cartbox">
                        <div id="mycart">
                            <i class="fa fa-shopping-bag"></i>
                            <a href="#"><span>0</span> Sản phẩm - <span>0</span> VNĐ</a>
                            
                        </div>
                        <div style="position: relative;">
                            <div id="mycart-box">
                                Chưa có sản phẩm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        
        </script>
    </div>
    <div id="main">
        <div class="container-fluid">
            <div class="container">
                <div id="path"><a href="home.html"><i class="fa fa-home"></i></a>/</div>
                <div class="row">
                    
                    <?=$content?>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="main" class="container">
        
        <textarea name="nani" id="" cols="30" rows="10"></textarea>
        <script>CKEDITOR.replace("nani")</script>
    </div> -->
    <!-- Footer -->
    <div id="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-item-label">Chuyên mục</div>
                        <div class="f-item-content">
                            <div><a href="">Game online</a></div>
                            <div><a href="">Game offline</a></div>
                            <div><a href="">Game steam</a></div>
                            <div><a href="">Game garena</a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-item-label">Thông tin</div>
                        <div class="f-item-content">
                            <div><a href="">Giới thiệu</a></div>
                            <div><a href="">Game bản quyền là gì?</a></div>
                            <div><a href="">Chính sách bảo mật</a></div>
                            <div><a href="">Điều khoảng dịch vụ</a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-item-label">Chăm sóc khách hàng</div>
                        <div class="f-item-content">
                            <div><a href="">Hỏi và trả lời</a></div>
                            <div><a href="">Bảo hành</a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-item-label">Liên hệ</div>
                        <div class="f-item-content">
                            <div><a href=""><i class="fab fa-facebook"></i> Facebook</a></div>
                            <div><a href=""><i class="fab fa-google-plus-square"></i> Google+</a></div>
                            <div><a href=""><i class="fab fa-youtube-square"></i> Youtube</a></div>
                            <div><a href=""><i class="fab fa-discord"></i> Discord</a></div>
                            <div><i class="fa fa-phone"></i> 19001969</div> 
                            <div><i class="fa fa-envelope"></i> thisismail@gmail.com</div> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="f-item-label">Vị trí</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14903.241894587956!2d105.7996884!3d20.96012495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ce6d44a0a6964fa!2sCT2B+Xa+La!5e0!3m2!1svi!2s!4v1540662725891"
                            width="100%" height="200" frameborder="0" style="border:0;margin-top:10px" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="col-md-4">
                        <div class="f-item-label">Fanpage</div>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fisthisweebpage%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=192620087989897"
                            width="100%" height="200" style="border:none;overflow:hidden;margin-top:10px"
                            scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                    <div class="col-md-12" style="text-align: center;border-top: 1px solid rgb(80, 80, 80);line-height: 50px">
                        <i class="fa fa-copyright"></i> Bản quyền thuộc về Kami
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>