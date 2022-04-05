<?php

namespace App\Providers;

use App\Providers\NewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmail
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
     * @param  \App\Providers\NewPost  $event
     * @return void
     */
    public function handle(NewPost $event)
    {
        Artisan::call('john:sendemails',[
            'post' => $event->post->id
    ]);
    }
}
