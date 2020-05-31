<?php

namespace Lucena\BrazilAddress\Providers;

use Lucena\BrazilAddress\Listeners\AddressCustomListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Log;
class EventServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Address
        Event::listen('bagisto.shop.customers.account.address.create_form_controls.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('braddress::address.create');
        });  

        Event::listen('bagisto.shop.customers.account.address.edit_form_controls.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('braddress::address.edit');
        });

        // Update user info with news attributes
        Event::listen('customer.addresses.create.after', AddressCustomListener::class);
    }
}
