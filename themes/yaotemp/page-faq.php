<?php get_header(); ?>

<div class="page-faq">
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

        <section class="faq-link__contents">
            <ul class="faq-link__tabs">
                <li>
                    <a href="#faq01">太陽光発電について</a>
                </li>
                <li>
                    <a href="#faq02">家庭用蓄電池について</a>
                </li>
                <li>
                    <a href="#faq03">工事について</a>
                </li>
                <li>
                    <a href="#faq04">故障・メンテナンスについて</a>
                </li>
                <li>
                    <a href="#faq05">費用について</a>
                </li>
            </ul>
            <p>少しでも疑問点があればお気軽にご連絡ください。</p>
        </section>

        <section id="faq01" class="c-faq">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <h3 class="c-faq-title">太陽光発電について</h3>
                    <div class="c-sekoujirei-title__wrapper">
                        <ul class="faq_list">
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">曇りや雨の日の発電はどうなるの？</dt>
                                    <dd class="faq_a">晴天の日にはかないませんが曇りや雨の日でも発電はしています。積雪の場合はパネルを完全に覆ってしまうことが多い為あまり発電は期待できません。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">太陽光発電のメリットは？</dt>
                                    <dd class="faq_a">太陽光のエネルギーを電気エネルギーに変換するクリーンは発電方法です。モーター等の可動部分がないので騒音の心配もありません。設置場所や必要に応じて小規模のものから大規模なものまで設置可能です。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">太陽電池は蓄電できますか？</dt>
                                    <dd class="faq_a">太陽光により太陽電池は発電しますが太陽電池には蓄電能力はありません。別途蓄電池が必要です。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">太陽光発電の価格は分かりにくいと聞きますが、明瞭な価格設定ですか？</dt>
                                    <dd class="faq_a">はい、ご安心ください。お客様の住まいに最適なシステムを設計した上で、内訳を明確にしたお見積もりをご提示します。不必要な費用を排除し、一つ一つの価格の理由を丁寧にご説明することで、お客様に心から納得いただける適正な価格での導入を追求しています。</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq02" class="c-faq">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <h3 class="c-faq-title">家庭用蓄電池について</h3>
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

        <section id="faq03" class="c-faq">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <h3 class="c-faq-title">工事について</h3>
                    <div class="c-sekoujirei-title__wrapper">
                        <ul class="faq_list">
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">設置工事はどれくらいかかりますか</dt>
                                    <dd class="faq_a">一般家庭なら2日程度です。設置するシステムによって工事内容も変わります。皆様の大切なお家にパネルを設置する為に傷がつかない様、パネルが長持ちする様丁寧な施工を心がけています。安価な施工会社より日数がかかることもございますが工事内容はしっかりとご納得いくまでご説明させていただきます。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">屋根の種類によって工法は変わりますか？</dt>
                                    <dd class="faq_a">一般家庭なら2日程度です。設置するシステムによって工事内容も変わります。皆様の大切なお家にパネルを設置する為に傷がつかない様、パネルが長持ちする様丁寧な施工を心がけています。安価な施工会社より日数がかかることもございますが工事内容はしっかりとご納得いくまでご説明させていただきます。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">屋根の種類によって工法は変わりますか</dt>
                                    <dd class="faq_a">屋根の形状や葺き方によって工法が変わります。方角によっても変わってきますのでしっかりと現地調査の上、最適なシステムをご提案いたします。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">どんな屋根にも設置できますか</dt>
                                    <dd class="faq_a">基本的にはどのような屋根にも設置することは可能です。しかし築年数が古く強度に不安があったり、屋根面積が小さい場合はご希望のシステムを設置できない場合もございます。できるだけお客様のライフスタイルやご要望にあったものをご提案させていただきますのでお気軽にご相談ください。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">なぜ自社施工にこだわっているのですか？</dt>
                                    <dd class="faq_a">自社施工は、工事の品質を最高水準に保ち、お客様に責任あるサービスを提供するためのこだわりです。経験豊富な自社スタッフが全ての工程を一貫して行うため、細部にまで目が行き届き、トラブル時の迅速な対応も可能です。安心して長くご利用いただくための基盤となります。</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq04" class="c-faq">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <h3 class="c-faq-title">故障・メンテナンスについて</h3>
                    <div class="c-sekoujirei-title__wrapper">
                        <ul class="faq_list">
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">定期点検の内容を教えてください</dt>
                                    <dd class="faq_a">モジュール温度計、外気温度計、日射計の装備された、アレイテスタという測定器を使用して点検します。この測定器を使用することにより、太陽電池モジュールの出力特性を測り、劣化や故障を判断します。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">定期点検は来ていただけますか？</dt>
                                    <dd class="faq_a">最初の1年目を無料とするメンテナンスは、10年間を目安に定期点検を提案させていただいています。設置後、1年、4年、9年というような間隔での定期点検をお勧めし、何か問題が生じていても、メーカー保証期間内で対処できるように、最低でも10年間はデータを管理し、点検をさせていただきたいと考えています。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">発電量は管理してもらえますか？</dt>
                                    <dd class="faq_a">当初の計画通り発電されているかどうかを、当社は責任を持ってフォローさせていただいています。お客様に毎月ハガキをお送りいたしますので今月は売買電気料金がいくらで、発電量は何キロワットだったと記入して返信くだされば、当社でデータを管理し、設置前に予測したシミュレーション数値と照合いたします。</dd>
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

        <section id="faq05" class="c-faq">
            <div class="l-container">
                <div class="c-sekoujirei-inner">
                    <h3 class="c-faq-title">費用について</h3>
                    <div class="c-sekoujirei-title__wrapper">
                        <ul class="faq_list">
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">太陽光設置の助成金はありますか？</dt>
                                    <dd class="faq_a">お住まいの市町村によっては助成金制度や補助金が出るところもございます。一度ご自身の市町村のホームページ等でご確認されることをお勧めいたします。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">パワーコンディショナーの耐用年数と費用は？</dt>
                                    <dd class="faq_a">耐用年数は10～15年程度といわれており設置場所の環境によって異なります。機器代と工事費が必要となります。定期点検も行っておりますので気になる点はどんどんご質問ください。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">初期投資した設置費用等は回収できますか？</dt>
                                    <dd class="faq_a">工事の時期やご契約内容によって異なりますが早ければ15年から20年くらいで回収できる場合もございます。</dd>
                                </dl>
                            </li>
                        </ul>
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
                                <img src="http://localhost:8080/wp-content/themes/yaotemp/img/top-service-icon-solar.svg" alt="太陽光パネルのアイコンめてでも安心。わかりやすい説明と相談体制」イメージ画像">
                            </div>
                            <p>太陽光発電</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/battery/">
                            <div class="top-service-item__icon">
                                <img src="http://localhost:8080/wp-content/themes/yaotemp/img/top-service-icon-battery.svg" alt="太陽光パネルのアイコンめてでも安心。わかりやすい説明と相談体制」イメージ画像">
                            </div>
                            <p>家庭用蓄電池</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/repair/">
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
    <!-- /l-wrapper -->
</div>

<?php get_footer(); ?>