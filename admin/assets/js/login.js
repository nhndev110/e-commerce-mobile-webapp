"use strict";
import { SubmitForm } from "./module/App.js";

const nodeInput = document.querySelectorAll(".form__input");
nodeInput.forEach((item) => {
  item.addEventListener("change", (e) => {
    if (e.target.value.length > 0) {
      e.target.style.borderBottom = "2px solid #ffa977";
    } else {
      e.target.style.borderBottom = "2px solid #ffd6be";
    }
  });
});

$("#signin__form").submit(function (e) {
  e.preventDefault();

  const emailInput = $('input[name="email"]').val();
  const passwordInput = $('input[name="password"]').val();

  $.ajax({
    url: "./process_login_admin.php",
    type: "POST",
    data: { email: emailInput, password: passwordInput },
    dataType: "JSON",
    success: function (response) {
      if (response === 1) {
        window.location.href = "./root/";
      }
    },
  });
});

$(function () {});
