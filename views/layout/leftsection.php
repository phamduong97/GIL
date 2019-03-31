<div class="col-md-3" id="left-section">
    <div class="left-item" id="module1"><img width="100%" src="assets/image/123-512x512.png" alt=""></div>
    <div class="left-item" id="module2"><img width="100%" src="assets/image/123-512x512.png" alt=""></div>
    <div class="left-item" id="module3"><img width="100%" src="assets/image/123-512x512.png" alt=""></div>
    <div class="left-item" id="module4"><img width="100%" src="assets/image/123-512x512.png" alt=""></div>
    <div id="top-best">
        <h4 style="font-family:arial">Top 5 Game</h4>
        <div id="top5-list">
        <?php
            foreach ($top5 as $key => $value) {
                ?>
                    <div class="product">
                        <div class="thumbnail">
                            <img src="assets/image/product/<?php $thumbnail=explode(";",$value['image'])[0];echo $thumbnail;?>" alt="Hình ảnh nào đó">
                        </div>
                        <div class="label"><a href="<?=rootPath."?controller=product&action=view&code={$value['code']}"?>"><?=$value['name']?></a></div>
                    </div>
                <?php
            }
        ?>
        </div>
    </div>
</div>