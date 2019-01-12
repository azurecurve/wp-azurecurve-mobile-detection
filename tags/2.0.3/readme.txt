=== azurecurve Mobile Detection ===
Contributors: azurecurve
Donate link: http://development.azurecurve.co.uk/support-development/
Author URI: http://development.azurecurve.co.uk/
Plugin URI: http://development.azurecurve.co.uk/plugins/mobile-detection/
Tags: mobile, tablet, desktop, chrome, android, IE, WebKit, iOS, iPad, iPhone, Mobile Detect, post, page, widget, shortcode,WordPress,ClassicPress
Require at least: 3.3
Tested up to: 5.0.0
Stable tag: 2.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin providing shortcodes and functions to allow different content to be served to different types of device (Desktop, Tablet, Phone); also includes checks on types of device (iOS, iPhone, iPad, Android, Windows Phone) and mobile browsers (Chrome, Firefox, IE, Opera, WebKit). Uses the PHP Mobile Detect class.

== Description ==
Plugin providing shortcodes and functions to allow different content to be served to different types of device (Desktop, Tablet, Phone); also includes checks on types of device (iOS, iPhone, iPad, Android, Windows Phone) and mobile browsers (Chrome, Firefox, IE, Opera, WebKit).

The following shortcodes are available:
* ismobile
* isnotmobile
* isphone
* isnotphone
* istablet
* isnottablet
* isios
* isiphone
* isipad
* isandroid
* iswindowsphone (alternative shortcode iswp)
* iswindowsmobile (alternative shortcode iswinmo)
* ischrome
* isfirefox
* isie
* isopera
* iswebkit
* istv
* isconsole

All shortcodes available as functions with an <strong>azc_md</strong> prefix for calling from themes, other plugins, etc. For example, <strong>is_mobile</strong> available as function <strong>azc_md_is_mobile</strong>.

Uses PHP Mobile Detect class, the lightweight PHP class for detecting mobile devices (including tablets), from http://mobiledetect.net/.

This plugin is multisite compatible.

== Installation ==
To install the plugin copy the <em>azurecurve-mobile-detection</em> folder into your plugins directory and activate it.

== Changelog ==
Changes and feature additions for the Mobile Detection plugin:
= 2.0.3 =
* Fix bug in menu
= 2.0.2 =
* Move menu to includes folder for easier maintenance
= 2.0.1 =
* Correct issue with if exists azurecurve menu
= 2.0.0 =
* Add azurecurve menu
= 1.1.0 =
* Update to use version 2.8.32 of PHP Mobile Detect class
= 1.0.0 =
* First version

== Frequently Asked Questions ==
= Is this plugin compatible with both WordPress and ClassicPress? =
* Yes, this plugin will work with both.
= Can I request new features? =
Yes, I'm hapy to add features where possible.