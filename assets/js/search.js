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
    // $('#sbtn').click(function () { 
    //     $.ajax({
    //         type: "post",
    //         url: "?controller=product&action=getProducts",
    //         data: {
    //             "keyword":$('[name=keysearch]').val(),
    //             "category":$('[name=category]').val(),
    //             "inwhere": $('[name=inwhere]:checked').length==1?$('[name=inwhere]:checked').val():($('[name=inwhere]:checked').length==2?"1":"0"),
    //             "counter": $('[name=counter]').val(),
    //             "sortmode": $('[name=sortmode]').val()
    //         },
    //         dataType: "json",
    //         success: function (response) {
    //             search_res = response;
    //             if(response.length==0) return $('#net-list').html("<div class='text-center w-100'>Không tìm thấy sản phẩm phù hợp</div>");
    //             $('#net-list').html("");
    //             response.forEach(item => {
    //                 let it = `<div class="col-md-3">
    //                 <div class="product">
    //                     <div class="thumbnail">
    //                         <img src="assets/image/product/${item.image.split(";")[0]}" alt="Hình ảnh nào đó">
    //                         <a class="addcartbtn" onclick="addcart('${item.code}',undefined)">THÊM VÀO GIỎ</a>
    //                         <a href="" class="fastbuybtn">MUA NGAY</a>
    //                     </div>
    //                     <div class="label"><a href="?controller=product&action=view&code=${item.code}">${item.name}</a></div>
    //                     <div class="price">${item.price} VNĐ</div>
    //                     <div class="saleprice">${item.price - item.price*item.sale/100} VNĐ</div>
    //                 </div>
    //             </div>`
    //                 $('#net-list').append(it)
    //             });
    //         }
    //     });
    // });

    function psearch(){
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
                $('#row-list').html("");
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
                    let it2 = `<div class="product row">
                    <div class="thumbnail col-md-4">
                        <a href=""><img src="assets/image/product/${item.image.split(";")[0]}" alt="Hình ảnh sản phẩm"></a>
                    </div>
                    <div class="info col-md-8">
                        <div class="label"><a href="?controller=product&action=view&code=${item.code}">${item.name}</a></div>
                        <!-- <div class="description"></div> -->
                        <div class="price"><span class="p1">${item.price} VNĐ</span><span class="p2 ml-5">${item.price - item.price*item.sale/100} VNĐ</span></div>
                        <input type="button" name="fastbuybtn" value="Mua ngay" class="btn btn-danger">
                        <input type="button" name="addcartbtn" value="Thêm vào giỏ" class="btn btn-warning" onclick="addcart('${item.code}',undefined)">
                    </div>
                </div>`
                    $('#net-list').append(it)
                    $('#row-list').append(it2)
                });
            }
        });
    }

    $('input[name=keysearch]').bind("input",function () { 
        psearch();
    });
    $('[name=category]').bind("change",function () { 
        psearch();
    });
    $('input[name=inwhere]').bind("change",function () { 
        psearch();
    });
    $('input[name=counter]').bind("change",function () { 
        psearch();
    });
    $('[name=sortmode]').bind("change",function () { 
        psearch();
    });
    
    $('input[name=ticket_key]').bind('input', function () {
        $.ajax({
            type: "post",
            url: "?controller=support&action=search",
            data: {
                "keyword": $(this).val()
            },
            dataType: "json",
            success: function (res) {
                let temp = "";
                if(JSON.stringify(res)!='[]'){
                    for (const element in res) {
                        temp+=`<div class="item">
                        <div class="question" id="q${element}>" data-toggle="collapse" data-target="#a${element}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            ${res[element].question}
                        </div>
                        <div class="collapse" id="a${element}">
                            <div class="answer">${res[element].answer}</div>
                        </div>
                    </div>`
                    }
                }else{
                    temp = "Không có kết quả.";
                }
                $('#faqresult').html(temp);
            }
        });
    });
})
