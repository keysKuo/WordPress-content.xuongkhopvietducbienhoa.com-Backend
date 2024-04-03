<?php
/**
 * Web Config Graphql
 *
 * Plugin Name:         Web Config Graphql for Nuxt 3
 * Plugin URI:          http://wordpress.org/plugins/redux-framework
 * GitHub URI:          reduxframework/redux-framework
 * Description:         Build better sites with Nuxt 3
 * Version:             1.0.0
 * Requires at least:   6.4.0
 * Requires PHP:        8.1
 * Author:              Nghia Dang
 * License:             GPLv3 or later
 * License URI:         http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:         web-config-graphql
 * Provides:            WebConfigGraphql
 *
 * @package             WebConfigGraphql
 * @author              Nghia Dang
 * @license             GNU General Public License, version 3
 * @copyright           2023-2024 Nghia Dang
 */

add_action( 'graphql_register_types', 'web_config_extend_wpgraphql_schema' );

function web_config_extend_wpgraphql_schema() {
	register_graphql_object_type( 'HeroSliderType', [
		'description' => __( 'HeroSliderType', 'web-config-graphql' ),
		'fields'      => [
			'image'         => [
				'type'        => 'String',
				'description' => __( 'Image', 'web-config-graphql' ),
			],
			'attachment_id' => [
				'type'        => 'String',
				'description' => __( 'Attachment id', 'web-config-graphql' ),
			],
			'sort'          => [
				'type'        => 'String',
				'description' => __( 'Sort ID', 'web-config-graphql' ),
			],
		],
	] );
	register_graphql_object_type( 'WebConfigType', [
		'description' => __( 'WebConfigType, get from $web_config global variable', 'web-config-graphql' ),
		'fields'      => [
			'site_name'                       => [
				'type'        => 'String',
				'description' => __( 'Site Name', 'web-config-graphql' ),
			],
			'site_information'                => [
				'type'        => 'String',
				'description' => __( 'Site Information', 'web-config-graphql' ),
			],
			'site_phone_hotline'              => [
				'type'        => 'String',
				'description' => __( 'Site Hotline', 'web-config-graphql' ),
			],
			'site_phone_hotline_2'            => [
				'type'        => 'String',
				'description' => __( 'Site Hotline 2', 'web-config-graphql' ),
			],
			'site_address'                    => [
				'type'        => 'String',
				'description' => __( 'Site Name', 'web-config-graphql' ),
			],
			'site_email'                      => [
				'type'        => 'String',
				'description' => __( 'Site Email', 'web-config-graphql' ),
			],
			'site_working_time'               => [
				'type'        => 'String',
				'description' => __( 'Site Working Time', 'web-config-graphql' ),
			],
			'facebook_link'                   => [
				'type'        => 'String',
				'description' => __( 'Facebook Link', 'web-config-graphql' ),
			],
			'youtube_link'                    => [
				'type'        => 'String',
				'description' => __( 'Youtube Link', 'web-config-graphql' ),
			],
			'zalo_link'                       => [
				'type'        => 'String',
				'description' => __( 'Zalo Link', 'web-config-graphql' ),
			],
			'footer_working_time_line_1'      => [
				'type'        => 'String',
				'description' => __( 'Footer working time (line 1)', 'web-config-graphql' ),
			],
			'footer_working_day_line_1'       => [
				'type'        => 'String',
				'description' => __( 'Footer working day (line 1)', 'web-config-graphql' ),
			],
			'footer_working_time_line_2'      => [
				'type'        => 'String',
				'description' => __( 'Footer working time (line 2)', 'web-config-graphql' ),
			],
			'footer_working_day_line_2'       => [
				'type'        => 'String',
				'description' => __( 'Footer working day (line 2)', 'web-config-graphql' ),
			],
			'footer_working_time_line_3'      => [
				'type'        => 'String',
				'description' => __( 'Footer working time (line 3)', 'web-config-graphql' ),
			],
			'footer_working_day_line_3'       => [
				'type'        => 'String',
				'description' => __( 'Footer working day (line 3)', 'web-config-graphql' ),
			],
			'footer_categories_ids'           => [
				'type'        => [ 'list_of' => 'String' ],
				'description' => __( 'Footer category ids', 'web-config-graphql' ),
			],
			'featured_categories_heading'     => [
				'type'        => 'String',
				'description' => __( 'Featured Category Heading', 'web-config-graphql' ),
			],
			'featured_categories_sub_heading' => [
				'type'        => 'String',
				'description' => __( 'Featured Category Sub Heading', 'web-config-graphql' ),
			],
			'featured_categories_ids'         => [
				'type'        => [ 'list_of' => 'String' ],
				'description' => __( 'Featured Category ids', 'web-config-graphql' ),
			],
			'methods_heading'                 => [
				'type'        => 'String',
				'description' => __( 'Methods Heading', 'web-config-graphql' ),
			],
			'methods_sub_heading'             => [
				'type'        => 'String',
				'description' => __( 'Methods Sub Heading', 'web-config-graphql' ),
			],
			'methods_post_ids'                => [
				'type'        => [ 'list_of' => 'String' ],
				'description' => __( 'Featured method post ids', 'web-config-graphql' ),
			],
			'about_us_heading'                => [
				'type'        => 'String',
				'description' => __( 'About Us Heading', 'web-config-graphql' ),
			],
			'about_us_description'            => [
				'type'        => 'String',
				'description' => __( 'About Us Description', 'web-config-graphql' ),
			],
			'about_us_button_link'            => [
				'type'        => 'String',
				'description' => __( 'About Us Button Link', 'web-config-graphql' ),
			],
			'about_us_image'                  => [
				'type'        => 'String',
				'description' => __( 'About Us Image Url', 'web-config-graphql' ),
			],
			'hero_sliders'                    => [
				'type'        => [ 'list_of' => 'HeroSliderType' ],
				'description' => __( 'Array of HeroSliderType', 'web-config-graphql' ),
			],
			'doctor_team_heading'             => [
				'type'        => 'String',
				'description' => __( 'Doctor team Heading', 'web-config-graphql' ),
			],
			'doctor_team_sub_heading'         => [
				'type'        => 'String',
				'description' => __( 'Doctor team Sub Heading', 'web-config-graphql' ),
			],
			'doctor_team_post_ids'            => [
				'type'        => [ 'list_of' => 'String' ],
				'description' => __( 'Doctor ids', 'web-config-graphql' ),
			],
			'about_us_statistics_label_1'     => [
				'type'        => 'String',
				'description' => __( 'about_us_statistics_label_1', 'web-config-graphql' ),
			],
			'about_us_statistics_value_1'     => [
				'type'        => 'String',
				'description' => __( 'about_us_statistics_value_1', 'web-config-graphql' ),
			],
			'about_us_statistics_label_2'     => [
				'type'        => 'String',
				'description' => __( 'about_us_statistics_label_2', 'web-config-graphql' ),
			],
			'about_us_statistics_value_2'     => [
				'type'        => 'String',
				'description' => __( 'about_us_statistics_value_2', 'web-config-graphql' ),
			],
			'about_us_statistics_label_3'     => [
				'type'        => 'String',
				'description' => __( 'about_us_statistics_label_3', 'web-config-graphql' ),
			],
			'about_us_statistics_value_3'     => [
				'type'        => 'String',
				'description' => __( 'about_us_statistics_value_3', 'web-config-graphql' ),
			],
			'testimonial_heading'             => [
				'type'        => 'String',
				'description' => __( 'testimonial_heading', 'web-config-graphql' ),
			],
			'testimonial_sub_heading'         => [
				'type'        => 'String',
				'description' => __( 'testimonial_sub_heading', 'web-config-graphql' ),
			],
			'testimonial_ids'                 => [
				'type'        => [ 'list_of' => 'String' ],
				'description' => __( 'Testimonial ids', 'web-config-graphql' ),
			],
			'featured_post_heading'           => [
				'type'        => 'String',
				'description' => __( 'testimonial_heading', 'web-config-graphql' ),
			],
			'featured_post_sub_heading'       => [
				'type'        => 'String',
				'description' => __( 'testimonial_sub_heading', 'web-config-graphql' ),
			],
			'featured_post_ids'               => [
				'type'        => [ 'list_of' => 'String' ],
				'description' => __( 'Testimonial ids', 'web-config-graphql' ),
			],
			'form_system_form_id'             => [
				'type'        => 'String',
				'description' => __( 'form_system_form_id', 'web-config-graphql' ),
			],
			'form_system_full_name_id'        => [
				'type'        => 'String',
				'description' => __( 'form_system_full_name_id', 'web-config-graphql' ),
			],
			'form_system_phone_id'            => [
				'type'        => 'String',
				'description' => __( 'form_system_phone_id', 'web-config-graphql' ),
			],
			'form_system_content_id'          => [
				'type'        => 'String',
				'description' => __( 'form_system_content_id', 'web-config-graphql' ),
			],
		],
	] );

	register_graphql_field( 'RootQuery', 'webConfig', [
		'type'    => 'WebConfigType',
		'resolve' => function () {
			global $web_config;

			$heroSliders = [];
			if ( isset( $web_config['hero_sliders'] ) && ! empty( $web_config['hero_sliders'] ) ) {
				foreach ( $web_config['hero_sliders'] as $slider ) {
					$heroSliders[] = [
						'image'         => $slider['image'],
						'attachment_id' => $slider['attachment_id'],
						'sort'          => $slider['sort'],
					];
				}
			}

			return [
				'site_name'                       => $web_config['site_name'],
				'site_information'                => $web_config['site_information'],
				'site_phone_hotline'              => $web_config['site_phone_hotline'],
				'site_phone_hotline_2'            => $web_config['site_phone_hotline_2'],
				'site_address'                    => $web_config['site_address'],
				'site_email'                      => $web_config['site_email'],
				'site_working_time'               => $web_config['site_working_time'],
				'facebook_link'                   => $web_config['facebook_link'],
				'youtube_link'                    => $web_config['youtube_link'],
				'zalo_link'                       => $web_config['zalo_link'],
				'footer_working_time_line_1'      => $web_config['footer_working_time_line_1'],
				'footer_working_day_line_1'       => $web_config['footer_working_day_line_1'],
				'footer_working_time_line_2'      => $web_config['footer_working_time_line_2'],
				'footer_working_day_line_2'       => $web_config['footer_working_day_line_2'],
				'footer_working_time_line_3'      => $web_config['footer_working_time_line_3'],
				'footer_working_day_line_3'       => $web_config['footer_working_day_line_3'],
				'footer_categories_ids'           => $web_config['footer_categories_ids'],
				'featured_categories_heading'     => $web_config['featured_categories_heading'],
				'featured_categories_sub_heading' => $web_config['featured_categories_sub_heading'],
				'featured_categories_ids'         => $web_config['featured_categories_ids'],
				'methods_heading'                 => $web_config['methods_heading'],
				'methods_sub_heading'             => $web_config['methods_sub_heading'],
				'methods_post_ids'                => $web_config['methods_post_ids'],
				'about_us_heading'                => $web_config['about_us_heading'],
				'about_us_description'            => $web_config['about_us_description'],
				'about_us_button_link'            => $web_config['about_us_button_link'],
				'about_us_statistics_label_1'     => $web_config['about_us_statistics_label_1'],
				'about_us_statistics_value_1'     => $web_config['about_us_statistics_value_1'],
				'about_us_statistics_label_2'     => $web_config['about_us_statistics_label_2'],
				'about_us_statistics_value_2'     => $web_config['about_us_statistics_value_2'],
				'about_us_statistics_label_3'     => $web_config['about_us_statistics_label_3'],
				'about_us_statistics_value_3'     => $web_config['about_us_statistics_value_3'],
				'about_us_image'                  => $web_config['about_us_image']['url'] ?? '',
				'hero_sliders'                    => $heroSliders,
				'doctor_team_heading'             => $web_config['doctor_team_heading'],
				'doctor_team_sub_heading'         => $web_config['doctor_team_sub_heading'],
				'doctor_team_post_ids'            => $web_config['doctor_team_post_ids'],
				'testimonial_heading'             => $web_config['testimonial_heading'],
				'testimonial_sub_heading'         => $web_config['testimonial_sub_heading'],
				'testimonial_ids'                 => $web_config['testimonial_ids'],
				'featured_post_heading'           => $web_config['featured_post_heading'],
				'featured_post_sub_heading'       => $web_config['featured_post_sub_heading'],
				'featured_post_ids'               => $web_config['featured_post_ids'],
				'form_system_form_id'             => $web_config['form_system_form_id'],
				'form_system_full_name_id'        => $web_config['form_system_full_name_id'],
				'form_system_phone_id'            => $web_config['form_system_phone_id'],
				'form_system_content_id'          => $web_config['form_system_content_id'],
			];
		}
	] );
}

