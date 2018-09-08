<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class NewThreadMessageEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $thread;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($thread, $message)
    {
        $this->thread = $thread;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('chat.thread.'.$this->thread->id);
//        return new Channel('public-test-channel');

    }
}
