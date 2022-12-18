<?php get_header(); ?>

<div class="overview-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--overview">
    <h1 class="page-title__text">企業概要</h1>
  </div>
</div>

<div class="content-breadcrumb breadcrumb l-breadcrumb">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>

<main class="overview-main">

  <div class="imformation__l-inner l-inner">
    <div class="overview-imformation imformation">
      <dl class="imformation__list data-list">
        <div class="data-list__row">
          <dt class="data-list__title">会社名</dt>
          <dd class="data-list__description">テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">設立</dt>
          <dd class="data-list__description">テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">資本金</dt>
          <dd class="data-list__description">テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">売上高</dt>
          <dd class="data-list__description">テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">代表者</dt>
          <dd class="data-list__description">テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">従業員数</dt>
          <dd class="data-list__description">テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">事業内容</dt>
          <dd class="data-list__description">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
        </div>
        <div class="data-list__row">
          <dt class="data-list__title">所在地</dt>
          <dd class="data-list__description">東京駅</dd>
        </div>

      </dl>
    </div>

    <div class="overview-map map">
      <iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.74779853335!2d139.74324421597936!3d35.658584838819536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1640210348798!5m2!1sja!2sjp" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</main>


<?php get_template_part('contact'); ?>

<?php get_footer(); ?>