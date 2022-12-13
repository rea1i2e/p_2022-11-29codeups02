<?php get_header(); ?>

<div class="content-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--content">
    <h1 class="page-title__text">事業内容</h1>
  </div>
</div>

<div class="content-breadcrumb breadcrumb l-breadcrumb">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>

<main class="content-description description">
    <div class="description__l-inner l-inner">
      <h2 class="description__main-title">企業理念</h2>
      <p class="description__main-text">説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
      <ol class="description__content-list content-list">
        <li class="content-list__content-item content-item" id="content01">
          <div class="content-item__image">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/content/content__image01.jpg')); ?>" alt="企業理念1のイメージ画像" class="content-item__image">
          </div>
          <div class="content-item__description">
            <h3 class="content-item__title">企業理念１</h3>
            <p class="content-item__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </li>
        <li class="content-list__content-item content-item" id="content02">
          <div class="content-item__image">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/content/content__image02.jpg')); ?>" alt="企業理念1のイメージ画像" class="content-item__image">
          </div>
          <div class="content-item__description">
            <h3 class="content-item__title">企業理念２</h3>
            <p class="content-item__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </li>
        <li class="content-list__content-item content-item" id="content03">
          <div class="content-item__image">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/content/content__image03.jpg')); ?>" alt="企業理念3のイメージ画像" class="content-item__image">
          </div>
          <div class="content-item__description">
            <h3 class="content-item__title">企業理念３</h3>
            <p class="content-item__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </li>
      </ol>
    </div>
  </main>

  <?php get_template_part('contact'); ?>

<?php get_footer(); ?>