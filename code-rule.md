# デザイン作成ルール

添付の PC/SP のデザインを WordPress ホームページのパーツとして下記のルールに従ってレスポンシブで作成してください。

## 共有事項

- 環境構築やリセット CSS はすでに作成済みのため不要。

## 使用フォント

- `functions.php`内でインストール
- 全体：**Noto Sans JP**で指定済み
- 英語：**Chakra Petch**

## 変数

$base-text:  #0A366F;
$font-eng: "Chakra Petch", sans-serif;
$blue:  #0A366F;
$red: #FF2201;
$yellow: #FCED18;
$title-light-blue: #6BB6F8;
$title-orange: #FC5018;

//breakpoint 設定
/************\*\*\*\*************\*\*\*\*************\*\*\*\*************/
$breakpoint-header: 1340px; //header-menu 用
$breakpoint-lg: 1280px; //large_pc
$breakpoint-md: 1080px; //medium_tab
$breakpoint-sm: 768px; //small_sp
$breakpoint-s: 640px;
$breakpoint-xs: 480px; //sp

// $break-point以下の時に@contentを適用
@mixin max-screen($break-point) {
@media screen and (max-width: $break-point) {
@content;
}
}

// $break-point以上の時に@contentを適用
@mixin min-screen($break-point) {
@media screen and (min-width: $break-point) {
@content;
}
}

// $break-point-min以上、$break-point-max 以下の時に@content を適用
@mixin screen($break-point-min, $break-point-max) {
@media screen and (min-width: $break-point-min) and (max-width: $break-point-max) {
@content;
}
}

## コーディングルール

- レスポンシブでのコーディング
- 添付画像のデザインに必ず等しいコーディング
- 各ページへのリンクは共通して `<?php bloginfo('url'); ?>/works/` の形式で/閉じまで記載。
- text のサイズは rem を使用（1rem=10px で設定済み）

## ヘッダールール

- 基本的にヘッダーはウィンドウ上部固定で、ページのどこにいてもクリックできるよう実装。
- ハンバーガーメニュー内／フッターのメニューリストは PC 用/スマホ用などを複数設置禁止。
- ハンバーガーメニューの開閉は js で実装してください

## 画像

- 実際の画像はこちらで用意します。
- セクション名＋画像名を組み合わせる（ロゴは `logo.png`）。
- 基本的に jpg を使用。
- alt には日本語での画像の説明を入れる。
- ソースのパスは `<?php bloginfo('template_url');?>/img/` を利用する（すべての画像は img 直下にある）。

## CSS

- SCSS を利用。
- クラス名：FLOCSS を利用。（例：'top-fv-banner**inner', 'top-fv-banner**phone-wrapper'）
- `&-container`等、クラス名を書かずに省略する書き方を禁止。（入れ子構造にはする）
- 共通パーツ以外はページ名を最初に必ずつける（例：top ページ `.top-skill`）
- コードは top-skill であれば.top-skill{}の中にすべて記述
