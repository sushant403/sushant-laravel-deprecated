<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->subject = $contact->subject;
        $this->message = $contact->message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('contact@sushantp.com.np', 'Sushant Poudel Site')
            ->subject('Hey Alpha, Someone contacted you')
            ->greeting('Hello Sushant,')
            ->line('Your contact request is as the following details.')
            ->line('Name: ' . $this->name)
            ->line('Email: ' . $this->email)
            ->line('Subject: ' . $this->subject)
            ->line('Message: ' . $this->message)
            ->line('That is it for now. Peace.')
            ->action('Goto your Panel', route('admin.index'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
