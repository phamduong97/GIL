<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang quản trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/admin.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body class="bg-light">
    <div id="navigator" class="bg-dark" >
        <div class="container-fluid navbar navbar-expand-lg navbar-dark">
            <ul class="navbar-nav" style="width:100%">
                <li class="nav-item">
                    <a class="nav-link" href="<?=rootPath."?controller=admin&action=product/index"?>">Danh mục sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Thêm sảnh phẩm mới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Tạo bài viết</a>
                </li>
                    
                </li>
            </ul>
        </div>
    </div>
    
    <?=$content?>

    <div id="footer" class="container-fluid bg-dark" style="height:100px">

    </div>
</body>
</html>