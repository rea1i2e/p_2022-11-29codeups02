<?php get_header(); ?>

<div class="works-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--works">
    <h1 class="page-title__text page-title__text--shadow">制作実績</h1>
  </div>
</div>

<div class="works-breadcrumb breadcrumb l-breadcrumb">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>

<div class="news__news-list news-list">
  <div class="news-list__l-inner l-inner l-inner--860">

    <ul class="articles__category-list category-list l-category-list">
      <li class="category-list__category-item is-active">
        <a href="<?php echo esc_url(home_url('/works')); ?>">all</a>
      </li>
      <?php
      $args = [
        'taxonomy' => 'works_category'
      ];
      $terms = get_terms($args);
      foreach ($terms as $term) :
      ?>
        <li class="category-list__category-item">
          <a href="<?php echo get_term_link($term); ?>">
            <?php echo $term->name; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php if (have_posts()) : ?>
      <ul class="works-lists__works-list works-list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="works-list__works-item works-item">
            <span class="works-item__category">
              <?php
              $terms = get_the_terms($post->ID, 'works_category');
              foreach ($terms as $term) {
                echo $term->name;
              }
              ?>
            </span>
            <a class="card__link" href="<?php the_permalink(); ?>">
              <div class="works-item__image">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php } else { ?>
                  <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
                <?php } ?>
              </div>
              <h2 class="works-item__title"><?php the_title(); ?></h2>
            </a>
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