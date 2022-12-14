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


    <ul class="articles__category-list category-list l-category-list">
      <li class="category-list__category-item">
        <a href="<?php echo esc_url(home_url('/blog')); ?>">all</a>
      </li>
      <?php
      // 表示中ページのタームを取得
      $page_term = $term;

      $args = [
        'taxonomy' => 'blog_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) :
        if ($page_term == $term->slug) {
          $active = 'is-active';
        } else {
          $active = '';
        }
      ?>
        <li class="category-list__category-item <?php echo $active; ?>">
          <a href="<?php echo get_term_link($term); ?>">
            <?php echo $term->name; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php if (have_posts()) : ?>
      <ul class="articles__list cards">
        <?php while (have_posts()) : the_post(); ?>
          <li class="cards__item card">
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
                  <div class="card__date"><?php echo get_the_date('Y.m.d'); ?></div>
                </div>
              </div>
            </a>
            <?php
            $days = 2; //表示させたい日数
            $post_entry = get_the_time('U');
            $article = time() - ($days * 86400);
            if ($post_entry > $article) {
              echo '<span class="card__label-new">New</span>';
            }
            ?>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

  </div>
</div>


<div class='l-wp-pagenavi wp-pagenavi'>
  <?php wp_pagenavi(); ?>
</div>

<?php get_template_part('contact'); ?>

<?php get_footer(); ?>