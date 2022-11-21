const $ = document.querySelector.bind(document)

export default function Modal() {
  $('.btn-close').onclick = function (e) {
    e.target.closest('.modal').remove()
  }
}
