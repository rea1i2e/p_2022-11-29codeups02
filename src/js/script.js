jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  $("#future_date").countdowntimer({
    dateAndTime: "2023/01/01 00:00:00",
    size: "lg",
  });

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
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    console.log(target);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    console.log(targetY);
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
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
    dotsClass: "js-costum-dots", // dotsのクラス名を変更
    swipe: true,
  });
});

// swiper
//メイン
var slider = new Swiper(".gallery-slider", {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 8, //スライドの枚数と同じ値を指定
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
  },
});

//サムネイル
var thumbs = new Swiper(".gallery-thumbs", {
  slidesPerView: "auto",
  // spaceBetween: 10,
  // spaceBetween: 24,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true,
});

//4系～
//メインとサムネイルを紐づける
slider.controller.control = thumbs;
thumbs.controller.control = slider;

let countdown = setInterval(function(){
  const now = new Date()  //今の日時
  const target = new Date("2022/12/22 0:00:00")
  const remainTime = target - now  //差分を取る（ミリ秒で返ってくる

  //指定の日時を過ぎていたら処理をしない
  if(remainTime < 0) return false 

  //差分の日・時・分・秒を取得
  const difDay  = Math.floor(remainTime / 1000 / 60 / 60 / 24)
  const difHour = Math.floor(remainTime / 1000 / 60 / 60 ) % 24
  const difMin  = Math.floor(remainTime / 1000 / 60) % 60
  const difSec  = Math.floor(remainTime / 1000) % 60

  //残りの日時を上書き
  document.getElementById("countdown-day").textContent  = difDay
  document.getElementById("countdown-hour").textContent = difHour
  document.getElementById("countdown-min").textContent  = difMin
  document.getElementById("countdown-sec").textContent  = difSec

  //指定の日時になればカウントを止める
  if(remainTime < 0) clearInterval(countdown)

}, 1000)    //1秒間に1度処理