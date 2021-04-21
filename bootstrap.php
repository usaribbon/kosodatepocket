<?php
/**
 * @license GPL-2.0+
 */

/**
 * 基本デザイン設定
 */
// add_filter(
// 	'theme_mod_container-max-width',
// 	function( $option ) {
// 		return '1280';
// 	}
// );

add_filter(
	'theme_mod_post-entries-layout',
	function( $option ) {
		return 'rich-media';
	}
);

add_filter(
	'theme_mod_post-entries-layout-sm-1col',
	function( $option ) {
		return true;
	}
);

add_filter(
	'theme_mod_h2-style',
	function( $option ) {
		return '';
	}
);

add_filter(
	'theme_mod_h3-style',
	function( $option ) {
		return '';
	}
);

add_filter(
	'theme_mod_widget-title-style',
	function( $option ) {
		return '';
	}
);

/**
 * デザイン / ヘッダー
 */
add_filter(
	'theme_mod_header-layout',
	function( $option ) {
		return '1row';
	}
);

add_filter(
    'theme_mod_header-position',
    function( $option ) {
        return 'sticky';
    }
);

add_filter(
	'theme_mod_header-position-lg',
	function( $option ) {
		return 'sticky';
	}
);

// add_filter(
// 	'theme_mod_header-content',
// 	function( $option ) {
// 		return '<a href="/contact/" class="c-btn u-font-bold">お問い合わせ</a>';
// 	}
// );

/**
 * デザイン / アーカイブ
 */
add_filter(
	'theme_mod_archive-page-layout',
	function( $option ) {
		return 'right-sidebar';
	}
);

add_filter(
	'theme_mod_archive-eyecatch',
	function( $option ) {
		return 'none';
	}
);

/**
 * デザイン / 投稿ページ設定
 */
add_filter(
	'theme_mod_singular-post-layout',
	function( $option ) {
		return 'right-sidebar';
	}
);

add_filter(
	'theme_mod_post-eyecatch',
	function( $option ) {
		return 'content-top';
	}
);

/**
 * デザイン / 固定ページ設定
 */
add_filter(
	'theme_mod_page-eyecatch',
	function( $option ) {
		return 'none';
	}
);

/**
 * デザイン / フッター
 */
add_filter(
	'theme_mod_footer-widget-area-column-size',
	function( $option ) {
		return '1-3';
	}
);

/**
 * SEO
 */
// add_filter(  
// 	'theme_mod_mwt-twitter-card',
// 	function( $option ) {
// 		return 'summary_large_image';
// 	}
// );