<?php get_header(); ?>

<div class="blog-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--blog">
    <h1 class="page-title__text js-test">ブログ</h1>
  </div>
</div>

<div class="blog-breadcrumb breadcrumb l-breadcrumb">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>
<div class="news__news-list news-list">
  <div class="news-list__l-inner l-inner l-inner--860">

    <!-- タブメニュー -->
    <ul class="course_list">
      <li class="category-list__category-item is-active js-tab-button" data-class="all">all</li>
      <?php
      $args = [
        'taxonomy' => 'blog_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) :
      ?>
        <li class="category-list__category-item  js-tab-button" data-class="<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
      <?php endforeach; ?>
    </ul>


    <!-- タブコンテンツ -->
    <div class="articles__list cards">

      <!-- すべて -->
      <?php
      $args = [
        'post_type' => 'blog',
        'posts_per_page' => 9
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="cards__item card is-active js-tab-contents all">
              <a class="card__link" href="<?php the_permalink() ?>">
                <div class="card__image image image--card">
                  <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('course'); ?>
                  <?php } else { ?>
                    <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
                  <?php } ?>
                </div>
                <div class="card__text-wrapper">
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <p class="card__descript"><?php the_excerpt(); ?></p>
                  <div class="card__category-date">
                    <div class="card__category">
                      <?php
                      $terms = get_the_terms($post->ID, 'blog_category');
                      foreach ($terms as $term) {
                        echo $term->name;
                      }
                      ?>
                    </div>
                    <div class="card__date">
                      <?php echo get_the_date('Y.m.d') ?>
                    </div>
                  </div>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <!-- カテゴリ別 -->
      <?php
      $args = [
        'taxonomy' => 'blog_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) :
      ?>
        <?php
        $args = [
          'post_type' => 'blog',
          'tax_query' => [
            [
              'taxonomy' => 'blog_category',
              'field' => 'slug',
              'terms' => $term->slug
            ],
          ],
          'posts_per_page' => 3
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="cards__item card js-tab-contents <?php echo $term->slug; ?>">
                <a class="card__link" href="<?php the_permalink() ?>">
                  <div class="card__image image image--card">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail('course'); ?>
                    <?php } else { ?>
                      <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
                    <?php } ?>
                  </div>
                  <div class="card__text-wrapper">
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <p class="card__descript"><?php the_excerpt(); ?></p>
                    <div class="card__category-date">
                      <div class="card__category">
                        <?php
                        $terms = get_the_terms($post->ID, 'blog_category');
                        foreach ($terms as $term) {
                          echo $term->name;
                        }
                        ?>
                      </div>
                      <div class="card__date">
                        <?php echo get_the_date('Y.m.d') ?>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        <?php endforeach; ?>

    </div>
  </div>
</div>


<div class='l-wp-pagenavi wp-pagenavi'>
  <?php wp_pagenavi(); ?>
</div>

<?php get_template_part('contact'); ?>

<?php get_footer(); ?>