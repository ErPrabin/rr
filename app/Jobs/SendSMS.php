<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $number;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($number)
    {
        $this->number=$number;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("698b7704", "X3dwg1lmZtmAY6Xm");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($this->number, "SmartCric", 'Your Food Has Been Packed.')
        );
    }
}
