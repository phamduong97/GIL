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
            dataType:"json",
            data:{
                "code": code,
                "count": $(obj).parent().parent().children()[0].value
            },
            success: function(data,statusCode){
                alert("Đã thêm vào rỏ hàng");
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
            window.location.href="?controller=product&action=search&tag=action"
        }
    })
}