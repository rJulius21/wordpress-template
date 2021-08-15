class Menu {
  constructor(nav, btns, boxes) {
    this.nav = document.querySelector(nav)
    this.toggles = this.nav.querySelectorAll(btns)
    this.dropboxes = document.querySelectorAll(boxes)
    this.events()
  }

  events() {
    this.toggles.forEach(this.openDropbox)
  }

  openDropbox(item, index) {
    item.addEventListener("click", (e) => {
      const boxCount = index
      const box = document.querySelectorAll(".p-menu")[boxCount]
      box.classList.toggle("p-menu--open")
    })
  }
}

export default Menu