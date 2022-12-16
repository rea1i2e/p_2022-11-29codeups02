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
          <time class="page-heading__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time>
          <?php
          $terms = get_the_terms($post->ID, 'works_category');
          foreach ($terms as $term) {
            echo $term->name;
          }
          ?>
        </div>

        <div class="works-case__gallary-wrapper">
          <?php if (have_rows('images_works')) : ?>
            <div class="gallery">
              <div class="swiper-container gallery-slider">
                <!-- メイン -->
                <div class="swiper-wrapper">
                  <?php while (have_rows('images_works')) : the_row(); ?>
                    <div class="swiper-slide">
                      <img src="<?php the_sub_field('image_works'); ?>" alt="">
                    </div>
                  <?php endwhile; ?>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <!-- サムネイル -->
              <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                  <?php while (have_rows('images_works')) : the_row(); ?>
                    <div class="swiper-slide">
                      <img src="<?php the_sub_field('image_works'); ?>" alt="">
                    </div>
                  <?php endwhile; ?>

                </div>
              </div>
            </div>
          <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
          <?php endif; ?>
        </div>
        <?php
        $field_names = [
          'point_production',
          'point_coding',
          'point_others'
        ];
        foreach ($field_names as $field_name) :
        ?>
          <ul class="works-case__point-list points">
            <?php
            $field = get_field_object($field_name);
            if ($field['value']) :
            ?>
              <li class="points__item point">
                <h2 class="point__heading">
                  <?php echo $field['label']; ?>
                </h2>
                <p class="point__description">
                  <?php echo $field['value']; ?>
                </p>
              </li>
            <?php endif; ?>
          </ul>
        <?php endforeach; ?>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>