<?php
/**
 * Plugin Name:       Show Reusable Blocks
 * Description:       Show the reusable blocks UI so you can actually edit the blocks you've saved
 * Version:           0.0.1
 * Author:            Jason Lawton
 * Author URI:        https://jasonlawton.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/phoopee3/show-reusable-blocks
 */

// https://snippets.webaware.com.au/snippets/add-an-external-link-to-the-wordpress-admin-menu/
 add_action('admin_menu', 'jl_show_reusable_blocks_menu');
 
/**
* add external link to Tools area
*/
function jl_show_reusable_blocks_menu() {
    global $submenu;
    $url = get_admin_url(null, 'edit.php?post_type=wp_block');
    $submenu['themes.php'][] = array('Reusable Blocks', 'manage_options', $url);
}
