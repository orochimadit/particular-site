<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Emails';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $post = Post::findOrFail($this->argument('post'));

        $subscribers = $post->website->subscribers->each(function ($subscriber) use ($post) {

            Mail::to($subscriber->subscriber->email)
                    ->send(new NewPostsToWebsiteMail($post));

        });
    }
}
