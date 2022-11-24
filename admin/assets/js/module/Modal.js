const $ = document.querySelector.bind(document)

export default function Modal({ data, handleModal = () => {} }) {
  if (!$('.modal-container')) {
    let nodeModal = document.createElement('div')
    nodeModal.className = 'modal-container'
    nodeModal.innerHTML = data
    $('#wrapper').appendChild(nodeModal)

    handleModal()

    $('.modal .btn-close').onclick = function (e) {
      e.target.closest('.modal-container').remove()
    }
  }
}
