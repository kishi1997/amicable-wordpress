<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp();?>
</head>

<?php if (is_home()) : ?>

<body class="top">
    <?php else : ?>
    <!--　body Start-->
    <body<?php fit_body_class();?>>
        <?php endif; ?>
        <header class="header">
            <div class="header-top">
                <div class="header-left">
                    <?php if (is_home()) : ?>
                    <h1>
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php bloginfo('template_url');?>/img/logo.png"
                                alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    </h1>
                    <?php else : ?>
                    <div>
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php bloginfo('template_url');?>/img/logo.png"
                                alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="header-right">
                    <ul class="header-menu u-ls05">
                        <li><a href="<?php bloginfo('url'); ?>/reason/">選ばれる理由</a></li>
                        <li>
                            <p>サービス</p>
                            <div class="pc-header__childMenu">
                                <ul>
                                    <div>
                                        <li><a href="<?php bloginfo('url'); ?>/sunlight/">
                                                太陽光発電</a>
                                        </li>
                                        <li><a href="<?php bloginfo('url'); ?>/battery/">
                                                家庭用蓄電池</a>
                                        </li>
                                        <li><a href="<?php bloginfo('url'); ?>/repair/">
                                                修理サービス </a></li>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php bloginfo('url'); ?>/works/">施工事例</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/voice/">お客様の声</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <a class="header-tel" href="<?php bloginfo('url'); ?>/contact/">
                        <img src="<?php bloginfo('template_url');?>/img/header-tel-icon.svg" alt="tel-icon">
                        <div>
                            <span>0120-887-190</span>
                            <span>営業時間/0:00-0:00　定休日/</span>
                        </div>
                    </a>
                    <a class="header-contact" href="<?php bloginfo('url'); ?>/contact/">
                        <img src="<?php bloginfo('template_url');?>/img/header-contact-button.svg" alt="お問い合わせボタン">
                    </a>
                    <nav class="js-nav menuNavi">
                        <span class="js-nav-menu menuNavi__link menuNavi__link-current icon-menu" id="menuNavi__menu"">
                    </span>
                </nav>
                </div>
                <div class=" header-openNav js-navLists">
                            <div class="header-openNav__container">
                                <div class="header-openNav__pcLeft">
                                    <img src="<?php bloginfo('template_url');?>/img/logo.png"
                                        alt="<?php bloginfo( 'name' ); ?>">
                                </div>
                                <div class="header-openNav__pcRight">
                                    <div class="header-openNav__pcRight__container">
                                        <div class="header-menu__2col header-menu__2col__noChildMenu">
                                            <ul>
                                                <li><a href="<?php bloginfo('url'); ?>/reason/">選ばれる理由</a></li>
                                                <li>
                                                    <div>サービス</div>
                                                    <ul class="header-childMenu">
                                                        <li><a href="<?php bloginfo('url'); ?>/sunlight/">- 太陽光発電</a>
                                                        </li>
                                                        <li><a href="<?php bloginfo('url'); ?>/battery/">- 家庭用蓄電池</a>
                                                        </li>
                                                        <li><a href="<?php bloginfo('url'); ?>/repair/">- 修理サービス </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php bloginfo('url'); ?>/support/">アフターメンテナンス</a></li>
                                                <li><a href="<?php bloginfo('url'); ?>/works/">施工事例</a></li>
                                                <li><a href="<?php bloginfo('url'); ?>/voice/">お客様の声</a></li>
                                                <li><a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a></li>
                                                <li><a href="<?php bloginfo('url'); ?>/price/">料金プラン</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><a href="<?php bloginfo('url'); ?>/faq/">イベント情報</a>
                                                </li>
                                                <li>
                                                    <div>ブログ</div>
                                                    <ul class="header-childMenu">
                                                        <li><a href="<?php bloginfo('url'); ?>/news/">- お知らせ</a></li>
                                                        <li><a href="<?php bloginfo('url'); ?>/column/">- お役立ちコラム </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                                                </li>
                                                <li><a href="<?php bloginfo('url'); ?>/policy/">プライバシーポリシー</a>
                                                </li>
                                                <div class="openNav-cta">
                                                    <span>お電話でのお問い合わせ</span>
                                                    <a class="header-tel" href="<?php bloginfo('url'); ?>/contact/">
                                                        <img src="<?php bloginfo('template_url');?>/img/header-tel-icon.svg"
                                                            alt="tel-icon">
                                                        <div>
                                                            <span>0120-887-190</span>
                                                            <span>営業時間/0:00-0:00　定休日/</span>
                                                        </div>
                                                    </a>
                                                    <a class="header-contact" href="<?php bloginfo('url'); ?>/contact/">
                                                        <img src="<?php bloginfo('template_url');?>/img/opennav-contact-button.svg"
                                                            alt="お問い合わせボタン">
                                                    </a>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            </div>
        </header>
        <!--/l-header-->