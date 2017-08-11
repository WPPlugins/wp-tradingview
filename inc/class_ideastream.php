<?php

class widget_TradingView_ideastream extends WP_Widget{

    public function __construct() {
        $params = array(
            'description' => 'Trading View ideastream - Display ideastream of a username from TradingView as a widget',
            'name' => 'Trading View ideastream'
        );

        parent::__construct('widget_TradingView_ideastream','',$params);
    }
    public function form($instance) {
        extract($instance);
        $ideastream_data = get_option('tv_ideastream_op_name');
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
        value="<?php echo !empty($title) ? $title : "TradingView idea stream"; ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('startingCount');?>">Starting count: </label>
  <input type="number"
class="widefat"
id="<?php echo $this->get_field_id('startingCount');?>"
name="<?php echo $this->get_field_name('startingCount');?>"
      value="<?php echo !empty($startingCount) ? $startingCount : $ideastream_data['startingCount']; ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id('width');?>">Width: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('width');?>"
	  name="<?php echo $this->get_field_name('width');?>"
        value="<?php echo !empty($width) ? $width : $ideastream_data['width']; ?>" /><input
    type="radio"
  	class="widefat"
    name="<?php echo $this->get_field_name('widthpop');?>"
        value="1" <?php echo ($widthpop != 0) ? checked (1,$widthpop,false): checked (1,$ideastream_data['widthpop'],false); ?>/>px &nbsp;&nbsp;<input
    type="radio"
  	class="widefat"
  	name="<?php echo $this->get_field_name('widthpop');?>"
        value="2" <?php echo ($widthpop != 0) ? checked (2,$widthpop,false): checked (2,$ideastream_data['widthpop'],false); ?>/>%

</p>
<p>
    <label for="<?php echo $this->get_field_id('height');?>">Height: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('height');?>"
	  name="<?php echo $this->get_field_name('height');?>"
        value="<?php echo !empty($height) ? $height : $ideastream_data['height']; ?>" /><input
    type="radio"
  	class="widefat"
    name="<?php echo $this->get_field_name('heightpop');?>"
        value="1" <?php echo ($heightpop != 0) ? checked (1,$heightpop,false): checked (1,$ideastream_data['heightpop'],false); ?>/>px &nbsp;&nbsp;<input
    type="radio"
  	class="widefat"
  	name="<?php echo $this->get_field_name('heightpop');?>"
        value="2" <?php echo ($heightpop != 0) ? checked (2,$heightpop,false): checked (2,$ideastream_data['heightpop'],false); ?>/>%

</p>

<p>
<label>Header color: </label>
  <input type="text"
class="tv-color-field"
id="<?php echo $this->get_field_id('headerColor');?>"
name="<?php echo $this->get_field_name('headerColor');?>"
      value="<?php echo !empty($headerColor) ? $headerColor : $ideastream_data['headerColor']; ?>" data-default-color="#FFFFFF" />
</p>

<p>
  <label>Background color: </label>
  <input type="text"
class="tv-color-field"
id="<?php echo $this->get_field_id('bgColor');?>"
name="<?php echo $this->get_field_name('bgColor');?>"
      value="<?php echo !empty($bgColor) ? $bgColor : $ideastream_data['bgColor']; ?>" data-default-color="#FFFFFF" />
</p>

<p>
  <label>Border color: </label>
  <input type="text"
class="tv-color-field"
id="<?php echo $this->get_field_id('borderColor');?>"
name="<?php echo $this->get_field_name('borderColor');?>"
      value="<?php echo !empty($borderColor) ? $borderColor : $ideastream_data['borderColor']; ?>" data-default-color="#FFFFFF" />

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
<p>
    <label for="<?php echo $this->get_field_id( 'stream' ); ?>">Stream type: </label>
    <select id="<?php echo $this->get_field_id( 'stream' ); ?>"
        name="<?php echo $this->get_field_name( 'stream' ); ?>"
        class="widefat" style="width:100%;">
            <option value="all" <?php if ($stream == 'all') echo 'selected="all"'; ?> >All markets</option>
            <option value="stocks" <?php if ($stream == 'stocks') echo 'selected="stocks"'; ?> >Stocks</option>
            <option value="stocks-us" <?php if ($stream == 'stocks-us') echo 'selected="stocks-us"'; ?> >US stocks</option>
            <option value="stocks-uk" <?php if ($stream == 'stocks-uk') echo 'selected="stocks-uk"'; ?> >UK stocks</option>
            <option value="stocks-india" <?php if ($stream == 'stocks-india') echo 'selected="stocks-india"'; ?> >Indian stocks</option>
            <option value="stocks-es" <?php if ($stream == 'stocks-es') echo 'selected="stocks-es"'; ?> >Spain stocks</option>
            <option value="stocks-japan" <?php if ($stream == 'stocks-japan') echo 'selected="stocks-japan"'; ?> >Japan stocks</option>
            <option value="stocks-russia" <?php if ($stream == 'stocks-russia') echo 'selected="stocks-russia"'; ?> >Russian stocks</option>
            <option value="indices" <?php if ($stream == 'indices') echo 'selected="indices"'; ?> >Indices</option>
            <option value="commodities" <?php if ($stream == 'commodities') echo 'selected="commodities"'; ?> >Commodities</option>
            <option value="currencies" <?php if ($stream == 'currencies') echo 'selected="currencies"'; ?> >Currencies</option>
            <option value="bitcoin" <?php if ($stream == 'bitcoin') echo 'selected="bitcoin"'; ?> >Crypto currencies</option>
    </select>
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'interval' ); ?>">Interval: </label>
    <select id="<?php echo $this->get_field_id( 'interval' ); ?>"
        name="<?php echo $this->get_field_name( 'interval' ); ?>"
        class="widefat" style="width:100%;">
            <option value="day" <?php if ($interval == 'day') echo 'selected="day"'; ?> >Today</option>
            <option value="week" <?php if ($interval == 'week') echo 'selected="week"'; ?> >This week</option>
            <option value="month" <?php if ($interval == 'month') echo 'selected="month"'; ?> >This month</option>
            <option value="all" <?php if ($interval == 'all') echo 'selected="all"'; ?> >All Intervals</option>
    </select>
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'sort' ); ?>">Sort: </label>
    <select id="<?php echo $this->get_field_id( 'sort' ); ?>"
        name="<?php echo $this->get_field_name( 'sort' ); ?>"
        class="widefat" style="width:100%;">
            <option value="trending" <?php if ($sort == 'trending') echo 'selected="trending"'; ?> >Trending</option>
            <option value="discussed" <?php if ($sort == 'discussed') echo 'selected="discussed"'; ?> >Most discussed</option>
            <option value="viewed" <?php if ($sort == 'viewed') echo 'selected="viewed"'; ?> >Most viewed</option>
            <option value="agreed" <?php if ($sort == 'agreed') echo 'selected="agreed"'; ?> >Most agreed</option>
            <option value="suggested" <?php if ($sort == 'suggested') echo 'selected="suggested"'; ?> >Most suggested</option>
            <option value="recent" <?php if ($sort == 'recent') echo 'selected="recent"'; ?> >All ideas</option>

    </select>
</p>



<p>
    <label for="<?php echo $this->get_field_id( 'time' ); ?>">Time: </label>
    <select id="<?php echo $this->get_field_id( 'time' ); ?>"
        name="<?php echo $this->get_field_name( 'time' ); ?>"
        class="widefat" style="width:100%;">
            <option value="day" <?php if ($time == 'day') echo 'selected="day"'; ?> >Today</option>
            <option value="week" <?php if ($time == 'week') echo 'selected="week"'; ?> >This week</option>
            <option value="month" <?php if ($time == 'month') echo 'selected="month"'; ?> >This month</option>
            <option value="all" <?php if ($time == 'all') echo 'selected="all"'; ?> >All time</option>
    </select>
</p>

<p>
  <label for="<?php echo $this->get_field_id('symbol');?>">Symbol: </label>
  <input
class="widefat"
id="<?php echo $this->get_field_id('symbol');?>"
name="<?php echo $this->get_field_name('symbol');?>"
      value="<?php echo !empty($symbol) ? $symbol : $ideastream_data['symbol']; ?>" />
</p>


<p>
  <label for="<?php echo $this->get_field_id('username');?>">Username: </label>
  <input
class="widefat"
id="<?php echo $this->get_field_id('username');?>"
name="<?php echo $this->get_field_name('username');?>"
      value="<?php echo !empty($username) ? $username : $ideastream_data['username']; ?>" />
</p>

<?php if($username != ''):
  if($widthpop==2) $width = "'".$width."%'";
  if($heightpop==2) $height = "'".$height."%'";

  ?>
<p><strong>Shortcode:</strong><br/>
    <code>
      <?php
      printf('[tv-ideastream symbol="%1$s" username="%2$s" width="%3$s" height="%4$s" startingCount="%5$s" sort="%6$s" time="%7$s" interval="%8$s" stream="%9$s" language="%10$s" bgColor="%11$s" headerColor="%12$s" borderColor="%13$s"]',
      $symbol, $username, $width, $height, $startingCount, $sort, $time, $interval, $stream, $locale, $bgColor, $headerColor, $borderColor);
      ?>
    </code>
</p>
<?php endif; ?>
<?php
    }
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $ideastream_data = get_option('tv_ideastream_op_name');
        $title = apply_filters('widget_title', $title);
        if(empty($title)) $title = "TradingView member Profile";
        if(empty($username )) $username  = $ideastream_data['username'];
        if(empty($width )) $width  = $ideastream_data['width'];
        if(empty($widthpop)) $widthpop = $ideastream_data['widthpop'];
        if(empty($height )) $height  = $ideastream_data['height'];
        if(empty($heightpop)) $heightpop = $ideastream_data['heightpop'];
        if(empty($locale)) $locale = $ideastream_data['locale'];
        if(empty($bgColor)) $bgColor = $ideastream_data['bgColor'];
        if(empty($headerColor)) $headerColor = $ideastream_data['headerColor'];
        if(empty($borderColor)) $borderColor = $ideastream_data['borderColor'];
        if(empty($sort)) $sort = $ideastream_data['sort'];
        if(empty($time)) $time = $ideastream_data['time'];
        if(empty($interval)) $interval = $ideastream_data['interval'];
        if(empty($stream)) $stream = $ideastream_data['stream'];
        if(empty($symbol)) $symbol = $ideastream_data['symbol'];

        if($widthpop==2) $width = "'".$width."%'";
        if($heightpop==2) $height = "'".$height."%'";

        $data = $this->display_TradingView($startingCount,$width,$height,$bgColor,$headerColor,$borderColor,$locale,$sort,$time,$interval,$stream,$symbol,$username);
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $data;
        echo $after_widget;
    }
    public static function display_TradingView($startingCount,$width,$height,$bgColor,$headerColor,$borderColor,$locale,$sort,$time,$interval,$stream,$symbol,$username){
        $data = "";
        $x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$rand = 'id="tv-ideas-stream-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5).'"';
        $rand = 'tv-ideastream-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5);

		$data .= "<div id=".$rand."></div>
    <script type='text/javascript'>
    new TradingView.IdeasStreamWidget({
      'container_id': '".$rand."',
      'startingCount': '".$startingCount."',
      'width': '".$width."',
      'height': '".$height."',
      'mode': 'integrate',
      'bgColor': '".$bgColor."',
      'headerColor': '".$headerColor."',
      'borderColor': '".$borderColor."',
      'locale': '".$locale."',
      'sort': '".$sort."',
      'time': '".$time."',
      'interval': '".$interval."',
      'stream': '".$stream."',
      'symbol': '".$symbol."',
      'username': '".$username."'
    });
    </script>";

        return $data;
    }
}

add_action('widgets_init', create_function('', register_widget(new widget_TradingView_ideastream)));

?>
