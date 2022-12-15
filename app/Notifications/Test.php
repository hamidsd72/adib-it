<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Test extends Notification
{
    use Queueable;

    public $full_name;
    public $number;
    public $page;
    public $email;
    public $body;

    public function __construct($full_name , $number, $page, $email, $body) {
        $this->full_name = $full_name; 
        $this->number = $number; 
        $this->page = $page; 
        $this->email = $email; 
        $this->body = $body; 
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    { 
        return (new MailMessage)
                    ->subject('پیام از بخش ارتباط صفحات لندینگ')
                    ->line(' عنوان صفحه '.$this->page)
                    ->line(' نام کامل '.$this->full_name)
                    ->line(' شماره تماس '.$this->number)
                    ->line(' شماره تماس '.$this->email)
                    ->line($this->body)
                    ->action('adib-it.com', url('/'));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
