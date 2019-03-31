<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="assets/js/buy.js"></script>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/comment.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

</head>
<body>
    <?php include "views/layout/header.php"?>
    <div class="clearfix"></div>
    <?php include "views/layout/navigator.php"?>
    <div id="main">
        <div class="container-fluid">
            <div class="container">
                <div id="path"><a href="<?=rootPath?>"><i class="fa fa-home"></i></a> / <a href="<?=$path?>"><?=$pathtext?></a></div>
                <?=$content?>
            </div>
        </div>
    </div>
    <!-- <div id="main" class="container">
        
        <textarea name="nani" id="" cols="30" rows="10"></textarea>
        <script>CKEDITOR.replace("nani")</script>
    </div> -->
    <!-- Footer -->
    <?php include "views/layout/footer.php"?>
    
</body>
</html>