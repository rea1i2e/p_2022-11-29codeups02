<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__header-inner">
      <h1 class="header__site-logo site-logo">
        <a href="/">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/CodeUps.svg')); ?>" alt="CodeUps">
        </a>
      </h1>
      <nav class="header__nav">
        <ul class="header__nav-wrapper">
          <li class="header__nav-list u-mobile"><a class="header__nav-link" href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
          <li class="header__nav-list"><a class="header__nav-link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="header__nav-list"><a class="header__nav-link" href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></li>
          <li class="header__nav-list"><a class="header__nav-link" href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></li>
          <li class="header__nav-list"><a class="header__nav-link" href="<?php echo esc_url(home_url('/overview')); ?>">企業概要</a></li>
          <li class="header__nav-list"><a class="header__nav-link" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          <li class="header__nav-list"><a class="header__nav-link header__nav-link--white" href="/contact/">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <button type="button" class="header__hamburger-btn js-hamburger-btn">
        <span class="header__btn-line"></span>
      </button>
    </div>
  </header>