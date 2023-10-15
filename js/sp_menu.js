//spメニュー（ハンバーガーメニュー）

function hamburger() {
    document.getElementById("hamburger").classList.toggle("bg_white_2");
  }
  
  document.getElementById("menu-trigger").addEventListener("click", function () {
    hamburger();
  });
  
  $(function () {
    $(".menu-trigger").on("click", function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $("nav").removeClass("open");
        $(".overlay").removeClass("open");
        $(".sp-logo").removeClass("bg_white_2");
      } else {
        $(this).addClass("active");
        $("nav").addClass("open");
        $(".overlay").addClass("open");
        $(".sp-logo").addClass("bg_white_2");
      }
    });
    $(".overlay").on("click", function () {
      if ($(this).hasClass("open")) {
        $(this).removeClass("open");
        $(".menu-trigger").removeClass("active");
        $("nav").removeClass("open");
      }
    });
    $(".cnt07-btn01").on("click", function () {
      if ($(".item01").hasClass("active")) {
      } else {
        $(".cnt07-btn01").addClass("active");
        $(".item01").addClass("active");
      }
      $(".cnt07-btn02").removeClass("active");
      $(".item02").removeClass("active");
    });
    $(".cnt07-btn02").on("click", function () {
      
      if ($(".item02").hasClass("active")) {
      } else {
        $(".cnt07-btn02").addClass("active");
        $(".item02").addClass("active");
      }
      $(".cnt07-btn01").removeClass("active");
      $(".item01").removeClass("active");
    });
  });

  

  /*---------------------- スライダーの動き ----------------------*/

