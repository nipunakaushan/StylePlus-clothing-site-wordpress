<?php

namespace WPV_AE;

class PostType{

    private static $_instance = null;

    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct(){

        add_action( 'init', [$this, 'register_post_type'], 0 );

        add_action('elementor/init', [ $this, 'add_elementor_support']);
    }

    public function register_post_type(){

        $labels = array(
            'name'                  => _x( 'AE Global Templates', 'Post Type General Name', 'wts_ae' ),
            'singular_name'         => _x( 'AE Template', 'Post Type Singular Name', 'wts_ae' ),
            'menu_name'             => __( 'AE Templates', 'wts_ae' ),
            'name_admin_bar'        => __( 'AE Templates', 'wts_ae' ),
            'archives'              => __( 'List Archives', 'wts_ae' ),
            'parent_item_colon'     => __( 'Parent List:', 'wts_ae' ),
            'all_items'             => __( 'All AE Templates', 'wts_ae' ),
            'add_new_item'          => __( 'Add New AE Template', 'wts_ae' ),
            'add_new'               => __( 'Add New', 'wts_ae' ),
            'new_item'              => __( 'New AE Template', 'wts_ae' ),
            'edit_item'             => __( 'Edit AE Template', 'wts_ae' ),
            'update_item'           => __( 'Update AE Template', 'wts_ae' ),
            'view_item'             => __( 'View AE Template', 'wts_ae' ),
            'search_items'          => __( 'Search AE Template', 'wts_ae' ),
            'not_found'             => __( 'Not found', 'wts_ae' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'wts_ae' )
        );
        $args = array(
            'label'                 => __( 'Post List', 'wts_ae' ),
            'labels'                => $labels,
            'supports'              => array( 'title','editor' ),
            'public'                => true,
            'rewrite'               => false,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => false,
            'exclude_from_search'   => true,
            'capability_type'       => 'post',
            'hierarchical'          => false,
            'menu-icon'             => 'dashicon-move'
        );
        register_post_type( 'ae_global_templates', $args );

    }

    public function add_elementor_support(){

        add_post_type_support( 'ae_global_templates', 'elementor' );
    }

    

}

PostType::instance();