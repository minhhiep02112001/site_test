<?php

namespace App\Listeners;

use App\Events\Ordered;
use App\Mail\SendEmailBooking;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailBooking // implements ShouldQueue
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
     * @param  \App\Events\Ordered  $event
     * @return void
     */
    public function handle($data)
    {
        if (is_object($data)) {
            $data = $data->data;
        }


        try {
            $to = !empty($data['form_type']) && $data['form_type']  == 'form_1' ? config('data.email_receiver_1') : config('data.email_receiver_1');
            $email = new SendEmailBooking($data); 
            Mail::to($to)->send($email);
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
