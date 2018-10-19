<?php

namespace App\Events;

use App\Models\Entities\Token;
use App\Models\Entities\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Registered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var \App\Models\Entities\User
     */
    public $user;

    /**
     * @var \App\Models\Entities\Token
     */
    public $token;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\Entities\User $user
     * @param \App\Models\Entities\Token $token
     * @return void
     */
    public function __construct(User $user, Token $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
