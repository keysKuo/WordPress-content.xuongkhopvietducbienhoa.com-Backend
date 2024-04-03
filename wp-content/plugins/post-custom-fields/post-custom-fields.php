<?php
/**
 * Post - Custom fields for Post
 *
 * Plugin Name:         Custom fields for Post
 * Plugin URI:          https://github.com/dangnghia1997/doctor-custom-post-type
 * Description:         Add custon fields for post type
 * Version:             1.0.0
 * Requires at least:   6.4.0
 * Requires PHP:        8.1
 * Author:              Nghia Dang
 * License:             GPLv3 or later
 * License URI:         http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:         post-cf
 * Provides:            PostCustomFields
 *
 * @package             PostCustomFields
 * @author              Nghia Dang
 * @license             GNU General Public License, version 3
 * @copyright           2023-2024 Nghia Dang
 */

// Add custom meta box for a custom checkbox field
function add_is_post_method_checkbox_field_meta_box() {
	add_meta_box(
		'post-metadata-meta-box',
		'Post metadata',
		'render_post_metadata_meta_box',
		'post',
		'normal',
		'default'
	);
}
add_action('add_meta_boxes', 'add_is_post_method_checkbox_field_meta_box');

// Render the content of the custom checkbox meta box
function render_post_metadata_meta_box($post) {
	// Retrieve the current value of the custom checkbox field
	$is_post_method_checkbox_value = get_post_meta($post->ID, 'is_post_method', true);
	$is_post_featured_checkbox_value = get_post_meta($post->ID, 'is_post_featured', true);

	// Output the HTML for the custom checkbox input
	?>
	<label for="is_post_method_checkbox_field">
		<input type="checkbox" id="is_post_method_checkbox_field" name="is_post_method" <?php checked($is_post_method_checkbox_value, 'on'); ?>>
		Is Method Post?
	</label>
    <br />
    <label for="is_post_featured_checkbox_field">
        <input type="checkbox" id="is_post_featured_checkbox_field" name="is_post_featured" <?php checked($is_post_featured_checkbox_value, 'on'); ?>>
        Is Featured Post?
    </label>
	<?php
}

// Save the custom checkbox field value when the post is saved
function save_is_post_method_checkbox_field_value($post_id) {
	if (isset($_POST['is_post_method'])) {
		update_post_meta($post_id, 'is_post_method', 1);
	} else {
		delete_post_meta($post_id, 'is_post_method');
	}

	if (isset($_POST['is_post_featured'])) {
		update_post_meta($post_id, 'is_post_featured', 1);
	} else {
		delete_post_meta($post_id, 'is_post_featured');
	}
}
add_action('save_post', 'save_is_post_method_checkbox_field_value');


