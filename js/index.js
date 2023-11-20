$(function(){
    $('.room_select_list p').click(function(){
        let id = $(this).attr('id');
        $(".room_select_list p").removeClass("active");
        $(this).addClass("active");
        $(".room_view").removeClass("active");
        $("#"+id+"_content").addClass("active");
    });
})