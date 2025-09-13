<?php

namespace App\Mail;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailBooking extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(protected Booking $booking)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $formType = $this->booking->form_type == 'form_1' ? "Form 1" : "Form 2";
        return new Envelope(
            subject: "Booking mới từ {$this->booking->name} - {$formType}",
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $created_at = Carbon::parse($this->booking->created_at)->format('Y-m-d H:i');
        $data  = [
            'customerName' => $this->booking->name,
            'form_type' => $this->booking->form_type  == 'form_1' ? "Form 1" : "Form 2",
            'created_at' => $created_at,
            'phone' => $this->booking->phone,
            'address' => $this->booking->address,
            'email' => $this->booking->email,
            'note' => $this->booking->note,
            'count_combo' => $this->booking->count_combo,
        ];
        return new Content(
            view: 'emails.booking',
            with: $data
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
