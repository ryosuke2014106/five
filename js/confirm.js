const params = new URLSearchParams(window.location.search);

document.getElementById("name").textContent =
  params.get("name") || "未入力";

document.getElementById("seat").textContent =
  params.get("seat") || "未選択";

document.getElementById("email").textContent =
  params.get("email") || "未入力";

document.getElementById("tel").textContent =
  params.get("tel") || "未入力";