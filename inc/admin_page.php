<?php
/**
 * @internal    never define functions inside callbacks.
 *              these functions could be run multiple times; this would result in a fatal error.
 */
function tv_settings_init()

{

  $a_language = array(
        'en' => 'English',
        'ru' => 'Русский',
        'zh' => '简体中文',
        'tw' => '繁體中文',
        'ja' => '日本語',
        'de' => 'Deutch',
        'pt' => 'Português',
        'it' => 'Italiano',
        'es' => 'Español',
        'fr' => 'French',
        'vi' => 'Tiếng Việt',
        'he_IL' => '‏עברית‏',
        'fa' => 'فارسی',
        'cs' => 'Česky',
        'th' => 'ภาษาไทย',
        'ko' => '한국어',
        'tr' => 'Türkçe'
  );

  $a_chatroom = array(
            'general' => 'Forex',
            'stock' => 'Stocks &amp; Indexes',
            'bitcoin' => 'Cryptocurrencies',
            'OChp2kucHixrW1Vt' => 'Agriculture',
            'Hek0gmnZRpR5tClu' => 'Andrews Pitchfork Traders',
            'dAkuSLzlBFz81SRK' => 'Apple AAPL',
            'z2Xw3omfT5YvLf4j' => 'Arabic',
            'jMDsUD5Dmbe0MsjM' => 'ASX200  XJO  SPI traders',
            'mTHOu0EhmltBWThb' => 'BANK NIFTY',
            'TZ24b3jAY8pbkpe5' => 'BEST TRADING ADVISOR OR ADVISORY SERVICES',
            'farV5KTpCxT7xxaf' => 'Binary Option Trading',
            '1nO89eozE9k3lDUA' => 'Bitcoin',
            'e4VCmafnLm22iigm' => 'Brazilian Traders',
            'kiPTCI4zDniacLot' => 'Canadian Traders',
            'EzwOLDsluV7xQCZm' => 'China Forex traders House',
            'WA0hqxSYhRibB4Qr' => 'Chinese Forex Commodity Index',
            'DjPnZNEzTJELAFiR' => 'Community Powered Technical Help &amp; Discussion',
            'E4bnOJSWcO1zDjBG' => 'DanV Charting The Waves',
            'gFiIzuX6QFtUHTYi' => 'Dutch speaking traders',
            '6N3ooQ8L1g9B535D' => 'Elliott Wave Charting',
            'yrgtWWVYUbIiCt6S' => 'Ethereum',
            'Sj9VbiDu7w7CAVnv' => 'EUR/USD Only',
            'RFMVMuTYY8uVulfn' => 'Forex...Fundamentals...Tech...',
            'Klz9GXbFc0Mmeo7R' => 'Free Signals !',
            '3CgAUFDnfudjvOzI' => 'French Traders',
            'BGfqre4MY2F448Oc' => 'FX Day Week Month Charts only',
            'bSDXyFGHqlaKXKYN' => 'GBPUSD',
            'HQSb9LtO5bZY3Zha' => 'GER30 DAX',
            '4kFT3tuOvsqqLwnd' => 'German Room',
            'spKNkcfKuFVnvOKV' => 'GOLD discussion',
            'emRgoeVgwVrK5QhB' => 'Greece Traders',
            'Q2TWs4mXQli3TjVW' => 'Investing',
            '2jxKKPwsyAwIccQs' => 'Iranian Forex Trader - Independent Traders',
            'mIONnBv3Rq0qQ0Ys' => 'Italian Traders',
            'c8BzrhGRvXxGXWnJ' => 'Key Hidden Levels',
            'TInEb6P7UTGVrOux' => 'Korean Traders',
            'pIKDtULtVOwFfVVc' => 'Lazy Charts',
            'P2SE5eKzi1lSlYHE' => 'Lithuanian Traders',
            'OeIbaTBVx48InuU4' => 'NASDAQ/NYSE Signals',
            'UajYkAfATwDxwyFp' => 'NATGAS',
            'm46zyJGoGFgzClrx' => 'Nifty Lovers',
            'huufTEomwseDbwhZ' => 'nmike Divergence Trading Room',
            'q0Xt2Jzq4znU6Bov' => 'NSE - India',
            'DzFI3ZpheNLKdYid' => 'OIL/USDCAD',
            'ZaJvQy7PDvTR4irM' => 'OIL (WTI/Brent)',
            'TyuWQ41YMrnIl2Od' => 'PennyStocks',
            'RCeMLkOzxOPtXO5v' => 'Pharma &amp; Biotechs with TheBanker',
            'BfmVowG1TZkKO235' => 'Pine Script Editor',
            'mf8Y2KmLnMUuFzzr' => 'Polish Trading Team',
            'ZKZDQ3r9NMCOzaVZ' => 'Price Action Trading Room',
            'JR3KTaW51mE9YmOd' => 'Quantitative trading',
            'Iiu0jvBE9ZnKwVvd' => 'Romanian Traders',
            'tEkrZBiZi0TaWw4S' => 'Silver discussion',
            '2CFD4YQeH8hMgXGE' => 'Spanish Room',
            'Q8tWbgGWUxMgOT0K' => 'Strictly Trade Calls!',
            'GLTODfGzJGbU1YVv' => 'Supply and Demand Trading',
            'jHAiM1jq1ZE2EoZ0' => 'Svenska rummet',
            '3PPPFNQzjwtfVd7I' => 'Swing Trading',
            'pfY7sNwno8Gi3eBK' => 'TastyTraders',
            'ZJEx3xzknG8FbuVS' => 'Trading Institutional Order Flow',
            'Wh1B2CL0d17yPuVq' => 'Trading with pivot points and pivot trends',
            'eMY3zrURaLRkGyiD' => 'Turkish Traders',
            '7HdQBrEUwYewrXlK' => 'USDCAD',
            'mpYGMfzLCDP3ZiPa' => 'USDRUB (in Russian)',
            '8GYmyEi7PgD1pUPG' => 'Vietnamese Gold &amp; FX tradings group'
  );

  $a_chart_interval = array(
    '1' => '1m',
    '3' => '3m',
    '5' => '5m',
    '15' => '15m',
    '30' => '30m',
    '60' => '1h',
    '120' => '2h',
    '180' => '3h',
    '240' => '4h',
    'D' => '1d',
    'W' => '1w'
  );
  $a_chart_theme = array(
        'White' => 'White',
        'Grey' => 'Grey',
        'Blue' => 'Blue',
        'Black' => 'Black'
  );
  $a_chart_style = array(
    '0' => 'Bars',
    '1' => 'Candles',
    '9' => 'Hollow Candles',
    '8' => 'Heikin Ashi',
    '2' => 'Line',
    '3' => 'Area',
    '4' => 'Renko',
    '7' => 'Line Break',
    '5' => 'Kagi',
    '6' => 'Point and Figure'
  );
  $a_chart_timezone = array(
      'Etc/UTC' => 'UTC',
      'exchange' => 'Exchange',
      'Pacific/Honolulu' => '(UTC-10) Honolulu',
      'America/Vancouver' => '(UTC-8) Vancouver',
      'America/Los_Angeles' => '(UTC-8) Los Angeles',
      'America/Phoenix' => '(UTC-7) Phoenix',
      'America/Chicago' => '(UTC-6) Chicago',
      'America/San Salvador' => '(UTC-6) San Salvador',
      'America/Toronto' => '(UTC-5) Toronto',
      'America/New_York' => '(UTC-5) New York',
      'Europe/London' => 'UTC London',
      'Europe/Madrid' => '(UTC+1) Madrid',
      'Europe/Paris' => '(UTC+1) Paris',
      'Europe/Berlin' => '(UTC+1) Berlin',
      'Europe/Warsaw' => '(UTC+1) Warsaw',
      'Europe/Athens' => '(UTC+2) Athens',
      'Europe/Moscow' => '(UTC+3) Moscow',
      'Asia/Tehran' => '(UTC+3:30) Tehran',
      'Asia/Dubai' => '(UTC+4) Dubai',
      'Asia/Ashkhabad' => '(UTC+5) Ashkhabad',
      'Asia/Kolkata' => '(UTC+5:30) Kolkata',
      'Asia/Almaty' => '(UTC+6) Almaty',
      'Asia/Bangkok' => '(UTC+7) Bangkok',
      'Asia/Taipei' => '(UTC+8) Taipei',
      'Asia/Singapore' => '(UTC+8) Singapore',
      'Asia/Shanghai' => '(UTC+8) Shanghai',
      'Asia/Hong_Kong' => '(UTC+8) Hong Kong',
      'Asia/Seoul' => '(UTC+9) Seoul',
      'Asia/Tokyo' => '(UTC+9) Tokyo',
      'Australia/Brisbane' => '(UTC+10) Brisbane',
      'Australia/Adelaide' => '(UTC+10:30) Adelaide',
      'Australia/Sydney' => '(UTC+11) Sydney',
      'Pacific/New_Zealand' => '(UTC+13) New Zealand',
      'Pacific/Tokelau' => '(UTC+13) Tokelau',
      'Pacific/Chatham' => '(UTC+13:45) Chatham Islands'
    );

  $profile_option_name   = 'tv_profile_op_name';
  $profile_option_values = get_option( $profile_option_name );
  $profile_default_values = array (
      'username' => 'fxmillions',
      'width'  => '100',
      'widthpop' => 2,
      'height'   => '410',
      'heightpop'=> 1,
      'locale'   => 'en'
  );

  // Parse option values into predefined keys, throw the rest away.
  $profile_data = shortcode_atts( $profile_default_values, $profile_option_values );

  register_setting('tv_profile_op_group', $profile_option_name);

    // register a new section in the "tv" page
    add_settings_section(
        'tv-profile',
        __('Default settings for profiles', 'tv'),
        'tv_op_section_cb',
        'tv_profile'
    );


    add_settings_field(
      'tv_profile_op_1',
      __('Tradingview username', 'tv'),
      'tv_op_text_cb',
      'tv_profile',
      'tv-profile',
      array( 'label_for' => 'tv_profile_op_1',
        'name'        => 'username',
        'value'       => esc_attr( $profile_data['username'] ),
        'option_name' => $profile_option_name,
        'help'        => ''
      )
    );

    add_settings_field(
      'tv_profile_op_2',
      __('Width', 'tv'),
      'tv_op_width_cb',
      'tv_profile',
      'tv-profile',
      array( 'label_for' => 'tv_profile_op_2',
        'class'     => 'prepop',
        'name'        => 'width',
        'value'       => esc_attr( $profile_data['width'] ),
        'option_name' => $profile_option_name,

      )
    );
    add_settings_field(
      'tv_profile_op_2_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_profile_op_2_1_cb',
      'tv_profile',
      'tv-profile',
      array( 'label_for' => 'tv_profile_op_2_1',
        'class'     => 'pop',
        'name'        => 'widthpop',
        'value'       => $profile_data['widthpop'],
        'option_name' => $profile_option_name
      )
    );

    add_settings_field(
      'tv_profile_op_3',
      __('Height', 'tv'),
      'tv_op_width_cb',
      'tv_profile',
      'tv-profile',
      array( 'label_for' => 'tv_profile_op_3',
        'class'     => 'prepop',
        'name'        => 'height',
        'value'       => esc_attr( $profile_data['height'] ),
        'option_name' => $profile_option_name
      )
    );
    add_settings_field(
      'tv_profile_op_3_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_profile_op_3_1_cb',
      'tv_profile',
      'tv-profile',
      array( 'label_for' => 'tv_profile_op_3_1',
        'class'     => 'pop',
        'name'        => 'heightpop',
        'value'       => $profile_data['heightpop'],
        'option_name' => $profile_option_name
      )
    );



    add_settings_field(
      'tv_profile_op_4',
      __('Language', 'tv'),
      'tv_op_select_cb',
      'tv_profile',
      'tv-profile',
      array( 'label_for' => 'tv_profile_op_4',
        'name'        => 'locale',
        'value'       => esc_attr( $profile_data['locale'] ),
        'options'     => $a_language,
        'option_name' => $profile_option_name
      )
    );

    $ideastream_option_name   = 'tv_ideastream_op_name';
    $ideastream_option_values = get_option( $ideastream_option_name );
    $ideastream_default_values = array (
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
    );
    $ideastream_data = shortcode_atts( $ideastream_default_values, $ideastream_option_values );-

    register_setting('tv_ideastream_op_group', $ideastream_option_name);

    add_settings_section(
        'tv-ideastream',
        __('Default settings for Idea stream', 'tv'),
        'tv_op_section_cb',
        'tv_ideastream'
    );


    add_settings_field(
      'tv_ideastream_op_1',
      __('Default symbol', 'tv'),
      'tv_op_text_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_1',
        'name'        => 'symbol',
        'value'       => esc_attr( $ideastream_data['symbol'] ),
        'option_name' => $ideastream_option_name,
        'help'        => NULL
      )
    );
    add_settings_field(
      'tv_ideastream_op_2',
      __('Ideas author', 'tv'),
      'tv_op_text_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_2',
        'name'        => 'username',
        'value'       => esc_attr( $ideastream_data['username'] ),
        'option_name' => $ideastream_option_name,
        'help'        => NULL
      )
    );
    add_settings_field(
      'tv_ideastream_op_3',
      __('Default market', 'tv'),
      'tv_op_select_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_1',
        'name'        => 'stream',
        'value'       => esc_attr( $ideastream_data['stream'] ),
        'options'     => array (
            'all' => 'All Markets',
            'stocks' => 'Stocks',
            'stocks-us' => 'US Stocks',
            'stocks-uk' => 'UK Stocks',
            'stocks-india' => 'Indian Stocks',
            'stocks-es' => 'Spain Stocks',
            'stocks-japan' => 'Japan Stocks',
            'stocks-russia' => 'Russian Stocks',
            'indices' => 'Indices',
            'commodities' => 'Commodities',
            'currencies' => 'Currencies',
            'bitcoin' => 'Cryptocurrencies'
            ),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_4',
      __('Default interval', 'tv'),
      'tv_op_select_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_4',
        'name'        => 'interval',
        'value'       => esc_attr( $ideastream_data['interval'] ),
        'options'     => array (
              'all' => 'All Intervals',
              'm' => 'Short Term',
              'h' => 'Medium Term',
              'dwm' => 'Long Term'
            ),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_5',
      __('Default sorting', 'tv'),
      'tv_op_select_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_5',
        'name'        => 'sort',
        'value'       => esc_attr( $ideastream_data['sort'] ),
        'options'     => array (
            'trending' => 'Trending',
            'discussed' => 'Most Discussed',
            'viewed' => 'Most Viewed',
            'agreed' => 'Most Agreed',
            'suggested' => 'Suggested',
            'recent' => 'All Ideas'
            ),
        'option_name' => $ideastream_option_name
      )
    );
    add_settings_field(
      'tv_ideastream_op_6',
      __('Default time', 'tv'),
      'tv_op_select_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_6',
        'name'        => 'time',
        'value'       => esc_attr( $ideastream_data['time'] ),
        'options'     => array (
              'day' => 'Today',
              'week' => 'This Week',
              'month' => 'This Month',
              'all' => 'All Time'
            ),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_7',
      __('Width', 'tv'),
      'tv_op_width_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_7',
        'class'     => 'prepop',
        'name'        => 'width',
        'value'       => esc_attr( $ideastream_data['width'] ),
        'option_name' => $ideastream_option_name,

      )
    );
    add_settings_field(
      'tv_ideastream_op_7_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_7_1',
        'class'     => 'pop',
        'name'        => 'widthpop',
        'value'       => esc_attr($ideastream_data['widthpop']),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_7_2',
      __('Height', 'tv'),
      'tv_op_width_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_7_2',
        'class'     => 'prepop',
        'name'        => 'height',
        'value'       => esc_attr( $ideastream_data['height'] ),
        'option_name' => $ideastream_option_name,

      )
    );
    add_settings_field(
      'tv_ideastream_op_7_3',
      __('', 'tv'),
      'tv_op_widthpop_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_7_3',
        'class'     => 'pop',
        'name'        => 'heightpop',
        'value'       => esc_attr($ideastream_data['heightpop']),
        'option_name' => $ideastream_option_name
      )
    );



    add_settings_field(
      'tv_ideastream_op_8',
      __('Initial ideas count', 'tv'),
      'tv_op_number_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_8',
        'name'        => 'startingCount',
        'value'       => esc_attr($ideastream_data['startingCount']),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_9',
      __('Language', 'tv'),
      'tv_op_select_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_8',
        'name'        => 'locale',
        'value'       => esc_attr($ideastream_data['locale']),
        'options'     => $a_language,
        'option_name' => $ideastream_option_name
      )
    );
    add_settings_field(
      'tv_ideastream_op_10',
      __('Header color', 'tv'),
      'tv_op_header_color_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_10',
        'name'        => 'headerColor',
        'class'       => 'tv-color-field',
        'value'       => esc_attr($ideastream_data['headerColor']),
        'data-default-color' => esc_attr( $ideastream_data['headerColor'] ),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_11',
      __('Background color', 'tv'),
      'tv_op_bg_color_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_11',
        'name'        => 'bgColor',
        'class'       => 'tv-color-field',
        'value'       => esc_attr($ideastream_data['bgColor']),
        'data-default-color' => esc_attr( $ideastream_data['bgColor'] ),
        'option_name' => $ideastream_option_name
      )
    );

    add_settings_field(
      'tv_ideastream_op_12',
      __('Border color', 'tv'),
      'tv_op_border_color_cb',
      'tv_ideastream',
      'tv-ideastream',
      array ( 'label_for'=> 'tv_ideastream_op_12',
        'name'        => 'borderColor',
        'class'       => 'tv-color-field',
        'value'       => esc_attr($ideastream_data['borderColor']),
        'data-default-color' => esc_attr( $profile_data['borderColor'] ),
        'option_name' => $ideastream_option_name
      )
    );


    $ideaview_option_name   = 'tv_ideaview_op_name';
    $ideaview_option_values = get_option( $ideaview_option_name );
    $ideaview_default_values = array (
        'idea' => 'WDO3BAZT',
        'width'  => '100',
        'widthpop' => 1,
        'height'   => '410',
        'heightpop'=> 1,
        'locale'   => 'en'
    );

    $ideaview_data = shortcode_atts( $ideaview_default_values, $ideaview_option_values );
    register_setting('tv_ideaview_op_group', $ideaview_option_name);

    add_settings_section(
        'tv-ideaview',
        __('Default settings for idea preview', 'tv'),
        'tv_op_section_cb',
        'tv_ideaview'
    );


    add_settings_field(
      'tv_ideaview_op_2',
      __('Width', 'tv'),
      'tv_op_width_cb',
      'tv_ideaview',
      'tv-ideaview',
      array ( 'label_for'=> 'tv_ideaview_op_2',
        'class'     => 'prepop',
        'name'        => 'width',
        'value'       => esc_attr( $ideaview_data['width'] ),
        'option_name' => $ideaview_option_name,

      )
    );
    add_settings_field(
      'tv_ideaview_op_2_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_ideaview_op_2_1_cb',
      'tv_ideaview',
      'tv-ideaview',
      array ( 'label_for'=> 'tv_ideaview_op_2_1',
        'class'     => 'pop',
        'name'        => 'widthpop',
        'value'       => $ideaview_data['widthpop'],
        'option_name' => $ideaview_option_name
      )
    );

    add_settings_field(
      'tv_ideaview_op_3',
      __('Height', 'tv'),
      'tv_op_width_cb',
      'tv_ideaview',
      'tv-ideaview',
      array ( 'label_for'=> 'tv_ideaview_op_3',
        'class'     => 'prepop',
        'name'        => 'height',
        'value'       => esc_attr( $ideaview_data['height'] ),
        'option_name' => $ideaview_option_name
      )
    );
    add_settings_field(
      'tv_ideaview_op_3_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_ideaview_op_3_1_cb',
      'tv_ideaview',
      'tv-ideaview',
      array ( 'label_for'=> 'tv_ideaview_op_3_1',
        'class'     => 'pop',
        'name'        => 'heightpop',
        'value'       => $ideaview_data['heightpop'],
        'option_name' => $ideaview_option_name
      )
    );

    add_settings_field(
      'tv_ideaview_op_1',
      __('Unique ID of idea', 'tv'),
      'tv_op_text_cb',
      'tv_ideaview',
      'tv-ideaview',
      array ( 'label_for'=> 'tv_ideaview_op_1',
        'name'        => 'idea',
        'value'       => esc_attr( $ideaview_data['idea'] ),
        'option_name' => $ideaview_option_name,
        'help'        => '<br><span>e.g: https://www.tradingview.com/chart/CL1!/<strong>WDO3BAZT</strong>-Where-is-crude-oil-going-next/<br>
                          unique id = <strong>WDO3BAZT</strong>
                          </span>'
      )
    );



    add_settings_field(
      'tv_ideaview_op_4',
      __('Language', 'tv'),
      'tv_op_select_cb',
      'tv_ideaview',
      'tv-ideaview',
      array ( 'label_for'=> 'tv_ideaview_op_4',
        'name'        => 'locale',
        'value'       => esc_attr( $ideaview_data['locale'] ),
        'options'     => $a_language,
        'option_name' => $ideaview_option_name
      )
    );


    $chat_option_name   = 'tv_chat_op_name';
    $chat_option_values = get_option( $chat_option_name );
    $chat_default_values = array (
        'room' => 'general',
        'width'  => '100',
        'widthpop' => 2,
        'height'   => '410',
        'heightpop'=> 1,
        'locale'   => 'en'
    );
    $chat_data = shortcode_atts( $chat_default_values, $chat_option_values );
    register_setting('tv_chat_op_group', $chat_option_name);

    add_settings_section(
        'tv-chat',
        __('Default settings for Chat widget', 'tv'),
        'tv_op_section_cb',
        'tv_chat'
    );


    add_settings_field(
      'tv_chat_op_1',
      __('Default chat room', 'tv'),
      'tv_op_select_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_1',
        'name'        => 'room',
        'value'       => esc_attr( $chat_data['room'] ),
        'options'     => $a_chatroom,
        'option_name' => $chat_option_name,

      )
    );

    add_settings_field(
      'tv_chat_op_5',
      __('Autosize - Stretch 100% width and height of containing element.
      (overrides width/height values below)', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_5',
        'class'     => 'checkbox',
        'name'        => 'autosize',
        'value'       => esc_attr($chat_data['autosize']),
        'option_name' => $chat_option_name
      )
    );

    add_settings_field(
      'tv_chat_op_2',
      __('Width', 'tv'),
      'tv_op_width_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_2',
        //'class'     => 'prepop',
        'name'        => 'width',
        'value'       => esc_attr( $chat_data['width'] ),
        'option_name' => $chat_option_name,

      )
    );
    /**add_settings_field(
      'tv_chat_op_2_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_chat_op_2_1_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_2_1',
        'class'     => 'pop',
        'name'        => 'widthpop',
        'value'       => $chat_data['widthpop'],
        'option_name' => $chat_option_name
      )
    );**/

    add_settings_field(
      'tv_chat_op_3',
      __('Height', 'tv'),
      'tv_op_width_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_3',
        //'class'     => 'prepop',
        'name'        => 'height',
        'value'       => esc_attr( $chat_data['height'] ),
        'option_name' => $chat_option_name
      )
    );
    /**add_settings_field(
      'tv_chat_op_3_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_chat_op_3_1_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_3_1',
        'class'     => 'pop',
        'name'        => 'heightpop',
        'value'       => $chat_data['heightpop'],
        'option_name' => $chat_option_name
      )
    );**/

    add_settings_field(
      'tv_chat_op_4',
      __('Language', 'tv'),
      'tv_op_select_cb',
      'tv_chat',
      'tv-chat',
      array ( 'label_for'=> 'tv_chat_op_4',
        'name'        => 'locale',
        'value'       => esc_attr( $chat_data['locale'] ),
        'options'     => $a_language,
        'option_name' => $chat_option_name
      )
    );


    $chart_option_name   = 'tv_chart_op_name';
    $chart_option_values = get_option( $chart_option_name );
    $chart_default_values = array (
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
    );
    $chart_data = shortcode_atts( $chart_default_values, $chart_option_values );
    register_setting('tv_chart_op_group', $chart_option_name);

    add_settings_section(
        'tv-chart',
        __('Default settings for Chart widget', 'tv'),
        'tv_op_section_cb',
        'tv_chart'
    );

    add_settings_field(
      'tv_chart_op_1',
      __('Default chart symbol', 'tv'),
      'tv_op_text_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_1',
        'name'        => 'symbol',
        'value'       => esc_attr( $chart_data['symbol'] ),
        'option_name' => $chart_option_name,
        'help'        => NULL
      )
    );

    add_settings_field(
      'tv_chart_op_24',
      __('Autosize - Stretch 100% width and height of containing element.
      (overrides width/height values below)', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_24',
        'class'     => 'checkbox',
        'name'        => 'autosize',
        'value'       => esc_attr($chart_data['autosize']),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_2',
      __('Width (px)', 'tv'),
      'tv_op_width_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_2',
        //'class'     => 'prepop',
        'name'        => 'width',
        'value'       => esc_attr( $chart_data['width'] ),
        'option_name' => $chart_option_name,

      )
    );
    /**add_settings_field(
      'tv_chart_op_2_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_chart_op_2_1_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_2_1',
        'class'     => 'pop',
        'name'        => 'widthpop',
        'value'       => $chart_data['widthpop'],
        'option_name' => $chart_option_name
      )
    );**/

    add_settings_field(
      'tv_chart_op_3',
      __('Height (px)', 'tv'),
      'tv_op_width_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_3',
        //'class'     => 'prepop',
        'name'        => 'height',
        'value'       => esc_attr( $chart_data['height'] ),
        'option_name' => $chart_option_name
      )
    );
    /**add_settings_field(
      'tv_chart_op_3_1',
      __('', 'tv'),
      'tv_op_widthpop_cb',//'tv_chart_op_3_1_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_3_1',
        'class'     => 'pop',
        'name'        => 'heightpop',
        'value'       => $chart_data['heightpop'],
        'option_name' => $chart_option_name
      )
    );**/

    add_settings_field(
      'tv_chart_op_4',
      __('Default interval/timeframe', 'tv'),
      'tv_op_select_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_4',
        'name'        => 'interval',
        'value'       => esc_attr( $chart_data['interval'] ),
        'options'     => $a_chart_interval,
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_5',
      __('Default Time zone', 'tv'),
      'tv_op_select_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_5',
        'name'        => 'timezone',
        'value'       => esc_attr( $chart_data['timezone'] ),
        'options'     => $a_chart_timezone,
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_6',
      __('Default theme', 'tv'),
      'tv_op_select_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_6',
        'name'        => 'theme',
        'value'       => esc_attr( $chart_data['theme'] ),
        'options'     => $a_chart_theme,
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_7',
      __('Default chart/candle style', 'tv'),
      'tv_op_select_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_7',
        'name'        => 'style',
        'value'       => esc_attr( $chart_data['style'] ),
        'options'     => $a_chart_style,
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_8',
      __('Default Language', 'tv'),
      'tv_op_select_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_8',
        'name'        => 'locale',
        'value'       => esc_attr( $chart_data['locale'] ),
        'options'     => $a_language,
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_9',
      __('Toolbar default background color', 'tv'),
      'tv_op_tooplbar_bg_color_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_9',
        'name'        => 'toolbar_bg',
        'class'       => 'tv-color-field',
        'value'       => esc_attr($chart_data['toolbar_bg']),
        'data-default-color' => esc_attr( $chart_data['toolbar_bg'] ),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_10',
      __('Enable publishing', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_10',
        'class'     => 'checkbox',
        'name'        => 'enable_publishing',
        'value'       => esc_attr($chart_data['enable_publishing']),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_11',
      __('Show top toolbar', 'tv'),
      'tv_op_checkbox_inv_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_11',
        'class'     => 'checkbox',
        'name'        => 'hide_top_toolbar',
        'value'       => esc_attr($chart_data['hide_top_toolbar']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_12',
      __('Show bottom toolbar', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_12',
        'class'     => 'checkbox',
        'name'        => 'withdateranges',
        'value'       => esc_attr($chart_data['withdateranges']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_13',
      __('Show side toolbar', 'tv'),
      'tv_op_checkbox_inv_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_13',
        'class'     => 'checkbox',
        'name'        => 'hide_side_toolbar',
        'value'       => esc_attr($chart_data['hide_side_toolbar']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_14',
      __('Allow change of symbol', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_14',
        'class'     => 'checkbox',
        'name'        => 'allow_symbol_change',
        'value'       => esc_attr($chart_data['allow_symbol_change']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_21',
      __('Save image button', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_21',
        'class'     => 'checkbox',
        'name'        => 'save_image',
        'value'       => esc_attr($chart_data['save_image']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_15',
      __('Show details (within side panel)', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_15',
        'class'     => 'checkbox',
        'name'        => 'details',
        'value'       => esc_attr($chart_data['details']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_16',
      __('Show hotlist', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_16',
        'class'     => 'checkbox',
        'name'        => 'hotlist',
        'value'       => esc_attr($chart_data['hotlist']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_17',
      __('Enable calendar', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_17',
        'class'     => 'checkbox',
        'name'        => 'calendar',
        'value'       => esc_attr($chart_data['calendar']),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_18',
      __('Display Stocktwits', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_18',
        'class'     => 'checkbox',
        'name'        => 'stocktwits',
        'value'       => esc_attr($chart_data['stocktwits']),
        'option_name' => $chart_option_name
      )
    );
    add_settings_field(
      'tv_chart_op_19',
      __('Display headlines', 'tv'),
      'tv_op_checkbox_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_19',
        'class'     => 'checkbox',
        'name'        => 'headlines',
        'value'       => esc_attr($chart_data['headlines']),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_22',
      __('Show ideas on chart', 'tv'),
      'tv_op_checkbox_inv_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_22',
        'class'     => 'checkbox',
        'name'        => 'hideideas',
        'value'       => esc_attr($chart_data['hideideas']),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_23',
      __('Show ideas button', 'tv'),
      'tv_op_checkbox_inv_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_23',
        'class'     => 'checkbox',
        'name'        => 'hideideasbutton',
        'value'       => esc_attr($chart_data['hideideasbutton']),
        'option_name' => $chart_option_name
      )
    );

    add_settings_field(
      'tv_chart_op_20',
      __('Referral ID', 'tv'),
      'tv_op_text_cb',
      'tv_chart',
      'tv-chart',
      array ( 'label_for'=> 'tv_chart_op_20',
        'name'        => 'referral_id',
        'value'       => esc_attr($chart_data['referral_id']),
        'option_name' => $chart_option_name,
        'help'        => NULL
      )
    );



}

/**
 * register our tv_settings_init to the admin_init action hook
 */
add_action('admin_init', 'tv_settings_init');

/**
 * custom option and settings:
 * callback functions
 */


function tv_op_section_cb($args)
{
    ?>

    <p id="<?= esc_attr($args['id']); ?>"><?= esc_html__('These values will be the Default for widgets.', 'tv'); ?>
    <br><?= esc_html__('Further customization is also possible per widget basis, using the settings in the widgets panel.', 'tv'); ?></p>
    <?php
}

function tv_op_text_cb($args){
  printf(
       '<input type="text" name="%1$s[%2$s]" id="%3$s" value="%4$s" >
       %5$s',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value'],
       $args['help']

   );
}

function tv_op_header_color_cb($args){
  printf(
       '<tr>
       <th scope="row">
       <label>Header color</label>
       </th>
       <td>
       <input type="text" class="%5$s" name="%1$s[%2$s]" id="%3$s" value="%4$s" data-default-color="%6$s" >
       </td>
       </tr>',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value'],
       $args['class'],
       $args['data-default-color']

   );
}
function tv_op_bg_color_cb($args){
  printf(
       '<tr>
       <th scope="row">
       <label>Background color</label>
       </th>
       <td>
       <input type="text" class="%5$s" name="%1$s[%2$s]" id="%3$s" value="%4$s" data-default-color="%6$s" >
       </td>
       </tr>',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value'],
       $args['class'],
       $args['data-default-color']
   );
}

function tv_op_tooplbar_bg_color_cb($args){
  printf(
       '<tr>
       <th scope="row">
       <label>Toolbar default background color</label>
       </th>
       <td>
       <input type="text" class="%5$s" name="%1$s[%2$s]" id="%3$s" value="%4$s" data-default-color="%6$s" >
       </td>
       </tr>',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value'],
       $args['class'],
       $args['data-default-color']
   );
}

function tv_op_border_color_cb($args){
  printf(
       '<tr>
       <th scope="row">
       <label>Border color</label>
       </th>
       <td>
       <input type="text" class="%5$s" name="%1$s[%2$s]" id="%3$s" value="%4$s" data-default-color="%6$s" >
       </td>
       </tr>',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value'],
       $args['class'],
       $args['data-default-color']
   );
}

function tv_op_number_cb($args){
  printf(
       '<input type="number" name="%1$s[%2$s]" id="%3$s" value="%4$s" >',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value']
   );
}

function tv_op_width_cb($args){
  printf(
       '<input type="number" name="%1$s[%2$s]" id="%3$s" value="%4$s">',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       $args['value']
   );
}
function tv_op_widthpop_cb($args){
  printf(
       '<input type="radio" name="%1$s[%2$s]" id="%3$s" value="1" %4$s>px &nbsp;&nbsp;<input type="radio" name="%1$s[%2$s]" id="%3$s" value="2" %5$s>%%',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       checked (1,$args['value'],false),
       checked (2,$args['value'],false)
   );
}

function tv_op_checkbox_cb($args){
  printf(
       '<input type="checkbox" name="%1$s[%2$s]" id="%3$s" value="1" %4$s>',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       checked ('1',$args['value'],false)
   );
}

function tv_op_checkbox_inv_cb($args){
  printf(
       '<input type="checkbox" name="%1$s[%2$s]" id="%3$s" value="0" %4$s>',
       $args['option_name'],
       $args['name'],
       $args['label_for'],
       checked ('0',$args['value'],false)
   );
}

function tv_op_select_cb( $args )
{
    printf(
        '<select name="%1$s[%2$s]" id="%3$s">',
        $args['option_name'],
        $args['name'],
        $args['label_for']
    );

    foreach ( $args['options'] as $val => $title )
        printf(
            '<option value="%1$s" %2$s>%3$s</option>',
            $val,
            selected( $val, $args['value'], FALSE ),
            $title
        );

    print '</select>';

}





/**
 * top level menu
 */
function tv_options_page()
{
    // add top level menu page
    add_menu_page(
        'TradingView',
        'WP TradingView',
        'manage_options',
        'tv',
        'tv_options_page_html',
        plugins_url( 'wp-tradingview/images/icon.png' )
    );
}

/**
 * register our tv_options_page to the admin_menu action hook
 */
add_action('admin_menu', 'tv_options_page');

add_action( 'admin_notices', 'tv_hook_admin_notice' );
function tv_hook_admin_notice() {
        
        if ( ! get_option('tv_rated', FALSE ) ) { ?>
            <div class="notice notice-info rate-notice" style="max-width:66%;font-size:1.1em;">
                <p style="color:green;font-size:1em;font-weight:600;"><?php _e( 'Hey, Thank you for using WP TradingView. It\'s awesome to have you onboard. Could you do me a BIG favor and give it a 5 star rating on WordPress? Just to help us spread the word and boost our motivation.<br><i style="font-weight:normal;">- Ameen Aliyar (TradePips.com)</i>', 'tv' ); ?></p>
<ul><li><a href="https://wordpress.org/support/plugin/wp-tradingview/reviews/?filter=5#new-post" class="notice-class wptv-rated" data-notice="ok">Ok, you deserve it</a></li>
<ul><li class="notice-class wptv-rated" data-notice="no"><span style="cursor:pointer;color:#0073aa;text-decoration:underline;" >Nope, maybe later</span></li>
<ul><li class="notice-class wptv-rated" data-notice="already"><span style="cursor:pointer;color:#0073aa;text-decoration:underline;" >I already did</span></li>

            </div>
        <?php }
}
add_action( 'wp_ajax_rated_notice_handler', 'ajax_notice_handler' );
function ajax_notice_handler() {
    update_option( 'tv_rated', TRUE );
}

/**
 * top level menu:
 * callback functions
 */
function tv_options_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_GET['settings-updated'])) {
        add_settings_error('tv_messages', 'tv_message', __('Settings Saved', 'tv'), 'updated');
    }

    settings_errors('tv_messages');
    ?>

    <style>
    .form-table{width: auto;}
    .form-table td input[type="number"]{width: 90px;}
    .form-table td span {position: absolute;font-size: 11px;}
    .form-table select {max-width: 200px;}
    table tbody > .wp-picker-container {display: none;}
    @media (min-width:768px){
    .prepop{position:absolute;}
    .pop{text-align:right;}
    .pop td{padding-right: 0;}
    }

    </style>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="wrap">

        
         

        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <?php
              $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'profile';
        ?>

        <h2 class="nav-tab-wrapper">
            <a href="?page=tv&tab=profile" class="nav-tab <?php echo $active_tab == 'profile' ? 'nav-tab-active' : ''; ?>">Profiles</a>
            <a href="?page=tv&tab=ideastream" class="nav-tab <?php echo $active_tab == 'ideastream' ? 'nav-tab-active' : ''; ?>">Idea stream</a>
            <a href="?page=tv&tab=ideaview" class="nav-tab <?php echo $active_tab == 'ideaview' ? 'nav-tab-active' : ''; ?>">Idea preview</a>
            <a href="?page=tv&tab=chat" class="nav-tab <?php echo $active_tab == 'chat' ? 'nav-tab-active' : ''; ?>">Chat</a>
            <a href="?page=tv&tab=chart" class="nav-tab <?php echo $active_tab == 'chart' ? 'nav-tab-active' : ''; ?>">Chart</a>
        </h2>

        <form action="options.php" method="post">
            <?php
          if( $active_tab == 'profile' ) {
            $profile_data = get_option('tv_profile_op_name');
            $username = $profile_data['username'];
            $width = $profile_data['width'];
            $widthpop = $profile_data['widthpop'];
            $height = $profile_data['height'];
            $heightpop = $profile_data['heightpop'];
            $locale = $profile_data['locale'];

            if($username != ''):
              if($widthpop==2) $width = "'".$width."%'";
              if($heightpop==2) $height = "'".$height."%'";
              ?>
            <p style="width:70%;"><strong>Shortcode:</strong><br/>
                <code>
                    <?php
                    printf('[tv-profile username="%1$s" width="%2$s" height="%3$s" language="%4$s"]',
                    $username, $width, $height,$locale);
                    ?>

                </code>
            </p>
            <?php endif;
            settings_fields('tv_profile_op_group');
            do_settings_sections('tv_profile');

          }
          else if( $active_tab == 'ideastream' ) {

            $ideastream_data = get_option('tv_ideastream_op_name');

            $symbol = $ideastream_data['symbol'];
            $username = $ideastream_data['username'];
            $width = $ideastream_data['width'];
            $widthpop = $ideastream_data['widthpop'];
            $height = $ideastream_data['height'];
            $heightpop = $ideastream_data['heightpop'];
            $startingCount = $ideastream_data['startingCount'];
            //$mode = $ideastream_data['mode'];
            $sort = $ideastream_data['sort'];
            $time = $ideastream_data['time'];
            $interval = $ideastream_data['interval'];
            $stream = $ideastream_data['stream'];
            $locale = $ideastream_data['locale'];
            $bgColor = $ideastream_data['bgColor'];
            $headerColor = $ideastream_data['headerColor'];
            $borderColor = $ideastream_data['borderColor'];




            //if($username != '' || $symbol != ''):
              if($widthpop==2) $width = $width.'%';
              if($heightpop==2) $height = $height.'%';

              ?>
            <p style="width:70%;"><strong>Shortcode:</strong><br/>
                <code>
                  <?php
                printf('[tv-ideastream symbol="%1$s" username="%2$s" width="%3$s" height="%4$s" startingCount="%5$s" sort="%6$s" time="%7$s" interval="%8$s" stream="%9$s" language="%10$s" bgColor="%11$s" headerColor="%12$s" borderColor="%13$s"]',
                $symbol, $username, $width, $height, $startingCount, $sort, $time, $interval, $stream, $locale, $bgColor, $headerColor, $borderColor);
                  ?>
                </code>
            </p>
            <?php
          //endif;
            settings_fields('tv_ideastream_op_group');
            do_settings_sections('tv_ideastream');
          }
          else if( $active_tab == 'ideaview' ) {

            $ideaview_data = get_option('tv_ideaview_op_name');

            $idea = $ideaview_data['idea'];
            $width = $ideaview_data['width'];
            $widthpop = $ideaview_data['widthpop'];
            $height = $ideaview_data['height'];
            $heightpop = $ideaview_data['heightpop'];
            $locale = $ideaview_data['locale'];

            //if($idea != ''):
            if($widthpop==2) $width = "\'".$width."%\'";
            if($heightpop==2) $height = "\'".$height."%\'";

              ?>
            <p style="width:70%;"><strong>Shortcode:</strong><br/>
                <code>
                    <?php
                    printf('[tv-ideaview idea="%1$s" width="%2$s" height="%3$s" language="%4$s"]',
                    $idea, $width, $height, $locale);
                    ?>

                </code>
            </p>
            <?php
          //endif;

            settings_fields('tv_ideaview_op_group');
            do_settings_sections('tv_ideaview');
          }
          else if( $active_tab == 'chat' ) {

            $chat_data = get_option('tv_chat_op_name');

            $room = $chat_data['room'];
            $autosize = $chat_data['autosize'];
            $width = $chat_data['width'];
            $widthpop = $chat_data['widthpop'];
            $height = $chat_data['height'];
            $heightpop = $chat_data['heightpop'];
            $locale = $chat_data['locale'];

            //if($room != ''):
              if($widthpop==2) $width = $width.'%';
              if($heightpop==2) $height = $height.'%';

              ?>
            <p style="width:70%;"><strong>Shortcode:</strong><br/>

                <code>
                    <?php
                    $widthstr = 'width="'.$width.'" height="'.$height.'"';
                    if($autosize=='1') $widthstr = 'autosize="1"';
                    printf('[tv-chat room="%1$s" %2$s language="%3$s"]',
                    $room, $widthstr, $locale);
                    ?>

                </code>
            </p>
            <?php
           //endif;

            settings_fields('tv_chat_op_group');
            do_settings_sections('tv_chat');
          }

          else if( $active_tab == 'chart' ) {

            $chart_data = get_option('tv_chart_op_name');

            $symbol = $chart_data['symbol'];
            $autosize = $chart_data['autosize'];
            $width = $chart_data['width'];
            //$widthpop = $chart_data['widthpop'];
            $height = $chart_data['height'];
            //$heightpop = $chart_data['heightpop'];
            $locale = $chart_data['locale'];
            $interval =  $chart_data['interval'];
            $timezone =  $chart_data['timezone'];
            $theme =  $chart_data['theme'];
            $style =  $chart_data['style'];
            $locale =  $chart_data['locale'];
            $toolbar_bg =  $chart_data['toolbar_bg'];
            $enable_publishing = $chart_data['enable_publishing'];
            $hide_top_toolbar = $chart_data['hide_top_toolbar'];
            $withdateranges = $chart_data['withdateranges'];
            $hide_side_toolbar = $chart_data['hide_side_toolbar'];
            $allow_symbol_change = $chart_data['allow_symbol_change'];
            $save_image = $chart_data['save_image'];
            $details = $chart_data['details'];
            $hotlist = $chart_data['hotlist'];
            $calendar = $chart_data['calendar'];
            $stocktwits = $chart_data['stocktwits'];
            $headlines = $chart_data['headlines'];
            $hideideas = $chart_data['hideideas'];
            $hideideasbutton = $chart_data['hideideasbutton'];
            $referral_id =  $chart_data['referral_id'];

            if($symbol != ''):
              //if($widthpop==2) $width = $width.'%';
              //if($heightpop==2) $height = $height.'%';

              ?>
            <p style="width:70%;"><strong>Shortcode:</strong><br/>
                <code>
                    <?php
                    $widthstr = 'width="'.$width.'" height="'.$height.'"';
                    if($autosize=='1') $widthstr = 'autosize="1"';
                    printf('[tv-chart symbol="%1$s" %2$s language="%3$s" interval="%4$s" timezone="%5$s" theme="%6$s" style="%7$s" toolbar_bg="%8$s" enable_publishing="%9$s" hide_top_toolbar="%10$s" withdateranges="%11$s" hide_side_toolbar="%12$s" allow_symbol_change="%13$s" save_image="%14$s" details="%15$s" hotlist="%16$s" calendar="%17$s" stocktwits="%18$s" headlines="%19$s" hideideas="%20$s" hideideasbutton="%21$s" referral_id="%22$s"]',
                    $symbol,$widthstr,$locale,$interval,$timezone,$theme,$style,$toolbar_bg,$enable_publishing,$hide_top_toolbar,$withdateranges,$hide_side_toolbar,$allow_symbol_change,$save_image,$details,$hotlist,$calendar,$stocktwits,$headlines,$hideideas,$hideideasbutton,$referral_id);
                    ?>

                </code>
            </p>
            <?php
           endif;

            settings_fields('tv_chart_op_group');
            do_settings_sections('tv_chart');
          }
            submit_button('Save Settings');

            tv_dashboard_widget_function();

?>


        </form>
    </div>
    <?php
}

function tv_dashboard_widget_function() {
     $rss = fetch_feed( "http://tradepips.com/feed/" );

     echo '<div style="position:absolute;right:40px;width:25%;top:150px;padding:10px;background:#F8F8F8;">
     <h4 style="padding:6px 0;text-transform:uppercase;">Support this plugin, like our facebook page</h4>
     <div class="fb-like" data-href="https://www.facebook.com/tradepips/" data-width="200" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
     <br>
     <br>
     <hr>
     <h2 style="padding:6px 0 6px 10px;background:#0fbe7c;color:#FFF;text-transform:uppercase;"><a href="http://tradepips.com/" style="color:#FFF;text-decoration:none;">Latest from tradepips</a></h2>';

     if ( is_wp_error($rss) ) {
          if ( is_admin() || current_user_can( 'manage_options' ) ) {
               echo '<p>';
               printf( __( '<strong>RSS Error</strong>: %s' ), $rss->get_error_message() );
               echo '</p>';
          }
     return;
    }

    if ( !$rss->get_item_quantity() ) {
         echo '<p>Apparently, there are no updates to show!</p>';
         $rss->__destruct();
         unset($rss);
         return;
    }

    echo "<ul>\n";

    if ( !isset($items) )
     $items = 3;

     foreach ( $rss->get_items( 0, $items ) as $item ) {
          $publisher = '';
          $site_link = '';
          $link = '';
          $content = '';
          $date = '';
          $link = esc_url( strip_tags( $item->get_link() ) );
          $title = esc_html( $item->get_title() );
          $content = $item->get_content();
          $content = wp_html_excerpt( $content, 100 ) . ' ...';

         echo "<li><a class='rsswidget' href='$link'>$title</a>\n<div class='rssSummary'>$content</div>\n";
       }

    echo "</ul></div>\n";
    $rss->__destruct();
    unset($rss);
  }
  
?>