import "../css/style.css"

// Our modules / classes
import Nav from "./modules/Nav"
import Menu from "./modules/Menu"

import ModuleTemplate from "./modules/ModuleTemplate"

// Instantiate a new object using our modules / classes
const headerNav = new Nav('#header-nav', '.header-nav__toggle', '.header-dropbox')
const menuToggles = new Menu('#menuToggles', '.header-toggle-bar__toggle', '.p-menu')

const moduleTemplate = new ModuleTemplate()












/////////////////////////////////////////////////////////////////////////////
// Allow new JS and CSS to load in browser without a traditional page refresh
/////////////////////////////////////////////////////////////////////////////
if (module.hot) {
  module.hot.accept()
}
