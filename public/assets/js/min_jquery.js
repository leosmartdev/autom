$(document).ready(function () {
    // dashboard start
    $(
        ".sub_menu,.PM_sub_menu,.F_sub_menu,.V_sub_menu,.E_sub_menu,.C_sub_menu "
    ).hide();
    $(".search_box i:first-child").click(function () {
        $(".sitebar,.colsed i").show(300);
        $(".search_box i:first-child").hide(300);
    });
    $(".colsed i").click(function () {
        $(".sitebar").hide(300);
        $(".search_box i:first-child").show(300);
    });
    $(".sub_item").click(function(){
        $(".sub_menu").slideToggle(300);
    });
    $(".PM_sub_item").click(function () {
         $(".PM_sub_menu").slideToggle(300);
     });
   $(".F_sub_item").click(function () {
       $(".F_sub_menu").slideToggle(300);
   });
   $(".V_sub_item").click(function () {
       $(".V_sub_menu").slideToggle(300);
   });
    $(".E_sub_item").click(function () {
        $(".E_sub_menu").slideToggle(300);
    });
    $(".C_sub_item").click(function () {
        $(".C_sub_menu").slideToggle(300);
    });
    // dashboard end
    //modam start
    $(".more_price_box,.moodal,.moodal2").hide();
    $(".more_price").click(function () {
        $(".more_price_box").slideToggle();
    });
    //$(".moodal").hide();
    $(".modalbtn").click(function () {
        $(".moodal").fadeOut();
    });
    $(".modalbtn2").click(function () {
        $(".moodal2").fadeOut();
    });
    $(".message2").click(function () {
        $(".moodal2").fadeIn();
    });
    $(".message").click(function () {
        $(".moodal").fadeIn();
    });
    //modam end
    $(".filter_items_box .span").click(function () {
        $(this).hide();
    });
});
