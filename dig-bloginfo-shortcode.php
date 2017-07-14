<?php

/**
 *
 * @package           Dig_Bloginfo_Shortcode
 *
 * @wordpress-plugin
 * Plugin Name:       Dig Bloginfo Shortcode
 * Plugin URI:        https://wordpress.org/plugins/dig-bloginfo-shortcode/
 * Description:       Fetch the blog info data and use it through a shortcode in html or post editor.
 * Version:           1.0.4
 * Author:            Arroba Digital
 * Author URI:        https://www.arroba.digital
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dig-bloginfo-shortcode
 */

// This plugin is inspired in https://css-tricks.com/snippets/wordpress/bloginfo-shortcode/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Plugin main code
function dig_bloginfo_shortcode( $atts ) {
  extract(shortcode_atts(array(
    'key' => '',
  ), $atts));
  return get_bloginfo($key);
}
add_shortcode('bloginfo', 'dig_bloginfo_shortcode');

// Hook for adding admin menu
add_action( 'admin_menu', 'dig_bloginfo_shortcode_menu' );

// Action function for above hook: add_management_page ( $page_title, $menu_title, $capability, $menu_slug, $function );
function dig_bloginfo_shortcode_menu() {
  add_management_page( 'Dig Bloginfo Shortcode', 'Dig Bloginfo Shortcode', 'manage_options', 'dig-bloginfo-shortcode-page', 'dig_bloginfo_shortcode_page' );
}

// Create link to plugin options/usage/settings page from plugins list
function dig_bloginfo_shortcode_add_usage_link( $links ) {
    $settings_link = '<a href="tools.php?page=dig-bloginfo-shortcode-page">Usage</a>';
    array_push( $links, $settings_link );
    return $links;
}

$dig_bloginfo_shortcode_plugin_basename = plugin_basename( __FILE__ );
add_filter( 'plugin_action_links_' . $dig_bloginfo_shortcode_plugin_basename, 'dig_bloginfo_shortcode_add_usage_link' );

// dig_bloginfo_shortcode_page() displays the page content for the plugin's submenu
function dig_bloginfo_shortcode_page() {

    //must check that the user has the required capability 
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }

?>

<div class="wrap">

<h1>Dig Bloginfo Shortcode</h1>

<div class="card">

<h2>Usage:</h2>

<p>This plugin fetches the blog info data and allows it to be used as a shortcode in html. Examples:</p>

<p>[bloginfo key='name']<br />
  [bloginfo key='url']<br />
  [bloginfo key='description']</p>
<p>Where:</p>
<p>[bloginfo key='name'] will return the 'Blog name'<br />
  [bloginfo key='url'] will return 'http://www.example.com'<br />
  [bloginfo key='description'] will return 'Blog description'</p>
<p>Or directly to images in your theme folder:</p>
<p>&lt;img src=&quot;[bloginfo key='template_url']/images/logo.jpg&quot; alt=&quot;[bloginfo key='name'] logo&quot; /&gt;</p>
<h2>Parameters:</h2>
<p>name                 = Blog name<br />
  description          = Blog description<br />
  admin_email          = admin@email.com<br />
  url                  = http://example.com/home<br />
  wpurl                = http://example.com/home/wp<br />
  stylesheet_directory = http://example.com/home/wp/wp-content/themes/child-theme<br />
  stylesheet_url       = http://example.com/home/wp/wp-content/themes/child-theme/style.css<br />
  template_directory   = http://example.com/home/wp/wp-content/themes/parent-theme<br />
  template_url         = http://example.com/home/wp/wp-content/themes/parent-theme<br />
  atom_url             = http://example.com/home/feed/atom<br />
  rss2_url             = http://example.com/home/feed<br />
  rss_url              = http://example.com/home/feed/rss<br />
  pingback_url         = http://example.com/home/wp/xmlrpc.php<br />
  rdf_url              = http://example.com/home/feed/rdf<br />
  comments_atom_url    = http://example.com/home/comments/feed/atom<br />
  comments_rss2_url    = http://example.com/home/comments/feed<br />
  charset              = UTF-8<br />
  html_type            = text/html<br />
  language             = en-US<br />
  text_direction       = ltr<br />
  version              = 3.1</p>
<h2>Complete list of parameters:</h2>
<p><a href="https://developer.wordpress.org/reference/functions/bloginfo/" target="_blank">https://developer.wordpress.org/reference/functions/bloginfo/</a></p>
</div>
</div>

<?php 

}

?>