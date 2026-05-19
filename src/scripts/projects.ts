import { Carousel, Modal } from "bootstrap"

import projects from "../data/projects.json"

import { defaultLocale } from "../i18n/config"

document.addEventListener("DOMContentLoaded", () => {
  const projectsModalElement = document.querySelector(".js-projects-modal")
  if (!projectsModalElement) return
  const projectsModal = Modal.getOrCreateInstance(projectsModalElement)
  if (!projectsModal) return

  document.querySelectorAll(".js-project").forEach(element => element.addEventListener("click", async (event) => {
    event.preventDefault()
    const prefix = element.getAttribute("data-project-prefix")
    const project = projects.find(project => project.prefix === prefix)
    if (!project) return
    const response = await fetch(`/${window.Astro.currentLocale ?? defaultLocale}/projects/${prefix}`)
    const data = await response.text()
    const modalBody = projectsModalElement.querySelector(".modal-body")
    if (!modalBody) return
    modalBody.innerHTML = data
    const modalTitle = projectsModalElement.querySelector(".modal-title")
    if (!modalTitle) return
    modalTitle.innerHTML = `${project.name} (${project.location})`
    const carousel = projectsModalElement.querySelector(".carousel")
    if (!carousel) return
    new Carousel(carousel)
    projectsModal.show()
  }))
})