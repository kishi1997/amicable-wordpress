<?php get_header(); ?>

<div class="page-reason">
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
            <p class="c-parts-sec__text">アミカブルサービスは、太陽光・蓄電池からリフォームまで自社一貫施工。<br />
            安心価格と手厚いサポート、豊富な実績で、お客様の快適な暮らしを地域密着で支えます。</p>
        </div>

        <section class="c-number-feature">
            <div class="l-container">
                <div class="c-number-feature__content">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img1.jpg" alt="「削減効果を“見える化”する事前シミュレーション」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">01</span>
                            <h3 class="c-number-feature__title">削減効果を“見える化”する<br />事前シミュレーション</h3>
                            <p class="c-number-feature__text">お客様の建物や生活スタイルに合わせ、太陽光発電導入後の詳細な電気代削減効果を事前にシミュレーションします。単に削減額を提示するだけでなく、月々の電気使用量、日照時間、ご家族の生活サイクルまで考慮に入れた精度の高い予測を行います。具体的な数値でメリットを「見える化」し、納得のいく資金計画やローンシミュレーションもご提案。将来にわたる経済的メリットを明確にご理解いただくことで、安心して太陽光発電システムの導入を決めていただけます。アミカブルサービスは、お客様一人ひとりの「もしも」や「いつから」といった疑問にも丁寧にお答えし、長期的な視点でのメリットを共に考え、お客様の明るい未来をサポートします。</p>
                        </div>
                        <div class="c-number-feature__textbox">
                            <h2>削減電気代</h2>
                            <p>太陽光発電システムと蓄電池の導入は、毎月の電気代を大きく削減し、家計にゆとりをもたらします。昼間に発電した電気を自家消費したり、余った電気を売電したり、夜間は蓄電池に貯めた電気を活用したりすることで、電力会社からの購入量を最小限に抑えることが可能です。これにより、光熱費の変動に強く、安定した暮らしを実現します。</p>
                        </div>
                    </div>
                    
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img2.jpg" alt="「設置から点検まで。自社施工＆一貫対応」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">02</span>
                            <h3 class="c-number-feature__title">設置から点検まで。<br />自社施工＆一貫</h3>
                            <p class="c-number-feature__text">アミカブルサービスは、太陽光発電システムの販売から設置、定期点検、アフターサポートまで、全てを経験豊富な自社スタッフが一貫して対応します。元ハウスメーカーとしての知識を活かし、家の構造を熟知した上で、高品質な施工と迅速な連携を実現。年間約200件の実績に裏打ちされた熟練の技術で、徹底した防水処理や精密な固定など、細部にわたり丁寧な作業をお約束します。お客様の大切なご自宅に負担をかけず、システムの長期安定稼働を確保。責任を持って最後までサポートし、「任せて安心」のサービスを提供します。</p>
                        </div>
                        <div class="c-number-feature__listbox">
                            <h3><span>主な対応例</span></h3>
                            <ul class="c-number-feature__list">
                                <li>最適なシステム設計から設置工事まで</li>
                                <li>安心を長く支える定期点検とメンテナンス</li>
                                <li>導入後も続く充実のアフターサポート</li>
                                <li>万が一のトラブルに迅速な緊急対応</li>
                                <li>どんなご要望にも応える柔軟な相談体制</li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img3.jpg" alt="「導入後もずっと続く。アフターサポート体制」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">03</span>
                            <h3 class="c-number-feature__title">導入後もずっと続く。<br />アフターサポート体制</h3>
                            <p class="c-number-feature__text">太陽光発電や蓄電池は、設置したら終わりではありません。アミカブルサービスは、導入後も長期にわたりお客様の安心を支える充実のアフターサポート体制を確立しています。私たちは、お客様の発電データを定期的に集計し、常にシステムの異常がないかを確認。3年、5年、9年、14年といった計画的な定期点検を推奨し、最低10年間はデータを管理することで、メーカー保証期間内での適切な対処を可能にしています。これにより、発電量の低下や不具合の多角的防止に努めます。万が一のトラブル時も、迅速な対応を心がけ、お客様が長く快適に、そして安心してクリーンエネルギーのある暮らしを送れるよう、大切な設備を末永く見守り続けます。</p>
                            <a href="<?php bloginfo('url'); ?>/support/" class="c-button">アフターメンテナンスの詳細はこちら</a>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img4.jpg" alt="「地域密着だから、すぐ駆けつけられる安心感」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">04</span>
                            <h3 class="c-number-feature__title">地域密着だから、<br />すぐ駆けつけられる安心感</h3>
                            <p class="c-number-feature__text">アミカブルサービスは、茨城県稲敷郡阿見町を拠点に、茨城県全域、千葉県、埼玉県の一部へと地域に密着したサービスを展開しています。太陽光発電システムは長期間使用する設備だからこそ、万が一の不具合や急なトラブルが発生した際には、迅速かつ的確な対応が不可欠です。私たちは、お客様からのご連絡にスピーディーに対応できるよう、地域に根ざした企業ならではのフットワークの軽さを強みとしています。経験豊富な自社スタッフがすぐに現場へ駆けつけ、原因を特定し、適切な処置を行うことで、お客様の電力環境を速やかに復旧させます。お客様一人ひとりの顔が見える関係性を大切にし、「困った時にすぐに来てもらえる」という、地域密着ならではの揺るぎない安心感を提供し続けます。</p>
                        </div>
                        <div class="c-parts-check">
                            <h3 class="c-parts-check__title">対応地域</h3>
                            <ul class="c-parts-check__list" role="list">
                                <li><p>テキストテキストテキストテキスト</p></li>
                                <li><p>テキストテキストテキストテキスト</p></li>
                                <li><p>テキストテキストテキストテキスト</p></li>
                                <li><p>テキストテキストテキストテキスト</p></li>
                                <li><p>テキストテキストテキストテキスト</p></li>
                                <li><p>テキストテキストテキストテキスト</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img5.jpg" alt="「価格に納得。無理なく導入できる適正プラン」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">05</span>
                            <h3 class="c-number-feature__title">価格に納得。<br />無理なく導入できる適正プラン</h3>
                            <p class="c-number-feature__text">アミカブルサービスは、お客様に心から納得して太陽光発電や蓄電池を導入いただけるよう、透明性の高い適正価格でのご提案を徹底しています。お客様のご予算やご自宅の状況を詳細にヒアリングし、最も効率の良い最適なシステムを個別に設計。初期費用だけでなく、長期的な経済メリットまで見据えた無理のない資金計画をご提案します。全ての費用項目を明確に提示し、お客様が納得してクリーンエネルギーライフを始められるよう、全力でサポートいたします。</p>
                            <a href="<?php bloginfo('url'); ?>/price/" class="c-button">価格についてはこちら</a>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img6.jpg" alt="「数多くの実績とお客様の声が信頼の証」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">06</span>
                            <h3 class="c-number-feature__title">数多くの実績と<br />お客様の声が信頼の証</h3>
                            <p class="c-number-feature__text">アミカブルサービスは、創業以来、地域のお客様に支えられ、数多くの太陽光発電システムや家庭用蓄電池の導入に携わってきました。年間約200件にも及ぶ施工実績は、お客様から選ばれ続けてきた信頼の証です。お客様からは「頼んでよかった」「説明がわかりやすかった」といった喜びの声を多数いただいており、これらが私たちの確かな技術力と誠実な対応の証明です。私たちはこれからも、お客様の信頼に応え続けます。</p>
                        </div>
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
                    <a href="<?php bloginfo('url'); ?>/voices/" class="c-button">もっと見る</a>
                </div>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="l-container">
                <div class="c-number-feature__content">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/reason-number-feature-img7.jpg" alt="「初めてでも安心。わかりやすい説明と相談体制」イメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">07</span>
                            <h3 class="c-number-feature__title">初めてでも安心。<br />わかりやすい説明と相談体制</h3>
                            <p class="c-number-feature__text">太陽光発電や家庭用蓄電池は専門知識が必要ですが、ご安心ください。アミカブルサービスでは、お客様が安心して新しいエネルギー生活を始められるよう、徹底した「わかりやすさ」と「寄り添う相談体制」を心がけています。専門用語を避け、お客様が心から納得できるよう丁寧な言葉でシステムやメリット、導入の流れを説明。どんな小さな疑問や不安も解消できるよう、現地調査から見積もり提示、契約まで、各ステップで不明点がないようお客様目線でのサポートを徹底します。強引な勧誘はせず、安心と信頼のパートナーとして徹底サポートいたします。</p>
                        </div>
                        <div class="c-button-box">
                            <a href="<?php bloginfo('url'); ?>/column/" class="c-button">お役立ちコラムはこちら</a>
                            <a href="<?php bloginfo('url'); ?>/faq/" class="c-button">よくある質問はこちら</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-service-list">
            <div class="l-container">
                <h3 class="c-service-list__title">サービス</h3>
                <ul class="c-service-list__box c-service-list__box__3col">
                    <li>
                        <a href="<?php bloginfo('url'); ?>/sunlight/">
                            <div class="top-service-item__icon">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-icon-solar.svg" alt="太陽光発電のアイコン"/>
                            </div>
                            <p>太陽光発電</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/battery/">
                            <div class="top-service-item__icon">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-icon-battery.svg" alt="蓄電池のアイコン"/>
                            </div>
                            <p>家庭用蓄電池</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/repair/">
                            <div class="top-service-item__icon">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-icon-repair.svg" alt="工具のアイコン"/>
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