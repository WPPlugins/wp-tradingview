<?php

class widget_TradingView_chart extends WP_Widget{

    public function __construct() {
        $params = array(
            'description' => 'Trading View chart - Display a chart from TradingView',
            'name' => 'Trading View chart'
        );

        parent::__construct('widget_TradingView_chart','',$params);
    }
    public function form($instance) {
        extract($instance);
        $chart_data = get_option('tv_chart_op_name');
        ?>
<p>
    <label for="<?php echo $this->get_field_id('title');?>">Title: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('title');?>"
	name="<?php echo $this->get_field_name('title');?>"
        value="<?php echo !empty($title) ? $title : "Trading View chart widget"; ?>" />
</p>

<p>
  <label for="<?php echo $this->get_field_id('symbol');?>">Symbol: </label>
  <input
class="widefat"
id="<?php echo $this->get_field_id('symbol');?>"
name="<?php echo $this->get_field_name('symbol');?>"
      value="<?php echo !empty($symbol) ? $symbol : $chart_data['symbol']; ?>" />
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'interval' ); ?>">Timeframe: </label>
    <select id="<?php echo $this->get_field_id( 'interval' ); ?>"
        name="<?php echo $this->get_field_name( 'interval' ); ?>"
        class="widefat" style="width:100%;">
              <option value="1" <?php if ($interval == '1') echo 'selected="1"'; ?>>1m</option>
							<option value="3" <?php if ($interval == '3') echo 'selected="3"'; ?>>3m</option>
							<option value="5" <?php if ($interval == '5') echo 'selected="5"'; ?>>5m</option>
							<option value="15" <?php if ($interval == '15') echo 'selected="15"'; ?>>15m</option>
							<option value="30" <?php if ($interval == '30') echo 'selected="30"'; ?>>30m</option>
							<option value="60" <?php if ($interval == '60') echo 'selected="60"'; ?>>1h</option>
							<option value="120" <?php if ($interval == '120') echo 'selected="120"'; ?>>2h</option>
							<option value="180" <?php if ($interval == '180') echo 'selected="180"'; ?>>3h</option>
							<option value="240" <?php if ($interval == '240') echo 'selected="240"'; ?>>4h</option>
							<option value="D" <?php if ($interval == 'D') echo 'selected="D"'; ?>>1d</option>
							<option value="W" <?php if ($interval == 'W') echo 'selected="W"'; ?>>1w</option>
    </select>
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'timezone' ); ?>">Time zone: </label>
    <select id="<?php echo $this->get_field_id( 'timezone' ); ?>"
        name="<?php echo $this->get_field_name( 'timezone' ); ?>"
        class="widefat" style="width:100%;">
        <option value="exchange" <?php if ($timezone == 'exchange') echo 'selected="exchange"'; ?> >Exchange</option>
        <option value="Pacific/Honolulu" <?php if ($timezone == 'Pacific/Honolulu') echo 'selected="Pacific/Honolulu"'; ?> >(UTC-10) Honolulu</option>
        <option value="America/Vancouver" <?php if ($timezone == 'America/Vancouver') echo 'selected="America/Vancouver"'; ?> >(UTC-8) Vancouver</option>
        <option value="America/Los_Angeles" <?php if ($timezone == 'America/Los_Angeles') echo 'selected="America/Los_Angeles"'; ?> >(UTC-8) Los Angeles</option>
        <option value="America/Phoenix" <?php if ($timezone == 'America/Phoenix') echo 'selected="America/Phoenix"'; ?> >(UTC-7) Phoenix</option>
        <option value="America/Chicago" <?php if ($timezone == 'America/Chicago') echo 'selected="America/Chicago"'; ?> >(UTC-6) Chicago</option>
        <option value="America/San Salvador" <?php if ($timezone == 'America/San Salvador') echo 'selected="America/San Salvador"'; ?> >(UTC-6) San Salvador</option>
        <option value="America/Toronto" <?php if ($timezone == 'America/Toronto') echo 'selected="America/Toronto"'; ?> >(UTC-5) Toronto</option>
        <option value="America/New_York" <?php if ($timezone == 'America/New_York') echo 'selected="America/New_York"'; ?> >(UTC-5) New York</option>
        <option value="Europe/London" <?php if ($timezone == 'Europe/London') echo 'selected="Europe/London"'; ?> >UTC London</option>
        <option value="Europe/Madrid" <?php if ($timezone == 'Europe/Madrid') echo 'selected="Europe/Madrid"'; ?> >(UTC+1) Madrid</option>
        <option value="Europe/Paris" <?php if ($timezone == 'Europe/Paris') echo 'selected="Europe/Paris"'; ?> >(UTC+1) Paris</option>
        <option value="Europe/Berlin" <?php if ($timezone == 'Europe/Berlin') echo 'selected="Europe/Berlin"'; ?> >(UTC+1) Berlin</option>
        <option value="Europe/Warsaw" <?php if ($timezone == 'Europe/Warsaw') echo 'selected="Europe/Warsaw"'; ?> >(UTC+1) Warsaw</option>
        <option value="Europe/Athens" <?php if ($timezone == 'Europe/Athens') echo 'selected="Europe/Athens"'; ?> >(UTC+2) Athens</option>
        <option value="Europe/Moscow" <?php if ($timezone == 'Europe/Moscow') echo 'selected="Europe/Moscow"'; ?> >(UTC+3) Moscow</option>
        <option value="Asia/Tehran" <?php if ($timezone == 'Asia/Tehran') echo 'selected="Asia/Tehran"'; ?> >(UTC+3:30) Tehran</option>
        <option value="Asia/Dubai" <?php if ($timezone == 'Asia/Dubai') echo 'selected="Asia/Dubai"'; ?> >(UTC+4) Dubai</option>
        <option value="Asia/Ashkhabad" <?php if ($timezone == 'Asia/Ashkhabad') echo 'selected="Asia/Ashkhabad"'; ?> >(UTC+5) Ashkhabad</option>
        <option value="Asia/Kolkata" <?php if ($timezone == 'Asia/Kolkata') echo 'selected="Asia/Kolkata"'; ?> >(UTC+5:30) Kolkata</option>
        <option value="Asia/Almaty" <?php if ($timezone == 'Asia/Almaty') echo 'selected="Asia/Almaty"'; ?> >(UTC+6) Almaty</option>
        <option value="Asia/Bangkok" <?php if ($timezone == 'Asia/Bangkok') echo 'selected="Asia/Bangkok"'; ?> >(UTC+7) Bangkok</option>
        <option value="Asia/Taipei" <?php if ($timezone == 'Asia/Taipei') echo 'selected="Asia/Taipei"'; ?> >(UTC+8) Taipei</option>
        <option value="Asia/Singapore" <?php if ($timezone == 'Asia/Singapore') echo 'selected="Asia/Singapore"'; ?> >(UTC+8) Singapore</option>
        <option value="Asia/Shanghai" <?php if ($timezone == 'Asia/Shanghai') echo 'selected="Asia/Shanghai"'; ?> >(UTC+8) Shanghai</option>
        <option value="Asia/Hong_Kong" <?php if ($timezone == 'Asia/Hong_Kong') echo 'selected="Asia/Hong_Kong"'; ?> >(UTC+8) Hong Kong</option>
        <option value="Asia/Seoul" <?php if ($timezone == 'Asia/Seoul') echo 'selected="Asia/Seoul"'; ?> >(UTC+9) Seoul</option>
        <option value="Asia/Tokyo" <?php if ($timezone == 'Asia/Tokyo') echo 'selected="Asia/Tokyo"'; ?> >(UTC+9) Tokyo</option>
        <option value="Australia/Brisbane" <?php if ($timezone == 'Australia/Brisbane') echo 'selected="Australia/Brisbane"'; ?> >(UTC+10) Brisbane</option>
        <option value="Australia/Adelaide" <?php if ($timezone == 'Australia/Adelaide') echo 'selected="Australia/Adelaide"'; ?> >(UTC+10:30) Adelaide</option>
        <option value="Australia/Sydney" <?php if ($timezone == 'Australia/Sydney') echo 'selected="Australia/Sydney"'; ?> >(UTC+11) Sydney</option>
        <option value="Pacific/New_Zealand" <?php if ($timezone == 'Pacific/New_Zealand') echo 'selected="Pacific/New_Zealand"'; ?> >(UTC+13) New Zealand</option>
        <option value="Pacific/Tokelau" <?php if ($timezone == 'Pacific/Tokelau') echo 'selected="Pacific/Tokelau"'; ?> >(UTC+13) Tokelau</option>
        <option value="Pacific/Chatham" <?php if ($timezone == 'Pacific/Chatham') echo 'selected="Pacific/Chatham"'; ?> >(UTC+13:45) Chatham Islands</option>
    </select>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('autosize');?>"
  name="<?php echo $this->get_field_name('autosize');?>"
  value="1" <?php echo ($autosize != '') ? checked (true,$autosize,false): checked (true,$chart_data['autosize'],false); ?>/>
  <label for="<?php echo $this->get_field_id('autosize');?>">Autosize</label>
</p>

<p>
    <label for="<?php echo $this->get_field_id('width');?>">Width: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('width');?>"
	  name="<?php echo $this->get_field_name('width');?>"
        value="<?php echo !empty($width) ? $width : $chart_data['width']; ?>"
        <?php echo ($autosize == '1') ? 'disabled' : ''; ?>
        />

</p>
<p>
    <label for="<?php echo $this->get_field_id('height');?>">Height: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('height');?>"
	  name="<?php echo $this->get_field_name('height');?>"
        value="<?php echo !empty($height) ? $height : $chart_data['height']; ?>"
        <?php echo ($autosize == '1') ? 'disabled' : ''; ?>
        />

</p>

<p>
    <label for="<?php echo $this->get_field_id( 'theme' ); ?>">Color theme: </label>
    <select id="<?php echo $this->get_field_id( 'theme' ); ?>"
        name="<?php echo $this->get_field_name( 'theme' ); ?>"
        class="widefat" style="width:100%;">
            <option value="White" <?php if ($interval == 'White') echo 'selected="White"'; ?> >White</option>
            <option value="Grey" <?php if ($interval == 'Grey') echo 'selected="Grey"'; ?> >Grey</option>
            <option value="Blue" <?php if ($interval == 'Blue') echo 'selected="Blue"'; ?> >Blue</option>
            <option value="Black" <?php if ($interval == 'Black') echo 'selected="Black"'; ?> >Black</option>
    </select>
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'style' ); ?>">Bar style: </label>
    <select id="<?php echo $this->get_field_id( 'style' ); ?>"
        name="<?php echo $this->get_field_name( 'style' ); ?>"
        class="widefat" style="width:100%;">
              <option value="0" <?php if ($interval == '0') echo 'selected="0"'; ?>>Bars</option>
							<option value="1" <?php if ($interval == '1') echo 'selected="1"'; ?>>Candles</option>
							<option value="9" <?php if ($interval == '9') echo 'selected="9"'; ?>>Hollow Candles</option>
							<option value="8" <?php if ($interval == '8') echo 'selected="8"'; ?>>Heikin Ashi</option>
							<option value="2" <?php if ($interval == '2') echo 'selected="2"'; ?>>Line</option>
							<option value="3" <?php if ($interval == '3') echo 'selected="3"'; ?>>Area</option>
							<option value="4" <?php if ($interval == '4') echo 'selected="4"'; ?>>Renko</option>
							<option value="7" <?php if ($interval == '7') echo 'selected="7"'; ?>>Line Break</option>
							<option value="5" <?php if ($interval == '5') echo 'selected="5"'; ?>>Kagi</option>
							<option value="6" <?php if ($interval == '6') echo 'selected="6"'; ?>>Point and Figure</option>
    </select>
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
  <label>Top toolbar background color: </label>
  <input type="text"
  class="tv-color-field"
  id="<?php echo $this->get_field_id('toolbar_bg');?>"
  name="<?php echo $this->get_field_name('toolbar_bg');?>"
      value="<?php echo !empty($toolbar_bg) ? $toolbar_bg : $chart_data['toolbar_bg']; ?>" data-default-color="#FFFFFF" />
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('enable_publishing');?>"
  name="<?php echo $this->get_field_name('enable_publishing');?>"
  value="1" <?php echo ($enable_publishing != '') ? checked ('1',$enable_publishing,false): checked ('1',$chart_data['enable_publishing'],false); ?>/>
  <label for="<?php echo $this->get_field_id('enable_publishing');?>">Allow idea publish</label>
</p>



<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('allow_symbol_change');?>"
  name="<?php echo $this->get_field_name('allow_symbol_change');?>"
  value="1" <?php echo ($allow_symbol_change != '') ? checked ('1',$allow_symbol_change,false): checked ('1',$chart_data['allow_symbol_change'],false); ?>/>
  <label for="<?php echo $this->get_field_id('allow_symbol_change');?>">Allow symbol change</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('hide_top_toolbar');?>"
  name="<?php echo $this->get_field_name('hide_top_toolbar');?>"
  value="0" <?php echo ($hide_top_toolbar != '') ? checked ('0',$hide_top_toolbar,false): checked ('0',$chart_data['hide_top_toolbar'],false); ?>/>
  <label for="<?php echo $this->get_field_id('hide_top_toolbar');?>">Show top toolbar</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('withdateranges');?>"
  name="<?php echo $this->get_field_name('withdateranges');?>"
  value="1" <?php echo ($withdateranges != '') ? checked ('1',$withdateranges,false): checked ('1',$chart_data['withdateranges'],false); ?>/>
  <label for="<?php echo $this->get_field_id('withdateranges');?>">Show bottom toolbar</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('hide_side_toolbar');?>"
  name="<?php echo $this->get_field_name('hide_side_toolbar');?>"
  value="0" <?php echo ($hide_side_toolbar != '') ? checked ('0',$hide_side_toolbar,false): checked ('0',$chart_data['hideideasbutton'],false); ?>/>
  <label for="<?php echo $this->get_field_id('hide_side_toolbar');?>">Show side toolbar</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('save_image');?>"
  name="<?php echo $this->get_field_name('save_image');?>"
  value="1" <?php echo ($save_image != '') ? checked ('1',$save_image,false): checked ('1',$chart_data['save_image'],false); ?>/>
  <label for="<?php echo $this->get_field_id('save_image');?>">Showsave image</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('details');?>"
  name="<?php echo $this->get_field_name('details');?>"
  value="1" <?php echo ($details != '') ? checked ('1',$details,false): checked ('1',$chart_data['details'],false); ?>/>
  <label for="<?php echo $this->get_field_id('details');?>">Show details</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('stocktwits');?>"
  name="<?php echo $this->get_field_name('stocktwits');?>"
  value="1" <?php echo ($stocktwits != '') ? checked ('1',$stocktwits,false): checked ('1',$chart_data['stocktwits'],false); ?>/>
  <label for="<?php echo $this->get_field_id('stocktwits');?>">Show stocktwits</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('headlines');?>"
  name="<?php echo $this->get_field_name('headlines');?>"
  value="1" <?php echo ($headlines != '') ? checked ('1',$headlines,false): checked ('1',$chart_data['headlines'],false); ?>/>
  <label for="<?php echo $this->get_field_id('headlines');?>">Show news headlines</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('hotlist');?>"
  name="<?php echo $this->get_field_name('hotlist');?>"
  value="1" <?php echo ($hotlist != '') ? checked ('1',$hotlist,false): checked ('1',$chart_data['hotlist'],false); ?>/>
  <label for="<?php echo $this->get_field_id('hotlist');?>">Hotlist button</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('calendar');?>"
  name="<?php echo $this->get_field_name('calendar');?>"
  value="1" <?php echo ($calendar != '') ? checked ('1',$calendar,false): checked ('1',$chart_data['calendar'],false); ?>/>
  <label for="<?php echo $this->get_field_id('calendar');?>">Calendar button</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('hideideas');?>"
  name="<?php echo $this->get_field_name('hideideas');?>"
  value="0" <?php echo ($hideideas != '') ? checked ('0',$hideideas,false): checked ('0',$chart_data['hideideas'],false); ?>/>
  <label for="<?php echo $this->get_field_id('hideideas');?>">Show ideas on chart</label>
</p>

<p>
<input type="checkbox" class="checkbox"
  id="<?php echo $this->get_field_id('hideideasbutton');?>"
  name="<?php echo $this->get_field_name('hideideasbutton');?>"
  value="0" <?php echo ($hideideasbutton != '') ? checked ('0',$hideideasbutton,false): checked ('0',$chart_data['hideideasbutton'],false); ?>/>
  <label for="<?php echo $this->get_field_id('hideideasbutton');?>">Show ideas button</label>
</p>

<p>
  <label for="<?php echo $this->get_field_id('referral_id');?>">Referral ID: </label>
  <input
class="widefat"
id="<?php echo $this->get_field_id('referral_id');?>"
name="<?php echo $this->get_field_name('referral_id');?>"
      value="<?php echo !empty($referral_id) ? $referral_id : $chart_data['referral_id']; ?>" />
</p>

<?php
//if($room != ''):
  if($widthpop==2) $width = $width.'%';
  if($heightpop==2) $height = $height.'%';

  ?>
<p><strong>Shortcode:</strong><br/>
    <code>
      <?php
      $widthstr = 'width="'.$width.'" height="'.$height.'"';
      if($autosize=='1') $widthstr = 'autosize="true"';
      printf('[tv-chart symbol="%1$s" %2$s language="%3$s" interval="%4$s" timezone="%5$s" theme="%6$s" style="%7$s" toolbar_bg="%8$s" enable_publishing="%9$s" hide_top_toolbar="%10$s" withdateranges="%11$s" hide_side_toolbar="%12$s" allow_symbol_change="%13$s" save_image="%14$s" details="%15$s" hotlist="%16$s" calendar="%17$s" stocktwits="%18$s" headlines="%19$s" hideideas="%20$s" hideideasbutton="%21$s" referral_id="%22$s"]',
      $symbol,$widthstr,$locale,$interval,$timezone,$theme,$style,$toolbar_bg,$enable_publishing,$hide_top_toolbar,$withdateranges,$hide_side_toolbar,$allow_symbol_change,$save_image,$details,$hotlist,$calendar,$stocktwits,$headlines,$hideideas,$hideideasbutton,$referral_id);
      ?>
    </code>
</p>
<!--?php
//endif; ?-->
<?php
    }
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $chart_data = get_option('tv_chart_op_name');
        $title = apply_filters('widget_title', $title);



        if(empty($title)) $title = "TradingView member Profile";
        if(empty($symbol )) $symbol  = $chart_data['symbol'];
        if(empty($interval )) $interval  = $chart_data['interval'];
        if(empty($timezone )) $timezone  = $chart_data['timezone'];
        if(empty($autosize )) $autosize  = $chart_data['autosize'];
        if(empty($width )) $width  = $chart_data['width'];
        if(empty($widthpop)) $widthpop = $chart_data['widthpop'];
        if(empty($height )) $height  = $chart_data['height'];
        if(empty($heightpop)) $heightpop = $chart_data['heightpop'];
        if(empty($theme )) $theme  = $chart_data['theme'];
        if(empty($style )) $style  = $chart_data['style'];
        if(empty($locale)) $locale = $chart_data['locale'];
        if(empty($toolbar_bg)) $toolbar_bg = $chart_data['toolbar_bg'];
        if(empty($enable_publishing)) $enable_publishing = $chart_data['enable_publishing'];
        if(empty($allow_symbol_change)) $allow_symbol_change = $chart_data['allow_symbol_change'];
        if(empty($withdateranges)) $withdateranges = $chart_data['withdateranges'];
        if(empty($save_image)) $save_image = $chart_data['save_image'];
        if(empty($details)) $details = $chart_data['details'];
        if(empty($stocktwits)) $stocktwits = $chart_data['stocktwits'];
        if(empty($headlines)) $headlines = $chart_data['headlines'];
        if(empty($hotlist)) $hotlist = $chart_data['hotlist'];
        if(empty($calendar)) $calendar = $chart_data['calendar'];
        if(empty($hideideas)) $hideideas = $chart_data['hideideas'];
        if(empty($hideideasbutton)) $hideideasbutton = $chart_data['hideideasbutton'];

        if(empty($referral_id)) $referral_id = $chart_data['referral_id'];

        $data = $this->display_TradingView($symbol,$interval,$timezone,$autosize,$width,$widthpop,$height,$heightpop,$theme,$style,$locale,$toolbar_bg,$enable_publishing,$allow_symbol_change,$withdateranges,$save_image,$details,$stocktwits,$headlines,$hotlist,$calendar,$hideideas,$hideideasbutton,$referral_id);
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $data;
        echo $after_widget;
    }
    public static function display_TradingView($symbol,$interval,$timezone,$autosize,$width,$height,$theme,$style,$locale,$toolbar_bg,$enable_publishing,$allow_symbol_change,$hide_top_toolbar,$withdateranges,$hide_side_toolbar,$save_image,$details,$stocktwits,$headlines,$hotlist,$calendar,$hideideas,$hideideasbutton,$referral_id){
        $data = "";

    $data .= "<script type='text/javascript'>
    new TradingView.widget({";
    if($autosize=='1') $data .= "
    'autosize': true,";
    else{
    $data .= "
    'width': ".$width.",
    'height': ".$height.",";
    }
    $data .= "
    'symbol': '".$symbol."',
    'interval': '".$interval."',
    'timezone': '".$timezone."',
    'theme': '".$theme."',
    'style': '".$style."',
    'locale': '".$locale."',
    'toolbar_bg': '".$toolbar_bg."',";
    if($enable_publishing=='1') $data .= "
    'enable_publishing': true,";
    else $data .= "
    'enable_publishing': false,";
    if($hide_top_toolbar!='0') $data .= "
    'hide_top_toolbar': true,";
    if($withdateranges=='1') $data .= "
    'withdateranges': true,";
    if($hide_side_toolbar!='0') $data .= "
    'hide_side_toolbar': true,";
    if($allow_symbol_change=='1') $data .= "
    'allow_symbol_change': true,";
    else $data .= "
    'allow_symbol_change': false,";
    if($save_image=='1') $data .= "
    'save_image': true,";
    if($details=='1') $data .= "
    'details': false,";
    if($hotlist=='1') $data .= "
    'hotlist': false,";
    if($calendar=='1') $data .= "
    'calendar': false,";
    if($stocktwits!='' || $headlines!='') {
    $data .= "
    'news' : [
      ";
      if($stocktwits) {
      $data .= "
      'stocktwits'";
      }
      if($headlines) {
      $data .= ",
      'headlines'";
      }
      $data .= "
      ],";
    }
    if($hideideas!='0'){
      $data .= "
    'hideideas': true,";
    if($hideideasbutton!='0'){
      $data .= "
    'hideideasbutton': true,";
      }
    }
    if($referral_id!=''){
      $data .= "
    'referral_id': '".$referral_id."'";
    } else $data .= "
    'no_referral_id': true";
    $data .= "
    });
    </script>";
        return $data;

    }
}
add_action('widgets_init', create_function('', register_widget(new widget_TradingView_chart)));
?>
