<?php get_header(); ?>

<div class="mainview top-mainview">
  <div class="mainview__slide" style="background-image: url(assets/images/top/mv01.jpg)"></div>
  <div class="mainview__slide" style="background-image: url(assets/images/top/mv02.jpg)"></div>
  <div class="mainview__slide" style="background-image: url(assets/images/top/mv03.jpg)"></div>
  <!-- キャプチャ撮影用 -->
  <!-- <div class="mainview__slide0" style="background-image: url(assets/images/top/mv01.jpg)"></div> -->
  <div class="mainview__title">
    <h2 class="mainview__main-title">メインタイトルが入ります</h2>
    <p class="mainview__sub-title">サブタイトルが入ります</p>
  </div>
</div>

<!-- お知らせ ここから -->
<div class="top-news">
  <div class="top-news__l-inner l-inner">
    <div class="top-news__wrapper">
      <dl class="top-news__news-item news-item">
        <dt class="news-item__date">2020.07.20</dt>
        <dd class="news-item__category">お知らせ</dd>
        <dd class="news-item__title"><a class="news-item__link" href="">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a></dd>
      </dl>
      <div class="top-news__btn">
        <a href="/news/" class="btn btn--pc-small"><span class="btn--pc-small__txt">
            すべて見る
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- お知らせ ここまで -->

<!-- 事業内容 ここから -->
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
<!-- 事業内容 ここまで -->

<!-- 制作実績 ここから -->
<section class="works top-works" id="works">
  <div class="works__l-inner l-inner l-inner--sp-full">
    <div class="works__section-titles section-titles">
      <p class="section-titles__section-subtitle">Works</p><!-- /.section-subtitle -->
      <h2 class="section-titles__section-title section-titles__section-title--works">制作実績</h2>
    </div><!-- /.section-titles -->
  </div><!-- /.works__l-inner -->

  <div class="works__background">
    <div class="works__l-inner l-inner l-inner--sp-full">
      <div class="works__image-text-wrapper image-text-wrapper">
        <div class="image-text-wrapper__image-wrapper">
          <div class="image-text-wrapper__js-slick-slider js-slick-slider">
            <div class="js-slick-slider__image image image--with-text">
              <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/works-image01.jpg')); ?>" alt="制作実績のイメージ画像">
            </div>
            <div class="js-slick-slider__image image image--with-text">
              <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/works-image02.jpg')); ?>" alt="制作実績のイメージ画像">
            </div>
            <div class="js-slick-slider__image image image--with-text">
              <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/top/works-image03.jpg')); ?>" alt="制作実績のイメージ画像">
            </div>
          </div>
        </div><!-- /.image-text-wrapper__image-wrapper -->
        <div class="image-text-wrapper__description-wrapper description-wrapper">
          <h3 class="description-wrapper__title">メインタイトルが入ります</h3>
          <p class="description-wrapper__description">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="description-wrapper__btn">
            <a href="/works/" class="btn">詳しく見る</a>
          </div><!-- /.description-wrapper__btn -->
        </div><!-- /.description-wrapper -->
      </div><!-- /.image-text-wrapper -->
    </div><!-- /.works__background -->
  </div><!-- /.works__l-inner -->
</section>
<!-- 制作実績 ここまで -->


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
      <li class="cards__item card card-new">
        <a class="card__link" href="/blog/article001/">
          <div class="card__image image image--card">
            <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/card01.jpg')); ?>" alt="カードのイメージ画像">
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
      <li class="cards__item card">
        <a class="card__link" href="/blog/article001/">
          <div class="card__image image image--card">
          <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/card02.jpg')); ?>" alt="カードのイメージ画像">
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
      <li class="cards__item card">
        <a class="card__link" href="/blog/article001/">
          <div class="card__image image image--card">
          <img class="image__img" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/card03.jpg')); ?>" alt="カードのイメージ画像">
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
    <a href="/blog/" class="blog__btn btn">詳しく見る</a>
  </div><!-- /.blog__inner l-inner -->
</section><!-- /.blog -->

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