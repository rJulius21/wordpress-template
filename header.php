<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">

        <div class="header-brand">
          <div class="header-brand__logo-box"><img src="<?php echo get_theme_file_uri('/img/logo.png')?>" alt="logo" class="header-brand__logo"></div>
          <h1 class="header-brand__heading">examplewebsitetitle.com</h1>
        </div>

        <div id="menuToggles" class="header-toggle-bar">
          <button id="header-toggle--nav" class="header-toggle-bar__toggle"><img src="<?php echo get_theme_file_uri('/img/png-icons/list2.png'); ?>" alt="" class="header-toggle-bar__icon"></button>
          <button id="header-toggle--user-nav" class="header-toggle-bar__toggle"><img src="<?php echo get_theme_file_uri('/img/png-icons/user.png'); ?>" alt="" class="header-toggle-bar__icon"></button>
          <button id="header-toggle--search" class="header-toggle-bar__toggle"><img src="<?php echo get_theme_file_uri('/img/png-icons/search.png'); ?>" alt="" class="header-toggle-bar__icon"></button>
        </div>

        <div id="header-nav" class="header-nav p-menu">
          <button class="header-nav__toggle">menu 13</button>
          <button class="header-nav__toggle">don swah</button>
          <button class="header-nav__toggle">menu 3</button>
        </div>

        <div class="header-dropbox header-dropbox--1">
          <ul>
            <li>COOKIE CRISP</li>
            <li>two</li>
            <li>three</li>
            <li>four</li>
            <li>five</li>
            <li>six</li>
            <li>seven</li>
            <li>eight</li>
            <li>nine</li>
            <li>ten</li>
          </ul>
        </div>

        <div class="header-dropbox header-dropbox--2"> 
          <ul>
            <li>LUCKY CHARMS</li>
            <li>two</li>
            <li>three</li>
            <li>four</li>
            <li>five</li>
            <li>six</li>
            <li>seven</li>
            <li>eight</li>
            <li>nine</li>
            <li>ten</li>
          </ul>
        </div>

        <div class="header-dropbox header-dropbox--3">
          <ul>
            <li>FROOT LOOPS</li>
            <li>two</li>
            <li>three</li>
            <li>four</li>
            <li>five</li>
            <li>six</li>
            <li>seven</li>
            <li>eight</li>
            <li>nine</li>
            <li>ten</li>
          </ul>
        </div>

        <div id="header-user-nav" class="header-user-nav p-menu">
          <p class="header-user-nav__placeholder">user nav bar</p>
        </div>

        <div class="header-search p-menu" id="header-search">
          <input type="text" class="header-search__input">
          <input type="submit" class="header-search__submit">
        </div>

      </header>
