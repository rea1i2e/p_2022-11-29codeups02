<?php get_header(); ?>

<div class="mainview top-mainview">
  <div class="mainview__slide" style="background-image: url(<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/top/mv01.jpg)"></div>
  <div class="mainview__slide" style="background-image: url(<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/top/mv02.jpg)"></div>
  <div class="mainview__slide" style="background-image: url(<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/top/mv03.jpg)"></div>
  <div class="mainview__title">
    <h2 class="mainview__main-title">メインタイトルが入ります</h2>
    <p class="mainview__sub-title">サブタイトルが入ります</p>
  </div>
</div>

<div class="top-news">
  <div class="top-news__l-inner l-inner">
    <div class="top-news__wrapper">
      <?php if (have_posts()) : ?>
        <dl class="top-news__news-items news-items">
          <?php while (have_posts()) : the_post(); ?>
            <div class="news-items__news-item news-item">
              <dt class="news-item__date"><?php echo get_the_date('Y.m.d') ?></dt>
              <dd class="news-item__category"><?php the_category(); ?></dd>
              <dd class="news-item__title"><a class="news-item__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
            </div>
          <?php endwhile; ?>
        </dl>
        <p><?php the_content(); ?></p>
        <div class="top-news__btn">
          <a href="/news/" class="btn btn--pc-small"><span class="btn--pc-small__txt">
              すべて見る
            </span>
          </a>
        </div>
      <?php else : ?>
        <p>お知らせはありません。</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<section class="content top-content" id="content">
  <div class="content__l-inner l-inner">
    <div class="content__section-titles section-titles">
      <p class="section-titles__section-subtitle">Content</p><!-- /.section-subtitle -->
      <h2 class="section-titles__section-title section-titles__section-title--content">事業内容</h2>
    </div><!-- /.section-titles -->
  </div><!-- /.l-inner -->
  <ul class="content__wrapper">

    <li class="content__list">
      <a href="/content/" class="content__link">
        <div class="content__image image image--full">
          <div class="image__div image__div--image00">
            <h3 class="image__title">経営理念ページへ</h3><!-- /.image__title -->
          </div>
        </div><!-- /.image -->
      </a>
    </li>
    <li class="content__list">
      <a href="/content/index.html#content01" class="content__link">
        <div class="content__image image image--full">
          <div class="image__div image__div--image01">
            <h3 class="image__title">理念1へ</h3><!-- /.image__title -->
          </div>
        </div><!-- /.image -->
      </a>
    </li>
    <li class="content__list">
      <a href="/content/index.html#content02" class="content__link">
        <div class="content__image image image--full">
          <div class="image__div image__div--image02">
            <h3 class="image__title">理念2へ</h3><!-- /.image__title -->
          </div>
        </div><!-- /.image -->
      </a>
    </li>
    <li class="content__list">
      <a href="/content/index.html#content03" class="content__link">
        <div class="content__image image image--full">
          <div class="image__div image__div--image03">
            <h3 class="image__title">理念3へ</h3><!-- /.image__title -->
          </div>
        </div><!-- /.image -->
      </a>
    </li>


  </ul><!-- /.content__wrapper -->
</section>

<section class="works top-works" id="works">
  <div class="works__l-inner l-inner l-inner--sp-full">
    <div class="works__section-titles section-titles">
      <p class="section-titles__section-subtitle">Works</p><!-- /.section-subtitle -->
      <h2 class="section-titles__section-title section-titles__section-title--works">制作実績</h2>
    </div><!-- /.section-titles -->
  </div><!-- /.works__l-inner -->

  <!-- テスト表示2 -->
  <?php
  $args = [
    'post_type' => 'works',
    'posts_per_page' => 3,
  ];
  $the_query = new WP_Query($args);
  ?>

  <div class="works__background">
    <div class="works__l-inner l-inner l-inner--sp-full">
      <div class="works__image-text-wrapper image-text-wrapper">
        <div class="image-text-wrapper__image-wrapper">
          <div class="image-text-wrapper__js-slick-slider js-slick-slider">
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php
                $rows = get_field('images_works'); // すべてのrow（内容・行）をいったん取得する
                $first_row = $rows[0]; // 1行目だけを$first_rowに格納しますよ～
                $first_row_image = $first_row['image_works']; // get the sub field value 
                ?>
                <div class="js-slick-slider__image image image--with-text">
                  <img class="image__img" src="<?php echo $first_row_image; ?>" alt="制作実績のイメージ画像" />
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div><!-- /.image-text-wrapper__image-wrapper -->
        <div class="image-text-wrapper__description-wrapper description-wrapper">
          <h3 class="description-wrapper__title">カスタム投稿の制作実績から最新のものを3枚取得して表示</h3>
          <p class="description-wrapper__description">
            制作実績詳細ページは、カスタム投稿タイプで作成。<br />
            そのページでは、カスタムフィールドを作成して、制作実績のイメージ画像、その他制作のポイントを説明する文章を入力するためのフィールドを3つ作成した。<br />
            イメージ画像は、繰り返しカスタムフィールドを利用することで、任意の枚数登録できるようにした。<br />
            トップページでは、サブクエリを利用して、制作実績の投稿タイプのデータを3件取得し、繰り返しカスタムフィールドの1枚目の画像だけをスライダーで表示。
          </p>
          <div class="description-wrapper__btn">
            <a href="/works/" class="btn">詳しく見る</a>
          </div><!-- /.description-wrapper__btn -->
        </div><!-- /.description-wrapper -->
      </div><!-- /.image-text-wrapper -->
    </div><!-- /.works__background -->
  </div><!-- /.works__l-inner -->
</section>


<section class="overview top-overview" id="overview">
  <div class="overview__l-inner l-inner l-inner--sp-full">
    <div class="overview__section-titles section-titles">
      <p class="section-titles__section-subtitle section-titles__section-subtitle--overview">Overview</p>
      <!-- /.section-subtitle -->
      <h2 class="section-titles__section-title section-titles__section-title--overview">企業概要</h2>
    </div><!-- /.section-titles -->
  </div><!-- /.overview__l-inner -->

  <div class="overview__background">
    <div class="overview__l-inner l-inner l-inner--sp-full">
      <div class="overview__image-text-wrapper image-text-wrapper">
        <div class="image-text-wrapper__image-wrapper">
          <div class="image-text-wrapper__image image image--with-text">
            <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/overview-image.jpg')); ?>" alt="企業概要のイメージ写真">
          </div><!-- /.image -->
        </div><!-- /.image-text-wrapper__image-wrapper -->
        <div class="image-text-wrapper__description-wrapper description-wrapper">
          <h3 class="description-wrapper__title">メインタイトルが入ります</h3>
          <p class="description-wrapper__description">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="description-wrapper__btn">
            <a href="/overview/" class="btn">詳しく見る</a>
          </div><!-- /.description-wrapper__btn -->
        </div><!-- /.description-wrapper -->
      </div><!-- /.image-text-wrapper -->
    </div><!-- /.overview__l-inner -->
  </div><!-- /.overview__background -->
</section><!-- /.overview -->


<section class="blog top-blog" id="blog">
  <div class="blog__inner l-inner">
    <div class="blog__section-titles section-titles">
      <p class="section-titles__section-subtitle section-titles__section-subtitle--blog">Blog</p>
      <!-- /.section-subtitle -->
      <h2 class="section-titles__section-title section-titles__section-title--blog">ブログ</h2>
    </div>
    <ul class="blog__list cards">
      <?php
      $args = [
        'post_type' => 'blog',
        'posts_per_page' => 3
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="cards__item card card-new">
            <a class="card__link" href="<?php the_permalink(); ?>">
              <div class="card__image image image--card">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php } else { ?>
                  <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.png')); ?>" alt="no image">
                <?php } ?>
              </div>
              <div class="card__text-wrapper">
                <h3 class="card__title">
                  <?php the_title(); ?>
                </h3>
                <div class="card__descript">
                  <?php the_excerpt(); ?>
                </div>
                <div class="card__category-date">
                  <?php
                  $terms = get_the_terms($post->ID, 'blog_category');
                  foreach ($terms as $term) {
                    echo '<div class="card__category">' . $term->name . '</div>';
                  }
                  ?>

                  <div class="card__date">
                    <?php echo get_the_date('Y.m.d') ?>
                  </div>
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
      <?php else : ?>
        <!-- 投稿がない場合の内容 -->
      <?php endif; ?>
    </ul>
    <a href="/blog/" class="blog__btn btn">詳しく見る</a>
  </div><!-- /.blog__inner l-inner -->
</section><!-- /.blog -->

<?php get_template_part('contact'); ?>


<?php get_footer(); ?>