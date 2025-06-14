<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendMessage extends Notification
{
    use Queueable;

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
     }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
   public function toDatabase($notifiable)
    {
        return [
            'id' => $this->data->id,
            'name' => $this->data->name,
            'subject' => $this->data->subject,
            'email' => $this->data->email,
            'message' => "Your have new contact message."
        ];
    }
}
