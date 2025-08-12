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
                <p class="l-contact__tel"><a href="tel:0120-887-190">0120-887-190</a></p>
                <p class="l-contact__time">受付時間10:00〜0:00（定休日：＿＿＿＿）</p>
            </div>
            <div class="l-contact__method contact__method--mail">
                <div class="l-contact__icon">
                    <img src="<?php bloginfo('template_url');?>/img/l-contact-icon-mail.svg" alt="メールアイコン">
                </div>
                <p class="l-contact__method-label">メールでお問い合わせ</p>
                <a href="<?php bloginfo('url'); ?>/contact/" class="l-contact__btn">メールフォーム</a>
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
            <p class="l-footer__address">有限会社アミカブルサービス<br>
            〒300-0311茨城県稲敷郡阿見町島津527-1</p>
            <p class="l-footer__contact">TEL 029-891-2722<br>
            FAX 029-891-2733</p>
        </div>
        <div class="l-footer__nav">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">トップページ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/reason/">選ばれる理由</a></li>
                <li class="u-pc">
                    <div>サービス</div>
                    <ul class="l-footer-childMenu">
                        <li><a href="<?php bloginfo('url'); ?>/sunlight/">太陽光発電</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/battery/">家庭用蓄電池</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/repair/">修理サービス</a></li>
                    </ul>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/support/">アフターメンテナンス</a></li>
                <li><a href="<?php bloginfo('url'); ?>/price/">料金プラン</a></li>
            </ul>
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/works/">施工事例</a></li>
                <li><a href="<?php bloginfo('url'); ?>/voice/">お客様の声</a></li>
                <li><a href="<?php bloginfo('url'); ?>/faq/">イベント情報</a></li>
                <li class="u-pc">
                    <div>ブログ</div>
                    <ul class="l-footer-childMenu">
                        <li><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/column/">お役立ちコラム</a></li>
                    </ul>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a></li>
                <li><a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a></li>
            </ul>
        </div>
    </div>
    <div class="l-footer__copyright">
        <p>© <?php echo date( 'Y' ); ?> texttexttexttext. All rights reserved <a href="<?php echo home_url(); ?>"></a>.</p>
        <p><a href="<?php echo home_url(); ?>/policy/">プライバシーポリシー</a></p>
    </div>
</footer>
<!-- /l-footer -->


<?php wp_footer(); ?>
</body>
</html>
