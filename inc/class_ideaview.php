<?php

class widget_TradingView_ideaview extends WP_Widget{

    public function __construct() {
        $params = array(
            'description' => 'Trading View idea preview - Embed a specific idea from TradingView as a widget',
            'name' => 'Trading View idea preview'
        );

        parent::__construct('widget_TradingView_ideaview','',$params);
    }
    public function form($instance) {
        extract($instance);
        $ideaview_data = get_option('tv_ideaview_op_name');
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
        value="<?php echo !empty($title) ? $title : "Trading View idea preview"; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('idea');?>">Unique ID of idea: </label>
  <input
class="widefat"
id="<?php echo $this->get_field_id('idea');?>"
name="<?php echo $this->get_field_name('idea');?>"
      value="<?php echo !empty($idea) ? $idea : $ideaview_data['idea']; ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id('width');?>">Width: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('width');?>"
	  name="<?php echo $this->get_field_name('width');?>"
        value="<?php echo !empty($width) ? $width : $ideaview_data['width']; ?>" /><input
    type="radio"
  	class="widefat"
    name="<?php echo $this->get_field_name('widthpop');?>"
        value="1" <?php echo ($widthpop != 0) ? checked (1,$widthpop,false): checked (1,$ideaview_data['widthpop'],false); ?>/>px &nbsp;&nbsp;<input
    type="radio"
  	class="widefat"
  	name="<?php echo $this->get_field_name('widthpop');?>"
        value="2" <?php echo ($widthpop != 0) ? checked (2,$widthpop,false): checked (2,$ideaview_data['widthpop'],false); ?>/>%

</p>
<p>
    <label for="<?php echo $this->get_field_id('height');?>">Height: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('height');?>"
	  name="<?php echo $this->get_field_name('height');?>"
        value="<?php echo !empty($height) ? $height : $ideaview_data['height']; ?>" /><input
    type="radio"
  	class="widefat"
    name="<?php echo $this->get_field_name('heightpop');?>"
        value="1" <?php echo ($heightpop != 0) ? checked (1,$heightpop,false): checked (1,$ideaview_data['heightpop'],false); ?>/>px &nbsp;&nbsp;<input
    type="radio"
  	class="widefat"
  	name="<?php echo $this->get_field_name('heightpop');?>"
        value="2" <?php echo ($heightpop != 0) ? checked (2,$heightpop,false): checked (2,$ideaview_data['heightpop'],false); ?>/>%

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
<?php if($idea != ''):
  if($widthpop==2) $width = "'".$width."%'";
  if($heightpop==2) $height = "'".$height."%'";

  ?>
<p><strong>Shortcode:</strong><br/>
    <code>
        [tv-ideaview idea="<?php echo $idea; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" language="<?php echo $locale; ?>"]
    </code>
</p>
<?php endif; ?>
<?php
    }
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $ideaview_data = get_option('tv_ideaview_op_name');
        $title = apply_filters('widget_title', $title);
        if(empty($title)) $title = "Trading View idea preview";
        if(empty($username )) $idea  = $ideaview_data['idea'];
        if(empty($width )) $width  = $ideaview_data['width'];
        if(empty($widthpop)) $widthpop = $ideaview_data['widthpop'];
        if(empty($height )) $height  = $ideaview_data['height'];
        if(empty($heightpop)) $heightpop = $ideaview_data['heightpop'];
        if(empty($locale)) $locale = $ideaview_data['locale'];
        if($widthpop==2) $width = "'".$width."%'";
        if($heightpop==2) $height = "'".$height."%'";
        $data = $this->display_TradingView($idea,$width,$height,$locale);
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $data;
        echo $after_widget;
    }
    public static function display_TradingView($idea,$width,$height,$locale){
        $data = "";
        $x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$rand = 'id="tv-ideas-stream-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5).'"';
        $rand = 'tv-ideas-preview-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5);
    $data .= "<div id=".$rand."></div>
    <script type='text/javascript'>
    new TradingView.IdeaWidget({
      'container_id': '".$rand."',
      'width': '".$width."',
      'height': '".$height."',
      'idea': '".$idea."',
      'locale': '".$locale."'
    });
    </script>";
        return $data;
    }
}
add_action('widgets_init', create_function('', register_widget(new widget_TradingView_ideaview)));
?>
