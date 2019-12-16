<?php

namespace Achraf\laravelEmojiConverter;

use Illuminate\Support\ServiceProvider;

class LaravelEmojiConverterServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel_emoji_converter.php' => config_path('laravel_emoji_converter.php'),
            ], 'laravel-emoji-converter-config');
        }
    }
    /**
     * Make config publishment optional by merge the config from the package.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel_emoji_converter.php',
            'laravel_emoji_converter'
        );
    }
}
