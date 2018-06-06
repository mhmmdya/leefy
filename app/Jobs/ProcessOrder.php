<?php

namespace App\Jobs;

use App\Order;

class ProcessOrder extends Job
{
    public $order;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->order->professional === null) {
            // Send mail or sms.

            return $this->release(60);
        }

        return $this->delete();
    }
}
