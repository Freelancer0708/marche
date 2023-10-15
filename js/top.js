$(function () {
    $(".cnt02-category a").on("click", function () {
      $(".cnt02-category a").removeClass("current");
      $(this).addClass("current");

      if ($(".news-cat01").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-all").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".all-btn").css({"cssText": "display: flex !important;"});
      } else if ($(".news-cat02").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-notice").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".notice-btn").css({"cssText": "display: flex !important;"});
      } else if ($(".news-cat03").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-online-marche").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".online-marche-btn").css({"cssText": "display: flex !important;"});
      } else if ($(".news-cat04").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-suns-marche").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".suns-marche-btn").css({"cssText": "display: flex !important;"});
      } else if ($(".news-cat05").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-yokohama-kitanaka-marche").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".yokohama-kitanaka-marche-btn").css({"cssText": "display: flex !important;"});
      } else if ($(".news-cat06").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-isogo-marche").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".isogo-marche-btn").css({"cssText": "display: flex !important;"});
      } else if ($(".news-cat07").hasClass("current")) {
        $(".cnt02-table").css({"display" : "none"});
        $(".cnt02-table-other-marche").css({"display" : "block"});
        $(".news-btn").css({"cssText": "display: none !important;"});
        $(".other-marche-btn").css({"cssText": "display: flex !important;"});
      }
    });
  });