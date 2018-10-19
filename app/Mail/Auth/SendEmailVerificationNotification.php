<?php

namespace App\Mail\Auth;

use App\Models\Entities\Token;
use App\Models\Entities\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailVerificationNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\Entities\User
     */
    private $user;

    /**
     * @var \App\Models\Entities\Token
     */
    private $token;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Entities\User $user
     * @param \App\Models\Entities\Token $token
     */
    public function __construct(User $user, Token $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
