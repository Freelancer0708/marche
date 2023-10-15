<?php
/*
Template Name: real
*/
get_header(); ?>
        <section class="mv-sub real">
            <div class="mv-inner d-flex justify-content-center align-items-center">
                <article class="mv-title py20">
                    <h2 class="f_36 ls_100 lh_12 text-center white f_lato">REAL MARCHÉ</h2>
                    <h2 class="f_20 ls_100 lh_12 text-center white fw-medium">リアルマルシェ</h2>
                </article>
            </div>
        </section>

        <section class="cnt06 py120 cnt02-news news">
            <div class="cnt06-inner mw-960 mx-auto d-flex flex-column align-items-start align-items-start mt100">
                <article class="anc-list d-flex justify-content-center align-items-start gap20 flex-wrap">
                    <a href="#sun" class="anc-btn f_12 text-center d-flex justify-content-center align-items-center">
                    太陽のマルシェ
                    </a>
                    <a href="#yokohama" class="anc-btn f_12 text-center d-flex justify-content-center align-items-center">
                    横浜北仲マルシェ
                    </a>
                    <a href="#isogo" class="anc-btn f_12 text-center d-flex justify-content-center align-items-center">
                    いそご丘の上マルシェ
                    </a>
                    <a href="#other" class="anc-btn f_12 text-center d-flex justify-content-center align-items-center">
                    その他のマルシェ
                    </a>
                </article>

<div id="sun" class="from"></div>
<h3 class="f_32 ls_100 fw-bold mb20 pl30 yellow-left lh_10 mt100">太陽のマルシェ</h3>
                <article class="cnt06-row d-flex justify-content-start align-items-start pb100  w-100">
                    <div class="cnt-img w70 mw-660">
                        
                        <div class="cnt-slider01 w-100 cnt-slider mb30 yellow-btm">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun01.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun02.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun03.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun04.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun05.jpg" alt="" width="660" height="420" class="d-block">
                        </div>
                        <div class="cnt-slider01-thumbnail w90 cnt-slider-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun01.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun02.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun03.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun04.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/sun05.jpg" alt="" width="138" height="100" class="d-block mr10">
                        </div>
                    </div>
                    <div class="cnt06-text d-flex flex-column align-items-start justify-content-start w30 mw-280 ms-auto">
                        <p class="f_16 ls_20 lh_18 gray mb20">
                        東京都中央区・勝どきで、2013年9月より毎月第2土日（8月は休催）に開催している「食べる・買う・学ぶ・体験」がひとつになった日本最大級規模の都市型マルシェ！（現在は規模縮小中）こだわりの農産物や加工品、雑貨の販売だけでなく、ワークショップなどお子様も楽しめるコンテンツや、キッチンカーのラインナップも豊富なため、1日中楽しめます！
                        </p>
                        <a href="http://timealive.jp/" target="_blank" class="yellow-btn d-flex align-items-center justify-content-center">
                            <p class="f_14 ls_20 fw-bold yellow">太陽のマルシェはこちら</p>
                            <span class="material-icons-outlined yellow f_20">open_in_new</span>
                        </a>
                        <p class="f_14 ls_20 lh_18 gray mt20">新規出店やその他のお問い合わせに関しては各マルシェのHP内をご確認ください。</p>
                    </div>
                </article>

                <article class="cnt-list w-100">
                <?php
$args = [
	'category_name' => 'suns-marche',
	'numberposts' => 3
];
// 条件を渡して記事を取得
$custom_posts = get_posts($args);
foreach ( $custom_posts as $post ): setup_postdata($post); ?>
                        <a href="<?php the_permalink() ?>" class="cnt02-item d-flex justify-content-start align-items-center py10 mb20">
                            <div class="cnt02-item-num d-flex flex-column align-items-start justify-content-start">
                                <p class="f_24 ls_100 lh_14 gray f_lato"><?php the_time('m.d'); ?></p>
                                <p class="f_14 ls_100 lh_14 gray f_lato"><?php the_time('Y'); ?></p>
                            </div>
                            <?php 
  $cats = get_the_category();
?>
                            <p class="cnt02-item-cat <?php echo $cats[0]->slug;  ?> f_16 ls_0 gray ms-auto pl10 nohover mr40">
                            太陽の<br>マルシェ
                            </p>
                            <p class="cnt02-item-title f_16 ls_20 gray ms-auto"><?php
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
                            ?></p>
                        </a>
                        <?php endforeach; ?>
                </article>

                <a href="http://www.courier-tokyo.com/marche/news/category/suns-marche/" class="cmn-btn  d-flex justify-content-center align-items-center align-self-end mt40 yellow mx-auto">
                    <p class="f_16 ls_100 f_lato fw-bold gray mr10">READ MORE</p>
                    <span class=""></span>
                </a>



<div id="yokohama" class="from"></div>
<h3 class="f_32 ls_100 fw-bold mb20 pl30 blue-left lh_10 mt100">横浜北仲マルシェ</h3>
                <article class="cnt06-row d-flex justify-content-start align-items-start pb100  w-100 flex-row-reverse">
                    <div class="cnt-img w70 mw-660">
                        
                        <div class="cnt-slider02 w-100 cnt-slider mb30 blue-btm">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama01.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama02.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama03.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama04.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama05.jpg" alt="" width="660" height="420" class="d-block">
                        </div>
                        <div class="cnt-slider02-thumbnail w90 cnt-slider-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama01.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama02.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama03.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama04.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/yokohama05.jpg" alt="" width="138" height="100" class="d-block mr10">
                        </div>
                    </div>
                    <div class="cnt06-text d-flex flex-column align-items-start justify-content-start w30 mw-280 me-auto">
                    
                        <p class="f_16 ls_20 lh_18 gray mb20">
                        神奈川県横浜市・北仲エリアで2015年11月より毎月第3土日に開催している、お客様との距離が近く地域に密着したマルシェ。横浜ならではの食材をはじめ、旬の野菜・果物、加工食品やハンドメイド雑貨等こだわりの商品がバラエティ豊かに揃う他、キッチンカーの本格グルメもお楽しみいただけます。2020年に会場移転&リニューアルし、マルシェを通して「きたなかま」コミュニティを作ることを目指します！
                        </p>
                        <a href="http://www.yokohama-kitanaka-marche.jp/" target="_blank" class="blue-btn d-flex align-items-center justify-content-center">
                            <p class="f_14 ls_20 fw-bold blue">横浜北仲マルシェはこちら</p>
                            <span class="material-icons-outlined blue f_20">open_in_new</span>
                        </a>
                        <p class="f_14 ls_20 lh_18 gray mt20">新規出店やその他のお問い合わせに関しては各マルシェのHP内をご確認ください。</p>
                    </div>
                </article>

                <article class="cnt-list w-100">
                <?php
$args = [
	'category_name' => 'yokohama-kitanaka-marche',
	'numberposts' => 3
];
// 条件を渡して記事を取得
$custom_posts = get_posts($args);
foreach ( $custom_posts as $post ): setup_postdata($post); ?>
                        <a href="<?php the_permalink() ?>" class="cnt02-item d-flex justify-content-start align-items-center py10 mb20">
                            <div class="cnt02-item-num d-flex flex-column align-items-start justify-content-start">
                                <p class="f_24 ls_100 lh_14 gray f_lato"><?php the_time('m.d'); ?></p>
                                <p class="f_14 ls_100 lh_14 gray f_lato"><?php the_time('Y'); ?></p>
                            </div>
                            <?php 
  $cats = get_the_category();
?>
                            <p class="cnt02-item-cat <?php echo $cats[0]->slug;  ?> f_16 ls_0 gray ms-auto pl10 nohover mr40">
                            横浜北仲<br>マルシェ
                            </p>
                            <p class="cnt02-item-title f_16 ls_20 gray ms-auto"><?php
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
                            ?></p>
                        </a>
                        <?php endforeach; ?>
                </article>

                <a href="http://www.courier-tokyo.com/marche/news/category/yokohama-kitanaka-marche/" class="cmn-btn  d-flex justify-content-center align-items-center align-self-end mt40 blue mx-auto">
                    <p class="f_16 ls_100 f_lato fw-bold gray mr10">READ MORE</p>
                    <span class=""></span>
                </a>



                
<div id="isogo" class="from"></div>
<h3 class="f_32 ls_100 fw-bold mb20 pl30 green-left lh_10 mt100">いそご丘の上マルシェ／いそご丘の上キッチン</h3>
                <article class="cnt06-row d-flex justify-content-start align-items-start pb100  w-100">
                    <div class="cnt-img w70 mw-660">
                        
                        <div class="cnt-slider03 w-100 cnt-slider mb30 green-btm">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo01.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo02.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo03.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo04.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo05.jpg" alt="" width="660" height="420" class="d-block">
                        </div>
                        <div class="cnt-slider03-thumbnail w90 cnt-slider-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo01.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo02.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo03.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo04.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/isogo05.jpg" alt="" width="138" height="100" class="d-block mr10">
                        </div>
                    </div>
                    <div class="cnt06-text d-flex flex-column align-items-start justify-content-start w30 mw-280 ms-auto">
                    
                        <p class="f_16 ls_20 lh_18 gray mb20">
                        横浜市磯子区にある「ブリリアシティ横浜磯子」という全13棟からなる大規模なマンションの広場を会場とし、2021年5月より奇数月の第一日曜に開催する「いそご丘の上マルシェ」。この地域に暮らす人・働く人など様々な方の交流の機会をつくることを目指します。偶数月には、地域の方に手軽に特別感のあるキッチンカーごはんをお届けする「いそご丘の上キッチン」も開催中！
                        </p>
                        <a href="https://www.instagram.com/isogo_marche/" target="_blank" class="green-btn d-flex align-items-center justify-content-center">
                            <p class="f_14 fw-bold green">いそご丘の上マルシェはこちら</p>
                            <span class="material-icons-outlined green f_20">open_in_new</span>
                        </a>
                        <p class="f_14 ls_20 lh_18 gray mt20">新規出店やその他のお問い合わせに関しては各マルシェのHP内をご確認ください。</p>
                    </div>
                </article>

                <article class="cnt-list w-100">
                <?php
$args = [
	'category_name' => 'isogo-marche',
	'numberposts' => 3
];
// 条件を渡して記事を取得
$custom_posts = get_posts($args);
foreach ( $custom_posts as $post ): setup_postdata($post); ?>
                        <a href="<?php the_permalink() ?>" class="cnt02-item d-flex justify-content-start align-items-center py10 mb20">
                            <div class="cnt02-item-num d-flex flex-column align-items-start justify-content-start">
                                <p class="f_24 ls_100 lh_14 gray f_lato"><?php the_time('m.d'); ?></p>
                                <p class="f_14 ls_100 lh_14 gray f_lato"><?php the_time('Y'); ?></p>
                            </div>
                            <?php 
  $cats = get_the_category();
?>
                            <p class="cnt02-item-cat <?php echo $cats[0]->slug;  ?> f_16 ls_0 gray ms-auto pl10 nohover mr40">
                            いそご丘の上<br>マルシェ
                            </p>
                            <p class="cnt02-item-title f_16 ls_20 gray ms-auto"><?php
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
                            ?></p>
                        </a>
                        <?php endforeach; ?>
                </article>

                <a href="http://www.courier-tokyo.com/marche/news/category/isogo-marche/" class="cmn-btn  d-flex justify-content-center align-items-center align-self-end mt40 green mx-auto">
                    <p class="f_16 ls_100 f_lato fw-bold gray mr10">READ MORE</p>
                    <span class=""></span>
                </a>


<div id="other" class="from"></div>
<h3 class="f_32 ls_100 fw-bold mb20 pl30 purple-left lh_10 mt100">その他のマルシェ</h3>
                <article class="cnt06-row d-flex justify-content-start align-items-start pb100  w-100 flex-row-reverse">
                    <div class="cnt-img w70 mw-660">
                        
                        <div class="cnt-slider04 w-100 cnt-slider mb30 purple-btm">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other01.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other02.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other03.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other04.jpg" alt="" width="660" height="420" class="d-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other05.jpg" alt="" width="660" height="420" class="d-block">
                        </div>
                        <div class="cnt-slider04-thumbnail w90 cnt-slider-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other01.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other02.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other03.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other04.jpg" alt="" width="138" height="100" class="d-block mr10">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/real/other05.jpg" alt="" width="138" height="100" class="d-block mr10">
                        </div>
                    </div>
                    <div class="cnt06-text d-flex flex-column align-items-start justify-content-start w30 mw-280 me-auto">
                    
                        <p class="f_16 ls_20 lh_18 gray mb20">
                        「地域巻き込み型」をテーマに、その他のマルシェやイベントなどの企画、運営も行っております。<br>
開催情報は弊社マルシェ事業部SNSやお知らせ欄をご確認くださいませ。
                        </p>

                        <div class="cnt-btns d-flex align-items-center justify-content-between w80">
                            <a href="https://www.instagram.com/courier.marche/" target="_blank" class="d-flex align-items-center justify-content-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/real/instagram.png" alt="" width="50" height="auto">
                            </a>
                            <a href="https://www.facebook.com/courier.marche" target="_blank" class="d-flex align-items-center justify-content-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/real/facebook-square.png" alt="" width="50" height="auto">
                            </a>
                            <a href="https://twitter.com/courier_marche" target="_blank" class="d-flex align-items-center justify-content-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/real/twitter-square.png" alt="" width="50" height="auto">
                            </a>
                        </div>
                        <!-- <a href="http://www.courier-tokyo.com/marche/news/category/suns-marche/" target="_blank" class="purple-btn d-flex align-items-center justify-content-center">
                            <p class="f_14 ls_20 fw-bold purple">太陽のマルシェはこちら</p>
                            <span class="material-icons-outlined purple f_20">open_in_new</span>
                        </a> -->
                        
                    </div>
                </article>

                <article class="cnt-list w-100">
                <?php
$args = [
	'category_name' => 'other-marche',
	'numberposts' => 3
];
// 条件を渡して記事を取得
$custom_posts = get_posts($args);
foreach ( $custom_posts as $post ): setup_postdata($post); ?>
                        <a href="<?php the_permalink() ?>" class="cnt02-item d-flex justify-content-start align-items-center py10 mb20">
                            <div class="cnt02-item-num d-flex flex-column align-items-start justify-content-start">
                                <p class="f_24 ls_100 lh_14 gray f_lato"><?php the_time('m.d'); ?></p>
                                <p class="f_14 ls_100 lh_14 gray f_lato"><?php the_time('Y'); ?></p>
                            </div>
                            <?php 
  $cats = get_the_category();
?>
                            <p class="cnt02-item-cat <?php echo $cats[0]->slug;  ?> f_16 ls_0 gray ms-auto pl10 nohover mr40">
                            その他のマルシェ
                            </p>
                            <p class="cnt02-item-title f_16 ls_20 gray ms-auto"><?php
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
                            ?></p>
                        </a>
                        <?php endforeach; ?>
                </article>

<a href="http://www.courier-tokyo.com/marche/news/category/other-marche/" class="cmn-btn  d-flex justify-content-center align-items-center align-self-end mt40 purple mx-auto">
    <p class="f_16 ls_100 f_lato fw-bold gray mr10">READ MORE</p>
    <span class=""></span>
</a>

            </div>
        </section>


        <?php
get_footer();
    