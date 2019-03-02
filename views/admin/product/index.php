<!-- Main -->
<div id="main" class="container-fluid bg-secondary">
    <div class="row">
        <div class="col-sm-12" id="content">
            <div class="card">
                <div class="card-header">
                    <form class="inline-form float-left" onsubmit="return false">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tìm kiếm</div>
                        </div>
                        <div class="dropdown">
                            <input type="text" name="txtsearch" id="searchbox" class="form-control" onkeyup="search(this)">
                            <div class="dropdown-menu">
                            </div>
                        </div>
                        
                    </div>
                    </form>
                    <a class="btn btn-dark float-right" href="?controller=admin&action=product/create">Thêm sản phẩm</a>
                </div>
                <div class="card-body">
                    <table class="table bordered table-striped">
                        <thead class="">
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng key</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="productList">
                            <?php
                                if(sizeof($data)==0){
                                    echo "<tr><td colspan=5 class='text-center'>Không có sản phẩm nào.</td></tr>";
                                }else{
                                    foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><a href="<?=rootPath."?controller=product&action=view&code=".$value['code']?>"><?=$value['name']?></a></td>
                                            <td><?=$value['code']?></td>
                                            <td><?=$value['price']?></td>
                                            <td>0</td>
                                            <td></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>