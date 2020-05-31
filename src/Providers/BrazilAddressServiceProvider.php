<?php

namespace Lucena\BrazilAddress\Providers;

use Illuminate\Support\ServiceProvider;

class BrazilAddressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*$this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );*/

        $this->app->register(EventServiceProvider::class);

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'braddress');

        $this->loadJSONTranslationsFrom(__DIR__ . '/../Resources/lang');

        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');
    }
}
