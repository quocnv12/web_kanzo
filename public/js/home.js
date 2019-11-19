$(document).ready(function () {
    $(".thumb img").fadeTo("slow", 1.0); // Độ mờ ban đầu của ảnh trước khi rê chuột (1.0 tức ảnh rỏ nhất, 0 là mờ nhất)
    $(".thumb img").hover(function () {
        $(this).fadeTo("slow", 0.8); // Độ mờ của ảnh khi rê chuột vào
    }, function () {
        $(this).fadeTo("slow", 1.0); // Độ mờ của ảnh khi không còn rê chuột vào ảnh
    });

    //menu
    $(".open-menu").on('click', function () {
        $('.menu_mobile, .bg_menu').show();
    });
    $(".close-menu, .bg_menu").on('click', function () {
        $('.bg_menu').hide();
        $('.menu_mobile').removeAttr('style');
    });

    $('.leftmenu > ul > li > i').on("click", function () {
        $('.leftmenu > ul > li.active').removeClass('active');
        $(".leftmenu > ul > li ul:visible").slideUp(500);
        if ($(this).next().is(":visible") == false) {
            $(this).next().slideDown(500);
            $(this).parent().addClass("active");
        }       
    });
    $(".popup").on('click', function () {
        $('.popup').hide();
    });
});

//menu fixed
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 330 || document.documentElement.scrollTop > 330) {
    document.getElementById("menu_fixed").style.top = "0";
  } else {
    document.getElementById("menu_fixed").style.top = "-80px";
  }
}


