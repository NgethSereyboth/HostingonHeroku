import { Controller } from "stimulus"

export default class extends Controller {

  openPopUpModal = e => {

    let target = e.target
    let articleRow = target.closest ('.admin-article-row')

    if (!articleRow) {
      return
    } 

    let articleTitle 
      = articleRow.querySelector ('.admin-article-title')
    let articleContent 
      = articleRow.querySelector ('.admin-article-content')
    let modelPopUpTitle 
      = document.querySelector ('#pop-up-modal-title')
    let modelPopUpContent 
      = document.querySelector ('#pop-up-modal-content')

    switch (true) {

      case !articleTitle:
      case !articleContent:
      case !modelPopUpTitle:
      case !modelPopUpContent:
        return

      default:
        break

    }

    modelPopUpTitle.innerHTML 
      = articleTitle.getAttribute ('data-title')
    modelPopUpContent.innerHTML 
      = articleContent.getAttribute ('data-content')

  }

}