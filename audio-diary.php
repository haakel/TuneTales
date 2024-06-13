<?php
/*
Plugin Name: Audio diary
Description: پلاگین دفترچه خاطرات.
Author: haakel
*/

if ( ! defined( 'ABSPATH' ) ) {
    echo "what the hell are you doing here?";
	exit;
	}
	
	class Audio_diary{
  	/**
	 * Initiator
	 *
	 * @return object Initialized object of class.
     * 
	 */
    private static $instance;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

    public function __construct(){
        $this->define_constants();
		$this->Audio_diary_loader();
    }
    /**
     * Define all constants
     */
    public function define_constants() {
        if ( ! defined( 'AUDIO_DIARY_VERSION' ) ) {
            define( 'AUDIO_DIARY_VERSION', '1.0.0' );
        }
        if ( ! defined( 'AUDIO_DIARY_FILE' ) ) {
            define( 'AUDIO_DIARY_FILE', __FILE__ );
        }
        if ( ! defined( 'AUDIO_DIARY_PATH' ) ) {
            define( 'AUDIO_DIARY_PATH', plugin_dir_path( AUDIO_DIARY_FILE ) );
        }
        if ( ! defined( 'AUDIO_DIARY_BASE' ) ) {
            define( 'AUDIO_DIARY_BASE', plugin_basename( AUDIO_DIARY_FILE ) );
        }
        if ( ! defined( 'AUDIO_DIARY_SLUG' ) ) {
            define( 'AUDIO_DIARY_SLUG', 'audio-diary-settings' );
        }
        if ( ! defined( 'AUDIO_DIARY_SETTINGS_LINK' ) ) {
            define( 'AUDIO_DIARY_SETTINGS_LINK', admin_url( 'admin.php?page=' . AUDIO_DIARY_SLUG ) );
        }
        if ( ! defined( 'AUDIO_DIARY_CLASSES_PATH' ) ) {
            define( 'AUDIO_DIARY_CLASSES_PATH', AUDIO_DIARY_PATH . 'classes/' );
        }
        if ( ! defined( 'AUDIO_DIARY_IMAGES' ) ) {
            define( 'AUDIO_DIARY_IMAGES', AUDIO_DIARY_PATH . 'build/images' );
        }
        if ( ! defined( 'AUDIO_DIARY_MODULES_PATH' ) ) {
            define( 'AUDIO_DIARY_MODULES_PATH', AUDIO_DIARY_PATH . 'modules/' );
        }
        if ( ! defined( 'AUDIO_DIARY_ASSETS_PATH' ) ) {
            define( 'AUDIO_DIARY_ASSETS_PATH', AUDIO_DIARY_PATH . 'assets/' );
        }
        if ( ! defined( 'AUDIO_DIARY_URL' ) ) {
            define( 'AUDIO_DIARY_URL', plugins_url( '/', AUDIO_DIARY_FILE ) );
        }
    }
	/**
	 * Require loader Audio diary class.
	 *
	 * @return void
	 */
    public function Audio_diary_loader() {
		require AUDIO_DIARY_CLASSES_PATH .'class_Audio_diary_loader.php';
	}
}

Audio_diary::get_instance();