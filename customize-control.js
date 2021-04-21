(function() {
  var api = wp.customize;

  api.bind('ready', function() {

    /**
     * 基本デザイン設定
     */
    api.control('post-entries-layout').container.remove();
    api.control.remove('post-entries-layout');

    api.control('post-entries-layout-sm-1col').container.remove();
    api.control.remove('post-entries-layout-sm-1col');

    api.control('h2-style').container.remove();
    api.control.remove('h2-style');

    api.control('h3-style').container.remove();
    api.control.remove('h3-style');

    api.control('widget-title-style').container.remove();
    api.control.remove('widget-title-style');

    /**
     * デザイン / ヘッダー
     */
    api.control('header-layout').container.remove();
    api.control.remove('header-layout');

    api.control('header-position').container.remove();
    api.control.remove('header-position');

    api.control('header-position-lg').container.remove();
    api.control.remove('header-position-lg');

    /**
     * デザイン / アーカイブ
     */
    api.control('archive-page-layout').container.remove();
    api.control.remove('archive-page-layout');

    /**
     * デザイン / 投稿ページ設定
     */
    api.control('singular-post-layout').container.remove();
    api.control.remove('singular-post-layout');

    api.control('post-eyecatch').container.remove();
    api.control.remove('post-eyecatch');

    /**
     * デザイン / 固定ページ設定
     */
    api.control('page-eyecatch').container.remove();
    api.control.remove('page-eyecatch');

    /**
     * デザイン / フッター
     */
    api.control('footer-widget-area-column-size').container.remove();
    api.control.remove('footer-widget-area-column-size');

  });
})(jQuery);
