<div class="hotnews container">
    <div class="newdetail" style="margin-top: 20px;">
        <div class="row">
            <div class="col-lg-9">
                    <div class="title" style="font-size: 23px;">
                        <b><?php echo $title; ?></b>
                    </div>
                    <div class="date">T.X - <?php echo $news['NgayTao']; ?></div>
                    <div class="imagetitle">
                        <img src="assets/image/anh1.jpg" title="<?php echo $news['TieuDe']; ?>" width="100%" height="60%">
                    </div>

                    <div class="description" style="margin-top: 20px;">
                        (infogame.vn) - Nhiều ngày nay, chỉ cần lướt mạng xã hội, không khó để bắt gặp loạt câu nói như: “chủ tịch giả nghèo để thử lòng bạn gái và cái kết”, ...<br>
                        Khẳng định không còn liên quan đến FTV, Huỳnh Phương vẫn nổi giận thách thức ông chủ của Optimus
                        Ông chủ SGD khẳng định chính mình là người chỉ đạo Optimus tố cáo Zeros
                        Game thủ PUBG Mobile bức xúc tố nữ đồng đội bắn kém lại còn vô duyên<br>
                        Mấy ngày gần đây, trên mạng xã hội bỗng nhiên xuất hiện hàng loạt các câu nói như "chủ tịch giả nghèo để thử lòng bạn gái và cái kết", "chủ tịch giả danh nhân viên để thử lòng và cái kết", "chủ tịch giả làm bảo vệ và cái kết".  Mô típ quen thuộc này bỗng gây sốt và được dân mạng phát cuồng, đi đâu cũng thấy "chủ tịch" xuất hiện.<br> <br>
                        <img src="assets/image/anh2.jpg" alt=""> <br><br>
                        <img src="assets/image/anh3.jpg" alt="">
                        <br><br>
                        <img src="assets/image/images.jpg" alt="" width="500px" height="200px"><br>
                        
                        "Chủ tịch giả vờ cho bạn mượn acc và cái kết"<br>

                        "Chủ tịch giả vờ không có lixi tết và cái kết"<br>

                        "Chủ tịch giả vờ đồng ý cho vk đh và cái kết"<br>

                        Chắc chắn hot trend này sẽ là một trong những trào lưu “làm mưa làm gió” trong thời gian tới đây. Rất nhiều cư dân mạng đã nhanh tay chế ảnh “chủ tịch” theo dòng hottrend. <br>

                        <a href=""> >> "Ồ hố" - Cụm từ hot nhất mạng xã hội ngay trong đêm 30 Tết </a> <br>

                        T.X <br>
                    </div>
                    <div class="share" style="width: 400px;padding: 30px 0px 30px 40px;margin: 20px 0 20px 0;">
                        <a href="https://www.facebook.com" title="Facebook" class="btn btn-facebook btn-lg fb" target="_blank" style="background-color: blue;font-size: 12px;"><i class="fab fa-facebook fa-fw"></i>Chia sẻ lên Facebook</a>
                        
                        <a href="https://plus.google.com/discover" title="Google+" class="btn btn-googleplus btn-lg google" style="background-color: red;font-size: 12px;" target="_blank"><i class="fab fa-google-plus fa-fw"></i>Chia sẻ lên Google+</a>
                    </div>
                    <?php 
                        if (isset($_SESSION['logged_in']) && $_SESSION['user']==true &&$_SESSION['logged_in']==true) {
                        
                    ?>
                    <div class="comment" style="background-color: grey;border-radius: 10px;width: 60%;">
                    <form method="get" class="form-group" style="padding: 5px 10px;">
                        <input type="hidden" name="controller" value="news">
                        <input type="hidden" name="action" value="comment">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <div><b><?php echo $_SESSION['username']; ?></b></div>
                        <label for="comment">Viết bình luận:</label>
                        <textarea class="form-control" rows="5"  name="comment" id="content" ></textarea>
                        <button class="btn btn-primary btncomment" type="submit"  name="btncomment" style="margin-top: 10px;">Gửi bình luận</button>
                    </form>
                    </div>
                    <?php 
                    } 
                    ?>
                    <div class="kq"></div>
                    <div class="comment" style="border: 1px solid white;width: 500px;background-color: white;color: black!important;padding: 10px 10px;border-radius: 10px;margin-bottom: 40px;">
                        <div style="border-bottom: 1px solid grey;margin-bottom: 20px;"><b>BÌNH LUẬN</b></div>
                        
                        <?php 
                            foreach ($comment as $k => $v) {
                                
                        ?>
                        <div class="user row" style="margin-top: 10px;">
                            <div class="col-lg-3">
                                <img src="assets/image/Layer 0.png" width="40px" height="40px" style="border-radius: 50%;">
                                <div style="font-size: 13px;color: black;margin-top: 10px;"><b><?php echo $v['name']; ?></b></div>
                            </div>
                            <div class="col-lg-9" style="border-bottom: 1px solid black;">
                                <div><?php echo $v['NoiDung']; ?></div> 
                                <div style="color: blue;font-size: 10px;"><?php echo $v['NgayTao']; ?></div>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                    
                    </div>
            </div>
            <div class="col-lg-3">
                    <div class="advertise">
                        <a href="#">
                        <img src="assets/image/images.jpg" alt="" width="100%" height="400px">
                        </a>
                    </div>
                    <div class="tinlq">
                        <div style="border-bottom: 2px solid white;font-size: 18px;"><b>TIN LIÊN QUAN</b></div>
                        <div class="tinngan">
                            <div class="row">
                                <div class="col-lg-6 col-ms-6 col-xs-6">
                                    <b style="font-size: 13px;"><a href="">
                                        FO4: Vụ nạp Sò lậu bị khóa vĩnh viễn, thương nhân đứng sau chối bỏ trách akskhfshksfhsggggj
                                    </a> </b>
                                </div>
                                <div class="col-lg-6 c0l-ms-6 col-xs-6">
                                    <a href="#" style="padding-top: 10px;">
                                        <img src="assets/image/tinngan.png" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tinngan">
                            <div class="row">
                                <div class="col-lg-6">
                                    <b style="font-size: 13px;"><a href="">
                                        FO4: Vụ nạp Sò lậu bị khóa vĩnh viễn, thương nhân đứng sau chối bỏ trách akskhfshksfhsggggj
                                    </a> </b>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" style="padding-top: 10px;">
                                        <img src="assets/image/tinngan.png" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tinngan">
                            <div class="row">
                                <div class="col-lg-6">
                                    <b style="font-size: 13px;"><a href="">
                                        FO4: Vụ nạp Sò lậu bị khóa vĩnh viễn, thương nhân đứng sau chối bỏ trách akskhfshksfhsggggj
                                    </a> </b>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#">
                                        <img src="assets/image/tinngan.png" alt="" width="100%" height="auto" style="margin-top: 15px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="mainnews container">
    <div class="row">
        <div class="col-lg-9 left">
            <div style="border-bottom: 2px solid white;font-size: 22px;"><b>TIN GAME MỚI NHẤT</b></div>
            <div class="tintuc">
                <a href="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="assets/image/tintuc.jpg" alt="" width="250px" height="150px">
                        </div>
                        <div class="col-lg-7">
                            <a class="tieude" href="#">VCS Mùa Xuân 2019: PVB quá mạnh so với phần còn lại...</a>
                            <div class="chimuc">
                                ESPORTS - Phong Vũ - 19/02/2019 14:31
                            </div>
                            <div class="noidung">
                                PVB duy trì mạch trận bất bại trong tuần 3 VCS Mùa Xuân 2019
                            </div>
                        </div>
                    </div>
                </a>
            </div>

                <div class="tintuc">
                <a href="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="assets/image/tintuc.jpg" alt="" width="250px" height="150px">
                        </div>
                        <div class="col-lg-7">
                            <a class="tieude" href="#">VCS Mùa Xuân 2019: PVB quá mạnh so với phần còn lại...</a>
                            <div class="chimuc">
                                ESPORTS - Phong Vũ - 19/02/2019 14:31
                            </div>
                            <div class="noidung">
                                PVB duy trì mạch trận bất bại trong tuần 3 VCS Mùa Xuân 2019
                            </div>
                        </div>
                    </div>
                </a>
            </div>

                <div class="tintuc">
                <a href="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="assets/image/tintuc.jpg" alt="" width="250px" height="150px">
                        </div>
                        <div class="col-lg-7">
                            <a class="tieude" href="#">VCS Mùa Xuân 2019: PVB quá mạnh so với phần còn lại...</a>
                            <div class="chimuc">
                                ESPORTS - Phong Vũ - 19/02/2019 14:31
                            </div>
                            <div class="noidung">
                                PVB duy trì mạch trận bất bại trong tuần 3 VCS Mùa Xuân 2019
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tintuc">
                <a href="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="assets/image/tintuc.jpg" alt="" width="250px" height="150px">
                        </div>
                        <div class="col-lg-7">
                            <a class="tieude" href="#">VCS Mùa Xuân 2019: PVB quá mạnh so với phần còn lại...</a>
                            <div class="chimuc">
                                ESPORTS - Phong Vũ - 19/02/2019 14:31
                            </div>
                            <div class="noidung">
                                PVB duy trì mạch trận bất bại trong tuần 3 VCS Mùa Xuân 2019
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <button class="btn btn-primary btnmore" >Xem thêm</button>
        </div>
        <div class="col-lg-3 right">
            <div class="tinhot" style="margin-top: 8px;">
            <div style="border-bottom: 2px solid white;font-size: 18px;"><b>TIN NỔI BẬT</b></div>
            <div class="tinngan">
                <div class="row">
                <div class="col-lg-6 col-ms-6 col-xs-6">
                    <b style="font-size: 13px;"><a href="">
                    FO4: Vụ nạp Sò lậu bị khóa vĩnh viễn, thương nhân đứng sau chối bỏ trách akskhfshksfhsggggj
                    </a> </b>
                </div>
                <div class="col-lg-6 c0l-ms-6 col-xs-6">
                    <a href="#" style="padding-top: 10px;">
                    <img src="assets/image/tinngan.png" alt="" width="100%" height="auto">
                </a>
                </div>
            </div>
            </div>

            <div class="tinngan">
            <div class="row">
                <div class="col-lg-6">
                <b style="font-size: 13px;"><a href="">
                    FO4: Vụ nạp Sò lậu bị khóa vĩnh viễn, thương nhân đứng sau chối bỏ trách akskhfshksfhsggggj
                </a> </b>
                </div>
                <div class="col-lg-6">
                <a href="#" style="padding-top: 10px;">
                <img src="assets/image/tinngan.png" alt="" width="100%" height="auto">
                </a>
            </div>
            </div>
        </div>

        <div class="tinngan">
            <div class="row">
            <div class="col-lg-6">
                <b style="font-size: 13px;"><a href="">
                FO4: Vụ nạp Sò lậu bị khóa vĩnh viễn, thương nhân đứng sau chối bỏ trách akskhfshksfhsggggj
                </a> </b>
            </div>
            <div class="col-lg-6">
                <a href="#">
                <img src="assets/image/tinngan.png" alt="" width="100%" height="auto" style="margin-top: 15px;">
            </a>
            </div>
        </div>
        </div>
    </div>
        </div>
    </div>
</div>                   
<div class="clearfix"></div>

