"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".pagetop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 300, "swing");
    return false;
  });

  // ページ内リンクで移動するとき、ヘッダーの高さ分を調整
  var headerHeight = $("header").outerHeight(); // ヘッダーについているID、クラス名など、余白を開けたい場合は + 10を追記する。
  var urlHash = location.hash; // ハッシュ値があればページ内スクロール
  if (urlHash) {
    // 外部リンクからのクリック時
    $("body,html").stop().scrollTop(0); // スクロールを0に戻す
    setTimeout(function () {
      // ロード時の処理を待ち、時間差でスクロール実行
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $("body,html").stop().animate({
        scrollTop: position
      }, 100); // スクロール速度ミリ秒
    }, 100);
  }
  $('a[href^="#"]').click(function () {
    // 通常のクリック時
    var href = $(this).attr("href"); // ページ内リンク先を取得
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $("body,html").stop().animate({
      scrollTop: position
    }, 100); // スクロール速度ミリ秒
    return false; // #付与なし、付与したい場合は、true
  });

  // ハンバーガー
  $(".js-hamburger-btn").on("click", function () {
    $("nav").css("backgroundcolor", "yellow");
    if ($(".header__nav").hasClass("open")) {
      $(".header__nav").css("animation", "disappear 0.3s forwards");
      $("html,body").css("overflow", "initial");
    } else {
      $(".header__nav").css("animation", "appear 0.3s forwards");
      $("html,body").css("overflow", "hidden");
    }
    $(".header__nav , .header__btn-line").toggleClass("open");
  });
  // ヘーダーとpagetopボタン
  $(window).on("scroll", function () {
    if (jQuery(".mainview, .page-title").height() < jQuery(this).scrollTop()) {
      jQuery(".header").addClass("js-change-background-color");
      jQuery(".pagetop").addClass("js-pagetop-appear");
    } else {
      jQuery(".header").removeClass("js-change-background-color");
      jQuery(".pagetop").removeClass("js-pagetop-appear");
    }
  });

  // slick
  $(".js-slick-slider").slick({
    arrows: false,
    autoplay: true,
    dots: true,
    dotsClass: "js-costum-dots",
    // dotsのクラス名を変更
    swipe: true
  });

  // WordPressのツールバー位置を下部へ
  $('html').css({
    'cssText': 'margin-top: 0 !important;'
  });
  $("#wpadminbar").css({
    top: "auto",
    bottom: "0"
  });
});

// swiper
//メイン
var slider = new Swiper('.gallery-slider', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 8,
  //スライドの枚数と同じ値を指定
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  autoplay: {
    delay: 3000
  }
});

// //サムネイル
var thumbs = new Swiper('.gallery-thumbs', {
  slidesPerView: 'auto',
  // spaceBetween: 10,
  // spaceBetween: 24,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true
});

// //4系～
// //メインとサムネイルを紐づける
slider.controller.control = thumbs;
thumbs.controller.control = slider;