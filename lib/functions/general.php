<?php
/**
 * Description
 *
 * @package Blackbird\Developers
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Communications;

 add_action ('genesis_after_header',  __NAMESPACE__ . '\test_shortcode');

 function test_shortcode(){
    echo do_shortcode ('say-hello');
 };

