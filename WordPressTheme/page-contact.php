<?php get_header(); ?>

<div class="contact-page-title page-title l-page-title">
  <div class="page-title__image page-title__image--contact">
    <h1 class="page-title__text">お問い合わせ</h1>
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

        <!-- <form action="">
          <dl class="mail-form__dl">
            <dt class="mail-form__dt">※会社名・団体名</dt>
            <dd class="mail-form__dd required">
              [text* company]
            </dd>
          </dl>

          <dl class="mail-form__dl">
            <dt class="mail-form__dt">※部署名</dt>
            <dd class="mail-form__dd required">
              [text* text-943 "テキストがはいります"]
            </dd>
          </dl>

          <dl class="mail-form__dl">
            <dt class="mail-form__dt">※お名前</dt>
            <dd class="mail-form__dd required">
              [text* name_1 "テキストがはいります"]
            </dd>
          </dl>

          <dl class="mail-form__dl">
            <dt class="mail-form__dt">※ふりがな</dt>
            <dd class="mail-form__dd required">
              [text* read_1 "テキストがはいります"]
            </dd>
          </dl>

          <dl class="mail-form__dl">
            <dt class="mail-form__dt">※メールアドレス</dt>
            <dd class="mail-form__dd required">
              [email* mail_address "テキストがはいります"]
            </dd>
          </dl>

          <dl class="mail-form__dl">
            <dt class="mail-form__dt">※お問い合わせ内容</dt>
            <dd class="mail-form__dd required">
              [textarea* contents "テキストがはいります"]
            </dd>
          </dl>


          <p id="form_submit" class="mail-form__submit">
            <input type="submit" id="form_submit_button" value="送信" />
          </p>
        </form> -->
      </div>
    </main>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('contact'); ?>

<?php get_footer(); ?>