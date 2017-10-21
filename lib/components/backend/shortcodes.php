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
 
 //Jason's Test Functions
function say_hello() {

echo 'Hello!';

}

add_shortcode('say-hello', 'say_hello');