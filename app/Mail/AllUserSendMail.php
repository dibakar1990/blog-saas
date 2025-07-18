<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;

class AllUserSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $appName = config('app.name');
        $from = $appName;
       
        $from_address = config('app.form_address');
        
        return new Envelope(
            from: new Address($from_address, $from),
            subject: 'test mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
      
        return new Content(
            view: 'vendor.mail.testMail',
            with: [
                'name' => $this->user['name'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
