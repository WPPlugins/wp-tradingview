<?php

class widget_TradingView_profile extends WP_Widget{

    public function __construct() {
        $params = array(
            'description' => 'Trading View profile - Display profile of a username from TradingView as a widget',
            'name' => 'Trading View profile'
        );

        parent::__construct('widget_TradingView_profile','',$params);
    }
    public function form($instance) {
        extract($instance);
        $profile_data = get_option('tv_profile_op_name');
        ?>
        <script type="text/javascript">
        jQuery(document).ready(function($){
            // Add Color Picker to all inputs that have 'color-field' class
            $(function() {
                $('.tv-color-field').wpColorPicker();
            });
        });
        </script>
        <style>
        .widget-content > .wp-picker-container > a {display: none;}
        </style>
<p>
    <label for="<?php echo $this->get_field_id('title');?>">Title: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('title');?>"
	name="<?php echo $this->get_field_name('title');?>"
        value="<?php echo !empty($title) ? $title : "TradingView member Profile"; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('username');?>">Username: </label>
  <input
class="widefat"
id="<?php echo $this->get_field_id('username');?>"
name="<?php echo $this->get_field_name('username');?>"
      value="<?php echo !empty($username) ? $username : $profile_data['username']; ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id('width');?>">Width: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('width');?>"
	  name="<?php echo $this->get_field_name('width');?>"
        value="<?php echo !empty($width) ? $width : $profile_data['width']; ?>" /><input
    type="radio"
  	class="widefat"
    name="<?php echo $this->get_field_name('widthpop');?>"
        value="1" <?php echo ($widthpop != 0) ? checked (1,$widthpop,false): checked (1,$profile_data['widthpop'],false); ?>/>px &nbsp;&nbsp;<input
    type="radio"
  	class="widefat"
  	name="<?php echo $this->get_field_name('widthpop');?>"
        value="2" <?php echo ($widthpop != 0) ? checked (2,$widthpop,false): checked (2,$profile_data['widthpop'],false); ?>/>%

</p>
<p>
    <label for="<?php echo $this->get_field_id('height');?>">Height: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('height');?>"
	  name="<?php echo $this->get_field_name('height');?>"
        value="<?php echo !empty($height) ? $height : $profile_data['height']; ?>" /><input
    type="radio"
  	class="widefat"
    name="<?php echo $this->get_field_name('heightpop');?>"
        value="1" <?php echo ($heightpop != 0) ? checked (1,$heightpop,false): checked (1,$profile_data['heightpop'],false); ?>/>px &nbsp;&nbsp;<input
    type="radio"
  	class="widefat"
  	name="<?php echo $this->get_field_name('heightpop');?>"
        value="2" <?php echo ($heightpop != 0) ? checked (2,$heightpop,false): checked (2,$profile_data['heightpop'],false); ?>/>%

</p>

<p>
  <label for="<?php echo $this->get_field_id('headerColor');?>">Header color: </label>
  <input
class="tv-color-field"
id="<?php echo $this->get_field_id('headerColor');?>"
name="<?php echo $this->get_field_name('headerColor');?>"
      value="<?php echo !empty($headerColor) ? $headerColor : $profile_data['headerColor']; ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'locale' ); ?>">Language: </label>
    <select id="<?php echo $this->get_field_id( 'locale' ); ?>"
        name="<?php echo $this->get_field_name( 'locale' ); ?>"
        class="widefat" style="width:100%;">
            <option value="en" <?php if ($locale == 'en') echo 'selected="en"'; ?> >English</option>
            <option value="ru" <?php if ($locale == 'ru') echo 'selected="ru"'; ?> >Русский</option>
            <option value="zh" <?php if ($locale == 'zh') echo 'selected="zh"'; ?> >简体中文</option>
            <option value="tw" <?php if ($locale == 'tw') echo 'selected="tw"'; ?> >繁體中文</option>
            <option value="ja" <?php if ($locale == 'ja') echo 'selected="ja"'; ?> >日本語</option>
            <option value="de" <?php if ($locale == 'de') echo 'selected="de"'; ?> >Deutch</option>
            <option value="pt" <?php if ($locale == 'pt') echo 'selected="pt"'; ?> >Português</option>
            <option value="it" <?php if ($locale == 'it') echo 'selected="it"'; ?> >Italiano</option>
            <option value="es" <?php if ($locale == 'es') echo 'selected="es"'; ?> >Español</option>
            <option value="fr" <?php if ($locale == 'fr') echo 'selected="fr"'; ?> >French</option>
            <option value="vi" <?php if ($locale == 'vi') echo 'selected="vi"'; ?> >Tiếng Việt</option>
            <option value="he_IL" <?php if ($locale == 'he_IL') echo 'selected="he_IL"'; ?> >‏עברית‏</option>
            <option value="fa" <?php if ($locale == 'fa') echo 'selected="fa"'; ?> >فارسی</option>
            <option value="cs" <?php if ($locale == 'cs') echo 'selected="cs"'; ?> >Česky</option>
            <option value="th" <?php if ($locale == 'th') echo 'selected="th"'; ?> >ภาษาไทย</option>
            <option value="ko" <?php if ($locale == 'ko') echo 'selected="ko"'; ?> >한국어</option>
            <option value="tr" <?php if ($locale == 'tr') echo 'selected="tr"'; ?> >Türkçe</option>
    </select>
</p>
<?php if($username != ''):
  if($widthpop==2) $width = "'".$width."%'";
  if($heightpop==2) $height = "'".$height."%'";

  ?>
<p><strong>Shortcode:</strong><br/>
    <code>
        [tv-profile username="<?php echo $username; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" language="<?php echo $locale; ?>"]
    </code>
</p>
<?php endif; ?>
<?php
    }
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $profile_data = get_option('tv_profile_op_name');
        //extract($ideastream_data, EXTR_PREFIX_SAME, "d");

        $title = apply_filters('widget_title', $title);

        /**foreach ($args as $key=>$val){
          if(empty($val)) $val = ${'d_'.$key};
          //$before_title .= $key .' => '.$val.'<br>';
        }**/

        if(empty($title)) $title = "TradingView member Profile";
        if(empty($username )) $username  = $profile_data['username'];
        if(empty($width )) $width  = $profile_data['width'];
        if(empty($widthpop)) $widthpop = $profile_data['widthpop'];
        if(empty($height )) $height  = $profile_data['height'];
        if(empty($heightpop)) $heightpop = $profile_data['heightpop'];
        if(empty($locale)) $locale = $profile_data['locale'];

        if($widthpop==2) $width = "'".$width."%'";
        if($heightpop==2) $height = "'".$height."%'";

        $data = $this->display_TradingView($username,$width,$height,$locale);
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $data;
        echo $after_widget;
    }
    public static function display_TradingView($username,$width,$height,$locale){

        $data = "";
        $x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$rand = 'id="tv-ideas-stream-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5).'"';
        $rand = 'tv-user-info-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5);

		$data .= "<div id=".$rand."></div>
    <script type='text/javascript'>
    new TradingView.UserInfoWidget({
      'container_id': '".$rand."',
      'username': '".$username."',
      'width': '".$width."',
      'height': '".$height."',
      'locale': '".$locale."'
    });
    </script>";

        return $data;
    }
}

add_action('widgets_init', create_function('', register_widget(new widget_TradingView_profile)));

?>
