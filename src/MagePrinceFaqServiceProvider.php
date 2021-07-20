<?php

namespace Rapidez\MagePrinceFaq;

use Illuminate\Support\ServiceProvider;

class MagePrinceFaqServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mageprincefaq');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/rapidez/mageprince-faq'),
        ], 'views');
    }
}
