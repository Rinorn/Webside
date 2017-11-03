$(document).ready(function(){
    $(".button_reply").click(function(){
        var test=$(this).parent().parent().children("pre:first").html();
        $("#text_post").val(test);
        window.location = 'forum.php#text_post';
    });
});
