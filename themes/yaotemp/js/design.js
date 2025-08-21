//Scroll Rules
$(function () {
  if (window.matchMedia("(max-width: 640px)").matches) {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 50;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  } else {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 100;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  }
});

//施工事例(サムネイル固定)
$(function () {
  $(".yao-slider").slick({
    arrows: false,
    fade: true,
    asNavFor: ".yao-thumbnail",
  });
  $(".yao-thumbnail").slick({
    slidesToShow: 6,
    asNavFor: ".yao-slider",
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
        },
      },
    ],
  });
});

//クリックしたら開閉
$(function () {
  $(".click-title").on("click", function () {
    $(this).next().slideToggle(400);
    $(this).toggleClass("close", 400);
  });
});

//　ヘッダーメニュー
var $navLists = $(".js-navLists");
var $navButtonWrapper = $(".js-nav");
var $navButton = $(".js-nav-menu");
// logo
var $logo = $(".header-left img");
var $ctaTel = $(".header-right .cta-tel");

function toggleMenu() {
  $navLists.toggleClass("is-active");
  $navButton.toggleClass("icon-menu icon-close");
  $navButtonWrapper.removeClass("open");
  $logo.toggleClass("is-active");
  $ctaTel.toggleClass("is-active");
  toggleBodyScroll();
}

function toggleBodyScroll() {
  if ($navLists.hasClass("is-active")) {
    $("body").css({ height: "100%", overflow: "hidden" });
  } else {
    resetBodyScroll();
  }
}
function resetBodyScroll() {
  $("body").css({ height: "", overflow: "" });
}
function handleMenu() {
  $navButtonWrapper.off("click");
  $navButtonWrapper.click(toggleMenu);
}

$(window).resize(handleMenu);
handleMenu();

// headerの高さを計測して、bodyのpading-topにその値を追加
function adjustBodyPadding() {
  const body = document.body;
  const headerHeight = document.querySelector("header").offsetHeight;
  body.style.paddingTop = headerHeight + "px";
}

window.addEventListener("resize", adjustBodyPadding);
window.addEventListener("load", adjustBodyPadding);
