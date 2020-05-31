<?php

namespace Lucena\BrazilAddress\Providers;

use Lucena\BrazilAddress\Listeners\AddressCustomListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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
        Event::listen('customer.addresses.create.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('braddress::address.create.blade');
        });
/*
        Event::listen('bagisto.shop.customers.account.profile.edit_form_controls.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::profile.person-type');
        });

        Event::listen('bagisto.shop.customers.account.profile.view.table.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::profile.index');
        });

        // Admin
        Event::listen('bagisto.admin.customers.create.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::signup.person-type');
        });

        Event::listen('bagisto.admin.customer.edit.form.before', function($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('brcustomer::profile.person-type');
        });
*/

        // Update user info with news attributes
        Event::listen('customer.addresses.create.after', AddressCustomListener::class);
        //Event::listen('customer.update.after', AddressCustomListener::class);

    }
}
