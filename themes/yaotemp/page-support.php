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
            <h3 class="c-parts-sec__title">安心の未来を支える、充実のメンテナンス体制</h3>
            <p class="c-parts-sec__text">太陽光発電や蓄電池は、設置後のメンテナンスが長期安定稼働の鍵です。<br />
            アミカブルサービスは、導入後の「困った」をなくし、お客様が安心してクリーンエネルギーのある暮らしを送れるよう、充実したサポート体制を整えています。定期点検から万が一のトラブル対応まで、大切な設備を長く見守り続けます。</p>
        </div>

        <div class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>こんな不安</span>ありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>故障しないか不安</p></li>
                    <li><p>本当にサポートしてくれる？</p></li>
                    <li><p>台風などで大きな損壊が起きないか</p></li>
                    <li><p>定期的に蓄電池を見て欲しい</p></li>
                </ul>
            </div>
        </div>

        <div class="c-parts-sec">
            <h3 class="c-parts-sec__title">アミカブルサービスは、いつまでも最適な発電環境を提供します。</h3>
            <p class="c-parts-sec__text">太陽光発電システムは、設置して終わりではありません。<br />
            アミカブルサービスでは、導入後の長期にわたる安定稼働と最高のパフォーマンス維持のため、手厚いアフターサポートをお約束します。定期的な点検や発電状況のモニタリング、そして万が一のトラブルへの迅速な対応を通じて、お客様の安心で快適なエネルギーライフをいつまでも支え続けます。</p>
        </div>
        
        <section class="c-number-feature">
            <div class="l-container">
                <h3 class="c-number-feature__title">メンテナンス内容</h3>
                <div class="c-number-feature__content">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/support-number-feature-img1.jpg" alt="「定期点検」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">01</span>
                            <h3 class="c-number-feature__title">定期点検</h3>
                            <p class="c-number-feature__text">太陽光発電システムが常に最高の性能を発揮できるよう、定期的な点検は欠かせません。アミカブルサービスでは、発電量のチェック、接続状況の確認、パネルの汚れや損傷の有無など、多岐にわたる項目をプロの目で丁寧に点検します。これにより、小さな変化も見逃さず、トラブルを未然に防ぎ、システムの寿命を延ばします。</p>
                        </div>
                    </div>
                    
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/support-number-feature-img2.jpg" alt="「緊急対応」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">02</span>
                            <h3 class="c-number-feature__title">緊急対応</h3>
                            <p class="c-number-feature__text">万が一、システムに異常が発生したり、急なトラブルに見舞われたりした際もご安心ください。アミカブルサービスは地域密着の強みを活かし、お客様からのご連絡に迅速に対応いたします。経験豊富なスタッフがすぐに駆けつけ、原因を特定し、適切な処置を行うことで、お客様の電力環境を速やかに復旧させます。</p>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/support-number-feature-img3.jpg" alt="「設備更新・交換対応」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">03</span>
                            <h3 class="c-number-feature__title">設備更新・交換対応</h3>
                            <p class="c-number-feature__text">太陽光発電システムや蓄電池は長期にわたって稼働しますが、一部の機器は経年劣化により交換が必要になる場合があります。特に、パワーコンディショナーなどは寿命があります。アミカブルサービスでは、お客様のシステムの状況を定期的に診断し、最適なタイミングでの設備更新や交換をご提案。常に最新の効率と安心をお届けします。</p>
                        </div>
                    </div>
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__image">
                            <img src="<?php bloginfo('template_url');?>/img/support-number-feature-img4.jpg" alt="「保証内容の概要」のイメージ画像"/>
                        </div>
                        <div class="c-number-feature__body">
                            <span class="bg-number">04</span>
                            <h3 class="c-number-feature__title">保証内容の概要</h3>
                            <p class="c-number-feature__text">アミカブルサービスが提供する太陽光発電システムおよび蓄電池には、メーカー保証と自社施工保証の両方が適用されます。これにより、製品の不具合だけでなく、工事に起因する問題についても二重の安心を提供します。詳細な保証期間や内容については、ご契約時に丁寧にご説明いたしますので、ご不明な点はお気軽にお尋ねください。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-advantage-contents">
            <div class="l-container">
                <h2 class="c-advantage-contents__title">施工や発電の問題を解決する最新のテクノロジー</h2>
                <ul class="c-advantage-contents__list">
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">太陽電池アレイテスタ<br class="u-sp">【SOKODES（ソコデス）】</h3>
                            <p class="c-advantage-contents-item-text">SOKODES（ソコデス）は、太陽電池アレイの障害位置検出テスターです。モジュール内の断線と接続ケーブルの断線箇所と地絡を接続箱から検出できます。アミカブルサービスでは、モジュール取付時の配線確認・動作確認、定期点検時の検査装置として使用している必須の点検機器です。この機器を持っていないと太陽光発電システムの点検は出来ません。</p>
                        </div>
                    </li>
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">太陽電池アレイテスタ<br class="u-sp">【I-VカーブトレーサSIV-600】</h3>
                            <p class="c-advantage-contents-item-text">通常の電圧テスターでは開放電圧の測定のみとなる為、モジュールの接続間違いは発見できますが発電電力の測定はできません。この機器は電流と電圧の変化を測定し各系統の発電性能をI-Vカーブというグラフで表示できるので、不具合がないかどうかを正確にチェック出来ます。</p>
                        </div>
                    </li>
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">Solamente-iS<br class="u-sp">【ソラメンテアイエス】</h3>
                            <p class="c-advantage-contents-item-text">屋根に上りパネル表面のバスバーにセンサをあてるだけで発電電流のみを正確に感知します。バスバー電流を感知すれば、その強さをスピーカーとLEDランプで表示します。発電していない箇所は反応がないのですぐ分かります。曇りの日や急な天候の変化等、天候に左右されることなく安定した点検・施工確認ができます。</p>
                        </div>
                    </li>
                    <li class="c-advantage-contents__item">
                        <div class="c-advantage-contents-body">
                            <h3 class="c-advantage-contents-item-title">サーモカメラ<br class="u-sp">（赤外線サーモグラフィ）<br class="u-sp">【FLIR E6】</h3>
                            <p class="c-advantage-contents-item-text">太陽光パネル表面の温度を測定して、ホットスポット(特にパネル表面が熱い部分)が出来ていないかチェックします。ホットスポットが起こる原因として、鳥の糞や落ち葉、汚れなどガラスの表面の一部分が覆われることによる外部要因、内部配線の不良などの内部要因が考えられ、発電量の低下につながります。<br />
                            ※太陽光パネルは真夏の炎天下だと、ガラスの表面温度は80度くらいになります。これ自体は普通のことで「ホットスポット」とは言いません。太陽電池モジュールの中でピンポイントに他の部位と比べて異常に熱くなっているところが「ホットスポット」です。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->
</div>

<?php get_footer(); ?>
