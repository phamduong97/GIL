function addcart(code,obj){
    if(obj==undefined){
        $.ajax({
            url:"http://localhost/gil/?controller=cart&action=addcart",
            type:"post",
            dataType:"text",
            data:{
                "code": code
            },
            success: function(data,statusCode){
                alert("Đã thêm vào giỏ");
                let num = parseInt($('#numproduct').html()) + 1;
                if(data!=1){
                    $('#numproduct').html(num);
                }
            }
        })
    }else{
        $.ajax({
            url:"http://localhost/gil/?controller=cart&action=addcart",
            type:"post",
            dataType:"text",
            data:{
                "code": code,
                "count": $(obj).parent().parent().children()[0].value
            },
            success: function(data,statusCode){
                window.location.href="http://localhost/gil/?controller=cart&action=view";
            }
        })
    }
}

function destroyCart(){
    $.ajax({
        url: "http://localhost/gil/?controller=cart&action=destroycart",
        type:"post",
        dataType:"text",
        data:{
            "btndestroy": true
        },
        success: function(data,statcode){
            // alert(data);
            window.location.href="http://localhost/gil/index.php";
        }
    })
}

function addVoucher(){
    var vcode = $('input[name=vcode]').val();
    $.ajax({
        url:"http://localhost/gil/?controller=cart&action=voucher",
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
            console.log(data);
            
        }
    })
}

$(document).ready(function(){
    if(sessionStorage.getItem('fmail')!=null){
        $('[name=friendmail]').val(sessionStorage.getItem('fmail'));
    }
    $('[name=friendmail]').bind('change',function(){
        sessionStorage.setItem('fmail',$(this).val());
        console.log(sessionStorage);
    })
})