$(document).ready(function(){
    $('.displaybtn1').click(function(){
        $('.displaybtn1').addClass('bg-dark').removeClass('bg-secondary')
        $('.displaybtn2').removeClass('bg-dark').addClass('bg-secondary')
        $('#row-list').show();
        $('#net-list').hide();
    })
    $('.displaybtn2').click(function(){
        $('.displaybtn2').addClass('bg-dark').removeClass('bg-secondary')
        $('.displaybtn1').removeClass('bg-dark').addClass('bg-secondary')
        $('#net-list').show();
        $('#row-list').hide();
    })
    $('#sbtn').click(function () { 
        $.ajax({
            type: "post",
            url: "?controller=product&action=getProducts",
            data: {
                "keyword":$('[name=keysearch]').val(),
                "category":$('[name=category]').val(),
                "inwhere": $('[name=inwhere]:checked').length==1?$('[name=inwhere]:checked').val():($('[name=inwhere]:checked').length==2?"1":"0"),
                "counter": $('[name=counter]').val(),
                "sortmode": $('[name=sortmode]').val()
            },
            dataType: "json",
            success: function (response) {
                search_res = response;
                if(response.length==0) return $('#net-list').html("<div class='text-center w-100'>Không tìm thấy sản phẩm phù hợp</div>");
                $('#net-list').html("");
                response.forEach(item => {
                    let it = `<div class="col-md-3">
                    <div class="product">
                        <div class="thumbnail">
                            <img src="assets/image/product/${item.image.split(";")[0]}" alt="Hình ảnh nào đó">
                            <a class="addcartbtn" onclick="addcart('${item.code}',undefined)">THÊM VÀO GIỎ</a>
                            <a href="" class="fastbuybtn">MUA NGAY</a>
                        </div>
                        <div class="label"><a href="?controller=product&action=view&code=${item.code}">${item.name}</a></div>
                        <div class="price">${item.price} VNĐ</div>
                        <div class="saleprice">${item.price - item.price*item.sale/100} VNĐ</div>
                    </div>
                </div>`
                    $('#net-list').append(it)
                });
            }
        });
    });
})
