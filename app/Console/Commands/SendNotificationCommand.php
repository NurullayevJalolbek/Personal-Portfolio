<?php

namespace App\Console\Commands;

use App\Models\Notification\UserNotification;
use Illuminate\Console\Command;

class SendNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifications are sent by Firebase';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            UserNotification::job();
            $this->info('Successfully');
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }
    }
}
