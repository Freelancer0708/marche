<?php

get_header(); ?>
        <section class="mv-sub news">
            <div class="mv-inner d-flex justify-content-center align-items-center">
                <article class="mv-title py20">
                    <h2 class="f_36 ls_100 lh_12 text-center white f_lato">NEWS</h2>
                    <h2 class="f_20 ls_100 lh_12 text-center white fw-medium">新着情報</h2>
                </article>
            </div>
        </section>

        <section class="cnt02 py120 cnt02-news news">
            <div class="cnt02-inner mw-960 mx-auto d-flex flex-column align-items-start align-items-start mt100">
            <?php 
  $cats = get_the_category();
?>
                <article class="cnt02-list d-flex flex-column align-items-start align-items-start w-100">
                    <div class="cnt02-category d-flex justify-content-between align-items-center  w-100">
                        <a href="<?php echo home_url(); ?>/news/" class="news-cat01 d-flex justify-content-center align-items-center f_12 gray text-center">全て</a>
                        <a href="<?php echo home_url(); ?>/news/category/notice/" class="news-cat02 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/news/category/notice/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">お知らせ</a>
                        <a href="<?php echo home_url(); ?>/news/category/online-marche/" class="news-cat03 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/news/category/online-marche/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">
                            オンライン<br>
                            マルシェ
                        </a>
                        <a href="<?php echo home_url(); ?>/news/category/suns-marche/" class="news-cat04 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/news/category/suns-marche/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">
                            太陽の<br>
                            マルシェ
                        </a>
                        <a href="<?php echo home_url(); ?>/news/category/yokohama-kitanaka-marche/" class="news-cat05 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/news/category/yokohama-kitanaka-marche/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">
                            横浜北仲<br>
                            マルシェ
                        </a>
                        <a href="<?php echo home_url(); ?>/news/category/isogo-marche/" class="news-cat06 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/news/category/isogo-marche/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">
                            いそご丘の上<br>
                            マルシェ
                        </a>
                        <a href="<?php echo home_url(); ?>/live/" class="news-cat08 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/live/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">
                            ライブ<br>
                            マルシェ
                        </a>
                        <a href="<?php echo home_url(); ?>/news/category/other-marche/" class="news-cat07 <?php if(get_pagenum_link() == "http://www.courier-tokyo.com/marche/news/category/other-marche/"){ echo "current"; };?> d-flex justify-content-center align-items-center f_12 gray text-center">
                            その他の<br>
                            マルシェ
                        </a>
                    </div>

                    <section class="cnt02-table py60 w-100">
                    <?php if (have_posts()) : ?>
<?php
 while (have_posts()) : the_post(); 
							?>
                        <a href="<?php the_permaLink(); ?>" class="cnt02-item d-flex justify-content-start align-items-center py10 mb20">
                            <div class="cnt02-item-num d-flex flex-column align-items-start justify-content-start">
                                <p class="f_24 ls_100 lh_14 gray f_lato"><?php the_time('m.d'); ?></p>
                                <p class="f_14 ls_100 lh_14 gray f_lato"><?php the_time('Y'); ?></p>
                            </div>
                            
                            <p class="cnt02-item-cat live f_16 ls_0 gray ms-auto pl10 nohover">
                            ライブ<br>
                            マルシェ
                            </p>
                            <p class="cnt02-item-title f_16 ls_20 gray ms-auto pl20">
                            <?php
                            if ( wp_is_mobile() ) :
                                if(mb_strlen($post->post_title)>34) {
                                    $title= mb_substr($post->post_title,0,34) ;
                                      echo $title . '…';
                                    } else {
                                      echo $post->post_title;
                                    } 
                             else:
                            if(mb_strlen($post->post_title)>34) {
      $title= mb_substr($post->post_title,0,34) ;
        echo $title . '…';
      } else {
        echo $post->post_title;
      } 
    endif;
                            ?>
                            </p>
                        </a>
                        <?php endwhile; endif; ?>
                       
                    </section>

                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/news/arrow.png" alt="" class="d-block mx-auto" width="248" height="auto"> -->


                    <div class="d-flex justify-content-center align-items-center navi">
 <?php wp_pagenavi(); ?>
                    </div>

                </article>

            </div>
        </section>

        <?php
get_footer();
   