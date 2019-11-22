<?php

namespace CodeMonkeyLuffy\Geetest\Traits;

use CodeMonkeyLuffy\Geetest\Facades\Geetest;

trait GeetestTrait
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function captcha()
    {
        $user_id = 'test';
        $status = Geetest::preProcess(['user_id' => $user_id]);
        cache()->put('gtserver', $status, 300);
        cache()->put('user_id', $user_id, 300);
        echo Geetest::getResponseStr();
    }
}
