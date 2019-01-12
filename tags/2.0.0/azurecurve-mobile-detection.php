<?php 
/*
Plugin Name: azurecurve Mobile Detection
Plugin URI: http://development.azurecurve.co.uk/plugins/mobile-detection

Description: Plugin providing shortcodes and functions to allow different content to be served to different types of device (Desktop, Tablet, Phone); also includes checks on types of device (iOS, iPhone, iPad, Android, Windows Phone) and mobile browsers (Chrome, Firefox, IE, Opera, WebKit). Uses the PHP Mobile Detect class. 
Version: 2.0.0

Author: azurecurve
Author URI: http://development.azurecurve.co.uk

Text Domain: azc_md
Domain Path: /languages

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

The full copy of the GNU General Public License is available here: http://www.gnu.org/licenses/gpl.txt
*/

// include mobile detect library if not already present
if(!class_exists('Mobile_Detect')){
    require_once( plugin_dir_path(__FILE__) . '/libraries/Mobile_Detect.php' );
}

$detect = new Mobile_Detect();

// shortcode for is mobile (phones and tablets)
function azc_md_is_mobile_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isMobile() ) return do_shortcode($content);
}
add_shortcode( 'ismobile', 'azc_md_is_mobile_shortcode' );

// function returns true for mobile (phones and tablets)
function azc_md_is_mobile() {
	global $detect;
	if( $detect->isMobile() ) return true;
}


// shortcode for is not mobile (Laptops and Desktops)
function azc_md_is_not_mobile_shortcode( $atts, $content=null ) {
	global $detect;
	if ( !$detect->isMobile() ) return do_shortcode($content);
}
add_shortcode( 'isnotmobile', 'azc_md_is_not_mobile_shortcode' );

// function returns true for is not mobile (Laptops and Desktops)
function azc_md_is_not_mobile() {
	global $detect;
	if( !$detect->isMobile() ) return true;
}


// shortcode for is phone
function azc_md_is_phone_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isMobile() && !$detect->istablet() ) return do_shortcode($content);
}
add_shortcode( 'isphone', 'azc_md_is_phone_shortcode' );

// function returns true for is phone
function azc_md_is_phone() {
	global $detect;
	if( $detect->isMobile() && !$detect->istablet() ) return true;
}


// shortcode for is not phone (Tablets, Laptops and Desktops)
function azc_md_is_not_phone_shortcode( $atts, $content=null ) {
	global $detect;
	if ( !$detect->isMobile() || $detect->isTablet() ) return do_shortcode($content);
}
add_shortcode( 'isnotphone', 'azc_md_is_not_phone_shortcode' );

// function returns true for not phone (Tablets, Laptops and Desktops)
function azc_md_is_not_phone() {
	global $detect;
	if( $detect->isMobile() || $detect->isTablet() ) return true;
}


// shortcode for is tablet
function azc_md_is_tablet_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->istablet() ) return do_shortcode($content);
}
add_shortcode( 'istablet', 'azc_md_is_tablet_shortcode' );

// function returns true for is tablet
function azc_md_is_tablet() {
	global $detect;
	if( $detect->istablet() ) return true;
}


// shortcode for is not tablet
function azc_md_is_not_tablet_shortcode( $atts, $content=null ) {
	global $detect;
	if ( !$detect->isTablet() ) return do_shortcode($content);
}
add_shortcode( 'isnottablet', 'azc_md_is_not_tablet_shortcode' );

// function returns true for not tablet
function azc_md_is_not_tablet() {
	global $detect;
	if( ! $detect->isTablet() ) return true;
}


// shortcode for is iOS
function azc_md_is_iOS_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isiOS() ) return do_shortcode($content);
}
add_shortcode( 'isios', 'azc_md_is_iOS_shortcode' );

// function returns true for is iOS
function azc_md_is_iOS() {
	global $detect;
	if( $detect->isiOS() ) return true;
}


// shortcode for is iPhone
function azc_md_is_iPhone_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isiPhone() ) return do_shortcode($content);
}
add_shortcode( 'isiphone', 'azc_md_is_iPhone_shortcode' );

// function returns true for is iPhone
function azc_md_is_iPhone() {
	global $detect;
	if( $detect->isiPhone() ) return true;
}


// shortcode for is iPad
function azc_md_is_iPad_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isiPad() ) return do_shortcode($content);
}
add_shortcode( 'isipad', 'azc_md_is_iPad_shortcode' );

// function returns true for is iPad
function azc_md_is_iPad() {
	global $detect;
	if( $detect->isiPad() ) return true;
}


// shortcode for is AndroidOS
function azc_md_is_AndroidOS_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isAndroidOS() ) return do_shortcode($content);
}
add_shortcode( 'isandroidos', 'azc_md_is_AndroidOS_shortcode' );
add_shortcode( 'isandroid', 'azc_md_is_AndroidOS_shortcode' );

// function returns true for is AndroidOS
function azc_md_is_AndroidOS() {
	global $detect;
	if( $detect->isAndroidOS() ) return true;
}


// shortcode for is WindowsMobileOS
function azc_md_is_WindowsMobileOS_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isWindowsMobileOS() ) return do_shortcode($content);
}
add_shortcode( 'iswindowsmobileos', 'azc_md_is_WindowsMobileOS_shortcode' );
add_shortcode( 'iswindowsmobile', 'azc_md_is_WindowsMobileOS_shortcode' );
add_shortcode( 'iswinmo', 'azc_md_is_WindowsMobileOS_shortcode' );

// function returns true for is WindowsMobileOS
function azc_md_is_WindowsMobileOS() {
	global $detect;
	if( $detect->isWindowsMobileOS() ) return true;
}


// shortcode for is WindowsPhoneOS
function azc_md_is_WindowsPhoneOS_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isWindowsPhoneOS() ) return do_shortcode($content);
}
add_shortcode( 'iswindowsphone', 'azc_md_is_WindowsPhoneOS_shortcode' );
add_shortcode( 'iswindowsphone', 'azc_md_is_WindowsPhoneOS_shortcode' );
add_shortcode( 'iswp', 'azc_md_is_WindowsPhoneOS_shortcode' );

// function returns true for is WindowsPhoneOS
function azc_md_is_WindowsPhoneOS() {
	global $detect;
	if( $detect->isWindowsPhoneOS() ) return true;
}


// shortcode for is Chrome
function azc_md_is_Chrome_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isChrome() ) return do_shortcode($content);
}
add_shortcode( 'ischrome', 'azc_md_is_Chrome_shortcode' );

// function returns true for is Chrome
function azc_md_is_Chrome() {
	global $detect;
	if( $detect->isChrome() ) return true;
}


// shortcode for is Firefox
function azc_md_is_Firefox_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isFirefox() ) return do_shortcode($content);
}
add_shortcode( 'isfirefox', 'azc_md_is_Firefox_shortcode' );

// function returns true for is Firefox
function azc_md_is_Firefox() {
	global $detect;
	if( $detect->isFirefox() ) return true;
}


// shortcode for is IE
function azc_md_is_IE_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isIE() ) return do_shortcode($content);
}
add_shortcode( 'isinternetexplorer', 'azc_md_is_IE_shortcode' );
add_shortcode( 'isie', 'azc_md_is_IE_shortcode' );

// function returns true for is IE
function azc_md_is_IE() {
	global $detect;
	if( $detect->isIE() ) return true;
}


// shortcode for is Opera
function azc_md_is_Opera_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isOpera() ) return do_shortcode($content);
}
add_shortcode( 'isopera', 'azc_md_is_Opera_shortcode' );

// function returns true for is Opera
function azc_md_is_Opera() {
	global $detect;
	if( $detect->isOpera() ) return true;
}


// shortcode for is TV
function azc_md_is_TV_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isTV() ) return do_shortcode($content);
}
add_shortcode( 'istv', 'azc_md_is_TV_shortcode' );

// function returns true for is TV
function azc_md_is_TV() {
	global $detect;
	if( $detect->isTV() ) return true;
}


// shortcode for is WebKit
function azc_md_is_WebKit_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isWebKit() ) return do_shortcode($content);
}
add_shortcode( 'iswebkit', 'azc_md_is_WebKit_shortcode' );

// function returns true for is WebKit
function azc_md_is_WebKit() {
	global $detect;
	if( $detect->isWebKit() ) return true;
}


// shortcode for is Console
function azc_md_is_Console_shortcode( $atts, $content=null ) {
	global $detect;
	if ( $detect->isConsole() ) return do_shortcode($content);
}
add_shortcode( 'isconsole', 'azc_md_is_Console_shortcode' );

// function returns true for is Console
function azc_md_is_Console() {
	global $detect;
	if( $detect->isConsole() ) return true;
}


// azurecurve menu
if (!function_exists(azc_create_plugin_menu)){
	function azc_create_plugin_menu() {
		global $admin_page_hooks;
		
		if ( empty ( $admin_page_hooks['azc-menu-test'] ) ){
			add_menu_page( "azurecurve Plugins"
							,"azurecurve"
							,'manage_options'
							,"azc-plugin-menus"
							,"azc_plugin_menus"
							,plugins_url( '/images/Favicon-16x16.png', __FILE__ ) );
			add_submenu_page( "azc-plugin-menus"
								,"Plugins"
								,"Plugins"
								,'manage_options'
								,"azc-plugin-menus"
								,"azc_plugin_menus" );
		}
	}
	add_action("admin_menu", "azc_create_plugin_menu");
}

function azc_create_md_plugin_menu() {
	global $admin_page_hooks;
    
	add_submenu_page( "azc-plugin-menus"
						,"Mobile Detection"
						,"Mobile Detection"
						,'manage_options'
						,"azc-md"
						,"azc_md_settings" );
}
add_action("admin_menu", "azc_create_md_plugin_menu");

function azc_md_settings() {
	if (!current_user_can('manage_options')) {
		$error = new WP_Error('not_found', __('You do not have sufficient permissions to access this page.' , 'azc_md'), array('response' => '200'));
		if(is_wp_error($error)){
			wp_die($error, '', $error->get_error_data());
		}
    }
	?>
	<div id="azc-t-general" class="wrap">
			<h2>azurecurve Mobile Detection</h2>

				<table class="form-table">
					<tr>
						<th scope="row" colspan="2">
							<label for="explanation">
								azurecurve Mobile Detection <?php _e('provides shortcodes and functions to allow different content to be served to different types of device:', 'azc_md'); ?>
							</label>
						</th>
					</tr>
					<tr><th scope="row">ismobile</th><td>Available as function call <strong>azc_md_is_mobile</strong></td></tr>
					<tr><th scope="row">isnotmobile</th><td>Available as function call <strong>azc_md_is_not_mobile</strong></td></tr>
					<tr><th scope="row">isphone</th><td>Available as function call <strong>azc_md_is_phone</strong></td></tr>
					<tr><th scope="row">isnotphone</th><td>Available as function call <strong>azc_md_is_not_phone</strong></td></tr>
					<tr><th scope="row">istablet</th><td>Available as function call <strong>azc_md_is_tablet</strong></td></tr>
					<tr><th scope="row">isnottablet</th><td>Available as function call <strong>azc_md_is_not_tablet</strong></td></tr>
					<tr><th scope="row">isios</th><td>Available as function call <strong>azc_md_is_iOS</strong></td></tr>
					<tr><th scope="row">isiphone</th><td>Available as function call <strong>azc_md_is_iPhone</strong></td></tr>
					<tr><th scope="row">isipad</th><td>Available as function call <strong>azc_md_is_iPad</strong></td></tr>
					<tr><th scope="row">isandroid</th><td>Available as function call <strong>azc_md_is_Android</strong></td></tr>
					<tr><th scope="row">iswindowsphone</th><td>Alternative shortcode iswp available<br />Available as function call <strong>azc_md_is_WindowsPhoneOS</strong></td></tr>
					<tr><th scope="row">iswindowsmobile</th><td>Alternative shortcode iswinmo available<br />Available as function call <strong>azc_md_is_WindowsMobileOS</strong></td></tr>
					<tr><th scope="row">ischrome</th><td>Available as function call <strong>azc_md_is_Chrome</strong></td></tr>
					<tr><th scope="row">isfirefox</th><td>Available as function call <strong>azc_md_is_Firefox</strong></td></tr>
					<tr><th scope="row">isie</th><td>Available as function call <strong>azc_md_is_IE</strong></td></tr>
					<tr><th scope="row">isopera</th><td>Available as function call <strong>azc_md_is_Opera</strong></td></tr>
					<tr><th scope="row">iswebkit</th><td>Available as function call <strong>azc_md_is_WebKit</strong></td></tr>
					<tr><th scope="row">istv</th><td>Available as function call <strong>azc_md_is_TV</strong></td></tr>
					<tr><th scope="row">isconsole</th><td>Available as function call <strong>azc_md_is_Console</strong></td></tr>
					<tr>
						<th scope="row" colspan="2">
							<label for="additional-plugins">
								azurecurve <?php _e('has the following plugins which allow shortcodes to be used in comments and widgets:', 'azc_md'); ?>
							</label>
							<ul class='azc_plugin_index'>
								<li>
									<?php
									if ( is_plugin_active( 'azurecurve-shortcodes-in-comments/azurecurve-shortcodes-in-comments.php' ) ) {
										echo "<a href='admin.php?page=azc-sic' class='azc_plugin_index'>Shortcodes in Comments</a>";
									}else{
										echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-comments/' class='azc_plugin_index'>Shortcodes in Comments</a>";
									}
									?>
								</li>
								<li>
									<?php
									if ( is_plugin_active( 'azurecurve-shortcodes-in-widgets/azurecurve-shortcodes-in-widgets.php' ) ) {
										echo "<a href='admin.php?page=azc-siw' class='azc_plugin_index'>Shortcodes in Widgets</a>";
									}else{
										echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-widgets/' class='azc_plugin_index'>Shortcodes in Widgets</a>";
									}
									?>
								</li>
							</ul>
						</th>
					</tr>
				</table>
	</div>
<?php }
if (!function_exists(azc_plugin_index_load_css)){
	function azc_plugin_index_load_css(){
		wp_enqueue_style( 'azurecurve_plugin_index', plugins_url( 'pluginstyle.css', __FILE__ ) );
	}
	add_action('admin_head', 'azc_plugin_index_load_css');
}

if (!function_exists(azc_plugin_menus)){
	function azc_plugin_menus() {
		echo "<h3>azurecurve Plugins";
		
		echo "<div style='display: block;'><h4>Active</h4>";
		echo "<span class='azc_plugin_index'>";
		if ( is_plugin_active( 'azurecurve-bbcode/azurecurve-bbcode.php' ) ) {
			echo "<a href='admin.php?page=azc-bbcode' class='azc_plugin_index'>BBCode</a>";
		}
		if ( is_plugin_active( 'azurecurve-comment-validator/azurecurve-comment-validator.php' ) ) {
			echo "<a href='admin.php?page=azc-cv' class='azc_plugin_index'>Comment Validator</a>";
		}
		if ( is_plugin_active( 'azurecurve-conditional-links/azurecurve-conditional-links.php' ) ) {
			echo "<a href='admin.php?page=azc-cl' class='azc_plugin_index'>Conditional Links</a>";
		}
		if ( is_plugin_active( 'azurecurve-display-after-post-content/azurecurve-display-after-post-content.php' ) ) {
			echo "<a href='admin.php?page=azc-dapc' class='azc_plugin_index'>Display After Post Content</a>";
		}
		if ( is_plugin_active( 'azurecurve-filtered-categories/azurecurve-filtered-categories.php' ) ) {
			echo "<a href='admin.php?page=azc-fc' class='azc_plugin_index'>Filtered Categories</a>";
		}
		if ( is_plugin_active( 'azurecurve-flags/azurecurve-flags.php' ) ) {
			echo "<a href='admin.php?page=azc-f' class='azc_plugin_index'>Flags</a>";
		}
		if ( is_plugin_active( 'azurecurve-floating-featured-image/azurecurve-floating-featured-image.php' ) ) {
			echo "<a href='admin.php?page=azc-ffi' class='azc_plugin_index'>Floating Featured Image</a>";
		}
		if ( is_plugin_active( 'azurecurve-get-plugin-info/azurecurve-get-plugin-info.php' ) ) {
			echo "<a href='admin.php?page=azc-gpi' class='azc_plugin_index'>Get Plugin Info</a>";
		}
		if ( is_plugin_active( 'azurecurve-insult-generator/azurecurve-insult-generator.php' ) ) {
			echo "<a href='admin.php?page=azc-ig' class='azc_plugin_index'>Insult Generator</a>";
		}
		if ( is_plugin_active( 'azurecurve-mobile-detection/azurecurve-mobile-detection.php' ) ) {
			echo "<a href='admin.php?page=azc-md' class='azc_plugin_index'>Mobile Detection</a>";
		}
		if ( is_plugin_active( 'azurecurve-multisite-favicon/azurecurve-multisite-favicon.php' ) ) {
			echo "<a href='admin.php?page=azc-msf' class='azc_plugin_index'>Multisite Favicon</a>";
		}
		if ( is_plugin_active( 'azurecurve-page-index/azurecurve-page-index.php' ) ) {
			echo "<a href='admin.php?page=azc-pi' class='azc_plugin_index'>Page Index</a>";
		}
		if ( is_plugin_active( 'azurecurve-posts-archive/azurecurve-posts-archive.php' ) ) {
			echo "<a href='admin.php?page=azc-pa' class='azc_plugin_index'>Posts Archive</a>";
		}
		if ( is_plugin_active( 'azurecurve-rss-feed/azurecurve-rss-feed.php' ) ) {
			echo "<a href='admin.php?page=azc-rssf' class='azc_plugin_index'>RSS Feed</a>";
		}
		if ( is_plugin_active( 'azurecurve-rss-suffix/azurecurve-rss-suffix.php' ) ) {
			echo "<a href='admin.php?page=azc-rsss' class='azc_plugin_index'>RSS Suffix</a>";
		}
		if ( is_plugin_active( 'azurecurve-series-index/azurecurve-series-index.php' ) ) {
			echo "<a href='admin.php?page=azc-si' class='azc_plugin_index'>Series Index</a>";
		}
		if ( is_plugin_active( 'azurecurve-shortcodes-in-comments/azurecurve-shortcodes-in-comments.php' ) ) {
			echo "<a href='admin.php?page=azc-sic' class='azc_plugin_index'>Shortcodes in Comments</a>";
		}
		if ( is_plugin_active( 'azurecurve-shortcodes-in-widgets/azurecurve-shortcodes-in-widgets.php' ) ) {
			echo "<a href='admin.php?page=azc-siw' class='azc_plugin_index'>Shortcodes in Widgets</a>";
		}
		if ( is_plugin_active( 'azurecurve-tag-cloud/azurecurve-tag-cloud.php' ) ) {
			echo "<a href='admin.php?page=azc-tc' class='azc_plugin_index'>Tag Cloud</a>";
		}
		if ( is_plugin_active( 'azurecurve-taxonomy-index/azurecurve-taxonomy-index.php' ) ) {
			echo "<a href='admin.php?page=azc-ti' class='azc_plugin_index'>Taxonomy Index</a>";
		}
		if ( is_plugin_active( 'azurecurve-theme-switcher/azurecurve-theme-switcher.php' ) ) {
			echo "<a href='admin.php?page=azc-ts' class='azc_plugin_index'>Theme Switcher</a>";
		}
		if ( is_plugin_active( 'azurecurve-timelines/azurecurve-timelines.php' ) ) {
			echo "<a href='admin.php?page=azc-t' class='azc_plugin_index'>Timelines</a>";
		}
		if ( is_plugin_active( 'azurecurve-toggle-showhide/azurecurve-toggle-showhide.php' ) ) {
			echo "<a href='admin.php?page=azc-tsh' class='azc_plugin_index'>Toggle Show/Hide</a>";
		}
		echo "</span></div>";
		echo "<p style='clear: both' />";
		
		echo "<div style='display: block;'><h4>Other Available Plugins</h4>";
		echo "<span class='azc_plugin_index'>";
		if ( !is_plugin_active( 'azurecurve-bbcode/azurecurve-bbcode.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-bbcode/' class='azc_plugin_index'>BBCode</a>";
		}
		if ( !is_plugin_active( 'azurecurve-comment-validator/azurecurve-comment-validator.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-comment-validator/' class='azc_plugin_index'>Comment Validator</a>";
		}
		if ( !is_plugin_active( 'azurecurve-conditional-links/azurecurve-conditional-links.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-conditional-links/' class='azc_plugin_index'>Conditional Links</a>";
		}
		if ( !is_plugin_active( 'azurecurve-display-after-post-content/azurecurve-display-after-post-content.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-display-after-post-content/' class='azc_plugin_index'>Display After Post Content</a>";
		}
		if ( !is_plugin_active( 'azurecurve-filtered-categories/azurecurve-filtered-categories.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-filtered-categories/' class='azc_plugin_index'>Filtered Categories</a>";
		}
		if ( !is_plugin_active( 'azurecurve-flags/azurecurve-flags.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-flags/' class='azc_plugin_index'>Flags</a>";
		}
		if ( !is_plugin_active( 'azurecurve-floating-featured-image/azurecurve-floating-featured-image.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-floating-featured-image/' class='azc_plugin_index'>Floating Featured Image</a>";
		}
		if ( !is_plugin_active( 'azurecurve-get-plugin-info/azurecurve-get-plugin-info.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-get-plugin-info/' class='azc_plugin_index'>Get Plugin Info</a>";
		}
		if ( !is_plugin_active( 'azurecurve-insult-generator/azurecurve-insult-generator.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-insult-generator/' class='azc_plugin_index'>Insult Generator</a>";
		}
		if ( !is_plugin_active( 'azurecurve-mobile-detection/azurecurve-mobile-detection.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-mobile-detection/' class='azc_plugin_index'>Mobile Detection</a>";
		}
		if ( !is_plugin_active( 'azurecurve-multisite-favicon/azurecurve-multisite-favicon.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-multisite-favicon/' class='azc_plugin_index'>Multisite Favicon</a>";
		}
		if ( !is_plugin_active( 'azurecurve-page-index/azurecurve-page-index.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-page-index/' class='azc_plugin_index'>Page Index</a>";
		}
		if ( !is_plugin_active( 'azurecurve-posts-archive/azurecurve-posts-archive.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-posts-archive/' class='azc_plugin_index'>Posts Archive</a>";
		}
		if ( !is_plugin_active( 'azurecurve-rss-feed/azurecurve-rss-feed.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-rss-feed/' class='azc_plugin_index'>RSS Feed</a>";
		}
		if ( !is_plugin_active( 'azurecurve-rss-suffix/azurecurve-rss-suffix.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-rss-suffix/' class='azc_plugin_index'>RSS Suffix</a>";
		}
		if ( !is_plugin_active( 'azurecurve-series-index/azurecurve-series-index.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-series-index/' class='azc_plugin_index'>Series Index</a>";
		}
		if ( !is_plugin_active( 'azurecurve-shortcodes-in-comments/azurecurve-shortcodes-in-comments.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-comments/' class='azc_plugin_index'>Shortcodes in Comments</a>";
		}
		if ( !is_plugin_active( 'azurecurve-shortcodes-in-widgets/azurecurve-shortcodes-in-widgets.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-shortcodes-in-widgets/' class='azc_plugin_index'>Shortcodes in Widgets</a>";
		}
		if ( !is_plugin_active( 'azurecurve-tag-cloud/azurecurve-tag-cloud.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-tag-cloud/' class='azc_plugin_index'>Tag Cloud</a>";
		}
		if ( !is_plugin_active( 'azurecurve-taxonomy-index/azurecurve-taxonomy-index.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-taxonomy-index/' class='azc_plugin_index'>Taxonomy Index</a>";
		}
		if ( !is_plugin_active( 'azurecurve-theme-switcher/azurecurve-theme-switcher.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-theme-switcher/' class='azc_plugin_index'>Theme Switcher</a>";
		}
		if ( !is_plugin_active( 'azurecurve-timelines/azurecurve-timelines.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-timelines/' class='azc_plugin_index'>Timelines</a>";
		}
		if ( !is_plugin_active( 'azurecurve-toggle-showhide/azurecurve-toggle-showhide.php' ) ) {
			echo "<a href='https://wordpress.org/plugins/azurecurve-toggle-showhide/' class='azc_plugin_index'>Toggle Show/Hide</a>";
		}
		echo "</span></div>";
	}
}

?>