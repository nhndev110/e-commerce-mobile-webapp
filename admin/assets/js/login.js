'use strict'
import { Toast } from './module/App.js'

const nodeInput = document.querySelectorAll('.form__input')
nodeInput.forEach((item) => {
  item.addEventListener('change', (e) => {
    if (e.target.value.length > 0) {
      e.target.classList.add('active-input')
    } else {
      e.target.classList.remove('active-input')
    }
  })
})

$('#signin__form').submit(function (e) {
  e.preventDefault()

  const emailInput = $('input[name="email"]').val()
  const passwordInput = $('input[name="password"]').val()

  $.ajax({
    url: './process_login_admin.php',
    type: 'POST',
    data: { email: emailInput, password: passwordInput },
    dataType: 'JSON',
    success: function (response) {
      if (response === 1) {
        window.location.href = './root/'
      } else {
        Toast({
          title: 'Thất Bại',
          msg: 'Đăng không thành công',
          type: 'error',
          duration: 3000,
        })
      }
    },
  })
})

$(function () {})
