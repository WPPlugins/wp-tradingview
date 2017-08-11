=== WP TradingView ===

Contributors: tradepips
Tags: forex, stocks, finance, investment, trading, ideas, tradingview, tradepips, widget, shortcode, pips, lots, margin, tickers, charts, instruments, indicators, trade, yahoo finance, google finance, money, us dollar, eurusd, gbpusd, usdjpy, forex widgets, forex plugin, wordpress forex
Requires at least: 3.5
Tested up to: 4.7.2
Stable tag: 1.5
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

The WP TradingView plugin allows to add widgets and publishing tools from www.tradingview.com, directly within the wordpress dashboard.

== Description ==

WP TradingView plugin developed by Trade Pips, is a neat solution to embed various TradingView widgets and publishing tools right within the wordpress dashboard.

= Five different widgets =

1. TradingView Profile
1. Idea stream
1. Idea preview
1. Chat widget
1. Stock/Forex Chart widget


= Shortcode support =

Shortcode support to embed the same widget contents within site content (posts and pages.)

= Default settings page =

Use the plugin settings page to set default values for each widget. So when you attach the widgets, they are already populated with default settings.
Of course you may further customize every widget instance as you wish.

When the settings are saved (plugin options page and widget settings) the short code is updated, where you can copy the shortcode into any post or page.

== Installation ==

1. Upload plugin files to the `/wp-content/plugins/wp-tradingview` directory or install through WordPress directly.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Adjust the plugin settings through the 'WP TradingView' menu. Choose the default widget settings for each type (TradingView profile, Idea stream,Idea preview, Chat widget and Forex/stock Chart widget).
1. Insert plugin into a theme using the php code snippet or use the simple tag within a post or use a sidebar widget.

== Screenshots ==

1. Default options settings page in the admin panel.
2. When the settings are saved, updated shortcode will be displayed which you can use to embed the same widgets on posts/pages.

== Changelog ==

= 1.5 =

* Maintenance release
* Bug fixes: Syntax error - instances of array(1..,2.., []) changed to array(1..,2.., array()) 

= 1.3 =

* Bug fixes:
* Profile widget embed code width/height value errors fixed
* Width/height type (px or %) selection bypassed from the display function

* Removed an erroneous links from embed commodities

* Updated the tv.js url to the s3.tradingview.com/tv.js


= 1.2 =
* Wrong value retrieved for height parameter bug fixed.

= 1.1 =
* Updated autosize to enable 100% width/height and override pixel width and height.

= 1.0 =
* Stable initial release
