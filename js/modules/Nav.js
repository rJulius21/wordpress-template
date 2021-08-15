class Nav {
  constructor(nav, btns, boxes) {
    this.nav = document.querySelector(nav)
    this.toggles = this.nav.querySelectorAll(btns)
    this.dropboxes = document.querySelectorAll(boxes)
    this.events()
  }

  events() {
    console.log(`Log test: ${this.nav}`)

    this.toggles.forEach(this.openDropbox)
    this.toggles.forEach(this.closeDropbox)
  }

  openDropbox(item, index) {
    item.addEventListener("click", (e) => {
      const boxCount = index
      const box = document.querySelectorAll(".header-dropbox")[boxCount]
      box.classList.toggle("header-dropbox--open")
    })
  }

  closeDropbox(item, index) {
    document.addEventListener("click", (e) => {
      const boxCount = index
      const box = document.querySelectorAll(".header-dropbox")[boxCount]
      if (e.target != item && e.target != box) {
        box.classList.remove("header-dropbox--open")
      }
    })
  }
}

export default Nav