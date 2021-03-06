<?php 
/*
Plugin Name: azurecurve Mobile Detection
Plugin URI: http://development.azurecurve.co.uk/plugins/mobile-detection

Description: Plugin providing shortcodes and functions to allow different content to be served to different types of device (Desktop, Tablet, Phone); also includes checks on types of device (iOS, iPhone, iPad, Android, Windows Phone) and mobile browsers (Chrome, Firefox, IE, Opera, WebKit). Uses the PHP Mobile Detect class. 
Version: 2.0.3

Author: azurecurve
Author URI: http://development.azurecurve.co.uk

Text Domain: azc_md
Domain Path: /languages

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

The full copy of the GNU General Public License is available here: http://www.gnu.org/licenses/gpl.txt
*/

//include menu
require_once( dirname(  __FILE__ ) . '/includes/menu.php');

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

?>