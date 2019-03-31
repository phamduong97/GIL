$(document).ready(function () {
    loadComment();
    $('[name=commentBtn]').click(function () { 
        addComment();
    });
    $('#comment-box').bind('keypress',function(e){
        if(e.which==13){
            addComment();
        }
    })
});

function addComment(){
    if($('#comment-box').val()==""){
        alert("Không để trống bình luận.")
    }else{
        $.ajax({
            type: "get",
            url: "?controller=product&action=addcomment",
            data: {
                content: $('#comment-box').val(),
                pro_id: $('[name=product_id]').val()
            },
            dataType: "text",
            success: function (response) {
                $('#comment-box').val('')
                loadComment();
            }
        });
    }
}

function loadComment(){
    $.ajax({
        type: "get",
        url: "?controller=product&action=comment",
        data: {
            pro_id: $('[name=product_id]').val()
        },
        dataType: "json",
        success: function (response) {
            var comments = "";
            response.forEach(cmt => {
                comments+=`<div class="comment">
                <div class="c-avatar">
                    <img src="assets/image/sticker(100).png" alt="">
                </div>
                <div style="width:80%;display:inline-block">    
                    <div class="c-name">${cmt.name}</div>
                    <div class="c-text">${cmt.content}</div>
                    <div class="c-rate"><a onclick="deleteComment(this,${cmt.id})"><i class="fas fa-times"></i></a></div>
                </div>
                
            </div>`;
            });
            
            $('.comment-box').html(comments);
        }
    });
}
function deleteComment(dom,id){
    $.ajax({
        type: "get",
        url: "?controller=product&action=delcomment",
        data: {
            id: id
        },
        dataType: "text",
        success: function (response) {
            console.log(response)
            $(dom).parent().parent().parent().remove();
        }
    });
}