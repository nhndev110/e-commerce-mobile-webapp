import { setAttributes } from './App.js'

// Declaration Toast
const containerToast = document.querySelector('.page-body-wrapper')
const nodeToast = document.createElement('div')
nodeToast.className = 'toast-container top-0 end-0 p-3'
containerToast.appendChild(nodeToast)

// Create Toast Message
export default function Toast(obj) {
  if (nodeToast) {
    const nodeChildToast = document.createElement('div')
    nodeChildToast.style.transition = 'all linear 0.3s'
    const iconsToast = {
      success: '<ion-icon name="checkmark-circle-outline"></ion-icon>',
      error: '<ion-icon name="alert-circle-outline"></ion-icon>',
      info: '<ion-icon name="information-circle-outline"></ion-icon>',
    }
    const delay = (obj.duration / 1000).toFixed(2)
    setAttributes(nodeChildToast, {
      class: 'toast show',
      role: 'alert',
      'aria-live': 'assertive',
      'aria-atomic': 'true',
    })
    nodeChildToast.style.animation = `fadeInRight 0.3s ease-out, fadeOutRight 0.3s ease-out ${delay}s forwards`
    nodeChildToast.innerHTML = `
      <div class="toast-header toast-${obj.status}">
          <div class="icon-toast fs-6 me-2">
              ${iconsToast[obj.status]}
          </div>
          <strong class="me-auto fs-6">${obj.title}</strong>
          <small>Ngay Bây Giờ</small>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
          ${obj.content}
      </div>
    `

    nodeToast.appendChild(nodeChildToast)
    setTimeout(() => nodeToast.removeChild(nodeChildToast), obj.duration + 600)
  }
}
