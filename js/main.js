// ページトップに行くボタン
$(document).ready(function () {
    $("#pagetop").hide();
    $(window).scroll(function () {
      if(screen.width < 767) {
        if ($(this).scrollTop() < screen.height) {
          $("#pagetop").fadeOut();
        } else {
          $("#pagetop").fadeIn();
        }
      } else {
        if ($(this).scrollTop() < 160) {
          $("#pagetop").fadeOut();
          $("header").removeClass("scroll");
        } else {
          $("#pagetop").fadeIn();
          $("header").addClass("scroll");
        }
      }
    });
  });

  // loadingの終わりを教えてくれる
  (function() {
    var html = document.getElementsByTagName('html') || [];
    html[0].classList.add('enable-javascript');
    window.addEventListener("load", function() {
        html[0].classList.add('window-load');
    }, false);
})();

// loadingが終わったら動くもの
  $(window).load(function() {

    $(".mv-title-anime").addClass("is-animated");
    $(".mv-sub-title").addClass("is-animated");
  });

  
  // スクロールして要素が見えたらクラス追加
  $(window).scroll(function (){
    $(".animate__mask").each(function(){
      var hit		= $(this).offset().top;
      var scroll	= $(window).scrollTop();
      var wHeight	= $(window).height();
  
      if (scroll > hit - wHeight + wHeight/100){
        $(this).addClass("run");
      }
    });
  });

  