<?php get_header(); ?>

<section class="top-fv">
    <picture class="top-fv-bg">
        <source media="(max-width: 640px)" srcset="<?php bloginfo('template_url');?>/img/top-fv-sp.svg">
        <img src="<?php bloginfo('template_url');?>/img/top-fv-pc.svg" alt="10年後の電気代まで守る施工力 最安値より、最安心">
    </picture>
    <div class="top-fv-banner">
        <div class="top-fv-banner__inner">
            <div class="top-fv-banner__contact">
                <p class="top-fv-banner__text">お電話でお気軽にお問い合わせください。</p>
                <div class="top-fv-banner__phone-wrapper">
                    <img class="top-fv-banner__phone-icon"
                        src="<?php bloginfo('template_url');?>/img/top-fv-banner-tel.svg" alt="電話のアイコン">
                    <div class="top-fv-banner__phone">
                        <span class="top-fv-banner__phone-number">0120-887-190</span>
                        <p class="top-fv-banner__details">営業時間/0:00-0:00<br class="br-sp" />定休日/</p>
                    </div>
                </div>
            </div>
            <a href="<?php bloginfo('url'); ?>/works/" class="top-fv-banner__action">
                <picture class="top-fv-bg">
                    <source media="(max-width: 640px)"
                        srcset="<?php bloginfo('template_url');?>/img/top-fv-banner-contact-sp.svg">
                    <img src="<?php bloginfo('template_url');?>/img/top-fv-banner-contact.svg" alt="無料診断を申し込む">
                </picture>
            </a>
        </div>
    </div>
</section>

<div class="main-contents">
    <p style="padding: 50px; margin: 10px 0; background-color: #ccc;">main-contents: 1200px;</p>
</div>
<div class="sub-contents">
    <p style="padding: 50px; margin: 10px 0; background-color: #eee;">sub-contents: 1000px;</p>
</div>
<div class="slim-contents">
    <p style="padding: 50px; margin: 10px 0; background-color: #ccc;">slim-contents: 768px;</p>
</div>

<!-- l-wrapper -->
<div class="l-wrapper">

    <main class="l-main">
        <p style="margin: 100px 0;">トップページのコンテンツがここに入ります</p>

        <div class="main-contents">

            <!-- 記事一覧 -->
            <?php include("part-postlist.php"); ?>

            <!-- 施工事例一覧 -->
            <?php include("part-workslist.php"); ?>

            <!-- イベント一覧 -->
            <?php include("part-eventslist.php"); ?>

        </div>
    </main>
</div>
<!-- /l-wrapper -->



<?php get_footer(); ?>