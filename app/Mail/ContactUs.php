<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $senderEmail;
    public $senderName;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $senderEmail, string $senderName, string $message)
    {
        $this->senderEmail = $senderEmail;
        $this->senderName = $senderName;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-us');
    }
}
