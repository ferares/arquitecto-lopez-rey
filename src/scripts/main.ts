document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".js-modal-fullscreen").forEach(element => element.addEventListener("click", () => {
    const modalId = element.getAttribute("data-modal")
    document.querySelector(`#${modalId} .modal-dialog`)?.classList.toggle("modal-fullscreen")
  }))
})