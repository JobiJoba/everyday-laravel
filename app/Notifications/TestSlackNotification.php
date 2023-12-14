<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class TestSlackNotification extends Notification
{
    public function __construct()
    {
    }

    public function via($notifiable): array
    {
        return ['slack'];
    }

    public function toSlack($notifiable): SlackMessage
    {
        return (new SlackMessage)
            ->content('Slack notifications work only with laravel/slack-notification-channel package');
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
