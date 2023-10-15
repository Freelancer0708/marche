<?php
/*
Template Name: contact
*/
get_header(); ?>
        <section class="mv-sub contact">
            <div class="mv-inner d-flex justify-content-center align-items-center">
                <article class="mv-title py20">
                    <h2 class="f_36 ls_100 lh_12 text-center white f_lato">CONTACT</h2>
                    <h2 class="f_20 ls_100 lh_12 text-center white fw-medium">お問い合わせ</h2>
                </article>
            </div>
        </section>

        <section class="cnt04 py100">
            <div class="cnt04-inner mw-980 mx-auto d-flex flex-column align-items-start">
                <h3 class="f_24 ls_100 lh_16 mb20 green fw-bold">お問い合わせ</h3>
                <p class="f_16 ls_00 lh_16 gray mb40">
                    ※弊社の営業時間は、平日10：00～17：00（土日祝祭日休み）となっております。<br>
                    お問い合わせフォームでのお問い合わせは24時間受け付けておりますが、確認・返信は5営業日以内に行いますのでご了承ください。<br>
                    またお急ぎの場合は<span class="f_16 ls_80 lh_16 gray">050-6880-8804</span>までご連絡ください。
                </p>

                <!-- <h3 class="f_18 ls_20 fw-medium gray mb20">各マルシェへ出店希望のお問い合わせはそれぞれのHP内に記載のアドレス宛にお問い合わせください。</h3>

                <a href="<?php echo home_url(); ?>/" class="cmn-btn02 f_18 ls_40 lh_14 fw-medium white d-flex justify-content-center align-items-center">
                    各マルシェのHPはこちら
                </a>

                <h3 class="f_18 ls_20 fw-medium gray mb20 mt40">オンラインマルシェへの出店希望等のお問い合わせはECサイトのお問い合わせフォームより受け付けております。</h3>

                <a href="<?php echo home_url(); ?>/" class="cmn-btn02 f_18 ls_40 lh_14 fw-medium white d-flex justify-content-center align-items-center">
                    オンラインマルシェ<br class="sp">お問い合わせフォームはこちら
                </a> -->

                <img src="<?php echo get_template_directory_uri(); ?>/img/contact/img01.png" alt="" width="640" height="auto" class="d-block mx-auto my100">

                <article class="cnt04-table mw-800 mx-auto">
                <?php echo do_shortcode('[mwform_formkey key="19"]'); ?>
                </article>
            </div>
        </section>

        <?php
get_footer();