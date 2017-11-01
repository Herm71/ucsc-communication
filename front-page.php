<?php
/**
 * Front page
 *
 * @package Blackbird\Developers
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Genesis;

 //* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

remove_action('genesis_header', 'genesis_do_header');
remove_action( 'genesis_header', 'genesis_do_nav' );


//* Add class to header
add_filter( 'genesis_attr_site-header', __NAMESPACE__ . '\bb_hero_class' );
function bb_hero_class( $attributes ) {
 
 $attributes['class'] .= ' home-hero';
 return $attributes;
}

add_action( 'genesis_header', __NAMESPACE__ . '\bb_do_header' );
//New Header functions
function sm_genesis_header_markup_open() {
 genesis_markup( array(
 'html5' => '<header %s>',
 'context' => 'site-header',
 ) );
 // Added in content

 genesis_structural_wrap( 'header' );
 echo '<div class="header-ghost">Hello World</div>';
 remove_action( 'genesis_header', 'genesis_do_nav' );
}
function sm_genesis_header_markup_close() {
 genesis_structural_wrap( 'header', 'close' );
 genesis_markup( array(
 'close' => '</header>',
 'context' => 'site-header',
 ) );
}
function sm_genesis_do_header() {
 global $wp_registered_sidebars;

 genesis_markup( array(
    'open' => '<div %s>',
    'context' => 'title-area',
    ) );
    do_action( 'genesis_site_title' );
    do_action( 'genesis_site_description' );
    
    
    
    genesis_markup( array(
    'close' => '</div>',
    'context' => 'title-area',
    ) );

    
    
   if ( ( isset( $wp_registered_sidebars['header-right'] ) && is_active_sidebar( 'header-right' ) ) || has_action( 'genesis_header_right' ) ) {
   genesis_markup( array(
   'open' => '<div %s>' . genesis_sidebar_title( 'header-right' ),
   'context' => 'header-widget-area',
   ) );
    do_action( 'genesis_header_right' );
    add_filter( 'wp_nav_menu_args', 'genesis_header_menu_args' );
    add_filter( 'wp_nav_menu', 'genesis_header_menu_wrap' );
    dynamic_sidebar( 'header-right' );
    remove_filter( 'wp_nav_menu_args', 'genesis_header_menu_args' );
   remove_filter( 'wp_nav_menu', 'genesis_header_menu_wrap' );
   genesis_markup( array(
   'close' => '</div>',
   'context' => 'header-widget-area',
   ) );
   }
   }

   function bb_do_header(){
        $site_title = get_bloginfo('name');
       
       wp_nav_menu( array(
        'menu' => 'Primary Menu temp',
        'menu_class' => 'menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows',
        'menu_id' => '',
        'container' => 'nav',
        'container_class' => 'nav-primary genesis-responsive-menu',
        'container_id' => '',

    ) );
    echo '<div class="hero-container">';
    echo '<div class="hero-title-wrap">';
    echo '<div class="title-area">';
    echo '<p class="site-title">'.        $site_title.'</p>';
    echo '</div>';
    echo '<div class="down-arrow">';
    echo '<i class="fa fa-angle-down fa-4x"></i>';	
    echo '</div>';
    echo '</div>';			
    echo '</div>';
           }

 genesis();
      