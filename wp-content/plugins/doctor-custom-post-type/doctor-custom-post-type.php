<?php
/**
 * Doctor - Custom post type
 *
 * Plugin Name:         Doctor(custom post type)
 * Plugin URI:          https://github.com/dangnghia1997/doctor-custom-post-type
 * Description:         Build better sites with Nuxt 3
 * Version:             1.0.0
 * Requires at least:   6.4.0
 * Requires PHP:        8.1
 * Author:              Nghia Dang
 * License:             GPLv3 or later
 * License URI:         http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:         doctor-cpt
 * Provides:            DoctorCustomPostType
 *
 * @package             DoctorCustomPostType
 * @author              Nghia Dang
 * @license             GNU General Public License, version 3
 * @copyright           2023-2024 Nghia Dang
 */

defined( 'ABSPATH' ) || exit;
function load_doctor_cpt_plugin_textdomain() {
	load_plugin_textdomain('doctor-cpt', false, dirname(plugin_basename(__FILE__)) . '/lang/');
}

add_action('init', 'load_doctor_cpt_plugin_textdomain');


// Add custom post type 'doctor' to the theme
function custom_post_type_doctor() {
	$labels = array(
		'name'               => _x( 'Doctors', 'post type general name', 'doctor-cpt' ),
		'singular_name'      => _x( 'Doctor', 'post type singular name', 'doctor-cpt' ),
		'menu_name'          => _x( 'Doctors', 'admin menu', 'doctor-cpt' ),
		'name_admin_bar'     => _x( 'Doctor', 'add new on admin bar', 'doctor-cpt' ),
		'add_new'            => _x( 'Add New', 'doctor', 'doctor-cpt' ),
		'add_new_item'       => __( 'Add New Doctor', 'doctor-cpt' ),
		'new_item'           => __( 'New Doctor', 'doctor-cpt' ),
		'edit_item'          => __( 'Edit Doctor', 'doctor-cpt' ),
		'view_item'          => __( 'View Doctor', 'doctor-cpt' ),
		'all_items'          => __( 'All Doctors', 'doctor-cpt' ),
		'search_items'       => __( 'Search Doctors', 'doctor-cpt' ),
		'parent_item_colon'  => __( 'Parent Doctors:', 'doctor-cpt' ),
		'not_found'          => __( 'No doctors found.', 'doctor-cpt' ),
		'not_found_in_trash' => __( 'No doctors found in Trash.', 'doctor-cpt' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'doctor' ), // Set 'slug' to 'doctor'
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 2,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon'          => 'dashicons-groups',
		'show_in_graphql' => true,
		'graphql_single_name' => 'doctor',
		'graphql_plural_name' => 'doctors',

	);

	register_post_type( 'doctor', $args );
}

add_action( 'init', 'custom_post_type_doctor' );

// Add custom taxonomy 'specialty' for 'doctor' post type
function custom_taxonomy_specialty() {
	$labels = array(
		'name'                       => _x( 'Specialties', 'taxonomy general name', 'doctor-cpt' ),
		'singular_name'              => _x( 'Specialty', 'taxonomy singular name', 'doctor-cpt' ),
		'search_items'               => __( 'Search Specialties', 'doctor-cpt' ),
		'popular_items'              => __( 'Popular Specialties', 'doctor-cpt' ),
		'all_items'                  => __( 'All Specialties', 'doctor-cpt' ),
		'edit_item'                  => __( 'Edit Specialty', 'doctor-cpt' ),
		'update_item'                => __( 'Update Specialty', 'doctor-cpt' ),
		'add_new_item'               => __( 'Add New Specialty', 'doctor-cpt' ),
		'new_item_name'              => __( 'New Specialty Name', 'doctor-cpt' ),
		'separate_items_with_commas' => __( 'Separate specialties with commas', 'doctor-cpt' ),
		'add_or_remove_items'        => __( 'Add or remove specialties', 'doctor-cpt' ),
		'choose_from_most_used'      => __( 'Choose from the most used specialties', 'doctor-cpt' ),
		'not_found'                  => __( 'No specialties found', 'doctor-cpt' ),
		'menu_name'                  => __( 'Specialties', 'doctor-cpt' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'specialty' ), // Set 'slug' to 'specialty'
		'show_in_graphql' => true,
		'graphql_single_name' => 'specialty',
		'graphql_plural_name' => 'specialties',
	);

	register_taxonomy( 'specialty', array( 'doctor' ), $args );
}
add_action( 'init', 'custom_taxonomy_specialty' );



function translate_doctor_acf_field_name($field) {
	if ($field['_name'] === 'bio') {
		$field['label'] = __('Bio', 'doctor-cpt');
	}

	if ($field['_name'] === 'phone') {
		$field['label'] = __('Phone', 'doctor-cpt');
	}
	return $field;
}
add_filter('acf/prepare_field', 'translate_doctor_acf_field_name');