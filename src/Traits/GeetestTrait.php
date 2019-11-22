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
        $user_id = 'geetest';
        $status = Geetest::preProcess(['user_id' => $user_id]);
        echo Geetest::getResponseStr();
    }
}
