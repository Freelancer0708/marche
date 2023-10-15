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

                <article class="cnt02-news-top d-flex justify-content-start align-items-center pb10 mb40">
                    <div class="cnt02-item-num d-flex flex-column align-items-start justify-content-start">
                        <p class="f_24 ls_100 lh_14 gray f_lato"><?php the_time('m.d'); ?></p>
                        <p class="f_14 ls_100 lh_14 gray f_lato"><?php the_time('Y'); ?></p>
                    </div>
                    <p class="news-top-cat live ml40 d-flex justify-content-center align-items-center f_12 gray text-center">
                    ライブ<br>
                    マルシェ
                </p>
                </article>

                <article class="cnt02-news-detail">
                    <!-- <div class="cnt02-news-detail-top d-flex flex-column align-items-start justify-content-start mb40">
                        <div class="cnt02-news-place d-flex justify-content-start align-items-center mb20">
                            <p class="f_16 ls_200 lh_14 text-center white py-1">場所</p>
                            <p class="f_16 ls_40 lh_16 gray ml20">都営地下鉄大江戸線『勝どき』駅下車　A4a出口、A4b出口すぐ</p>
                        </div>
                        <div class="cnt02-news-time d-flex justify-content-start align-items-center">
                            <p class="f_16 ls_200 lh_14 text-center white py-1">開催日時</p>
                            <p class="f_16 ls_40 lh_16 gray ml20">2023.02.06</p>
                        </div>
                    </div> -->

                    <h3 class="f_24 ls_100 fw-bold green mb20"><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                    <?php  if( get_field('url') ): ?>
                    <a href="<?php echo get_field('url') ?>" target="_blank" class="live-details f_16 ls_80 lh_16 fw-bold text-center white d-flex justify-content-center align-items-center  mt20">
                        今回のライブマルシェの詳細はこちら
                    </a>
                    <?php endif; ?>

                    <div class="live-list d-flex justify-content-start align-items-start flex-wrap mt40">
                    <?php 
                    if( get_field('live-list') ):
                        while( has_sub_field('live-list') ):
                            $img = get_sub_field('img');
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            $link = get_sub_field('link');
                    ?>
                    <div class="live-item">
                    <?php if( $img ): ?>
                    <img src="<?php echo $img ?>" width="100%" height="auto" class="mb10">
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/no-img.jpg" width="100%" height="auto" class="mb10">
                    <?php endif; ?>
                    <h4 class="f_16 ls_20 lh_16 fw-bold mb10"><?php echo $title ?></h4>
                    <p class="f_14 ls_20 lh_16 fw-medium green mb10">主な取扱商品</p>
                    <p class="f_12 ls_20 lh_16 mb10">
                    <?php echo $text ?>
                    </p>
                    <a href="<?php echo $link ?>" target="_blank" class="f_12 ls_20 lh_16">
                        <?php echo $link ?>
                    </a>
                    </div>
                    
                    <?php
                        endwhile;
                    endif;
                    ?>
                    </div>
                    <!-- <p class="f_16 ls_20 lh_18 gray mb40">
                        ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。ここに新着情報の本文が入ります。これはダミーテキストです。
                    </p>

                    <div class="cnt02-news-link d-flex flex-column align-items-start justify-content-start mb60">
                        <p class="f_16 ls_20 lh_16 gray">内部リンクの場合</p>
                        <a href="http://www.courier-tokyo.com/" target="_blank" class="f_16 ls_20 lh_16 green mb20 d-block">http://www.courier-tokyo.com/</a>
                        <p class="f_16 ls_20 lh_16 gray">外部リンクの場合</p>
                        <a href="http://www.yokohama-kitanaka-marche.jp/" target="_blank" class="f_16 ls_20 lh_16 green mb10 d-flex justify-content-start align-items-center">http://www.yokohama-kitanaka-marche.jp/<span class="material-icons-outlined green f_16 ms-1">open_in_new</span></a>
                    </div>

                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/img01.jpg" alt="" width="100%" height="auto" class="mx-auto mb60">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/news/map.jpg" alt="" width="100%" height="auto" class="mx-auto mb60"> -->

                    <a href="<?php echo home_url(); ?>/news/" class="cnt02-news-btn f_20 ls_100 lh_16 text-center white fw-medium d-flex justify-content-center align-items-center mx-auto mt100">
                        お知らせ一覧へ戻る
                    </a>
                </article>


            </div>
        </section>


        <?php
get_footer();