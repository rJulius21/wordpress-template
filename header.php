<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="/img/wb-black-hat-favicon.jpg"/>
    <?php wp_head(); ?>
  </head>
  <body class="body" >
    <div class="wrapper">
      <header class="header">

        <div class="header-brand">
          <div class="header-brand__logo-box"><img src="" alt="logo" class="header-brand__logo"></div>
          <h1 class="header-brand__heading">examplewebsitetitle.com</h1>
        </div>

        <div class="header-toggle-bar">
          <div id="header-toggle--nav" class="header-toggle-bar__toggle"><img src="<?php echo get_theme_file_uri('/img/png-icons/list2.png'); ?>" alt="" class="header-toggle-bar__icon"></div>
          <div id="header-toggle--user-nav" class="header-toggle-bar__toggle"><img src="<?php echo get_theme_file_uri('/img/png-icons/user.png'); ?>" alt="" class="header-toggle-bar__icon"></div>
          <div id="header-toggle--search" class="header-toggle-bar__toggle"><img src="<?php echo get_theme_file_uri('/img/png-icons/search.png'); ?>" alt="" class="header-toggle-bar__icon"></div>
        </div>

        <div id="header-nav" class="header-nav">
          <p class="header-nav__toggle">menu 1</p>
          <p class="header-nav__toggle">menu 2</p>
          <p class="header-nav__toggle">menu 2</p>
        </div>

        <div class="header-search" id="header-search">
          <input type="text" class="header-search__input">
          <input type="submit" class="header-search__submit">
        </div>

        <div id="header-user-nav" class="header-user-nav">
          <p class="header-user-nav__placeholder">user nav bar</p>
        </div>

      </header>
