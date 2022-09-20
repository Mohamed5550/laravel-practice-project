<?php

namespace App\Listeners;

use App\Events\BecameHappy;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class PrintSomeoneIsHappy
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
     * @param  \App\Events\BecaeHappy  $event
     * @return void
     */
    public function handle(BecameHappy $event)
    {
        Log::info($event->userName . " became happy because " . $event->reason);
    }
}
