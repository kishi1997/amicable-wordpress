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
                                        <li><a href="<?php bloginfo('url'); ?>/service1/">
                                                サービス1</a>
                                        </li>
                                        <li><a href="<?php bloginfo('url'); ?>/service2/">
                                                サービス2</a>
                                        </li>
                                        <li><a href="<?php bloginfo('url'); ?>/service3/">
                                                サービス3</a></li>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php bloginfo('url'); ?>/results/">施工事例</a></li>
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
                                                <li><a href="<?php bloginfo('url'); ?>/beginner/">不動産売却相談</a></li>
                                                <li><a href="<?php bloginfo('url'); ?>/reason/">選ばれる理由</a></li>
                                                <li class="u-pc">
                                                    <div>売却相談</div>
                                                    <ul class="header-childMenu">
                                                        <li><a href="<?php bloginfo('url'); ?>/news/">- マンション</a></li>
                                                        <li><a href="<?php bloginfo('url'); ?>/column/">- 土地・戸建</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php bloginfo('url'); ?>/voice/">お客様の声</a>
                                                </li>
                                                <li class="u-pc">
                                                    <div>店舗紹介</div>
                                                    <ul class="header-childMenu">
                                                        <li><a href="<?php bloginfo('url'); ?>/shop/">- 立石店</a></li>
                                                        <li><a href="<?php bloginfo('url'); ?>/shop/">- 堀切店</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php bloginfo('url'); ?>/staff/">スタッフ紹介</a>
                                                </li>
                                                <li class="u-pc">
                                                    <div>ブログ</div>
                                                    <ul class="header-childMenu">
                                                        <li><a href="<?php bloginfo('url'); ?>/news/">- お知らせ</a></li>
                                                        <li><a href="<?php bloginfo('url'); ?>/column/">- コラム</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
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
        <!-- <?php get_sidebar(); ?> -->