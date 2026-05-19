import { Carousel } from "bootstrap"

document.addEventListener("DOMContentLoaded", () => {
  const lettersModalElement = document.querySelector(".js-letters-modal")
  if (!lettersModalElement) return
  const lettersModalCarouselElement = lettersModalElement.querySelector(".js-letters-modal-carousel")
  if (!lettersModalCarouselElement) return
  const lettersModalCarousel = new Carousel(lettersModalCarouselElement)

  lettersModalElement.addEventListener("show.bs.modal", (event) => {
    const index = Number(event.relatedTarget?.getAttribute("data-index"))
    if (isNaN(index)) return
    lettersModalCarousel?.to(index)
  })
})