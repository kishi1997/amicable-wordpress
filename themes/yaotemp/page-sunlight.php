<?php get_header(); ?>

<div class="page-sunlight">
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
            <h3 class="c-parts-sec__title">太陽光発電システムで実現する、新しい暮らしのカタチ</h3>
            <p class="c-parts-sec__text">太陽の光を電気に変える太陽光発電システムは、クリーンなエネルギーで毎月の電気代を大幅に削減し、家計の負担を軽減します。さらに、災害時の停電に備えることができ、余った電気は売電による収益も期待できます。お客様の住まいに最適なシステムを、確かな自社施工と豊富な実績でご提案。安心のエネルギーライフを始めませんか。</p>
        </div>

        <div class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>こんなお悩み</span>ありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>電気代が高い</p></li>
                    <li><p>環境に優しい暮らしをしたい</p></li>
                    <li><p>どこのメーカーを選べばいいか分からない</p></li>
                    <li><p>太陽光発電に興味がある</p></li>
                </ul>
            </div>
        </div>

        <section class="c-flow-contents">
            <div class="l-container">
                <h2 class="c-flow-contents__title">太陽光発電とは？</h2>
                <ul class="c-flow-contents__list">
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-flow-img1.jpg" alt="発電と自家消費のイメージ">
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">発電と自家消費</h3>
                            <p class="c-flow-contents__item-text">
                            太陽光パネルが自然光を電力に変換し、ご家庭の照明や家電製品などに利用されます。自家消費によって、電力会社から購入する電気の量を減らすことができ、毎日の電気代を抑制することが可能です。
                            </p>
                        </div>
                    </li>
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-flow-img2.jpg" alt="「余剰電力の売電」のイメージ"/>
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">余剰電力の売電</h3>
                            <p class="c-flow-contents__item-text">
                            ご家庭で使用する電気量よりも多く発電された場合は、余った電気は自動的に電力会社へ売電されます。この売電による収入は、家計にさらなるゆとりをもたらし、太陽光発電システム導入の大きなメリットの一つとなります。
                            </p>
                        </div>
                    </li>
                    <li class="c-flow-contents__item">
                        <div class="c-flow-contents__item-image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-flow-img3.jpg" alt="「不足時の電力購入」のイメージ">
                        </div>
                        <div class="c-flow-contents__item-body">
                            <h3 class="c-flow-contents__item-title">不足時の電力購入</h3>
                            <p class="c-flow-contents__item-text">
                            悪天候の日や夜間など、太陽光発電システムからの電力がご家庭の使用量を下回る場合でもご安心ください。必要な電力は、これまで通り電力会社から自動的に供給されるため、電気の心配なく快適な暮らしが維持されます。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-2col-contents">
            <div class="l-container">
                <div class="c-2col-contents__item">
                    <div class="c-2col-contents__image">
                        <img src="<?php bloginfo('template_url');?>/img/sunlight-2col-img1.jpg" alt="「余剰電力の売電」のイメージ"/>
                    </div>
                    <div class="c-2col-contents-body">
                        <h2 class="c-2col-contents__title">導入ハードルが低い理由</h2>
                        <p class="c-2col-contents__text">太陽光発電システムの導入は、以前と比べてずっと身近になりました。近年では技術革新により、様々な屋根の形や素材にも対応できる柔軟性が増しています。また、国や自治体による補助金制度を活用できるケースも多く、初期費用を抑えることが可能です。アミカブルサービスでは、お客様の状況に合わせた最適なプランを分かりやすくご提案し、導入までを丁寧にお手伝いするため、初めての方でも安心して設置を進められます。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-advantage-contents">
            <div class="l-container">
                <h2 class="c-advantage-contents__title">アミカブルサービスの強み</h2>
                <ul class="c-advantage-contents__list">
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">最適設計と設置</h3>
                            <p class="c-advantage-contents-item-text">お客様の屋根形状や日当たりを詳細に調査し、最適な太陽光パネルの配置とシステム容量を設計します。最大限の発電効率と費用対効果を追求し、お客様のライフスタイルに合わせたオーダーメイドのシステムをご提案。長く安心して最大の経済メリットを享受いただけます。</p>
                        </div>
                    </li>
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">自社施工による高精度な工事</h3>
                            <p class="c-advantage-contents-item-text">太陽光発電システムの設置工事は、経験豊富な自社スタッフが一貫して行います。外部委託を最小限に抑えることで、設計から施工、アフターメンテナンスまで全ての工程で高い品質管理を徹底。安全かつ高精度な工事をお約束し、お客様の大切なご自宅とシステムの長期的な安定稼働をお守りします。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="page-sunlight-maker">
            <div class="l-container">
                <h2 class="page-sunlight-maker__title">取り扱いメーカー一覧</h2>
                <ul class="page-sunlight-maker__list">
                    <li class="page-sunlight-maker__item">
                        <div class="page-sunlight-maker__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-maker-img1.svg" alt="パナソニックロゴ"/>
                        </div>
                        <p>パナソニック</p>
                    </li>
                    <li class="page-sunlight-maker__item">
                        <div class="page-sunlight-maker__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-maker-img2.svg" alt="シャープロゴ"/>
                        </div>
                        <p>シャープ</p>
                    </li>
                    <li class="page-sunlight-maker__item">
                        <div class="page-sunlight-maker__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-maker-img3.svg" alt="三菱電機ロゴ"/>
                        </div>
                        <p>三菱電機</p>
                    </li>
                    <li class="page-sunlight-maker__item">
                        <div class="page-sunlight-maker__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-maker-img4.svg" alt="東芝ロゴ"/>
                        </div>
                        <p>東芝</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-merit-point">
            <div class="l-container">
                <h3 class="c-merit-point__title">太陽光発電導入のメリット</h3>
                <ul class="c-merit-point__content">
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-merit-point-img1.jpg" alt="「余剰電力の売電」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>1</span></p>
                            <h3 class="c-merit-point-item-title">電気代の節約が可能</h3>
                            <p class="c-merit-point-item-text">太陽光発電システムを導入すれば、昼間にご自宅で電気を作り、使うことができます。これにより、電力会社から購入する電力量を大幅に減らせるため、毎月の電気代を大きく削減できます。電気料金の変動リスクも軽減され、家計に優しいだけでなく、環境にも配慮した持続可能な暮らしを実現します。</p>
                        </div>
                    </li>
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-merit-point-img2.jpg" alt="「余剰電力の売電」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>2</span></p>
                            <h3 class="c-merit-point-item-title">売電や補助金で導入ハードルが低い</h3>
                            <p class="c-merit-point-item-text">太陽光発電システムは、発電した電気のうち使いきれなかった分を電力会社に売電することで、収入を得られます。さらに、国や自治体から提供される補助金制度を活用できる場合も多く、これにより初期費用を抑え、導入のハードルを大きく下げることが可能です。賢く導入し、経済的なメリットを享受しましょう。</p>
                        </div>
                    </li>
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/sunlight-merit-point-img3.jpg" alt="「余剰電力の売電」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>3</span></p>
                            <h3 class="c-merit-point-item-title">停電時も安心！</h3>
                            <p class="c-merit-point-item-text">災害による大規模停電や、予期せぬトラブルで電気が止まってしまった際も、太陽光発電システムと蓄電池があれば安心です。日中に発電した電気を貯めておくことで、夜間でも照明や通信機器など、必要最低限の電気を確保できます。非常時にも慌てることなく、家族の安全と快適な生活を守る備えとなります。</p>
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
                                    <dt class="faq_q">なぜ自社施工にこだわっているのですか？</dt>
                                    <dd class="faq_a">自社施工は、工事の品質を最高水準に保ち、お客様に責任あるサービスを提供するためのこだわりです。経験豊富な自社スタッフが全ての工程を一貫して行うため、細部にまで目が行き届き、トラブル時の迅速な対応も可能です。安心して長くご利用いただくための基盤となります。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">太陽光発電の価格は分かりにくいと聞きますが、明瞭な価格設定ですか？</dt>
                                    <dd class="faq_a">はい、ご安心ください。お客様の住まいに最適なシステムを設計した上で、内訳を明確にしたお見積もりをご提示します。不必要な費用を排除し、一つ一つの価格の理由を丁寧にご説明することで、お客様に心から納得いただける適正な価格での導入を追求しています。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">導入後のメンテナンスや保証はどのようになっていますか？</dt>
                                    <dd class="faq_a">導入後もお客様に長く安心してご利用いただくため、充実のアフターサポート体制を整えています。定期的な点検の推奨や発電データの管理はもちろん、メーカー保証に加えて自社による施工保証も提供。万が一の不具合にも、地域密着だからこそ迅速に駆けつけ対応いたします。</dd>
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

        <section class="c-voices">
            <div class="l-container">
                <div class="c-voices-inner">
                    <div class="c-voices-title__wrapper">
                        <p class="c-voices-eng__title">Voices</p>
                        <h2 class="c-voices-title">
                            <img src="<?php bloginfo('template_url');?>/img/top-voices-title.svg" alt="お客様の声">
                        </h2>
                    </div>
                    <ul class="c-voices-list">
                        <li class="c-voices-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-voices-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-voices-image1.jpg" alt="NO IMAGE" />
                                </div>
                                <div class="c-voices-list__content">
                                    <p class="c-voices-list__content_area">〇〇市A様</p>
                                    <p>本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                        <li class="c-voices-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-voices-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-voices-image2.jpg" alt="NO IMAGE" />
                                </div>
                                <div class="c-voices-list__content">
                                    <p class="c-voices-list__content_area">〇〇市A様</p>
                                    <p>本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                        <li class="c-voices-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-voices-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-voices-image3.jpg" alt="NO IMAGE" />
                                </div>
                                <div class="c-voices-list__content">
                                    <p class="c-voices-list__content_area">〇〇市A様</p>
                                    <p>本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                        <li class="c-voices-list__item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="c-voices-list__images">
                                    <img src="<?php bloginfo('template_url');?>/img/top-voices-image1.jpg" alt="NO IMAGE" />
                                </div>
                                <div class="c-voices-list__content">
                                    <p class="c-voices-list__content_area">〇〇市A様</p>
                                    <p>本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用本文引用</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php bloginfo('url'); ?>/voice/" class="c-button">もっと見る</a>
                </div>
            </div>
        </section>

        <section class="c-service-list">
            <div class="l-container">
                <h3 class="c-service-list__title">サービス</h3>
                <ul class="c-service-list__box c-service-list__box__2col">
                    <li>
                        <a href="<?php bloginfo('url'); ?>/battery/">
                            <div class="top-service-item__icon">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-icon-battery.svg" alt="太陽光パネルのアイコンめてでも安心。わかりやすい説明と相談体制」イメージ画像"/>
                            </div>
                            <p>家庭用蓄電池</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/repair/">
                            <div class="top-service-item__icon">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-icon-repair.svg" alt="修理サービス"/>
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