<?php
/*
Plugin Name: WP Trading View
Plugin URI: http://tradepips.com
Description: WP Trading View - Display TradingView Profile, TradingView ideas, chat widget or forex / stock charts.
Version: 1.5
Author: Trade Pips
Author URI: http://tradepips.com
*/

include('inc/admin_page.php');

function tv_scripts() {
    wp_register_script('tv-common-js', 'https://s3.tradingview.com/tv.js','','',false);
    wp_enqueue_script('tv-common-js');
}
add_action('wp_enqueue_scripts', 'tv_scripts');


//register the widgets via classes
add_action('widgets_init','register_widget_TradingView');
function register_widget_TradingView(){

    require('inc/class_profile.php');
    require('inc/class_ideastream.php');
    require('inc/class_ideaview.php');
    require('inc/class_chat.php');
    require('inc/class_chart.php');

}
//shortcode
add_shortcode('tv-profile', 'widget_TradingView_profile_shortcode');
function widget_TradingView_profile_shortcode($atts){
 	$atts = shortcode_atts(array(
 		            'username' => 'fxmillions',
                'width' => '100',
                'widthpop' => '',
                'height' => '400',
                'heightpop' => '',
                'locale' => 'en'
 	), $atts);
 	extract($atts);
        if(empty($username)) $username = 'fxmillions';
        if($widthpop==2) $width = "'".$width."%'";
        if($heightpop==2) $height = "'".$height."%'";
            $data = widget_TradingView_profile::display_TradingView($username,$width,$height,$locale);
        //} else{
          //  $data = "Tradingview username is required to display the profile shortcode";
        //}
        return $data;
 }


 add_shortcode('tv-ideastream', 'widget_TradingView_ideastream_shortcode');
 function widget_TradingView_ideastream_shortcode($atts){
  	$atts = shortcode_atts(array(
      'startingCount' => 1,
      'width' => '350',
      'widthpop' => 1,
      'height' => '400',
      'heightpop' => 1,
      'mode' => 'integrate',
      'bgColor' => '#f2f5f8',
      'headerColor' => '#4BC2E9',
      'borderColor' => '#dce1e6',
      'locale' => 'en',
      'sort' => 'trending',
      'time' => 'day',
      'interval' => 'all',
      'stream' => 'all',
      'symbol' => 'EURUSD',
      'username' => 'fxmillions'
  	), $atts);
  	extract($atts);
    if($widthpop==2) $width = "'".$width."%'";
    if($heightpop==2) $height = "'".$height."%'";
        $data = widget_TradingView_ideastream::display_TradingView($startingCount,$width,$height,$bgColor,$headerColor,$borderColor,$locale,$sort,$time,$interval,$stream,$symbol,$username);

        return $data;
  }

  add_shortcode('tv-ideaview', 'widget_TradingView_ideaview_shortcode');
  function widget_TradingView_ideaview_shortcode($atts){
   	$atts = shortcode_atts(array(
      'idea' => 'WDO3BAZT',
      'width'  => '100',
      'widthpop' => '',
      'height'   => '410',
      'heightpop'=> '',
      'locale'   => 'en'
   	), $atts);
   	extract($atts);
    if($widthpop==2) $width = "'".$width."%'";
    if($heightpop==2) $height = "'".$height."%'";
          if(!empty($idea)){
              $data = widget_TradingView_ideaview::display_TradingView($idea,$width,$height,$locale);
          } else{
              $data = "Unique ID is required to display the idea preview";
          }
          return $data;
   }

   add_shortcode('tv-chat', 'widget_TradingView_chat_shortcode');
   function widget_TradingView_chat_shortcode($atts){
    	$atts = shortcode_atts(array(
        'room' => 'general',
        'autosize' => '',
        'width'  => '100',
        //'widthpop' => 2,
        'height'   => '410',
        //'heightpop'=> 1,
        'locale'   => 'en'
    	), $atts);
    	extract($atts);
           if(empty($room)) $room = 'general';
               $data = widget_TradingView_chat::display_TradingView($room,$autosize,$width,$height,$locale);
           //} else{
            //   $data = "Specify a chat room to display the chat widget";
           //}
           return $data;
    }

    add_shortcode('tv-chart', 'widget_TradingView_chart_shortcode');
    function widget_TradingView_chart_shortcode($atts){
       $atts = shortcode_atts(array(
         'symbol' => 'GBPUSD',
         'interval' => 'D',
         'timezone' => 'Asia/Hong_Kong',
         'autosize' => '',
         'width' => '980',
         //'widthpop' => 1,
         'height'   => '610',
         //'heightpop'=> 1,
         'theme' => 'White',
         'style' => '1',
         'locale' => 'en',
         'toolbar_bg' => '#f1f3f6',
         'enable_publishing' => '',
         'allow_symbol_change' => '',
         'hide_top_toolbar' => '',
         'withdateranges' => '',
         'hide_side_toolbar' => '',
         'save_image' => '',
         'details' => '',
         //'news' => '',
         'stocktwits' => '',
         'headlines' => '',
         'hotlist' => '',
         'calendar' => '',
         'hideideas' => '',
         'hideideasbutton' => '',
         'referral_id' => ''
       ), $atts);
       extract($atts);
            if(!empty($symbol)){
                $data = widget_TradingView_chart::display_TradingView($symbol,$interval,$timezone,$autosize,$width,$height,$theme,$style,$locale,$toolbar_bg,$enable_publishing,$allow_symbol_change,$hide_top_toolbar,$withdateranges,$hide_side_toolbar,$save_image,$details,$stocktwits,$headlines,$hotlist,$calendar,$hideideas,$hideideasbutton,$referral_id);
            } else{
                $data = "Please specify a symbol";
            }
            return $data;
     }

  // Register javascript
  add_action('admin_enqueue_scripts', 'enqueue_admin_js' );
  add_action('widgets_init', 'enqueue_admin_js' );

  function enqueue_admin_js() {
    if( is_admin() ) {
      wp_enqueue_style( 'wp-color-picker' );
      wp_enqueue_script( 'tv_custom_js', plugins_url( 'js/jquery.tv_custom.js', __FILE__ ), array( 'jquery', 'wp-color-picker' ), '', true  );
    }

  }

  register_uninstall_hook(__FILE__, 'tv_uninstall_settings');
  function tv_uninstall_settings(){
    $options_array = array("tv_profile_op_name","tv_ideastream_op_name","tv_ideaview_op_name","tv_chat_op_name","tv_chart_op_name");
    foreach ($options_array as $option) {
        delete_option($option);
    }

  }
