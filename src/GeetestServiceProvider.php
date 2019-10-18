<?php

namespace CodeMonkeyLuffy\Geetest;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class GeetestServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__ . '/../config/geetest.php' => config_path('geetest.php'),
        ]);
        // 发布视图文件
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'geetest');
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/geetest'),
        ]);
        // 注册路由
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }
        // 扩展验证规则
        Validator::extend('geetest', 'CodeMonkeyLuffy\Geetest\Validators\GeetestValidator@validate');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('geetest', function ($app) {
            return $app->make('CodeMonkeyLuffy\Geetest\Libs\GeetestLib');
        });
    }
}
