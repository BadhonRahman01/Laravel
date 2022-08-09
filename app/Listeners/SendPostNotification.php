<?php

namespace App\Listeners;

use App\Events\PostProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPostNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostProcess  $event
     * @return void
     */
    public function handle(PostProcess $event)
    {
        //
    }
}
