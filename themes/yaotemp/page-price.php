<?php get_header(); ?>

<div class="page-price">
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
            <h3 class="c-parts-sec__title">明瞭な価格で導入をサポート</h3>
            <p class="c-parts-sec__text">アミカブルサービスは、太陽光発電・蓄電池の導入を明瞭な価格で支援します。<br />
            お客様の予算と要望を丁寧に伺い、最適なシステムを提案。費用の内訳を明確にした見積もりで、初期費用だけでなく長期的な経済メリットまで見据えた納得のプランを提供し、安心の導入をサポートします。</p>
        </div>

        <div class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>料金</span>に関して<br class="u-sp">こんな<span>不安</span>ありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>高そう･･･</p></li>
                    <li><p>他社との違いが分からない</p></li>
                    <li><p>追加料金を請求されないか不安</p></li>
                    <li><p>料金プランが複雑ではないか心配</p></li>
                </ul>
            </div>
        </div>

        <div class="c-parts-sec">
            <h3 class="c-parts-sec__title">アミカブルサービスでは“安心・納得の価格”でご提案します！</h3>
            <p class="c-parts-sec__text">アミカブルサービスは、お客様に心からご納得いただけるよう、明瞭で適正な価格を提示します。無理なく導入できるよう、ご予算やライフスタイルに合わせた最適なプランを丁寧に作成。初期費用だけでなく、長期的な経済メリットまで考慮した透明性の高いお見積もりで、お客様のクリーンエネルギー導入を全力でサポートします。</p>
        </div>

        <section class="price-plan">
            <div class="l-container">
                <h3 class="price-plan__title">料金プラン</h3>
                <ul class="price-plan__content">
                    <li class="price-plan__item">
                        <div class="price-plan-item__text">
                            <div class="price-plan-item__header">
                                <h4>メニュー名メニュー名メニュー名</h4>
                                <p>説明文など説明文など説明文など説明文など説明文など説明文など</p>
                            </div>
                            <div class="price-plan-item__body">
                                <p><span class="yen">000,000</span>円</p>
                                <p>（税込 000,000円）</p>
                            </div>
                        </div>
                        <div class="price-plan-item__image">
                            <img src="<?php bloginfo('template_url');?>/img/price-plan-img1.jpg" alt="">
                        </div>
                    </li>
                    <li class="price-plan__item">
                        <div class="price-plan-item__text">
                            <div class="price-plan-item__header">
                                <h4>メニュー名メニュー名メニュー名</h4>
                                <p>説明文など説明文など説明文など説明文など説明文など説明文など</p>
                            </div>
                            <div class="price-plan-item__body">
                                <p><span class="yen">000,000</span>円</p>
                                <p>（税込 000,000円）</p>
                            </div>
                        </div>
                        <div class="price-plan-item__image">
                            <img src="<?php bloginfo('template_url');?>/img/price-plan-img2.jpg" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="l-container">
                <h3 class="c-number-feature__title">価格だけじゃない！<br class="u-sp">選ばれる理由</h3>
                <div class="c-number-feature__content">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/price-number-feature-img1.jpg" alt="「」イメージ画像">
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">01</span>
                            <h3 class="c-number-feature__title">コスパの良さ</h3>
                            <p class="c-number-feature__text">アミカブルサービスが追求するのは、単なる安さではありません。お客様にとっての長期的なコストパフォーマンスを最重視しています。高品質なシステムと丁寧な施工、そして充実したアフターサポートによって、導入後の発電効率を最大限に引き出し、売電収入や電気代削減効果を最大化。結果として、お客様が長期にわたって得られる経済的なメリットを最大化します。</p>
                        </div>
                    </div>
                    
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/price-number-feature-img2.jpg" alt="「」イメージ画像">
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">02</span>
                            <h3 class="c-number-feature__title">お見積り明細をわかりやすく提示</h3>
                            <p class="c-number-feature__text">「何にどれくらいの費用がかかるのか分からない」という不安は一切ありません。アミカブルサービスでは、システム本体の費用から工事費、諸経費に至るまで、全ての費用項目を詳細かつ明確に記載したお見積り明細を提示します。不明な点は一つひとつ丁寧にご説明し、お客様が納得して契約できるよう、透明性を徹底しています。</p>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/price-number-feature-img3.jpg" alt="「」イメージ画像">
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">03</span>
                            <h3 class="c-number-feature__title">安さで勝負しない、適正価格</h3>
                            <p class="c-number-feature__text">私たちは、お客様に「安かろう悪かろう」ではない、真の価値を提供したいと考えています。そのため、品質を犠牲にするような過度な低価格競争は行いません。お客様のご要望とご自宅の状況に最適なシステムを、適正な価格でご提案。導入後の安心と長期的なメリットを第一に考えた、信頼できるパートナーとしてお選びいただけます。</p>
                        </div>
                    </div>
                </div>
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
                                    <dt class="faq_q">なぜ「安さ」だけで勝負しないのですか？</dt>
                                    <dd class="faq_a">私たちは、お客様に長期的な安心と最大のメリットを提供するため、品質とサポートを最優先しています。過度な低価格競争は、部材の品質低下や手抜き工事に繋がりかねません。アミカブルサービスでは、高品質な施工と充実したアフターサポートを適正な価格で提供することで、お客様が長く安心してシステムをご利用いただけるよう努めています。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">お見積もりは無料ですか？また、どのくらいで作成してもらえますか？</dt>
                                    <dd class="faq_a">はい、お見積もりは無料で承っておりますのでご安心ください。お客様のご自宅の状況やご要望を詳しくお伺いした上で、最適なプランとお見積もりを作成いたします。お見積もりの作成には通常、現地調査後、数日程度のお時間をいただくことがございます。具体的な期間については、お問い合わせの際にお伝えいたします。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">予算が限られているのですが、それでも導入は可能ですか？</dt>
                                    <dd class="faq_a">はい、ご予算に合わせた最適なプランを提案させていただきます。お客様のご希望を詳しくヒアリングし、初期費用を抑える方法や、国・自治体の補助金制度の活用、ローンシミュレーションなど、様々な角度から無理なく導入できる方法をご提案します。まずは、お気軽にご相談ください。</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
        </main>
        <!-- /l-main --> 
    </div>
    <!-- /l-wrapper -->
</div>

<?php get_footer(); ?>
