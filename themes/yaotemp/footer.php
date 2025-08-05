    <!--l-contact-->
    <section class="l-contact">
        <div class="l-contact__inner">
            <div class="l-contact__left">
                <h2 class="l-contact-eng__title">Contact</h2>
                <p class="l-contact-title">お問い合わせ</p>
                <p class="l-contact-text">ご質問・ご要望は、こちらからお問い合わせください。<br/>
                お電話・メールフォームにてお問い合わせを受け付けております。
                </p>
            </div>
            <div class="l-contact__right">
                <div class="l-contact__method contact__method--phone">
                    <div class="l-contact__icon">
                        <img src="<?php bloginfo('template_url');?>/img/l-contact-icon-tel.svg" alt="電話アイコン">
                    </div>
                    <p class="l-contact__method-label">お電話でお問い合わせ</p>
                    <p class="l-contact__tel">0120-887-190</p>
                    <p class="l-contact__time">受付時間10:00〜0:00（定休日：＿＿＿＿）</p>
                </div>
                <div class="l-contact__method contact__method--mail">
                    <div class="l-contact__icon">
                        <img src="<?php bloginfo('template_url');?>/img/l-contact-icon-mail.svg" alt="メールアイコン">
                    </div>
                    <p class="l-contact__method-label">メールでお問い合わせ</p>
                    <a href="#" class="l-contact__btn">メールフォーム</a>
                </div>
            </div>
        </div>
    </section>

    <!--l-footer-->

    <footer class="l-footer">
        <div class="l-footer__inner">
            <div class="l-footer__left">
                <div class="l-footer__logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png"
                                alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
                <p class="l-footer__address">
                    有限会社アミカブルサービス<br>
                    〒300-0311茨城県稲敷郡阿見町島津527-1
                </p>
                <p class="l-footer__contact">
                    TEL 029-891-2722<br>
                    FAX 029-891-2733
                </p>
            </div>

            <div class="l-footer__nav">
                <ul>
                    <li>トップページ</li>
                    <li>選ばれる理由</li>
                    <li>サービス
                        <ul>
                            <li>− 太陽光発電</li>
                            <li>− 家庭用蓄電池</li>
                            <li>− 修理サービス</li>
                        </ul>
                    </li>
                    <li>アフターメンテナンス</li>
                    <li>料金プラン</li>
                </ul>
                <ul>
                    <li>施工事例</li>
                    <li>お客様の声</li>
                    <li>イベント情報</li>
                    <li>ブログ
                        <ul>
                            <li>− お知らせ</li>
                            <li>− お役立ちコラム</li>
                        </ul>
                    </li>
                    <li>会社概要</li>
                    <li>よくある質問</li>
                </ul>
            </div>
        </div>
        <div class="l-footer__copyright">
            <p>© <?php echo date( 'Y' ); ?> texttexttexttext. All rights reserved <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>.</p>
        </div>
  </footer>
<!-- /l-footer -->


<?php wp_footer(); ?>
</body>
</html>
