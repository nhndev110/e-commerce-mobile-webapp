'use strict'

const $ = document.querySelector.bind(document)

export default function Modal() {
  return new Promise((res, rej) => {
    if ($('.modal-container')) {
      $('.modal .btn-close').onclick = e => {
        e.target.closest('.modal-container').style.display = 'none'
      }

      res()
    }
  })
}
