<?php

namespace App\Events;

use App\User;
use App\Attraction;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class LikeAttraction
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $type;
    public $post;

    /**
     * Create a new event instance.
     *
     * @param App\Post $post
     * @param string $type
     *
     * @return void
     */
    public function __construct(Attraction $post, string $type)
    {
        $this->post = $post;
        $this->type = $type;
        $this->user = auth()->user();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
