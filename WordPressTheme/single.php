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

        <?php
        //タクソノミースラッグ取得(単数)
        $taxonomy_slug = array_keys(get_the_taxonomies());
        //タクソノミー情報取得
        $taxonomy = get_taxonomy($taxonomy_slug[0]);
        //タクソノミー名取得
        $taxonomy_name = $taxonomy->label;
        echo $taxonomy_name;
        echo $taxonomy_slug[0];
        ?>

        <div class="article__heading page-heading">
          <h1 class="page-heading__title"><?php the_title(); ?></h1>
          <time class="page-heading__date" datetime="<?php echo get_the_date('Y-m-d') ?>"><?php echo get_the_date('Y/m/d') ?></time>
            <?php
            $terms = get_the_terms($post->ID, $taxonomy_slug[0]);
            foreach ($terms as $term) {
              echo '<span class="page-heading__category">' . $term->name . '</span>';
            }
            ?>
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
  <?php $post_type = get_post()->post_type; ?>
  <a class="wp-pagenavi__list" href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo $post_type; ?>一覧</a>
  <?php next_post_link('%link', 'next'); ?>
</div>



<?php endwhile; ?>
<?php endif; ?>

<div class="works-detail__relative-articles relative-articles l-relative-articles">
  <div class="relative-articles__l-inner l-inner">
    <h2 class="relative-articles__heading">関連記事</h2>

    <!-- できれば、表示中の投稿は除外したい -->
    <?php
    $current_post_id = get_the_ID();
    $args = [
      'post_type' => $post_type,
      'tax_query' => [
        [
          'taxonomy' => $taxonomy_slug[0],
          'field' => 'slug',
          'terms' => $term->name // 記事のカテゴリ表示の際に取得したカテゴリ名を利用
        ],
      ],
      'posts_per_page' => -1,
      "post__not_in" => [$current_post_id],
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