<?php

namespace CodeMonkeyLuffy\Geetest\Validators;

use CodeMonkeyLuffy\Geetest\Facades\Geetest;

class GeetestValidator
{

    /**
     * 验证规则
     */
    public function validate()
    {
        list($geetest_challenge, $geetest_validate, $geetest_seccode) = array_values(request()->only('geetest_challenge', 'geetest_validate', 'geetest_seccode'));
        if (Geetest::successValidate($geetest_challenge, $geetest_validate, $geetest_seccode, ['user_id' => session()->get('user_id')])) {
            return true;
        }
        return false;
    }
}
