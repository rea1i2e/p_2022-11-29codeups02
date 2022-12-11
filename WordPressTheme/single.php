<?php get_header(); ?>

<div class="blog-breadcrumb breadcrumb l-breadcrumb l-breadcrumb--detail-page">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>


<article class="blog-article article">
  <div class="article__l-inner l-inner l-inner--800">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="article__heading page-heading">
          <h1 class="page-heading__title"><?php the_title(); ?></h1>
          <time class="page-heading__date" datetime="<?php echo get_the_date('Y-m-d') ?>"><?php echo get_the_date('Y/m/d') ?></time>
          <?php if (is_singular('post')) { ?>
            <span class="page-heading__category"><?php the_category(); ?></span>
          <?php } else { ?>
            <?php
            $terms = get_the_terms($post->ID, 'blog_category');
            foreach ($terms as $term) {
              echo '<span class="page-heading__category">' . $term->name . '</span>';
            }
            ?>
          <?php } ?>
        </div>
        <div class="article__image">
          <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('full'); ?>
          <?php } else { ?>
            <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
          <?php } ?>
        </div>

        <div class="article__post">
          <?php the_content(); ?>
        </div>



  </div>
</article>

<div class='wp-pagenavi l-wp-pagenavi'>
  <!-- <?php previous_post_link('%link', 'prev'); ?> -->
  <?php previous_post_link('%link', 'prev'); ?>
  <?php if (is_singular('post')) { ?>
    <a class="wp-pagenavi__list" href="<?php echo get_post_type_archive_link('post'); ?>">一覧</a>
    <?php } elseif (is_singular('blog')) { ?>
      <a class="wp-pagenavi__list" href="<?php echo get_post_type_archive_link('blog'); ?>">一覧</a>
  <?php } ?>


  <?php next_post_link('%link', 'next'); ?>
</div>



<?php endwhile; ?>
<?php endif; ?>

<div class="works-detail__relative-articles relative-articles l-relative-articles">
  <div class="relative-articles__l-inner l-inner">
    <a href="#" class="relative-articles__btn btn">関連記事</a>
    <ul class="relative-articles__item cards">
      <li class="cards__item cards__item--small card">
        <a class="card__link" href="">
          <div class="card__image image image--card">
            <img src="/assets/images/common/card06.jpg" alt="カードのイメージ画像" class="image__img">
          </div>
          <div class="card__text-wrapper">
            <h3 class="card__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card__descript">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="card__category-date">
              <div class="card__category">カテゴリ</div>
              <div class="card__date">2021.07.20</div>
            </div>
          </div>
        </a>
      </li>
      <li class="cards__item cards__item--small card">
        <a class="card__link" href="">
          <div class="card__image image image--card">
            <img src="/assets/images/common/card07.jpg" alt="カードのイメージ画像" class="image__img">
          </div>
          <div class="card__text-wrapper">
            <h3 class="card__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card__descript">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="card__category-date">
              <div class="card__category">カテゴリ</div>
              <div class="card__date">2021.07.20</div>
            </div>
          </div>
        </a>
      </li>
      <li class="cards__item cards__item--small card">
        <a class="card__link" href="">
          <div class="card__image image image--card">
            <img src="/assets/images/common/card08.jpg" alt="カードのイメージ画像" class="image__img">
          </div>
          <div class="card__text-wrapper">
            <h3 class="card__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card__descript">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="card__category-date">
              <div class="card__category">カテゴリ</div>
              <div class="card__date">2021.07.20</div>
            </div>
          </div>
        </a>
      </li>
      <li class="cards__item cards__item--small card">
        <a class="card__link" href="">
          <div class="card__image image image--card">
            <img src="/assets/images/common/card09.jpg" alt="カードのイメージ画像" class="image__img">
          </div>
          <div class="card__text-wrapper">
            <h3 class="card__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card__descript">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="card__category-date">
              <div class="card__category">カテゴリ</div>
              <div class="card__date">2021.07.20</div>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </div>

</div>



<section class="contact" id="contact">
  <div class="contact__l-inner l-inner">
    <div class="contact__section-titles section-titles">
      <p class="section-titles__section-subtitle">Contact</p>
      <h2 class="section-titles__section-title section-titles__section-title--contact">お問い合わせ</h2>
    </div>
    <p class="contact__descript">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    <a href="/contact/" class="btn contact__btn">お問い合わせへ</a>
  </div>
</section>

<?php get_footer(); ?>