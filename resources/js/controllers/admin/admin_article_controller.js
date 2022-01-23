import { Controller } from "stimulus"

export default class extends Controller {

  openPopUpModal = e => {

    e.preventDefault()
    console.log (e)

  }

}