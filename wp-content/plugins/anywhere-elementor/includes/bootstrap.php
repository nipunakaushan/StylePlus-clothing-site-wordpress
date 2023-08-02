<?php
namespace WPV_AE;


class Plugin{

    private static $_instance = null;

    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct(){

        add_action('plugins_loaded', [ $this, 'plugins_loaded' ] );

        add_action('wp_head', [ $this, 'wp_head'] );

    }

    private function includes(){

        require_once( WTS_AE_PATH . 'includes/post-type.php' );
        require_once( WTS_AE_PATH . 'includes/meta-box.php' );
        require_once( WTS_AE_PATH . 'includes/shortcode.php' );
    }

    public function plugins_loaded(){

        if( class_exists('Aepro\Aepro')){
            return;
        } 
        load_plugin_textdomain( 'wts_ae' );

        $this->includes();

    }

    public function wp_head(){

        $custom_css = "<style type='text/css'> .ae_data .elementor-editor-element-setting {
            display:none !important;
            }
            </style>";
        echo $custom_css;
    }
}

Plugin::instance();
