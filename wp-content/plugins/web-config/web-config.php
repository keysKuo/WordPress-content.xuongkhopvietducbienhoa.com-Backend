<?php
/**
 * Web Config for Nuxt 3
 *
 * Plugin Name:         Web config for Nuxt 3
 * Plugin URI:          http://wordpress.org/plugins/redux-framework
 * GitHub URI:          reduxframework/redux-framework
 * Description:         Build better sites with Nuxt 3
 * Version:             1.0.0
 * Requires at least:   6.4.0
 * Requires PHP:        8.1
 * Author:              Nghia Dang
 * License:             GPLv3 or later
 * License URI:         http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:         web-config
 * Provides:            WebConfig
 *
 * @package             WebConfig
 * @author              Nghia Dang
 * @license             GNU General Public License, version 3
 * @copyright           2023-2024 Nghia Dang
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

$opt_name = 'web_config';

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = __DIR__ . DIRECTORY_SEPARATOR;

require_once $dir . 'setup.php';

// -> START Basic Fields
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Configuration', 'web-config' ),
		'id'               => 'configuration',
		'customizer_width' => '400px',
		'icon'             => 'el el-wrench-alt',
	)
);

// -> General
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'General', 'web-config' ),
		'id'         => 'general',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'site_name',
				'type'  => 'text',
				'title' => esc_html__( 'Site name', 'web-config' ),
			),
			array(
				'id'    => 'site_information',
				'type'  => 'textarea',
				'title' => esc_html__( 'Site information', 'web-config' ),
			),
			array(
				'id'    => 'site_phone_hotline',
				'type'  => 'text',
				'title' => esc_html__( 'Hotline 24/7 (option 1)', 'web-config' ),
			),
			array(
				'id'    => 'site_phone_hotline_2',
				'type'  => 'text',
				'title' => esc_html__( 'Hotline 24/7 (option 2)', 'web-config' ),
			),
			array(
				'id'    => 'site_address',
				'type'  => 'text',
				'title' => esc_html__( 'Address', 'web-config' ),
			),
			array(
				'id'    => 'site_email',
				'type'  => 'text',
				'title' => esc_html__( 'Email', 'web-config' ),
			),
			array(
				'id'    => 'site_working_time',
				'type'  => 'text',
				'title' => esc_html__( 'Working time', 'web-config' ),
			),
		),
	)
);

// -> Hero slider
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Hero Sliders', 'web-config' ),
		'id'         => 'hero-banner',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'hero_sliders',
				'type'        => 'slides',
				'title'       => esc_html__( 'Images', 'your-textdomain-here' ),
				'subtitle' => 'Please upload the image dimensions: [1440x710]',
				'placeholder' => array(
					'title'       => esc_html__( 'Title', 'your-textdomain-here' ),
					'description' => esc_html__( 'Description', 'your-textdomain-here' ),
					'url'         => esc_html__( 'Give us a link!', 'your-textdomain-here' ),
				)
			),
		),
	)
);

// -> About Us
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'About us', 'web-config' ),
		'id'         => 'about-us',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'about_us_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Heading', 'web-config' ),
			),
			array(
				'id'    => 'about_us_description',
				'type'  => 'textarea',
				'title' => esc_html__( 'Description', 'web-config' ),
			),
			array(
				'id'    => 'about_us_button_link',
				'type'  => 'text',
				'title' => esc_html__( 'Button Link', 'web-config' ),
			),
			array(
				'id'      => 'about_us_image',
				'type'    => 'media',
				'width'   => '800',
				'height'  => '600',
				'url'     => true,
				'title'   => esc_html__( 'Image', 'web-conifg' ),
				'default' => array(
					'url' => 'https://s.wordpress.org/style/images/codeispoetry.png'
				),
			),
			array(
				'id'    => 'about_us_statistics_label_1',
				'type'  => 'text',
				'title' => esc_html__( 'Statistic label(1)', 'web-config' ),
			),
			array(
				'id'    => 'about_us_statistics_value_1',
				'type'  => 'text',
				'title' => esc_html__( 'Statistic value(1)', 'web-config' ),
			),
			array(
				'id'    => 'about_us_statistics_label_2',
				'type'  => 'text',
				'title' => esc_html__( 'Statistic label(2)', 'web-config' ),
			),
			array(
				'id'    => 'about_us_statistics_value_2',
				'type'  => 'text',
				'title' => esc_html__( 'Statistic value(2)', 'web-config' ),
			),
			array(
				'id'    => 'about_us_statistics_label_3',
				'type'  => 'text',
				'title' => esc_html__( 'Statistic label(3)', 'web-config' ),
			),
			array(
				'id'    => 'about_us_statistics_value_3',
				'type'  => 'text',
				'title' => esc_html__( 'Statistic value(3)', 'web-config' ),
			),
		),
	)
);

// -> Categories
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Categories', 'web-config' ),
		'id'         => 'categories',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'featured_categories_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Heading', 'web-config' ),
			),
			array(
				'id'    => 'featured_categories_sub_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Sub heading', 'web-config' ),
			),
			array(
				'id'    => 'featured_categories_ids',
				'type'  => 'select',
				'multi' => true,
				'title' => esc_html__( 'Featured Categories', 'web-config' ),
				'desc'  => esc_html__( 'This is category databaseId', 'web-config' ),
				'data'  => 'categories',
				'args'  => [
					'hide_empty' => false
				],
				'ajax'  => false,
				'sortable' => true,
			),
		),
	)
);

// -> Methods
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Methods', 'web-config' ),
		'id'         => 'methods',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'methods_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Heading', 'web-config' ),
			),
			array(
				'id'    => 'methods_sub_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Sub heading', 'web-config' ),
			),
			array(
				'id'          => 'methods_post_ids',
				'type'        => 'select',
				'multi'       => true,
				'title'       => esc_html__( 'Posts', 'web-config' ),
				'description' => 'Only posts are checked "Is Method Post?" will show here',
				'data'        => 'posts',
				'args'        => [
					'hide_empty' => false,
					'meta_query' => array(
						array(
							'key'   => 'is_post_method',
							'value' => '1',
						)
					)
				],
				'ajax'        => false
			),
		),
	)
);

// -> Socials
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Socials', 'web-config' ),
		'id'         => 'socials',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'facebook_link',
				'type'  => 'text',
				'title' => esc_html__( 'Facebook', 'web-config' ),
			),
			array(
				'id'    => 'youtube_link',
				'type'  => 'text',
				'title' => esc_html__( 'Youtube', 'web-config' ),
			),

			array(
				'id'    => 'zalo_link',
				'type'  => 'text',
				'title' => esc_html__( 'Zalo', 'web-config' ),
			),

		),
	)
);

// -> Doctor team
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Doctor team', 'web-config' ),
		'id'         => 'doctor-team',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'doctor_team_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Heading', 'web-config' ),
			),
			array(
				'id'    => 'doctor_team_sub_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Sub heading', 'web-config' ),
			),
			array(
				'id'    => 'doctor_team_post_ids',
				'type'  => 'select',
				'multi' => true,
				'title' => esc_html__( 'Doctors', 'web-config' ),
				'data'  => 'post',
				'args'  => [
					'hide_empty' => false,
					'post_type' => 'doctor'
				],
				'ajax'  => false
			),
		),
	)
);

// -> Testimonial
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Testimonial', 'web-config' ),
		'id'         => 'testimonial',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'testimonial_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Heading', 'web-config' ),
			),
			array(
				'id'    => 'testimonial_sub_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Sub heading', 'web-config' ),
			),
			array(
				'id'    => 'testimonial_ids',
				'type'  => 'select',
				'multi' => true,
				'title' => esc_html__( 'Testimonial IDs', 'web-config' ),
				'data'  => 'post',
				'args'  => [
					'hide_empty' => false,
					'post_type' => 'testimonial'
				],
				'ajax'  => false,
				'sortable' => true,
			),
		),
	)
);

// -> Featured Posts
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Fetured Posts', 'web-config' ),
		'id'         => 'featured_posts',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'featured_post_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Heading', 'web-config' ),
			),
			array(
				'id'    => 'featured_post_sub_heading',
				'type'  => 'text',
				'title' => esc_html__( 'Sub heading', 'web-config' ),
			),
			array(
				'id'          => 'featured_post_ids',
				'type'        => 'select',
				'multi'       => true,
				'title'       => esc_html__( 'Posts', 'web-config' ),
				'description' => 'Only posts are checked "Is Featured Post?" will show here',
				'data'        => 'posts',
				'args'        => [
					'hide_empty' => false,
					'meta_query' => array(
						array(
							'key'   => 'is_post_featured',
							'value' => '1',
						)
					)
				],
				'ajax'        => false
			),
		),
	)
);

// -> Footer
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Footer', 'web-config' ),
		'id'         => 'footer',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'footer_working_time_line_1',
				'type'  => 'text',
				'title' => esc_html__( 'Working time (line 1)', 'web-config' ),
			),
			array(
				'id'    => 'footer_working_day_line_1',
				'type'  => 'text',
				'title' => esc_html__( 'Working day (line 1)', 'web-config' ),
			),
			array(
				'id'    => 'footer_working_time_line_2',
				'type'  => 'text',
				'title' => esc_html__( 'Working time (line 2)', 'web-config' ),
			),
			array(
				'id'    => 'footer_working_day_line_2',
				'type'  => 'text',
				'title' => esc_html__( 'Working day (line 2)', 'web-config' ),
			),
			array(
				'id'    => 'footer_working_time_line_3',
				'type'  => 'text',
				'title' => esc_html__( 'Working time (line 3)', 'web-config' ),
			),
			array(
				'id'    => 'footer_working_day_line_3',
				'type'  => 'text',
				'title' => esc_html__( 'Working day (line 3)', 'web-config' ),
			),
			array(
				'id'    => 'footer_categories_ids',
				'type'  => 'select',
				'multi' => true,
				'title' => esc_html__( 'Categories', 'web-config' ),
				'data'  => 'categories',
				'args'  => [
					'hide_empty' => false
				],
				'ajax'  => false,
				'sortable' => true,
			),
		),
	)
);

// -> System
Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Form System', 'web-config' ),
		'id'         => 'form_system',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'form_system_form_id',
				'type'  => 'text',
				'title' => esc_html__( 'Form ID', 'web-config' ),
				'subtitle'  => 'Form ID of GravityForm',
			),
			array(
				'id'    => 'form_system_full_name_id',
				'type'  => 'text',
				'title' => esc_html__( 'FullName Field ID', 'web-config' ),
				'subtitle'  => 'FullName Field ID of GravityForm',
			),
			array(
				'id'    => 'form_system_phone_id',
				'type'  => 'text',
				'title' => esc_html__( 'Phone Field ID', 'web-config' ),
				'subtitle'  => 'Phone Field ID of GravityForm',
			),
			array(
				'id'    => 'form_system_content_id',
				'type'  => 'text',
				'title' => esc_html__( 'Content Field ID', 'web-config' ),
				'subtitle'  => 'Content Field ID of GravityForm',
			),
		),
	)
);
