<?php
/*
 * BOOTSTRAP v3.6.4
 */
// -----
// Part of the Bootstrap template, defining commonly-used phrases and phrases unique to the bootstrap template.
//
define('BOOTSTRAP_PLEASE_SELECT', '選んでください ...');
define('BOOTSTRAP_CURRENT_ADDRESS', ' （現在選択中）');

// -----
// Additional buttons.
//
define('BUTTON_BACK_TO_TOP_TITLE', 'トップに戻る');

// -----
// Used on the products_all and product listing for the alpha-filter dropdown.
// Note: Defined in multiple language files for zc158 and zc200!
//
define('TEXT_SHOW', 'フィルタリング条件:');

// -----
// Used during checkout and on various address-rendering pages.
//
define('TEXT_SELECT_OTHER_PAYMENT_DESTINATION', 'この注文の請求書を別の場所に配送する場合は、ご希望の請求先住所を選択してください。');
define('TEXT_SELECT_OTHER_SHIPPING_DESTINATION', 'この注文を別の場所に配送する場合は、ご希望の配送先住所を選択してください。');
define('NEW_ADDRESS_TITLE', '新しい住所を入力してください');
define('TEXT_PRIMARY_ADDRESS', ' （主要住所）');
define('PRIMARY_ADDRESS', ' （主要住所）');
define('TABLE_HEADING_ADDRESS_BOOK_ENTRIES', 'アドレス帳のエントリから選択');

// -----
// Used on the product*_info pages.
//
define('TEXT_MULTIPLE_IMAGES', ' 追加画像 ');
define('TEXT_SINGLE_IMAGE', ' 拡大画像 ');
define('PREV_NEXT_FROM', ' from ');
define('IMAGE_BUTTON_PREVIOUS','前');
define('IMAGE_BUTTON_NEXT','次');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','商品リストに戻る');
define('MODAL_ADDL_IMAGE_PLACEHOLDER_ALT', '%s のモーダル追加画像');   //- %s is filled in with the product's name

// -----
// Used on the product_music_info page.
//
define('TEXT_ARTIST_URL', '詳細については、アーティストの<a href="%s" target="_blank">ウェブページ</a>をご覧ください。');
define('TEXT_PRODUCT_RECORD_COMPANY', 'レコード会社：');

// -----
// Used on the shopping_cart page.
//
define('TEXT_CART_MODAL_HELP', '[ヘルプ （？）]');
define('HEADING_TITLE_CART_MODAL', 'ビジターカート / メンバーカート');

// -----
// Used on various pages that display the cart's contents.
//
define('SUB_TITLE_TOTAL', '合計：');

// -----
// Used by various product listing pages, e.g. SNAF.
//
// -----
// The two image-heading constants are used when a site chooses to display listings
// in table-mode (PRODUCT_LISTING_COLUMNS_PER_ROW is set to '1').  If your site wants
// the image-heading to *always* be displayed, set the TABLE_HEADING_IMAGE value to
// the text you desire.  If that value is set to an empty string, then a screen-reader-only
// heading is used along with the TABLE_HEADING_IMAGE_SCREENREADER value.
//
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_IMAGE_SCREENREADER', '商品イメージ');

define('TABLE_HEADING_PRODUCTS', '商品名');
define('TABLE_HEADING_MANUFACTURER', 'メーカー');
define('TABLE_HEADING_PRICE', '価格');
define('TABLE_HEADING_WEIGHT', '重さ');
define('TABLE_HEADING_BUY_NOW', '今すぐ購入');
define('TEXT_NO_PRODUCTS', 'このカテゴリには商品がありません。');
define('TEXT_NO_PRODUCTS2', 'このメーカーから入手可能な商品はありません。');

// -----
// Used by various /modalboxes
//
define('TEXT_MODAL_CLOSE', '閉');
define('TEXT_MORE_INFO', '[詳細情報]');
define('ARIA_REVIEW_STAR', 'スター');
define('ARIA_REVIEW_STARS', 'スター');

// -----
// Overriding definition for the login page, removing unwanted javascript.
//
define('TEXT_VISITORS_CART', '<strong>備考：</strong>以前に買い物をしたことがあり、カートに何かを残した場合は、便宜上、再度ログインすると統合されます。');

// -----
// Used by the (optional) AJAX search feature.
//
define('TEXT_AJAX_SEARCH_TITLE', '簡単検索はこちらから…');
define('TEXT_AJAX_SEARCH_PLACEHOLDER', '検索...');
define('TEXT_AJAX_SEARCH_RESULTS', '合計 %u 件の結果が見つかりました。');
define('TEXT_AJAX_SEARCH_VIEW_ALL', 'すべて見る');

// -----
// ARIA label text, used in the common header.
//
define('TEXT_HEADER_ARIA_LABEL_NAVBAR', 'ナビゲーションバー');
define('TEXT_HEADER_ARIA_LABEL_LOGO', 'サイトのロゴ');

// -----
// ARIA label text, used by /sideboxes/tpl_orders_history.php.
//
// NOTE: Not replicated in lang.zca_bootstrap_common.php, since this constant is
// defined in lang.english.php for zc158 and later.
//
define('PAGE_ACCOUNT_HISTORY', '注文履歴');

// -----
// <h1> text for index pages where the 'normal' heading-text isn't provided by a
// store ... for accessibility.
//
// Note: For zc200, this constant will be in /includes/languages/english/lang.index.php.
//
define('HEADING_TITLE_SCREENREADER', '以下の追加コンテンツを参照してください');
