<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
 /*Plugin Name: Create Product Category Taxonomy
 Description: This plugin registers the 'product category' taxonomy and applies it to the 'product' post type.
 Version: 1.0
 License: GPLv2
 */
// register two taxonomies to go with the post type
function create_labels_taxonomy($label) {
// set up labels
  $labels = array(
    'name'              => "$label Categories",
    'singular_name'     => "$label Category",
    'search_items'      => "Search $label Categories",
    'all_items'         => "All $label Categories",
    'edit_item'         => "Edit $label Category",
    'update_item'       => "Update $label Category",
    'add_new_item'      => "Add New $label Category",
    'new_item_name'     => "New $label Category",
    'menu_name'         => "$label Categories"
  );
  return $labels;
}

function create_taxonomy() {        
  // register taxonomy
  register_taxonomy( 'productcat', 'product', array(
    'hierarchical' => true,
    'labels' => create_labels_taxonomy("Product"),
    'query_var' => true,
    'show_admin_column' => true
    )
  );
  register_taxonomy( 'journalcat', 'journal', array(
    'hierarchical' => true,
    'labels' => create_labels_taxonomy("Journal"),
    'query_var' => true,
    'show_admin_column' => true
    )
  );
  register_taxonomy( 'adventurecat', 'adventure', array(
    'hierarchical' => true,
    'labels' => create_labels_taxonomy("Adventure"),
    'query_var' => true,
    'show_admin_column' => true
    )
  );
}
add_action( 'init', 'create_taxonomy' );
?>