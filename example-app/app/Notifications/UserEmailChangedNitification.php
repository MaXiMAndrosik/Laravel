<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserEmailChangedNitification extends Notification
{
    use Queueable;

    private string $old_email;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $old_email) {
        $this->old_email = $old_email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array {
        return [
            'user_id' => $notifiable->id,
            'old_email' => $this->old_email,
            'new_email' => $notifiable->email,
        ];
    }
}
