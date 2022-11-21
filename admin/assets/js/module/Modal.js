const $ = document.querySelector.bind(document)

export default function Modal() {
  // $('.btn-close').onclick = function (e) {
  //   e.target.closest('.modal').style.display = 'none'
  // }
  $('.btn-close').onclick = function (e) {
    e.target.Animation()
    console.dir(e.target)
  }
}
