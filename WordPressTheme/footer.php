<footer class="footer">
  <div class="footer__l-inner">
    <div class="footer__page-title">
      <a href="/">
        <img class="footer__site-logo" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/CodeUps.svg')); ?>" alt="CodeUps">
      </a>
    </div>
    <ul class="footer__nav">
      <li class="footer__nav-list u-mobile"><a class="footer__nav-link" href="/">トップ</a></li>
      <li class="footer__nav-list"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
      <li class="footer__nav-list"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></li>
      <li class="footer__nav-list"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></li>
      <li class="footer__nav-list"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/overview')); ?>">企業概要</a></li>
      <li class="footer__nav-list"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
      <li class="footer__nav-list"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
    </ul>
  </div>
  <p class="footer__copyright">&copy; 2021 CodeUps Inc.</p>
</footer>
<!-- ページトップへ戻るボタン -->
<a href="#" class="pagetop"></a>

<?php wp_footer(); ?>
</body>

</html>