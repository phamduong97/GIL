<script>
  $(document).ready(function() {
      var trangbandau = 1;
      $('.btnmore').click(function(event) {
        trangbandau = trangbandau + 1;
        $.post("ajax/phantrang.php",{trang:trangbandau},function(data){
          $('.content').append(data);
        });
      });
  });
</script>
<div class="hotnews">
    <div class="news1 row">
        <div class="col-lg-7 news">
            <img src="assets/image/new.jpg" alt="" width="100%" height="300px">
            <div class="titlenews"><b><a href="">Con đường tơ lụa sẵn sàng ra mắt sau nhiều năm</a></b></div>
        </div>
        <div class="col-lg-5 news">
            <img src="assets/image/new2.jpg" alt="" width="100%" height="300px">
            <div class="titlenews"><b><a href="">Con đường tơ lụa sẵn sàng ra mắt sau nhiều năm</a></b></div>
        </div>
    </div>
    <div class="news2 row">
        <div class="col-lg-3 news" >
            <img src="assets/image/new3.jpg" alt="" width="85%" >
            <div style="text-align: center;"><a href="#">10 phút gameplay tuyệt vời của 'Đua xe cáo' bản làm lại trên PS4 </a></div>
        </div>
        <div class="col-lg-3 news">
            <img src="assets/image/new3.jpg" alt="" width="85%" >
            <div style="text-align: center;"><a href="#">10 phút gameplay tuyệt vời của 'Đua xe cáo' bản làm lại trên PS4</a></div>
        </div>
        <div class="col-lg-3 news">
            <img src="assets/image/new3.jpg" alt="" width="85%">
            <div style="text-align: center;"><a href="#">10 phút gameplay tuyệt vời của 'Đua xe cáo' bản làm lại trên PS4</a></div>
        </div>
        <div class="col-lg-3 news">
            <img src="assets/image/new3.jpg" alt="" width="85%">
            <div style="text-align: center;"><a href="#">10 phút gameplay tuyệt vời của 'Đua xe cáo' bản làm lại trên PS4</a></div>
        </div>
    </div>
</div>
<div class="mainnews container">
    <div class="row">
            <div class="col-lg-9 left">
                <div style="border-bottom: 2px solid white;font-size: 22px;"><b>TIN GAME MỚI NHẤT</b></div>
                <div class="content">
                <?php 

                foreach ($news as $k => $v) {
            
                ?>
                    <div class="tintuc">
                        <a href="?controller=news&action=detail&id=<?php echo $v['id']; ?>">
                        <div class="row">
                                <div class="col-lg-5">
                                    <img src="<?php echo $v['Hinh']; ?>" title="<?php echo $v['Hinh']; ?>" width="250px" height="150px">
                                </div>
                                <div class="col-lg-7">
                                    <a class="tieude" href="?controller=news&action=detail&id=<?php echo $v['id']; ?>"><?php echo $v['TieuDe']; ?></a>
                                    <div class="chimuc">
                                        ESPORTS - <?php echo $v['TacGia']; ?> - <?php echo $v['NgayTao']; ?>
                                    </div>
                                    <div class="noidung">
                                        <?php echo $v['TieuDe']; ?>
                                    </div>
                                </div>
                        </div>
                        </a>
                    </div>
                <?php 
                    }
                ?>
                </div>
                <button class="btn btn-primary btnmore" >Xem thêm</button>
            </div>
            <div class="col-lg-3 right">
                <div class="advertise">
                    <img src="assets/image/images.jpg" alt="" width="100%" height="400px">
                </div>
                <div class="tinlq">
                    <div style="border-bottom: 2px solid white;font-size: 18px;"><b>TIN LIÊN QUAN</b></div>
                    <?php 

                        foreach ($news_relate as $k => $v) {
                            
                    ?>
                    <div class="tinngan">
                        <div class="row">
                            <div class="col-lg-6 col-ms-6 col-xs-6">
                                    <b style="font-size: 13px;"><a href="?controller=news&action=detail&id=<?php echo $v['id']; ?>">
                                        <?php echo $v['TomTat']; ?>
                                    </a> </b>
                            </div>
                            <div class="col-lg-6 c0l-ms-6 col-xs-6">
                                <a href="?controller=news&action=detail&id=<?php echo $v['id']; ?>" style="padding-top: 10px;">
                                    <img src="<?php echo $v['Hinh']; ?>" title="<?php echo $v['Hinh']; ?>" width="100%" height="auto">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                    
                </div>
            </div>
    </div>
</div>
<div class="videonews container">
    <div style="color: red;font-size: 22px;border-bottom: 2px solid grey;
    padding-bottom: 10px;text-align: center;padding-top: 10px;border-top: 2px solid grey;"><b>VIDEO GAME NỔI BẬT</b></div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-4 video">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/Rp2LOwdgjzg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class=""><b>Trải nghiệm Dragon Ball Z: X Keepers – Game H5 chính chủ về 7 Viên Ngọc Rồng</b></div>
        </div>
        <div class="col-lg-4 video">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/BwnUect8xjg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class=""><b>Trải nghiệm Spider man PS4 2018</b></div>
        </div>
        <div class="col-lg-4 video">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/zusGSF2Pzmo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class=""><b>Call Of Duty 4 Modern Warfare - Game Movie</b></div>
        </div>
    </div>
</div>   
<div class="clearfix"></div>
