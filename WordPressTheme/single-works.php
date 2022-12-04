<?php get_header(); ?>

<div class="breadcrumb l-breadcrumb l-breadcrumb--without-page-title">
  <div class="breadcrumb__l-inner l-inner">
    <ol class="breadcrumb__list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
      <li class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/">
          <span itemprop="name">トップ</span>
        </a>
        <meta itemprop="position" content="1">
      </li>
      <li class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/works/">
          <span itemprop="name">制作実績</span>
        </a>
        <meta itemprop="position" content="2">
      </li>
      <li class="breadcrumb__item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/works/works-detail001/">
          <span itemprop="name">制作実績詳細</span>
        </a>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</div>

<main class="works-detail__works-case works-case">
  <div class="works-case__l-inner l-inner l-inner--800">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="works-case__heading page-heading">
          <h1 class="page-heading__title"><?php the_title(); ?></h1>
          <time class="page-heading__date" datetime="2020-06-13">2020/06/13</time>
<?php
$terms = get_the_terms($post->ID, 'works_category');
foreach ($terms as $term) {
  echo '<span class="page-heading__category">' . $term->name . '</span>';
}
?>
                  </div>
        <div class="works-case__gallary-wrapper">
          <div class="gallery">
            <div class="swiper-container gallery-slider">
              <!-- メイン -->
              <div class="swiper-wrapper">
                <?php if (have_rows('images_works')) : ?>
                  <?php while (have_rows('images_works')) : the_row(); ?>
                    <div class="swiper-slide">
                      <img src="<?php the_sub_field('image_works'); ?>" alt="">
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>

            <!-- サムネイル -->
            <div class="swiper-container gallery-thumbs">
              <div class="swiper-wrapper">
                <?php if (have_rows('images_works')) : ?>
                  <?php while (have_rows('images_works')) : the_row(); ?>
                    <div class="swiper-slide">
                      <img src="<?php the_sub_field('image_works'); ?>" alt="">
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
        <ul class="works-case__point-list points">
          <li class="points__item point">
            <p class="point__description">
              <?php the_field('point_production'); ?>
            </p>
          </li>
          <li class="points__item point">
            <p class="point__description">
              <?php the_field('point_design'); ?>
            </p>
            </p>
          </li>
          <li class="points__item point">
            <p class="point__description">
              <?php the_field('point_others'); ?>
            </p>
            </p>
          </li>
        </ul>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>