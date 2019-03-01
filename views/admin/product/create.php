<div class="container">
    <div class="card">
        <div class="card-header">Giao diện thêm sản phẩm</div>
        <div class="card-body">
            <form action=""  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td class="w-50"><label for="">Tên sản phẩm</label><input name="name" type="text" class="form-control"></td>
                        <td class="w-25"><label for="">Mã sản phẩm</label><input name="code" type="text" class="form-control"></td>
                        <td class="w-25">
                            <label for="">Thể loại</label>
                            <select name="category" id="" class="form-control">
                                <option value="1">Hành động</option>
                                <option value="2">Nhập vai</option>
                                <option value="3">Phưu lưu</option>
                                <option value="4">Thể thao</option>
                                <option value="5">Kinh dị</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Giá sản phẩm</label>
                            <input name="price" type="text" class="form-control" placeholder="Giá gốc">
                            <input name="sale" type="text" class="form-control" placeholder="Phần trăm sale">
                        </td>
                        <td>
                            <label for="">Hãng sản xuất</label>
                            <select name="producer" id="" class="form-control">
                                <option value="1">Steam</option>
                                <option value="2">gameloft</option>
                                <option value="3">Bandai Namco</option>
                            </select>
                        </td>
                        <td>
                            <label for="">Ngày phát hành</label>
                            <input type="date" class="form-control" name="release">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=5>
                            <label for="">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="description"></textarea>
                            <script>CKEDITOR.replace('description')</script>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image[]" id="" class="form-control" multiple>
                        </td>
                        <td colspan=2>
                            <label for="">Cấu hình</label>
                            <input type="text" name="config[]" id="" class="form-control" placeholder="OS">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="Processor">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="RAM">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="Graphic Card">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="DirectX">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="Network">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="Storage">
                            <input type="text" name="config[]" id="" class="form-control" placeholder="Sound Card">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input type="submit" value="Xác nhận" name="btncreate" class="btn btn-success">
                        </td>
                        <td>
                            <input type="reset" value="Reset" class="btn btn-danger float-right">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>