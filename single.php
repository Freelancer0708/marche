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
                    <?php 
  $cats = get_the_category();
?>
                    <p class="news-top-cat <?php echo $cats[0]->slug;  ?> ml40 d-flex justify-content-center align-items-center f_12 gray text-center">
                    <?php 
  $cats = get_the_category();
//   echo $cats[0]->name; 
?>

<?php if($cats[0]->slug == "notice"): ?>
                                お知らせ
                            <?php elseif($cats[0]->slug == "online-marche"): ?>
                                オンライン<br>マルシェ
                            <?php elseif($cats[0]->slug == "suns-marche"): ?>
                                太陽の<br>マルシェ
                            <?php elseif($cats[0]->slug == "yokohama-kitanaka-marche"): ?>
                                横浜北仲<br>マルシェ
                            <?php elseif($cats[0]->slug == "isogo-marche"): ?>
                                いそご丘の上<br>マルシェ
                            <?php elseif($cats[0]->slug == "other-marche"): ?>
                                その他<br>マルシェ
                            <?php endif; ?>
                    </p>
                </article>

                <article class="cnt02-news-detail">
                    <?php if( get_field('place') || get_field('time') || $cats[0]->name == "太陽のマルシェ" || $cats[0]->name == "横浜北仲マルシェ" || $cats[0]->name == "いそご丘の上マルシェ" ): ?>
                    <div class="cnt02-news-detail-top d-flex flex-column align-items-start justify-content-start mb40">
                        <?php if( get_field('place') || $cats[0]->name == "太陽のマルシェ" || $cats[0]->name == "横浜北仲マルシェ" || $cats[0]->name == "いそご丘の上マルシェ" ): ?>
                        <div class="cnt02-news-place d-flex justify-content-start align-items-center mb20">
                            <p class="f_16 ls_200 lh_14 text-center white py-1">場所</p>
                            <?php if( $cats[0]->name == "太陽のマルシェ"): ?>
                            <p class="f_16 ls_40 lh_16 gray ml20">
                                月島第二児童公園（東京都中央区勝どき1-9-8）<br>
                                都営地下鉄大江戸線『勝どき』駅すぐ（A4a出口、A4b出口）
                            </p>
                            <?php elseif( $cats[0]->name == "横浜北仲マルシェ"): ?>
                            <p class="f_16 ls_40 lh_16 gray ml20">
                                北仲ブリック＆ホワイト 1階歴史広場（神奈川県横浜市中区北仲通5-57-2）<br>
                                横浜高速鉄道みなとみらい線『馬車道』駅直結（2a出口）
                            </p>
                            <?php elseif( $cats[0]->name == "いそご丘の上マルシェ"): ?>
                            <p class="f_16 ls_40 lh_16 gray ml20">
                                ブリリアシティ横浜磯子（神奈川県横浜市磯子区磯子3-13）<br>
                                <br>
                                ＜いそご丘の上マルシェ＞<br>
                                ヒルトップスクエア<br>
                                ＜いそご丘の上キッチン＞<br>
                                I棟・J棟前スペース<br>
                                <br>
                                JR根岸線『磯子駅』から約徒歩8分
                            </p>
                            <?php elseif( get_field('place') ): ?>
                            <p class="f_16 ls_40 lh_16 gray ml20"><?php echo get_field('place') ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php if( get_field('time') ): ?>
                        <div class="cnt02-news-time d-flex justify-content-start align-items-center">
                            <p class="f_16 ls_200 lh_14 text-center white py-1">開催日時</p>
                            <p class="f_16 ls_40 lh_16 gray ml20"><?php echo get_field('time') ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    

                    <h3 class="f_24 ls_100 fw-bold green mb20"><?php the_title(); ?></h3>
                    <?php the_content(); ?>


                    <div class="live-list d-flex justify-content-start align-items-start flex-wrap mb40">
                    <?php 
                    if( get_field('live-list') ):
                        while( has_sub_field('live-list') ):
                            $img = get_sub_field('img');
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            $link = get_sub_field('link');
                    ?>
                    <div class="live-item">
                    <img src="<?php echo $img ?>" width="100%" height="auto" class="mb10">
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

                    <?php if( get_field('link-list') || $cats[0]->name == "太陽のマルシェ" || $cats[0]->name == "横浜北仲マルシェ" || $cats[0]->name == "いそご丘の上マルシェ"): ?>
                    <div class="cnt02-news-link d-flex flex-column align-items-start justify-content-start mb60">
                        <?php if($cats[0]->name == "太陽のマルシェ"):?>
                            <p class="f_16 ls_20 lh_16 gray">太陽のマルシェ 公式サイト</p>
                            <a href="http://timealive.jp/" target="_blank" class="f_16 ls_20 lh_16 green mb20 d-block">http://timealive.jp/</a>
                        <?php elseif($cats[0]->name == "横浜北仲マルシェ"):?>
                            <p class="f_16 ls_20 lh_16 gray">横浜北仲マルシェ 公式サイト</p>
                            <a href="http://www.yokohama-kitanaka-marche.jp/>" target="_blank" class="f_16 ls_20 lh_16 green mb20 d-block">http://www.yokohama-kitanaka-marche.jp/</a>
                        <?php elseif($cats[0]->name == "いそご丘の上マルシェ"):?>
                            <p class="f_16 ls_20 lh_16 gray">いそご丘の上マルシェ instagram</p>
                            <a href="https://www.instagram.com/isogo_marche/" target="_blank" class="f_16 ls_20 lh_16 green mb20 d-block">https://www.instagram.com/isogo_marche/</a>
                        <?php else: ?>
                            <?php while( has_sub_field('link-list') ): ?>
                                <p class="f_16 ls_20 lh_16 gray"><?php echo get_sub_field('link-text') ?></p>
                                <a href="<?php echo get_sub_field('link-url') ?>" target="_blank" class="f_16 ls_20 lh_16 green mb20 d-block"><?php echo get_sub_field('link-url') ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php if( get_field('img') ): ?>
                    <img src="<?php echo get_field('img') ?>" alt="" width="100%" height="auto" class="mx-auto mb60">
                    <?php endif; ?>

                    <?php if( get_field('map') || $cats[0]->name == "太陽のマルシェ" || $cats[0]->name == "横浜北仲マルシェ" || $cats[0]->name == "いそご丘の上マルシェ" ): ?>
                        <?php if($cats[0]->name == "太陽のマルシェ"):?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10903.786590682752!2d139.77163347381017!3d35.659389131640026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889d18842152f%3A0x96d7e2f30abed5aa!2z5pyI5bO256ys5LqM5YWQ56ul5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1678707311003!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php elseif($cats[0]->name == "横浜北仲マルシェ"):?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4596.427333045702!2d139.63484667243912!3d35.45071091157144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185c58987c0001%3A0xd22d3ab50388048a!2z5YyX5Luy44OW44Oq44OD44Kv77yG44Ob44Ov44Kk44OI!5e0!3m2!1sja!2sjp!4v1678707191737!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php elseif($cats[0]->name == "いそご丘の上マルシェ"):?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.133143581983!2d139.61321293417396!3d35.40195017971774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601843eadd5280cb%3A0xe44bad1d6b782db4!2z44OW44Oq44Oq44Ki44K344OG44Kj5qiq5rWc56Ov5a2Q!5e0!3m2!1sja!2sjp!4v1678707176003!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php else: ?>
                            <?php echo get_field('map') ?>
                        <?php endif; ?>
                    <?php endif; ?>

                    <a href="<?php echo home_url(); ?>/news/" class="cnt02-news-btn f_20 ls_100 lh_16 text-center white fw-medium d-flex justify-content-center align-items-center mx-auto mt100">
                        お知らせ一覧へ戻る
                    </a>
                </article>


            </div>
        </section>


        <?php
get_footer();