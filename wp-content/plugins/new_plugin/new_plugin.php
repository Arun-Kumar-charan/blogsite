<?php
/**
 * new_plugin
 *
 * @package       new_plugin
 * @author        WP arun
 *
 * @wordpress-plugin
 * Plugin Name:       New_plugin
 * Plugin URI:        https://www.new_plugin.com
 * Description:       Customize WordPress with powerful, professional and intuitive fields.
 * Version:           6.2.1
 * Author:            WP arun
 * Author URI:        https://New_plugin.com/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=plugin_directory&utm_content=advanced_custom_fields
 * Text Domain:       acf
 * Domain Path:       /lang
 * Requires PHP:      7.0
 * Requires at least: 5.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
class new_plugin{
    function __construct(){
add_action('init',array($this,'coustom_post_type'));
    }
    function Activate(){
flush_rewrite_rules();



    }
    function Deactivate(){
        flush_rewrite_rules();



    }
    function uninstall(){
       flush_rewrite_rules();
       
       
       
    }
    function coustom_post_type(){
        register_post_type('book',['public'=>true,'label'=>'Books']);
    }
}
if (class_exists('new_plugin')){
    $new_plugin=new new_plugin();
}
register_activation_hook(__FILE__,array($new_plugin,'Activate'));
register_deactivation_hook(__FILE__,array($new_plugin,'Deactivate'));
