<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font -->

    <!-- icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sub.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mediaquery.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/css/swiper.min.css" />


    <link href="<?php echo get_template_directory_uri(); ?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/fontawesome/css/solid.css" rel="stylesheet">
    <!-- script -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <script>
        if (screen.width < 767) {
            $(function () {
                $('a[href^="#"]').click(function () {
                    var speed = 500; //移動スピードの設定
                    var href = $(this).attr("href");
                    var target = $(href == "#" || href == "" ? 'html' : href);
                    var position = target.offset().top;
                    $("html, body").animate({ scrollTop: position }, speed, "swing");
                    return false;
                });
            });
        }
    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

<?php wp_head(); ?>
</head>

<body>
    <main id="wrap">