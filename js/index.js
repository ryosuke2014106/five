const swiper = new Swiper('.swiper', {
  loop: true, 
  slidesPerView: 1.2,
  initialSlide: 1, 
  centeredSlides: true,
  spaceBetween: 15,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

$(function() {
  $(".schedule_description").hide();
  $(".day").first().addClass("active");
  $("#September_1").show();

  $(".day").on("click", function() {
    let dayText = $(this).text();
    $(".schedule_description").hide();
    $(".day").removeClass("active");
    $(this).addClass("active");

    if(dayText === "9月1日") {
      $("#September_1").show();
    } else if(dayText === "9月2日") {
      $("#September_2").show();
    } else if(dayText === "9月3日") {
      $("#September_3").show();
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector("form");
  const submitBtn = form.querySelector("input[type='submit']");
  const requiredFields = form.querySelectorAll("[required]");

  function validateForm() {
    let isValid = true;
    requiredFields.forEach(field => {
      if (!field.value.trim()) {
        isValid = false;
      }
      if (field.type === "email" && !field.checkValidity()) {
        isValid = false;
      }
    });

    submitBtn.disabled = !isValid;
  }

  requiredFields.forEach(field => {
    field.addEventListener("input", validateForm);
  });

  validateForm();
});