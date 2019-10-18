<?php
Route::get('geetest', ['as' => 'geetest', 'uses' => 'CodeMonkeyLuffy\Geetest\Controllers\GeetestController@captcha', 'middleware' => 'web']);
