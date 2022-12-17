<?php get_header(); ?>

<div class="breadcrumb l-breadcrumb l-breadcrumb--without-page-title">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>

<?php
//タクソノミースラッグ取得(単数)
$taxonomy_slug = array_keys(get_the_taxonomies());
//タクソノミー情報取得
$taxonomy = get_taxonomy($taxonomy_slug[0]);
//タクソノミー名取得
$taxonomy_name = $taxonomy->label;
// echo $taxonomy_name;
// echo $taxonomy_slug[0];
?>


<main class="works-detail__works-case works-case">
  <div class="works-case__l-inner l-inner l-inner--800">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="works-case__heading page-heading">
          <h1 class="page-heading__title"><?php the_title(); ?></h1>
          <time class="page-heading__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time>
          <div class="page-heading__category">
            <?php
            $terms = get_the_terms($post->ID, 'works_category');
            foreach ($terms as $term) {
              echo $term->name;
            }
            ?>
          </div>
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

    <div class="works-detail__relative-articles relative-articles l-relative-articles">
      <div class="relative-articles__l-inner l-inner">
        <h2 class="relative-articles__heading">関連記事</h2>

        <?php
        $current_post_id = get_the_ID();
        // var_dump($term->slug);
        $args = [
          'post_type' => $post_type,
          'tax_query' => [
            [
              'taxonomy' => $taxonomy_slug[0],
              'field' => 'slug',
              // 'terms' => $term->name // 記事のカテゴリ表示の際に取得したカテゴリ名を利用
              'terms' => $term->slug
            ],
          ],
          'posts_per_page' => 4,
          "post__not_in" => [$current_post_id], //表示中の投稿は除外
          'orderby' => 'rand'
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="relative-articles__item cards">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="cards__item cards__item--small card">
                <a class="card__link" href="<?php the_permalink(); ?>">
                  <div class="card__image image image--card">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php } else { ?>
                      <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
                    <?php } ?>
                  </div>
                  <div class="card__text-wrapper">
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <div class="card__category-date">
                      <div class="card__category"><?php echo $term->name; ?></div>
                      <div class="card__date"><?php echo get_the_date('Y.m.d') ?></div>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <!-- 投稿がない場合の内容 -->
          <p>関連記事はありません。</p>
        <?php endif; ?>

      </div>
    </div>


    <div class='wp-pagenavi l-wp-pagenavi'>
      <!-- <?php previous_post_link('%link', 'prev'); ?> -->
      <?php previous_post_link('%link', 'prev'); ?>
      <?php $post_type = get_post()->post_type; ?>
      <a class="wp-pagenavi__list" href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo $post_type; ?>一覧</a>
      <?php next_post_link('%link', 'next'); ?>
    </div>


  </div>
</main>

<?php get_footer(); ?>