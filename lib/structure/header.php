<?php
/**
 * Header HTML markup structure
 *
 * @package Blackbird\Developers\Structure
 * @since   1.0.0
 * @author  Blackbird Consulting
 * @link    https://www.blackbirdconsult.com
 * @license GNU General Public License 2.0+
 */
 namespace UCSC\Genesis\Structure;
// Add class for screen readers to site description
add_filter( 'genesis_attr_site-description', 'genesis_attributes_screen_reader_class' );

remove_action('genesis_header', 'genesis_do_header');   