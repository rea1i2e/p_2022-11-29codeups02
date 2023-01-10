<?php get_header(); ?>

<div class="contact-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--contact">
    <h1 class="page-title__text">その他の固定ページ</h1>
  </div>
</div>

<div class="content-breadcrumb breadcrumb l-breadcrumb">
  <div class="breadcrumb__l-inner l-inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <main class="contact-mail-form mail-form">
      <div class="mail-form__l-inner l-inner l-inner--696">

        <?php the_content() ?>

        
      </div>
    </main>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>