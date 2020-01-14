<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function create_product_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Product Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Product terms', 'text_domain' ),
		'parent_item'                => __( 'Parent product Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent product Item:', 'text_domain' ),
		'new_item_name'              => __( 'New product Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New product Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit product Item', 'text_domain' ),
		'update_item'                => __( 'Update product Item', 'text_domain' ),
		'view_item'                  => __( 'View product Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove product items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular product Items', 'text_domain' ),
		'search_items'               => __( 'Search product Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
        'hierarchical'               => false,
        'taxonomies'                => array('product_taxonomy'),
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'product_taxonomy', array( 'product_type' ), $args );

}
add_action( 'init', 'create_product_taxonomy', 0 );

