<?php
/*
Plugin Name: View Published
Plugin URI: http://solace.media
Description: View Published is a plugin that adds a sub menu under "Pages" that shows only those pages that are published. Get to the right pages faster!
Version: 1.0
Author: Solace Media
Author URI: https://solace.media
*/

// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
    // Add a new submenu under Pages:
    add_pages_page(__('View Published','view-published'), __('View Published','view-published'), 'manage_options', 'edit.php?post_type=page&post_status=publish');
}

?>