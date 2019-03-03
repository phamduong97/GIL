function addcart(code,obj){
    if(obj==undefined){
        $.ajax({
            url:"http://localhost/gil/?controller=product&action=addcart",
            type:"post",
            dataType:"text",
            data:{
                "code": code
            },
            success: function(data,statusCode){
                console.log(data);
                
            }
        })
    }else{
        $.ajax({
            url:"http://localhost/gil/?controller=product&action=addcart",
            type:"post",
            dataType:"text",
            data:{
                "code": code,
                "count": $(obj).parent().parent().children()[0].value
            },
            success: function(data,statusCode){
                window.location.href="http://localhost/gil/?controller=checkout&action=cart";
            }
        })
    }
}

function destroyCart(){
    $.ajax({
        url: "http://localhost/gil/?controller=checkout&action=destroycart",
        type:"post",
        dataType:"text",
        data:{
            "btndestroy": true
        },
        success: function(data,statcode){
            alert(data);
            window.location.href="?controller=product&action=search"
        }
    })
}

function addVoucher(){
    var vcode = $('input[name=vcode]').val();
    $.ajax({
        url:"http://localhost/gil/?controller=checkout&action=voucher",
        type:"post",
        dataType:"text",
        data:{
            "vcode": vcode,
            "setvcode": true
        },
        success: function(data,statcode){
            if(data==0){
                alert("Không thể áp dụng voucher code");
            }
            if(data==1){
                alert("Đã áp dụng voucher")
            }
            // console.log(data);
            
        }
    })
}