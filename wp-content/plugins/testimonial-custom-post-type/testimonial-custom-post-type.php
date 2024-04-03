<?php
/**
 * Testimonial - Custom post type
 *
 * Plugin Name:         Testimonial(custom post type)
 * Plugin URI:          https://github.com/dangnghia1997/doctor-custom-post-type
 * Description:         Build better sites with Nuxt 3
 * Version:             1.0.0
 * Requires at least:   6.4.0
 * Requires PHP:        8.1
 * Author:              Nghia Dang
 * License:             GPLv3 or later
 * License URI:         http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:         testimonial-cpt
 * Provides:            TestimonialCustomPostType
 *
 * @package             TestimonialCustomPostType
 * @author              Nghia Dang
 * @license             GNU General Public License, version 3
 * @copyright           2023-2024 Nghia Dang
 */

defined( 'ABSPATH' ) || exit;
function load_testimonial_cpt_plugin_textdomain() {
	load_plugin_textdomain('testimonial-cpt', false, dirname(plugin_basename(__FILE__)) . '/lang/');
}

add_action('init', 'load_testimonial_cpt_plugin_textdomain');


// Add custom post type 'testimonial' to the theme
function custom_post_type_testimonial() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'testimonial-cpt' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'testimonial-cpt' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'testimonial-cpt' ),
		'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'testimonial-cpt' ),
		'add_new'            => _x( 'Add New', 'doctor', 'testimonial-cpt' ),
		'add_new_item'       => __( 'Add New Testimonial', 'testimonial-cpt' ),
		'new_item'           => __( 'New Testimonial', 'testimonial-cpt' ),
		'edit_item'          => __( 'Edit Testimonial', 'testimonial-cpt' ),
		'view_item'          => __( 'View Testimonial', 'testimonial-cpt' ),
		'all_items'          => __( 'All Testimonials', 'testimonial-cpt' ),
		'search_items'       => __( 'Search Testimonials', 'testimonial-cpt' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'testimonial-cpt' ),
		'not_found'          => __( 'No testimonial found.', 'testimonial-cpt' ),
		'not_found_in_trash' => __( 'No testimonial found in Trash.', 'testimonial-cpt' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ), // Set 'slug' to 'testimonial'
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 3,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon'          => 'dashicons-feedback',
		'show_in_graphql' => true,
		'graphql_single_name' => 'testimonial',
		'graphql_plural_name' => 'testimonials',

	);

	register_post_type( 'testimonial', $args );
}

add_action( 'init', 'custom_post_type_testimonial' );

function translate_acf_field_name($field) {
	if ($field['_name'] === 'rating') {
		$field['label'] = __('Rating', 'testimonial-cpt');
	}

	if ($field['_name'] === 'comment') {
		$field['label'] = __('Comment', 'testimonial-cpt');
	}
	return $field;
}
add_filter('acf/prepare_field', 'translate_acf_field_name');
