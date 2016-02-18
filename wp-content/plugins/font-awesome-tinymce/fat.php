<?php
/* 
Plugin Name: Font Awesome TinyMCE Button
Plugin URI: http://www.matthewrestorff.com
Description: Adds a button to the TinyMCE editor that allows you to insert Font Awesome characters. 
Author: Matthew Restorff
Version: 0.1
Author URI: http://www.matthewrestorff.com 
*/  



/*--------------------------------------------------------------------------------------
*
*  Font Awesome TinyMCE Button
*
*  @author Matthew Restorff
* 
*-------------------------------------------------------------------------------------*/
$version = '0.1';
add_action('init', 'fat_init');



/*--------------------------------------------------------------------------------------
*
*  init
*
*  @author Matthew Restorff
* 
*-------------------------------------------------------------------------------------*/

function fat_init() 
{
   fat_tinymce_button();
   add_filter( 'mce_css', 'plugin_mce_css' );
   wp_enqueue_style('font-awesome', plugins_url('css/font-awesome.css',__FILE__));
   wp_enqueue_style('font-awesome', plugins_url('css/font-awesome-ie7.css',__FILE__));
}

/*--------------------------------------------------------------------------------------
*
*  plugin_mce_css
*
*  @author Matthew Restorff
* 
*-------------------------------------------------------------------------------------*/
function plugin_mce_css( $mce_css ) {
   if ( ! empty( $mce_css ) )
      $mce_css .= ',';

   $mce_css .= plugins_url( 'css/font-awesome.css', __FILE__ );
   $mce_css .= ',' . plugins_url( 'css/font-awesome-ie7.css', __FILE__ );

   return $mce_css;
}



/*--------------------------------------------------------------------------------------
*
*	create_tinymce_button
*
*	@author Matthew Restorff
* 
*-------------------------------------------------------------------------------------*/

function fat_tinymce_button()
{	
	// Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
 
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
      add_filter( 'mce_external_plugins', 'fat_add_plugin' );
      add_filter( 'mce_buttons', 'fat_register_button' );
   }
}

function fat_add_plugin($plugin_array) {   
   $plugin_array['fontawesome'] = plugins_url() . '/font-awesome-tinymce/editor_plugin_src.js';
   return $plugin_array;
}

function fat_register_button($buttons) {
   array_push( $buttons, "|", "fontawesome" );
   return $buttons;
}
?>