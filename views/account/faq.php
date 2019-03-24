<div id="main" class="container-fluid" style="margin-bottom: -50px;">
    <div class="container">
        <div id="faqbox" style="padding-bottom: 20px;">
            <script src="assets/js/faq.js"></script>
            <h4 style="padding: 20px 0;">CÁC CÂU HỎI THƯỜNG GẶP ?</h4>
            <div id="faqsearch" class="input-group">
                <input type="text"  name="ticket_key" id="" class="form-control">
                <div class="input-group-append">
                    <input type="button" value="Tìm kiếm" class="btn btn-dark">
                </div>
            </div>

            <button class="btn btn-primary" data-toggle="modal" data-target="#submission">Bạn cần hỗ trợ ?</button>
            <div class="modal fade" id="submission" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Biểu mẫu yêu cầu hỗ trợ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <form action="?controller=support&action=ticket" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Họ và tên</label>
                                    <input type="text" name="name" id="" class="form-control" placeholder="Nhập tên">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="" class="form-control" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="">Câu hỏi</label>
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
    </div>
</div>