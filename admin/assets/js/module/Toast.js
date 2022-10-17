// Create Toast Message
export default function Toast({
  title = '',
  msg = '',
  type = 'info',
  duration = 3000,
}) {
  const main = document.getElementById('toast-container')
  if (main) {
    const toast = document.createElement('div')
    const icons = {
      success: 'checkmark-circle-outline',
      info: 'alert-circle-outline',
      warning: 'information-circle-outline',
      error: 'alert-circle-outline',
    }
    const icon = icons[type]
    const delay = (duration / 1000).toFixed(2)

    // ======= Auto Remove =======
    const autoRemoveId = setTimeout(() => {
      main.removeChild(toast)
    }, duration + 600)

    // ======= User Remove =======
    toast.onclick = (e) => {
      if (e.target.closest('.toast__close')) {
        main.removeChild(toast)
        clearTimeout(autoRemoveId)
      }
    }

    toast.classList.add('toast', `toast--${type}`)
    toast.style.animation = `fadeInRight .3s ease-in-out, fadeOutRight .6s ease-in-out ${delay}s forwards`
    toast.innerHTML = `
      <div class="toast__header">
        <div class="toast__icon">
          <ion-icon name="${icon}"></ion-icon>
        </div>
        <h4 class="toast__title">${title}</h4>
        <div class="toast__close">
          <ion-icon name="close-outline"></ion-icon>
        </div>
      </div>
      <div class="toast__body">
        <p class="toast__msg">${msg}</p>
      </div>
    `
    main.appendChild(toast)
  }
}
