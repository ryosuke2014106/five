$(function () {
    let isOpen = false;
        $("#js_hamburger_menu").on("click", function () {
        if (isOpen) {
        $(".nav-menu").slideUp(300);
        $(this).removeClass("is-open");
        } else {
        $(".nav-menu").slideDown(300);
        $(this).addClass("is-open"); 
        }
        isOpen = !isOpen;
  });

    $(".nav-menu a").on("click", function () {
        $(".nav-menu").slideUp(300);
        $("#js_hamburger_menu").removeClass("is-open"); 
        isOpen = false;
  });
});