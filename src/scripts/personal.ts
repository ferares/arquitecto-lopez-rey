import { Modal, Carousel } from "bootstrap"

document.addEventListener("DOMContentLoaded", () => {
  const personalModalElement = document.querySelector(".js-personal-modal")
  if (!personalModalElement) return
  const personalModal = Modal.getOrCreateInstance(personalModalElement)
  const personalModalCarouselElement = personalModalElement.querySelector(".js-personal-modal-carousel")
  if (!personalModalCarouselElement) return
  const personalModalCarousel = new Carousel(personalModalCarouselElement)

  document.querySelectorAll(".js-personal-photo").forEach(element => element.addEventListener("click", (event) => {
    event.preventDefault()
    const index = Number(element.getAttribute("data-personal-index"))
    if (isNaN(index)) return
    personalModalCarousel.to(index)
    personalModal?.show()
  }))
})