<?php

namespace App\Listeners;

use App\Config\Environment;
use App\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer;
use App\Mail\Auth\SendEmailVerificationNotification;

class EmailVerificationNotification
{
    use Environment;

    /**
     * @var \Illuminate\Mail\Mailer
     */
    private $mailer;

    /**
     * Create the event listener.
     *
     * @param \Illuminate\Mail\Mailer $mailer
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        if ($this->isProd()) {
            $this->mailer->send(new SendEmailVerificationNotification($event->user, $event->token));
        }

        info('Sending mail: SendEmailVerificationNotification');
    }
}
