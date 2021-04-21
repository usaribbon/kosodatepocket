<?php
/**
 * Plugin name: Snow Monkey Design Skin HPcode
 * Description: Snow Monkey のデザインスキンです。子育てポケット用。
 * Version: 0.1.0
 * Tested up to: 5.6
 * Requires at least: 5.6
 * Requires PHP: 7.3.5
 * Text Domain: snow-monkey-design-skin-kosodatepocket
 * 
 * @license GPL-2.0+
 */

use Inc2734\WP_GitHub_Plugin_Updater\Bootstrap as Updater;

require_once( __DIR__ . '/vendor/autoload.php' );

add_action(
	'plugins_loaded',
	function() {
		load_plugin_textdomain(
			'snow-monkey-design-skin-kosodatepocket',
			false,
			basename( __DIR__ ) . '/languages'
		);

		add_action(
			'init',
			function() {
				new Updater(
					plugin_basename( __FILE__ ),
					'usaribbon', // GitHub user name
					'snow-monkey-design-skin-kosodatepocket', // GitHub repository name
					[
						'homepage' => 'https://pocket.chiikihoiku.net/',
					]
				);
			}
		);

		add_filter(
			'snow_monkey_design_skin_choices',
			function( $choices ) {
				$plugin_data = get_file_data(
					__FILE__,
					[
						'label' => 'Plugin Name',
					],
					'plugin'
				);
				$choices[ basename( __FILE__, '.php' ) ] = $plugin_data['label'];
				return $choices;
			}
		);
	}
);

add_action(
	'after_setup_theme',
	function() {
		if ( class_exists( '\Snow_Monkey\app\model\Design_Skin' ) ) {
			new \Snow_Monkey\app\model\Design_Skin( __FILE__ );
		}

		if ( class_exists( '\Framework\Model\Design_Skin' ) ) {
			new \Framework\Model\Design_Skin( __FILE__ );
		}
	}
);

/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'MY_SNOW_MONKEY_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * エディター用の CSS 読み込み
 * @codex https://snow-monkey.2inc.org/2019/02/04/my-snow-monkey-plugin/
 */
add_action(
	'after_setup_theme',
	function() {
		add_editor_style( MY_SNOW_MONKEY_URL . '/editor-style.css' );
	},
	11
);