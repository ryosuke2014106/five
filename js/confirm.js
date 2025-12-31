const params = new URLSearchParams(window.location.search);

document.getElementById("name").textContent =
  params.get("name") || "未入力";

document.getElementById("seat").textContent =
  params.get("seat") || "未選択";

document.getElementById("email").textContent =
  params.get("email") || "未入力";

document.getElementById("tel").textContent =
  params.get("tel") || "未入力";
document.getElementById('hidden_name').value = params.get('name');
document.getElementById('hidden_seat').value = params.get('seat');
document.getElementById('hidden_email').value = params.get('email');
document.getElementById('hidden_tel').value = params.get('tel');

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
