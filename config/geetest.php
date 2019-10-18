<?php
return [

    /*
   |--------------------------------------------------------------------------
   | Config Width
   |--------------------------------------------------------------------------
   |
   | Here you can config width of button.
   |
   | Options: ['px', '%', 'em', 'rem', 'pt']
   |
   */

    'width' => '300px',

    /*
    |--------------------------------------------------------------------------
    | Config Language
    |--------------------------------------------------------------------------
    |
    | Here you can config your yunpian api key from yunpian provided.
    |
    | Options: ['zh-cn', 'zh-tw', 'en', 'ja', 'ko']
    |
    */
    'lang' => 'zh-cn',

    /*
    |--------------------------------------------------------------------------
    | Config Geetest Id
    |--------------------------------------------------------------------------
    |
    | Here you can config your yunpian api key from yunpian provided.
    |
    */
    'geetest_id' => env('GEETEST_ID'),

    /*
    |--------------------------------------------------------------------------
    | Config Geetest Key
    |--------------------------------------------------------------------------
    |
    | Here you can config your yunpian api key from yunpian provided.
    |
    */
    'geetest_key' => env('GEETEST_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Config Geetest URL
    |--------------------------------------------------------------------------
    |
    | Here you can config your geetest url for ajax validation.
    |
    */
    'url' => '/geetest',

    /*
    |--------------------------------------------------------------------------
    | Config Geetest Protocol
    |--------------------------------------------------------------------------
    |
    | Here you can config your geetest url for ajax validation.
    |
    | Options: http or https
    |
    */
    'protocol' => 'https',

    /*
    |--------------------------------------------------------------------------
    | Config Geetest Product
    |--------------------------------------------------------------------------
    |
    | Here you can config your geetest url for ajax validation.
    |
    | Options: float, popup, custom, bind
    |
    */
    'product' => 'float',

    /*
    |--------------------------------------------------------------------------
    | Config Client Fail Alert Text
    |--------------------------------------------------------------------------
    |
    | Here you can config the alert text when it failed in client.
    |
    */
    'client_fail_alert' => '请正确完成验证码操作',

    /*
    |--------------------------------------------------------------------------
    | Config Server Fail Alert
    |--------------------------------------------------------------------------
    |
    | Here you can config the alert text when it failed in server (two factor validation).
    |
    */
    'server_fail_alert' => '验证码校验失败',

    /*
    |--------------------------------------------------------------------------
    | Config Client Loading Text
    |--------------------------------------------------------------------------
    |
    | Here you can config Loading Text
    |
    */
    'loading' => '验证码正在加载中',

];
