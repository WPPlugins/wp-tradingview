<?php

class widget_TradingView_chat extends WP_Widget{

    public function __construct() {
        $params = array(
            'description' => 'Trading View chat - Display interactive chat widget from TradingView',
            'name' => 'Trading View chat'
        );

        parent::__construct('widget_TradingView_chat','',$params);
    }
    public function form($instance) {
        extract($instance);
        $chat_data = get_option('tv_chat_op_name');
        ?>
<p>
    <label for="<?php echo $this->get_field_id('title');?>">Title: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('title');?>"
	name="<?php echo $this->get_field_name('title');?>"
        value="<?php echo !empty($title) ? $title : "Trading View chat widget"; ?>" />
</p>
<p>

<label for="<?php echo $this->get_field_id( 'room' ); ?>">Chat room: </label>
<select id="<?php echo $this->get_field_id( 'room' ); ?>"
    name="<?php echo $this->get_field_name( 'room' ); ?>"
    class="widefat" style="width:100%;">

              <option value="general" <?php if ($room == 'general') echo 'selected="general"'; ?>>Forex</option>
							<option value="stock" <?php if ($room == 'stock') echo 'selected="stock"'; ?>>Stocks &amp; Indexes</option>
							<option value="bitcoin" <?php if ($room == 'bitcoin') echo 'selected="bitcoin"'; ?>>Cryptocurrencies</option>
							<option value="OChp2kucHixrW1Vt" <?php if ($room == 'OChp2kucHixrW1Vt') echo 'selected="OChp2kucHixrW1Vt"'; ?>>Agriculture</option>
							<option value="Hek0gmnZRpR5tClu" <?php if ($room == 'Hek0gmnZRpR5tClu') echo 'selected="Hek0gmnZRpR5tClu"'; ?>>Andrews Pitchfork Traders</option>
							<option value="dAkuSLzlBFz81SRK" <?php if ($room == 'dAkuSLzlBFz81SRK') echo 'selected="dAkuSLzlBFz81SRK"'; ?>>Apple AAPL</option>
							<option value="z2Xw3omfT5YvLf4j" <?php if ($room == 'z2Xw3omfT5YvLf4j') echo 'selected="z2Xw3omfT5YvLf4j"'; ?>>Arabic</option>
							<option value="jMDsUD5Dmbe0MsjM" <?php if ($room == 'jMDsUD5Dmbe0MsjM') echo 'selected="jMDsUD5Dmbe0MsjM"'; ?>>ASX200  XJO  SPI traders</option>
							<option value="mTHOu0EhmltBWThb" <?php if ($room == 'mTHOu0EhmltBWThb') echo 'selected="mTHOu0EhmltBWThb"'; ?>>BANK NIFTY</option>
							<option value="TZ24b3jAY8pbkpe5" <?php if ($room == 'TZ24b3jAY8pbkpe5') echo 'selected="TZ24b3jAY8pbkpe5"'; ?>>BEST TRADING ADVISOR OR ADVISORY SERVICES</option>
							<option value="farV5KTpCxT7xxaf" <?php if ($room == 'farV5KTpCxT7xxaf') echo 'selected="farV5KTpCxT7xxaf"'; ?>>Binary Option Trading</option>
							<option value="1nO89eozE9k3lDUA" <?php if ($room == '1nO89eozE9k3lDUA') echo 'selected="1nO89eozE9k3lDUA"'; ?>>Bitcoin</option>
							<option value="e4VCmafnLm22iigm" <?php if ($room == 'e4VCmafnLm22iigm') echo 'selected="e4VCmafnLm22iigm"'; ?>>Brazilian Traders</option>
							<option value="kiPTCI4zDniacLot" <?php if ($room == 'kiPTCI4zDniacLot') echo 'selected="kiPTCI4zDniacLot"'; ?>>Canadian Traders</option>
							<option value="EzwOLDsluV7xQCZm" <?php if ($room == 'EzwOLDsluV7xQCZm') echo 'selected="EzwOLDsluV7xQCZm"'; ?>>China Forex traders House</option>
							<option value="WA0hqxSYhRibB4Qr" <?php if ($room == 'WA0hqxSYhRibB4Qr') echo 'selected="WA0hqxSYhRibB4Qr"'; ?>>Chinese Forex Commodity Index</option>
							<option value="DjPnZNEzTJELAFiR" <?php if ($room == 'DjPnZNEzTJELAFiR') echo 'selected="DjPnZNEzTJELAFiR"'; ?>>Community Powered Technical Help &amp; Discussion</option>
							<option value="E4bnOJSWcO1zDjBG" <?php if ($room == 'E4bnOJSWcO1zDjBG') echo 'selected="E4bnOJSWcO1zDjBG"'; ?>>DanV Charting The Waves</option>
							<option value="gFiIzuX6QFtUHTYi" <?php if ($room == 'gFiIzuX6QFtUHTYi') echo 'selected="gFiIzuX6QFtUHTYi"'; ?>>Dutch speaking traders</option>
							<option value="6N3ooQ8L1g9B535D" <?php if ($room == '6N3ooQ8L1g9B535D') echo 'selected="6N3ooQ8L1g9B535D"'; ?>>Elliott Wave Charting</option>
							<option value="yrgtWWVYUbIiCt6S" <?php if ($room == 'yrgtWWVYUbIiCt6S') echo 'selected="yrgtWWVYUbIiCt6S"'; ?>>Ethereum</option>
							<option value="Sj9VbiDu7w7CAVnv" <?php if ($room == 'Sj9VbiDu7w7CAVnv') echo 'selected="Sj9VbiDu7w7CAVnv"'; ?>>EUR/USD Only</option>
							<option value="RFMVMuTYY8uVulfn" <?php if ($room == 'RFMVMuTYY8uVulfn') echo 'selected="RFMVMuTYY8uVulfn"'; ?>>Forex...Fundamentals...Tech...</option>
							<option value="Klz9GXbFc0Mmeo7R" <?php if ($room == 'Klz9GXbFc0Mmeo7R') echo 'selected="Klz9GXbFc0Mmeo7R"'; ?>>Free Signals !</option>
							<option value="3CgAUFDnfudjvOzI" <?php if ($room == '3CgAUFDnfudjvOzI') echo 'selected="3CgAUFDnfudjvOzI"'; ?>>French Traders</option>
							<option value="BGfqre4MY2F448Oc" <?php if ($room == 'BGfqre4MY2F448Oc') echo 'selected="BGfqre4MY2F448Oc"'; ?>>FX Day Week Month Charts only</option>
							<option value="bSDXyFGHqlaKXKYN" <?php if ($room == 'bSDXyFGHqlaKXKYN') echo 'selected="bSDXyFGHqlaKXKYN"'; ?>>GBPUSD</option>
							<option value="HQSb9LtO5bZY3Zha" <?php if ($room == 'HQSb9LtO5bZY3Zha') echo 'selected="HQSb9LtO5bZY3Zha"'; ?>>GER30 DAX</option>
							<option value="4kFT3tuOvsqqLwnd" <?php if ($room == '4kFT3tuOvsqqLwnd') echo 'selected="4kFT3tuOvsqqLwnd"'; ?>>German Room</option>
							<option value="spKNkcfKuFVnvOKV" <?php if ($room == 'spKNkcfKuFVnvOKV') echo 'selected="spKNkcfKuFVnvOKV"'; ?>>GOLD discussion</option>
							<option value="emRgoeVgwVrK5QhB" <?php if ($room == 'emRgoeVgwVrK5QhB') echo 'selected="emRgoeVgwVrK5QhB"'; ?>>Greece Traders</option>
							<option value="Q2TWs4mXQli3TjVW" <?php if ($room == 'Q2TWs4mXQli3TjVW') echo 'selected="Q2TWs4mXQli3TjVW"'; ?>>Investing</option>
							<option value="2jxKKPwsyAwIccQs" <?php if ($room == '2jxKKPwsyAwIccQs') echo 'selected="2jxKKPwsyAwIccQs"'; ?>>Iranian Forex Trader - Independent Traders</option>
							<option value="mIONnBv3Rq0qQ0Ys" <?php if ($room == 'mIONnBv3Rq0qQ0Ys') echo 'selected="mIONnBv3Rq0qQ0Ys"'; ?>>Italian Traders</option>
							<option value="c8BzrhGRvXxGXWnJ" <?php if ($room == 'c8BzrhGRvXxGXWnJ') echo 'selected="c8BzrhGRvXxGXWnJ"'; ?>>Key Hidden Levels</option>
							<option value="TInEb6P7UTGVrOux" <?php if ($room == 'TInEb6P7UTGVrOux') echo 'selected="TInEb6P7UTGVrOux"'; ?>>Korean Traders</option>
							<option value="pIKDtULtVOwFfVVc" <?php if ($room == 'pIKDtULtVOwFfVVc') echo 'selected="pIKDtULtVOwFfVVc"'; ?>>Lazy Charts</option>
							<option value="P2SE5eKzi1lSlYHE" <?php if ($room == 'P2SE5eKzi1lSlYHE') echo 'selected="P2SE5eKzi1lSlYHE"'; ?>>Lithuanian Traders</option>
							<option value="OeIbaTBVx48InuU4" <?php if ($room == 'OeIbaTBVx48InuU4') echo 'selected="OeIbaTBVx48InuU4"'; ?>>NASDAQ/NYSE Signals</option>
							<option value="UajYkAfATwDxwyFp" <?php if ($room == 'UajYkAfATwDxwyFp') echo 'selected="UajYkAfATwDxwyFp"'; ?>>NATGAS</option>
							<option value="m46zyJGoGFgzClrx" <?php if ($room == 'm46zyJGoGFgzClrx') echo 'selected="m46zyJGoGFgzClrx"'; ?>>Nifty Lovers</option>
							<option value="huufTEomwseDbwhZ" <?php if ($room == 'huufTEomwseDbwhZ') echo 'selected="huufTEomwseDbwhZ"'; ?>>nmike Divergence Trading Room</option>
							<option value="q0Xt2Jzq4znU6Bov" <?php if ($room == 'q0Xt2Jzq4znU6Bov') echo 'selected="q0Xt2Jzq4znU6Bov"'; ?>>NSE - India</option>
							<option value="DzFI3ZpheNLKdYid" <?php if ($room == 'DzFI3ZpheNLKdYid') echo 'selected="DzFI3ZpheNLKdYid"'; ?>>OIL/USDCAD</option>
							<option value="ZaJvQy7PDvTR4irM" <?php if ($room == 'ZaJvQy7PDvTR4irM') echo 'selected="ZaJvQy7PDvTR4irM"'; ?>>OIL (WTI/Brent)</option>
							<option value="TyuWQ41YMrnIl2Od" <?php if ($room == 'TyuWQ41YMrnIl2Od') echo 'selected="TyuWQ41YMrnIl2Od"'; ?>>PennyStocks</option>
							<option value="RCeMLkOzxOPtXO5v" <?php if ($room == 'RCeMLkOzxOPtXO5v') echo 'selected="RCeMLkOzxOPtXO5v"'; ?>>Pharma &amp; Biotechs with TheBanker</option>
							<option value="BfmVowG1TZkKO235" <?php if ($room == 'BfmVowG1TZkKO235') echo 'selected="BfmVowG1TZkKO235"'; ?>>Pine Script Editor</option>
							<option value="mf8Y2KmLnMUuFzzr" <?php if ($room == 'mf8Y2KmLnMUuFzzr') echo 'selected="mf8Y2KmLnMUuFzzr"'; ?>>Polish Trading Team</option>
							<option value="ZKZDQ3r9NMCOzaVZ" <?php if ($room == 'ZKZDQ3r9NMCOzaVZ') echo 'selected="ZKZDQ3r9NMCOzaVZ"'; ?>>Price Action Trading Room</option>
							<option value="JR3KTaW51mE9YmOd" <?php if ($room == 'JR3KTaW51mE9YmOd') echo 'selected="JR3KTaW51mE9YmOd"'; ?>>Quantitative trading</option>
							<option value="Iiu0jvBE9ZnKwVvd" <?php if ($room == 'Iiu0jvBE9ZnKwVvd') echo 'selected="Iiu0jvBE9ZnKwVvd"'; ?>>Romanian Traders</option>
							<option value="tEkrZBiZi0TaWw4S" <?php if ($room == 'tEkrZBiZi0TaWw4S') echo 'selected="tEkrZBiZi0TaWw4S"'; ?>>Silver discussion</option>
							<option value="2CFD4YQeH8hMgXGE" <?php if ($room == '2CFD4YQeH8hMgXGE') echo 'selected="2CFD4YQeH8hMgXGE"'; ?>>Spanish Room</option>
							<option value="Q8tWbgGWUxMgOT0K" <?php if ($room == 'Q8tWbgGWUxMgOT0K') echo 'selected="Q8tWbgGWUxMgOT0K"'; ?>>Strictly Trade Calls!</option>
							<option value="GLTODfGzJGbU1YVv" <?php if ($room == 'GLTODfGzJGbU1YVv') echo 'selected="GLTODfGzJGbU1YVv"'; ?>>Supply and Demand Trading</option>
							<option value="jHAiM1jq1ZE2EoZ0" <?php if ($room == 'jHAiM1jq1ZE2EoZ0') echo 'selected="jHAiM1jq1ZE2EoZ0"'; ?>>Svenska rummet</option>
							<option value="3PPPFNQzjwtfVd7I" <?php if ($room == '3PPPFNQzjwtfVd7I') echo 'selected="3PPPFNQzjwtfVd7I"'; ?>>Swing Trading</option>
							<option value="pfY7sNwno8Gi3eBK" <?php if ($room == 'pfY7sNwno8Gi3eBK') echo 'selected="pfY7sNwno8Gi3eBK"'; ?>>TastyTraders</option>
							<option value="ZJEx3xzknG8FbuVS" <?php if ($room == 'ZJEx3xzknG8FbuVS') echo 'selected="ZJEx3xzknG8FbuVS"'; ?>>Trading Institutional Order Flow</option>
							<option value="Wh1B2CL0d17yPuVq" <?php if ($room == 'Wh1B2CL0d17yPuVq') echo 'selected="Wh1B2CL0d17yPuVq"'; ?>>Trading with pivot points and pivot trends</option>
							<option value="eMY3zrURaLRkGyiD" <?php if ($room == 'eMY3zrURaLRkGyiD') echo 'selected="eMY3zrURaLRkGyiD"'; ?>>Turkish Traders</option>
							<option value="7HdQBrEUwYewrXlK" <?php if ($room == '7HdQBrEUwYewrXlK') echo 'selected="7HdQBrEUwYewrXlK"'; ?>>USDCAD</option>
							<option value="mpYGMfzLCDP3ZiPa" <?php if ($room == 'mpYGMfzLCDP3ZiPa') echo 'selected="mpYGMfzLCDP3ZiPa"'; ?>>USDRUB (in Russian)</option>
							<option value="8GYmyEi7PgD1pUPG" <?php if ($room == '8GYmyEi7PgD1pUPG') echo 'selected="8GYmyEi7PgD1pUPG"'; ?>>Vietnamese Gold &amp; FX trading's group</option>
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
        value="<?php echo !empty($width) ? $width : $chat_data['width']; ?>" />

</p>
<p>
    <label for="<?php echo $this->get_field_id('height');?>">Height: </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('height');?>"
	  name="<?php echo $this->get_field_name('height');?>"
        value="<?php echo !empty($height) ? $height : $chat_data['height']; ?>" />

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
<?php
//if($room != ''):
  //if($widthpop==2) $width = $width.'%';
  //if($heightpop==2) $height = $height.'%';

  ?>
<p><strong>Shortcode:</strong><br/>
    <code>
      <?php
      $widthstr = 'width="'.$width.'" height="'.$height.'"';
      if($autosize=='1') $widthstr = 'autosize="1"';
      printf('[tv-chat room="%1$s" %2$s language="%3$s"]',
      $room, $widthstr, $locale);
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
        $chat_data = get_option('tv_chat_op_name');
        $title = apply_filters('widget_title', $title);
        if(empty($title)) $title = "TradingView member Profile";
        if(empty($room )) $room  = $chat_data['room'];
        if(empty($autosize )) $autosize  = $chat_data['autosize'];
        if(empty($width )) $width  = $chat_data['width'];
        //if(empty($widthpop)) $widthpop = $chat_data['widthpop'];
        if(empty($height )) $height  = $chat_data['height'];
        //if(empty($heightpop)) $heightpop = $chat_data['heightpop'];
        if(empty($locale)) $locale = $chat_data['locale'];
        $data = $this->display_TradingView($room,$autosize,$width,$height,$locale);
        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo $data;
        echo $after_widget;
    }
    public static function display_TradingView($room,$autosize,$width,$height,$locale){
        $data = "";
        $x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //$rand = 'id="tv-ideas-stream-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5).'"';
        $rand = 'tv-chat-widget-'.substr(str_shuffle(str_repeat($x, ceil(5/strlen($x)) )),1,5);
    //if($widthpop==2) $width = "'".$width."%'";
    //if($heightpop==2) $height = "'".$height."%'";
    if(empty($room)) $room = 'general';
		$data .= "<div id=".$rand."></div>
    <script type='text/javascript'>
    new TradingView.ChatWidgetEmbed({
      'container_id': '".$rand."',
      'room': '".$room."',";
      if($autosize=='1') $data .= "
      'autosize': 'true'";
      else $data .= "
      'width': '".$width."',
      'height': '".$height."',";
      $data .= "
      'locale': '".$locale."'
    });
    </script>";
        return $data;
    }
}
add_action('widgets_init', create_function('', register_widget(new widget_TradingView_chat)));
?>
