<?php

namespace Lucena\BrazilAddress\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class CustomerAddCustomAttributesListener
{
    protected $request;

    /**
     * Create the event listener.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(\Webkul\Customer\Models\CustomerAddress $address)
    {
        $save = false;
        if ($this->request->has('district')) {
            $address->district = $this->request->get('district');
            $save = true;
        }

        if ($this->request->has('number')) {
            $address->document = $this->request->get('number');
            $save = true;
        }

        if ($save) {
            $address->save();
        }
    }
}