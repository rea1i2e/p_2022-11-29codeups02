<?php get_header(); ?>

<div class="blog-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--blog">
    <h1 class="page-title__text">ブログ</h1>
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
    <?php if (have_posts()) : ?>
      <dl class="top-news__news-items news-items">
        <?php while (have_posts()) : the_post(); ?>
          <div class="news-items__news-item news-item">

            <dt class="news-item__date">
              <?php echo get_the_date('Y.m.d') ?>
            </dt>
            <dd class="news-item__category">
              <?php
              $terms = get_the_terms($post->ID, 'blog_category');
              foreach ($terms as $term) {
                echo $term->name;
              }
              ?>
            </dd>
            <dd class="news-item__title">
              <a class="news-item__link news-item__link--yellow" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </dd>
          </div>
        <?php endwhile; ?>
      </dl>
  </div>
<?php endif; ?>
</div>


<div class='l-wp-pagenavi wp-pagenavi'>
  <?php wp_pagenavi(); ?>
</div>

<?php get_template_part('contact'); ?>

<?php get_footer(); ?>