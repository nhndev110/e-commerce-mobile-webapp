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

  $('head').append(
    `<style>
      body::after {
        content: url(./assets/images/loading-gif.gif);
        position: absolute;
        z-index: 100;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: scale(0.2);
      }

      #wrapper::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.3);
      }
    </style>`
  )

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
      $('style').remove()
    },
  })
})

$(function () {})
