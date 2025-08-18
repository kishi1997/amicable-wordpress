<?php get_header(); ?>

<div class="page-repair">
    <div class="pagehead-set">
        <div class="pagehead-text">
            <h1><?php the_title(); ?></h1>
            <p><?php echo $slug = get_post(get_the_ID())->post_name; ?></p>
        </div>
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">

        <div class="c-parts-sec">
            <h3 class="c-parts-sec__title">太陽光発電システム・蓄電池などのトラブルも迅速対応</h3>
            <p class="c-parts-sec__text">太陽光発電システムや蓄電池は、長期間にわたりお客様の電力ライフを支える大切な設備です。<br />
            しかし、万が一の不具合やトラブルが発生した際もご安心ください。<br />
            アミカブルサービスでは、経験豊富な専門スタッフが迅速にお客様のもとへ駆けつけ、原因を特定し、的確な修理を行います。地域に密着しているからこそできる、きめ細やかな対応力で、お客様の安心と快適な電力環境を迅速に復旧させます。</p>
        </div>

        <section class="c-2col-contents">
            <div class="l-container">
                <h2 class="c-2col-contents__title">対応可能な修理内容</h2>
                <ul class="c-2col-contents__content">
                    <li class="c-2col-contents__item">
                        <div class="c-2col-contents__image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-2col-img1.jpg" alt="「太陽光パネルの不具合」のイメージ"/>
                        </div>
                        <div class="c-2col-contents-body">
                            <h2 class="c-2col-contents-item-title">太陽光パネルの不具合</h2>
                            <p class="c-2col-contents-item-text">太陽光パネルに発電量の低下、物理的な損傷、鳥獣害による影響など、何らかの不具合が生じた際はご相談ください。専門スタッフがパネルの状態を詳細に診断し、原因を特定。部分的な修理や交換、清掃など、最適な方法でパネルの性能を回復させ、発電効率の改善を目指します。安心の電力供給をサポートします。</p>
                        </div>
                    </li>
                    <li class="c-2col-contents__item">
                        <div class="c-2col-contents__image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-2col-img2.jpg" alt="「蓄電池のエラー・稼働異常」のイメージ"/>
                        </div>
                        <div class="c-2col-contents-body">
                            <h2 class="c-2col-contents-item-title">蓄電池のエラー・稼働異常</h2>
                            <p class="c-2col-contents-item-text">蓄電池の充電ができない、放電がおかしい、エラーメッセージが表示されるなど、稼働に関する異常を感じたらご連絡ください。蓄電池システムは複雑ですが、専門知識を持つスタッフがエラーコードの解析や内部診断を行い、迅速に原因を究明します。適切な修理や設定調整で、蓄電池の安定稼働と安心感を速やかに取り戻します。</p>
                        </div>
                    </li>
                    <li class="c-2col-contents__item">
                        <div class="c-2col-contents__image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-2col-img3.jpg" alt="「配線・パワコン・モニターなどの故障」のイメージ"/>
                        </div>
                        <div class="c-2col-contents-body">
                            <h2 class="c-2col-contents-item-title">配線・パワコン・
                            モニターなどの故障</h2>
                            <p class="c-2col-contents-item-text">太陽光発電や蓄電池システムは、パネルや蓄電池本体だけでなく、電気を変換するパワーコンディショナー、電力を管理する配線、発電状況を確認するモニターなど、様々な機器と配線で構成されています。これらのいずれかに故障や不具合が生じた場合も、専門スタッフが迅速に対応。システムの全体を把握しているため、的確な診断と修理で問題解決にあたります。</p>
                        </div>
                    </li>
                </ul>  
            </div>
        </section>

        <section class="c-flow-contents">
            <div class="l-container">
                <h2 class="c-flow-contents__title">対応の流れ</h2>
                <ul class="c-flow-contents__list">
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-flow-img1.jpg" alt="お問い合わせのイメージ">
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">お問い合わせ</h3>
                            <p class="c-flow-contents__item-text">
                            お電話またはウェブサイトのお問い合わせフォームより、不具合の状況をご連絡ください。専門スタッフが丁寧にお話を伺い、お客様の状況を把握します。早めにご連絡いただくことで、迅速な対応へと繋がります。些細なことでもお気軽にご相談ください。
                            </p>
                        </div>
                    </li>
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-flow-img2.jpg" alt="「症状ヒアリング」のイメージ"/>
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">症状ヒアリング</h3>
                            <p class="c-flow-contents__item-text">
                            お問い合わせいただいた内容に基づき、具体的な症状や発生状況について詳しくヒアリングを行います。エラーメッセージの内容、発生日時、異音の有無など、できるだけ詳細な情報をお伝えいただくことで、その後の原因特定と修理をスムーズに進めることができます。
                            </p>
                        </div>
                    </li>
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-flow-img3.jpg" alt="「訪問調査/現場確認」のイメージ">
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">訪問調査/現場確認</h3>
                            <p class="c-flow-contents__item-text">
                            ヒアリングした情報をもとに、専門スタッフがお客様のご自宅へ訪問し、現場での詳細な調査と確認を行います。実際に機器の状態や配線の状況を目視で確認し、専用の測定器などを用いて不具合の原因を特定します。この段階で、具体的な修理内容と費用についてご説明いたします。
                            </p>
                        </div>
                    </li>
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/repair-flow-img4.jpg" alt="「修理」のイメージ">
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">修理</h3>
                            <p class="c-flow-contents__item-text">
                            訪問調査で特定した原因に基づき、必要な修理作業を実施します。部品の交換や配線の修復、設定の調整など、最適な方法でシステムの復旧を行います。修理完了後は、正常に稼働することを確認し、お客様にご説明。万全の状態でお引き渡しいたします。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-faq">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <h3 class="c-faq-title">よくある質問</h3>
                    <div class="c-sekoujirei-title__wrapper">
                        <ul class="faq_list">
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">修理にはどれくらいの費用がかかりますか？</dt>
                                    <dd class="faq_a">修理費用は、不具合の原因や交換が必要な部品によって大きく異なります。まずは現場調査とお見積もりを無料で行い、具体的な費用を提示させていただきますのでご安心ください。メーカー保証期間内の場合は、無償修理となるケースもございますので、保証書をご確認の上ご相談ください。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">停電中ですが、修理に来てもらえますか？</dt>
                                    <dd class="faq_a">はい、停電中でも可能な限り対応させていただきます。ただし、安全上の理由から、一部の作業が制限される場合もございます。まずは状況を詳しくお伺いいたしますので、お電話にてご連絡ください。お客様の安全を最優先に考え、迅速な復旧に努めます。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">他社で設置した太陽光発電システムや蓄電池でも修理してもらえますか？</dt>
                                    <dd class="faq_a">はい、他社様で設置された太陽光発電システムや蓄電池でも、修理のご相談を承っております。メーカーや機種によっては対応が難しい場合もございますが、まずはお気軽にお問い合わせください。システムの状態を拝見し、可能な限りのサポートをさせていただきます。</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-sekoujirei">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <div class="c-sekoujirei-title__wrapper">
                        <p class="c-sekoujirei-eng__title">Examples of construction</p>
                        <h2 class="c-sekoujirei-title">
                            <img src="<?php bloginfo('template_url');?>/img/top-sekoujirei-title.svg" alt="施工事例">
                        </h2>
                    </div>
                    <ul class="c-sekoujirei-list">
                        <li class="c-sekoujirei-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-sekoujirei-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-sekoujirei-image1.jpg" alt="NO IMAGE" />
                                    <span class="c-sekoujirei-list__images_category">カテゴリ名</span>
                                </div>
                                <div class="c-sekoujirei-list__content">
                                    <p class="c-sekoujirei-list__content_area">〇〇市A様</p>
                                    <h4>タイトルタイトルタイトルタイトル</h4>
                                    <p class="u-pc">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                        <li class="c-sekoujirei-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-sekoujirei-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-sekoujirei-image1.jpg" alt="NO IMAGE" />
                                    <span class="c-sekoujirei-list__images_category">カテゴリ名</span>
                                </div>
                                <div class="c-sekoujirei-list__content">
                                    <p class="c-sekoujirei-list__content_area">〇〇市A様</p>
                                    <h4>タイトルタイトルタイトルタイトル</h4>
                                    <p class="u-pc">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                        <li class="c-sekoujirei-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-sekoujirei-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-sekoujirei-image1.jpg" alt="NO IMAGE" />
                                    <span class="c-sekoujirei-list__images_category">カテゴリ名</span>
                                </div>
                                <div class="c-sekoujirei-list__content">
                                    <p class="c-sekoujirei-list__content_area">〇〇市A様</p>
                                    <h4>タイトルタイトルタイトルタイトル</h4>
                                    <p class="u-pc">本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-button">もっと見る</a>
                </div>
            </div>
        </section>

        <section class="c-service-list">
            <div class="l-container">
                <h3 class="c-service-list__title">サービス</h3>
                <ul class="c-service-list__box c-service-list__box__3col">
                    <li>
                        <a href="http://localhost:8080/sunlight/">
                            <div class="top-service-item__icon">
                                <img src="http://localhost:8080/wp-content/themes/yaotemp/img/top-service-icon-solar.svg" alt="太陽光パネルのアイコンめてでも安心。わかりやすい説明と相談体制」イメージ画像">
                            </div>
                            <p>太陽光発電</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost:8080/battery/">
                            <div class="top-service-item__icon">
                                <img src="http://localhost:8080/wp-content/themes/yaotemp/img/top-service-icon-battery.svg" alt="太陽光パネルのアイコンめてでも安心。わかりやすい説明と相談体制」イメージ画像">
                            </div>
                            <p>家庭用蓄電池</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost:8080/repair/">
                            <div class="top-service-item__icon">
                                <img src="http://localhost:8080/wp-content/themes/yaotemp/img/top-service-icon-repair.svg" alt="修理サービス">
                            </div>
                            <p>修理サービス</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        </main>
        <!-- /l-main -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
// .c-voices / お客様の声スライド
$(document).ready(function() {
    $('.c-voices-list').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        arrows: true,
        prevArrow: '<button class="slick-arrow slick-prev"></button>',
        nextArrow: '<button class="slick-arrow slick-next"></button>',
        dots: true,
        infinite: true,
        lazyLoad: 'progressive',
        responsive: [{
            breakpoint: 768,
            settings: {
                centerPadding: '60px',
                slidesToShow: 1,
            }
        }]
    });
});
</script>

<?php get_footer(); ?>