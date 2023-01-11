<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailShipping extends Mailable
{
    use Queueable, SerializesModels;

    public array $mailData = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
        $this->mailData = $user;
    }

    /**
     * build the message
     *
     * @return MailShipping
     */
    public function build(): MailShipping
    {
        return $this->from('contact@gmail.com', 'Contact Laravel')
                    ->subject('Demande de contact')
                    ->view('mail.template');
    }
}
