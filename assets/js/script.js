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

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    var time = 400;
    var header = $("header").innerHeight();
    var target = $(this.hash);
    console.log(target);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    console.log(targetY);
    $("html,body").animate({
      scrollTop: targetY
    }, time, "swing");
    return false;
  });

  // ハンバーガー
  $(".js-hamburger-btn").on("click", function () {
    if ($(".header__btn-line").hasClass("open")) {
      $(".header__btn-line").removeClass("open");
      $(".header__nav").css("animation", "disappear 0.3s forwards");
      $("html,body").css("overflow", "initial");
    } else {
      $(".header__btn-line").addClass("open");
      $(".header__nav").css("animation", "appear 0.3s forwards");
      $("html,body").css("overflow", "hidden");
    }
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

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
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
});

// swiper
//メイン
var slider = new Swiper(".gallery-slider", {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 8,
  //スライドの枚数と同じ値を指定
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  autoplay: {
    delay: 3000
  }
});

//サムネイル
var thumbs = new Swiper(".gallery-thumbs", {
  slidesPerView: "auto",
  // spaceBetween: 10,
  // spaceBetween: 24,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true
});

//4系～
//メインとサムネイルを紐づける
slider.controller.control = thumbs;
thumbs.controller.control = slider;