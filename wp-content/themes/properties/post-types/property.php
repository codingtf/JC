<?php

function property_init() {
	register_post_type( 'property', array(
		'labels'            => array(
			'name'                => __( 'Properties', 'cl' ),
			'singular_name'       => __( 'Property', 'cl' ),
			'all_items'           => __( 'All Properties', 'cl' ),
			'new_item'            => __( 'New property', 'cl' ),
			'add_new'             => __( 'Add New', 'cl' ),
			'add_new_item'        => __( 'Add New property', 'cl' ),
			'edit_item'           => __( 'Edit property', 'cl' ),
			'view_item'           => __( 'View property', 'cl' ),
			'search_items'        => __( 'Search properties', 'cl' ),
			'not_found'           => __( 'No properties found', 'cl' ),
			'not_found_in_trash'  => __( 'No properties found in trash', 'cl' ),
			'parent_item_colon'   => __( 'Parent property', 'cl' ),
			'menu_name'           => __( 'Properties', 'cl' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-home',
		'show_in_rest'      => true,
		'rest_base'         => 'property',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'property_init' );

function property_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['property'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Property updated. <a target="_blank" href="%s">View property</a>', 'cl'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'cl'),
		3 => __('Custom field deleted.', 'cl'),
		4 => __('Property updated.', 'cl'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Property restored to revision from %s', 'cl'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Property published. <a href="%s">View property</a>', 'cl'), esc_url( $permalink ) ),
		7 => __('Property saved.', 'cl'),
		8 => sprintf( __('Property submitted. <a target="_blank" href="%s">Preview property</a>', 'cl'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Property scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview property</a>', 'cl'),
		// translators: Publish box date format, see https://secure.php.net/manual/en/function.date.php
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Property draft updated. <a target="_blank" href="%s">Preview property</a>', 'cl'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'property_updated_messages' );
