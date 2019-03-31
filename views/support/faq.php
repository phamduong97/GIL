<div id="faqbox">
    <script src="assets/js/faq.js"></script>
    <h4>CÁC CÂU HỎI THƯỜNG GẶP</h4>
    <div id="faqsearch" class="input-group">
        <input type="text"  name="ticket_key" id="" class="form-control">
        <div class="input-group-append">
            <input type="button" value="Tìm kiếm" class="btn btn-dark">
        </div>
    </div>
    <?php
    if(isset($_SESSION['ticket_add']) && $_SESSION['ticket_add']==true){
        unset($_SESSION['ticket_add']);
        echo '<div class="alert alert-success">Câu hỏi của bạn đã được gửi.</div>';
    }
    ?>
    
    <div id="faqresult">
        <?php
        foreach ($ticket as $key => $value) {
        ?>
        <div class="item">
            <div class="question" id="q<?=$key?>" data-toggle="collapse" data-target="#a<?=$key?>">
                <i class="far fa-arrow-alt-circle-right"></i>
                <?=$value['question']?>
            </div>
            <div class="collapse" id="a<?=$key?>">
                <div class="answer"><?=$value['answer']?></div>
            </div>
        </div>
        <?php
        }
        ?>
        
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target="#submission">Bạn cần hỗ trợ ?</button>
    <div class="modal fade" id="submission" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:rgba(0,0,0,0.8)">Biểu mẫu yêu cầu hỗ trợ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="?controller=support&action=ticket" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="" style="color:rgba(0,0,0,0.8)">Họ và tên</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Nhập tên">
                </div>
                
                <div class="form-group">
                    <label for="" style="color:rgba(0,0,0,0.8)">Email</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label for="" style="color:rgba(0,0,0,0.8)">Câu hỏi</label>
                    <textarea name="content" id="" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="submit" name="smbtn" class="btn btn-primary">Gửi yêu cầu</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>