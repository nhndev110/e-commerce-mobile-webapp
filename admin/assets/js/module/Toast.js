// Create Toast Message
export default function Toast({
  title = "",
  msg = "",
  type = "info",
  duration = 3000,
}) {
  const main = document.getElementById("toast-container");
  if (main) {
    const toast = document.createElement("div");
    const icons = {
      success: '<ion-icon name="checkmark-circle-outline"></ion-icon>',
      info: '<ion-icon name="alert-circle-outline"></ion-icon>',
      warning: '<ion-icon name="information-circle-outline"></ion-icon>',
      error: '<ion-icon name="information-circle-outline"></ion-icon>',
    };
    const icon = icons[type];
    const delay = (duration / 1000).toFixed(2);

    // ======= Auto Remove =======
    const autoRemoveId = setTimeout(() => {
      main.removeChild(toast);
    }, duration + 600);

    // ======= User Remove =======
    toast.onclick = (e) => {
      if (e.target.closest(".toast__close")) {
        main.removeChild(toast);
        clearTimeout(autoRemoveId);
      }
    };

    toast.classList.add("toast", `toast--${type}`);
    toast.style.animation = `slideInLeft .3s ease-in-out, faceOut .6s ease-in-out ${delay}s forwards`;
    toast.innerHTML = `
      <div class="toast__header">
        <div class="toast__icon">
          ${icon}
        </div>
        <div class="toast__close">
          <ion-icon name="close-outline"></ion-icon>
        </div>
      </div>
      <div class="toast__body">
        <h4 class="toast__title">${title}</h4>
        <p class="toast__msg">${msg}</p>
      </div>
    `;
    main.appendChild(toast);
  }
}
