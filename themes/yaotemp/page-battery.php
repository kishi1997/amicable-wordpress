<?php get_header(); ?>

<div class="page-battery">
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
            <h3 class="c-parts-sec__title">家庭用蓄電池システムで安心と節約を</h3>
            <p class="c-parts-sec__text">家庭用蓄電池は、太陽光発電で生まれた電気や、深夜の安い電力を貯めておき、必要な時に使えるシステムです。昼間の電気代が高い時間帯に貯めた電気を使ったり、災害時の停電時にも自宅で電力を確保できるため、安心感が高まります。家計の節約と万が一の備えを両立し、より賢く、より快適な電力ライフを実現します。</p>
        </div>

        <div class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>こんな方にオススメ！</span></h3>
                <ul class="c-parts-check__list">
                    <li><p>太陽光パネルを既に設置している方</p></li>
                    <li><p>停電対策をしたい方</p></li>
                    <li><p>光熱費をさらに抑えたい方</p></li>
                    <li><p>災害時に備えたい方</p></li>
                </ul>
            </div>
        </div>

        <section class="c-advantage-contents">
            <div class="l-container">
                <h2 class="c-advantage-contents__title">蓄電池の仕組み</h2>
                <ul class="c-advantage-contents__list c-advantage-contents__list_2col">
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents__images">
                            <img src="<?php bloginfo('template_url');?>/img/battery-advantage-image1.jpg" alt="「昼間に充電」のイメージ画像" />
                        </div>
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">昼間に充電</h3>
                            <p class="c-advantage-contents-item-text">家庭用蓄電池は、主に2つの方法で電気を充電します。一つは、太陽光発電システムで昼間に作った余剰電力を貯める方法です。もう一つは、電力会社から提供される夜間の安い電気料金時間帯に電力を購入し、蓄電池に貯めておく方法です。これにより、電気を効率的に活用し、電気代の節約につなげられます。</p>
                        </div>
                    </li>
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents__images">
                            <img src="<?php bloginfo('template_url');?>/img/battery-advantage-image2.jpg" alt="「夜・停電時に電気を利用」のイメージ画像" />
                        </div>
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">夜・停電時に電気を利用</h3>
                            <p class="c-advantage-contents-item-text">蓄電池に貯めた電気は、夜間や電気料金の高い時間帯に、ご家庭の電力として利用できます。また、台風や地震などによる停電が発生した際も、蓄電池が自動的に作動し、貯めておいた電気を供給するため安心です。照明や冷蔵庫、情報機器など、最低限必要な電力を確保し、もしもの時も普段と変わらない安心な暮らしを支えます。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-advantage-contents">
            <div class="l-container">
                <h2 class="c-advantage-contents__title">蓄電池の種類</h2>
                <ul class="c-advantage-contents__list c-advantage-contents__list_2col">
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents__images">
                            <img src="<?php bloginfo('template_url');?>/img/battery-advantage-image3.jpg" alt="「屋内型」のイメージ画像" />
                        </div>
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">屋内型</h3>
                            <p class="c-advantage-contents-item-text">屋内型蓄電池は、その名の通り家の中に設置するタイプです。コンパクトなモデルが多く、比較的静音設計のため、リビングやユーティリティスペースなどにも設置できます。外部の気候変動の影響を受けにくく、安定した性能を発揮しやすいのが特徴です。設置場所のスペースやご自宅のデザインに合わせて選べます。</p>
                        </div>
                    </li>
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents__images">
                            <img src="<?php bloginfo('template_url');?>/img/battery-advantage-image4.jpg" alt="「屋外型」のイメージ画像" />
                        </div>
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">屋外型</h3>
                            <p class="c-advantage-contents-item-text">屋外型蓄電池は、家の外に設置するタイプです。屋内にスペースがなくても設置でき、大容量のモデルが多いため、たくさんの電気を貯めたい場合に適しています。防水・防塵設計が施されており、厳しい気候条件にも耐えられます。敷地内の有効活用をしながら、災害時にも頼れる電力供給源となります。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="l-container">
                <h3 class="c-number-feature__title">アミカブルサービスの対応力</h3>
                <div class="c-number-feature__content">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-number-feature-img1.jpg" alt="「用途に応じた最適機種提案」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">01</span>
                            <h3 class="c-number-feature__title">用途に応じた最適機種提案</h3>
                            <p class="c-number-feature__text">お客様のライフスタイルや電力使用量、太陽光発電システムの有無、そしてご予算に合わせて、最適な家庭用蓄電池の機種を幅広くご提案します。単に容量が大きいだけでなく、充放電の効率、保証期間、設置場所の条件などを総合的に考慮し、お客様にとって最もメリットの大きい一台を選定。納得のいく蓄電池選びをサポートします。</p>
                        </div>
                    </div>
                    
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-number-feature-img2.jpg" alt="「家庭用に適した設置・配線設計」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">02</span>
                            <h3 class="c-number-feature__title">家庭用に適した設置・配線設計</h3>
                            <p class="c-number-feature__text">蓄電池の性能を最大限に引き出し、安全に長くお使いいただくためには、適切な設置と配線設計が不可欠です。アミカブルサービスでは、経験豊富な専門スタッフが、お客様のご自宅の構造や電力系統を詳細に確認し、家庭用に最適化された設置場所と配線ルートを設計します。見た目の美しさにも配慮し、安心で快適な電力環境を構築します。</p>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-number-feature-img3.jpg" alt="「保証とメンテナンス体制の紹介」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">03</span>
                            <h3 class="c-number-feature__title">保証とメンテナンス体制の紹介</h3>
                            <p class="c-number-feature__text">家庭用蓄電池は長期にわたって使用する設備です。アミカブルサービスでは、導入後の安心を最優先に考え、メーカー保証に加え、自社による施工保証も提供しています。さらに、定期的な点検や発電データのモニタリングを通じて、システムの健全な稼働をサポート。万が一のトラブル発生時も、地域密着の強みを活かし、迅速なメンテナンス対応をお約束します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-merit-point">
            <div class="l-container">
                <h3 class="c-merit-point__title">家庭用蓄電池導入のメリット</h3>
                <ul class="c-merit-point__content">
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-merit-point-img1.jpg" alt="「光熱費削減」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>1</span></p>
                            <h3 class="c-merit-point-item-title">光熱費削減</h3>
                            <p class="c-merit-point-item-text">家庭用蓄電池を導入することで、電気代の節約効果をさらに高めることができます。太陽光発電で余った電気を貯めたり、電力会社の安い深夜電力を充電したりして、電気代の高い昼間や夕方にその電気を使うことで、電力会社からの購入量を大幅に削減。電気料金の変動に左右されにくい、安定した家計を実現します。</p>
                        </div>
                    </li>
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-merit-point-img2.jpg" alt="「停電対策」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>2</span></p>
                            <h3 class="c-merit-point-item-title">停電対策</h3>
                            <p class="c-merit-point-item-text">近年増加している自然災害による停電時にも、家庭用蓄電池があれば安心です。蓄電池に貯めておいた電気を、照明や冷蔵庫、スマートフォンの充電など、必要な家電製品に供給できます。もしもの時でも、普段と変わらない生活の一部を維持できるため、家族の安全と快適さを守るための心強い備えとなります。</p>
                        </div>
                    </li>
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-merit-point-img3.jpg" alt="「エコライフを送れる」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>3</span></p>
                            <h3 class="c-merit-point-item-title">エコライフを送れる</h3>
                            <p class="c-merit-point-item-text">家庭用蓄電池と太陽光発電を組み合わせることで、ご自宅で使う電気の大部分をクリーンな再生可能エネルギーでまかなうことが可能になります。これにより、CO2排出量の削減に貢献し、地球環境に優しいエコな暮らしを実現できます。環境意識の高まりとともに、持続可能な社会への貢献を実感できるライフスタイルです。</p>
                        </div>
                    </li>
                    <li class="c-merit-point__item">
                        <div class="c-merit-point__image">
                            <img src="<?php bloginfo('template_url');?>/img/battery-merit-point-img4.jpg" alt="「防災対策」のイメージ"/>
                        </div>
                        <div class="c-merit-point-body">
                            <p class="deco-number">point<span>4</span></p>
                            <h3 class="c-merit-point-item-title">防災対策</h3>
                            <p class="c-merit-point-item-text">家庭用蓄電池は、単なる電気代節約ツールに留まらず、災害時の強力な防災ツールとなります。地震や台風などで電力供給が途絶えても、蓄電池があれば非常用電源として機能し、情報収集のためのテレビやラジオ、連絡手段としての携帯電話の充電などを確保できます。家族の命と安全を守るための、現代における必須の防災対策と言えます。</p>
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
                                    <dt class="faq_q">蓄電池はどのくらいの期間で元が取れますか？</dt>
                                    <dd class="faq_a">蓄電池の導入費用に対する経済的な回収期間は、お客様の電気使用量、太陽光発電システムの有無、機種の容量、そして国の補助金制度の活用状況によって大きく異なります。アミカブルサービスでは、お客様の状況を詳しくお伺いし、具体的なシミュレーションを通じて、最適な回収期間と経済メリットを分かりやすくご説明いたします。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">停電時に家中の電気が使えるようになりますか？</dt>
                                    <dd class="faq_a">蓄電池の種類や容量、ご自宅の配線設計によって異なります。一部の蓄電池は、停電時に家中のほとんどのコンセントに電気を供給できる「全負荷型」に対応しています。一方で、特定のコンセントのみに供給する「特定負荷型」もあります。お客様のご要望やライフスタイルに合わせて、最適なタイプをご提案し、停電時の電力供給範囲を明確にご説明します。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">蓄電池の寿命はどれくらいですか？また、メンテナンスは必要ですか？</dt>
                                    <dd class="faq_a">家庭用蓄電池の一般的な寿命は、使用状況やメーカーによって異なりますが、およそ10年から15年程度とされています。長期間安心してご使用いただくために、定期的な点検をおすすめしています。アミカブルサービスでは、導入後の定期点検や発電データのモニタリングを通じて、蓄電池の健全な状態を維持し、万が一の不具合にも迅速に対応できる体制を整えております。</dd>
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