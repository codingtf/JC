<?php

function transaction_init() {
	register_taxonomy( 'transaction', array( 'property' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Transactions', 'cl' ),
			'singular_name'              => _x( 'Transaction', 'taxonomy general name', 'cl' ),
			'search_items'               => __( 'Search transactions', 'cl' ),
			'popular_items'              => __( 'Popular transactions', 'cl' ),
			'all_items'                  => __( 'All transactions', 'cl' ),
			'parent_item'                => __( 'Parent transaction', 'cl' ),
			'parent_item_colon'          => __( 'Parent transaction:', 'cl' ),
			'edit_item'                  => __( 'Edit transaction', 'cl' ),
			'update_item'                => __( 'Update transaction', 'cl' ),
			'add_new_item'               => __( 'New transaction', 'cl' ),
			'new_item_name'              => __( 'New transaction', 'cl' ),
			'separate_items_with_commas' => __( 'Separate transactions with commas', 'cl' ),
			'add_or_remove_items'        => __( 'Add or remove transactions', 'cl' ),
			'choose_from_most_used'      => __( 'Choose from the most used transactions', 'cl' ),
			'not_found'                  => __( 'No transactions found.', 'cl' ),
			'menu_name'                  => __( 'Transactions', 'cl' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'transaction',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'transaction_init' );
