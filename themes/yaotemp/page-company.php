<?php get_header(); ?>

<div class="page-company">
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
        
        <section class="company-profile">
            <div class="l-container">
                <h2 class="company-profile__title">会社概要</h2>
			    <dl>
				    <dt>社名</dt>
				    <dd>有限会社アミカブルサービス</dd>
				    <dt>代表者</dt>
				    <dd>代表取締役 高野 浩</dd>
				    <dt>創業</dt>
				    <dd>2003年9月1日</dd>
				    <dt>免許・登録</dt>
				    <dd>
                        <ul>
                            <li>建設業許可 茨城県知事許可（般-29）第34275号<br />
                            （電気工事、管工事）</li>
                            <li>第一種フロン類回収業者登録</li>
                            <li>太陽光発電システム施工ID<br />
                            （パナソニック、三菱電機、東芝、シャープ、長州産業、カネカ、フジプレアム、グリッド、アブリテック）</li>
                            <li>蓄電池施工ID<br />
                            （オムロン、長州産業、ニチコン、NFブロッサムテクノロジーズ、Looop、その他）</li>
                        </ul>
                    </dd>
			    	<dt>事業内容</dt>
			    	<dd>
                        <ul>
                            <li>太陽光発電システム設計施工メンテナンス<br /></li>
                            <li>オール電化システム設計施工メンテナンス</li>
                            <li>空調設備工事・メンテナンス</li>
                            <li>住宅設備機器の販売施工</li>
                            <li>省エネ機器販売施工</li>
                            <li>リフォーム事業</li>
                            <li>配電盤事業</li>
                        </ul>
                    </dd>
				    <dt>受付時間</dt>
				    <dd>9：00～18：00</dd>
				    <dt>定休日</dt>
				    <dd>毎週日曜日・祝日</dd>
				    <dt>主な取引銀行</dt>
				    <dd>常陽銀行 阿見支店<br />
                    茨城県信用組合 阿見支店<br />
                    筑波銀行 阿見支店<br />
                    水戸信用金庫 阿見支店</dd>
				    <dt>資格</dt>
				    <dd>
                        <ul>
                            <li>1級PV施工士（一般社団法人 日本PVプランナー協会）</li>
                            <li>第1種電気工事士</li>
                            <li>第2種電気工事士</li>
                            <li>第3種電気主任技術者</li>
                            <li>第3種冷凍機械責任者</li>
                            <li>1級電気製図技能士</li>
                            <li>2級電気工事施工管理技士</li>
                            <li>2級管工事施工管理技士</li>
                            <li>2級ボイラー技士</li>
                            <li>給水装置工事主任技術者</li>
                            <li>危険物取扱主任者（乙種四類）</li>
                            <li>ガス可とう管接続工事監督者講習</li>
                            <li>ガス溶接作業主任者</li>
                            <li>アーク溶接</li>
                            <li>玉掛け</li>
                            <li>高所作業車運転技能講習</li>
                            <li>エネルギー管理士（電気）</li>
                        </ul>
                    </dd>
				    <dt>取扱メーカー</dt>
				    <dd>
                        <ul>
                            <li>太陽光発電システム<br />
                            （パナソニック、Qセルズ、ネクストエナジー、長州産業、シャープ、ソーラーフロンティア）</li>
                            <li>蓄電池<br />
                            （オムロン、長州産業、ニチコン、NFブロッサムテクノロジーズ、Looop、その他）</li>
                            <li>住宅設備関係<br />
                            （ユニットバス、トイレ、システムキッチン、パナソニック、タカラ、TOTO、クリナップ、リクシル）</li>
                            <li>他メーカー取り扱い有</li>
                        </ul>
                    </dd>
			    </dl>
            </div>
		</section>

        <section class="company-location">
            <div class="l-container">
                <h2 class="company-location__title">所在地</h2>
                <div class="company-location__map">
                    <div class="company-location__iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.5307758373547!2d140.2537127396367!3d36.03175011075512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60226c0346d67e8d%3A0x557a1a3f864dac44!2z44CSMzAwLTAzMTEg6Iyo5Z-O55yM56iy5pW36YOh6Zi_6KaL55S65bO25rSl77yV77yS77yX4oiS77yR!5e0!3m2!1sja!2sjp!4v1755349822622!5m2!1sja!2sjp" width="880" height="568" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>    
                    <dl class="company-location__address">
			            <dt>本店</dt>
				        <dd>〒300-0311<br />
                        茨城県稲敷郡阿見町島津527-1</dd>
                        <dt><span class="label">TEL</span></dt>
				        <dd>029-891-2722</dd>
                        <dt><span class="label">フリーダイヤル</span></dt>
				        <dd>0120-877-190</dd>
                    </dl>
                </div>
                <div class="company-location__map">
                    <div class="company-location__iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.495242576703!2d140.24856457580344!3d36.032617572475885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60226c1bcec77203%3A0xcc6c87b54234f9c6!2z44CSMzAwLTAzMTEg6Iyo5Z-O55yM56iy5pW36YOh56iy5pW36YOh6Zi_6KaL55S65bO25rSl77yY77yS77yU4oiS77yR!5e0!3m2!1sja!2sjp!4v1755350122519!5m2!1sja!2sjp" width="880" height="568" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div>
                    <dl class="company-location__address">
			            <dt>配電盤工場</dt>
				        <dd>〒300-0311<br />
                        茨城県稲敷郡阿見町島津824-1</dd>
                    </dl>
                </div>
            </div>
        </section>

        <section class="company-business-area">
            <div class="l-container">
                <h2 class="company-business-area__title">営業範囲マップ</h2>
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/img/company-business-area-map-sp.jpg" media="(max-width: 768px)" />
                    <img src="<?php bloginfo('template_url'); ?>/img/company-business-area-map.jpg" alt="営業範囲マップ" />
                </picture>
                <p>【営業範囲】茨城県・千葉県・埼玉県</p>
            </div>
        </section>

        <section class="c-2col-contents">
            <div class="l-container">
            <h2 class="c-2col-contents__title">採用のご案内</h2>
            <div class="c-2col-contents__content">
                <div class="c-2col-contents__item">
                    <div class="c-2col-contents-body">
                        <h3 class="c-2col-contents-item-title">未経験でも大歓迎！<br />会社と共に成長していける<br class="u-sp">新しい仲間を募集！<br />
                        一人前になるまでイチから<br />
                        しっかり育てていきます！</h3>
                        <p class="c-2col-contents-item-text">私たちは、阿見を拠点に太陽光エネルギー事業やリフォームなどを通して「住みやすい」暮らしの提案をしてきた会社です。創業以来10年以上もの間、実績を積み上げ、お客様との信頼関係を築いてきました。<br />
                        今いるスタッフもベテラン揃いで事業もお陰様で好調ですが、「今」よりも5年先・10年先も良い会社であり続けるため、一緒に成長していけるような新たな仲間を募集！そのため、経験は問いません！</p>
                    </div>
                    <div class="c-2col-contents__image">
                        <img src="<?php bloginfo('template_url');?>/img/company-2col-img1.jpg" alt="「採用のご案内」イメージ画像">
                    </div>
                </div>
            </div>
        </section>

        <section class="company-recruit">
            <div class="l-container">
                <h2 class="company-recruit__title">募集要項</h2>
			    <table class="company-recruit__table">
                    <tbody>
                        <tr>
                            <th>職種／業務内容</th>
                            <td>【営業スタッフ】<br />
                            太陽光発電システム及び蓄電池の営業をお願いします。訪問やイベントでのご案内が中心。電話営業は基本行いません。<br />
                            昨年よりスタートした蓄電池の営業は、お問合せ頂いた方への反響営業がメインです。お客様向けのイベントの企画や販促活動なども行います。<br /><br />
                            【現場スタッフ】<br />
                            太陽光発電に必要なソーラーパネルと蓄電池の設置を行います。<br />
                            屋根の上での高所作業にはなりますが、経験は問いません。未経験の方でもひとつひとつ丁寧に指導します。<br />
                            ※お客様それぞれに合わせたソーラーパネルの大きさや種類・枚数を確認するために屋根に上っての見積もり計算も行います。<br />
                            ※茨城県内を中心に他県への移動もあります。（社用車使用）</td>
                        </tr>
                        <tr>
                            <th>対象となる方</th>
                            <td>
                                <ul>
                                    <li>未経験OK</li>
                                    <li>高卒以上</li>
                                    <li>60歳未満（定年のため）</li>
                                </ul>
                                【こんな経験･資格が活かせます】<br />
                                <ol>
                                    <li>太陽光発電システム及び蓄電池の営業経験者歓迎！<br />
                                    業種にかかわらず、営業や接客の経験がある方や人とのコミュニケーションが好きな方はそのスキルを活かして働けます！
                                    </li>
                                    <li>第二種電気工事士の資格がある方は即戦力として働けます！<br />
                                    未経験の方や資格の無い方も、電気工事士資格取得を支援いたします！</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <th>必要な資格</th>
                            <td>普通自動車運転免許（AT限定不可）<br />
                            ※社用車での移動があるため</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td>〒300-0311<br />
                            茨城県稲敷郡阿見町島津527-1
                            </td>
                        </tr>
                        <tr>
                            <th>アクセス</th>
                            <td>土浦駅より車で18分／島津バス停より徒歩3分</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td>9：00～18：00（休憩80分）<br />
                            月平均20hの残業あり</td>
                        </tr>
                        <tr>
                            <th>給与</th>
                            <td>月給20～40万円<br />
                            ※経験・資格により手当あり<br />
                            ※固定残業手当3万5000円～7万円、20h相当分含む。時間過分は追加支給</td>
                        </tr>
                        <tr>
                            <th>休日休暇</th>
                            <td>土曜隔週、日曜、祝日、他<br />
                            年間休日100日<br />
                            ※共通：有給休暇・GW・夏季・年末年始</td>
                        </tr>
                        <tr>
                            <th>待遇・福利厚生</th>
                            <td>社会保険完備、昇給年1回、交通費支給、車通勤OK、駐車場完備、<br />
                            賞与有（業績による）、健康診断、社内禁煙（外部に喫煙所あり）、復職制度あり、試用期間2ヶ月有（同条件）</td>
                        </tr>
                    </tbody>
                </table>
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
                                    <dt class="faq_q">前職は全く違う業種なのですが大丈夫ですか？</dt>
                                    <dd class="faq_a">未経験でも大歓迎です。一人前になるまで、イチからしっかり育てていきます。</dd>
                                </dl>
                            </li>
                            <li class="faq_listItem">
                                <dl>
                                    <dt class="faq_q">どのようなスタッフさんが働いていますか？</dt>
                                    <dd class="faq_a">営業から施工、工事部の人まで個性的なスタッフが揃っています。<br />
                                    みんなそれぞれ仕事でもプライベートでも大切にしているものがあり、お互い良き理解者です。</dd>
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
</div>

<?php get_footer(); ?>