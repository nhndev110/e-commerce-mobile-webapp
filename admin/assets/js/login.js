'use strict'
import { Toast, Loading } from './module/index.js'

const nodeInput = document.querySelectorAll('.form__input')
nodeInput.forEach(item => {
  item.addEventListener('change', e => {
    if (e.target.value.length > 0) {
      e.target.classList.add('active-input')
    } else {
      e.target.classList.remove('active-input')
    }
  })
})

$(function () {})

$('#signin__form').submit(function (e) {
  e.preventDefault()

  Loading('body', './assets/images/loading1.gif', 'black', '300px', 'center')

  const emailInput = $('input[name="email"]').val()
  const passwordInput = $('input[name="password"]').val()

  $.ajax({
    url: './process-login-admin.php',
    type: 'POST',
    data: { email: emailInput, password: passwordInput },
    dataType: 'JSON',
    success(response) {
      response['login']
        ? (window.location.href = './root/')
        : Toast({
            title: 'Thất Bại',
            msg: 'Mật khẩu hoặc email không chính xác',
            type: 'error',
            duration: 5000,
          })
    },
    error(xhr) {
      Toast({
        title: 'Thất Bại',
        msg: xhr.responseText,
        type: 'error',
        duration: 5000,
      })
    },
    complete() {
      $('.loading').remove()
    },
  })
})
