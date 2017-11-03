$(document).ready(function(){
    $(".button_reply").click(function(){
        var test=$(this).parent().parent().children("p:first").html();
        $("#text_post").val(test);
    });
});
