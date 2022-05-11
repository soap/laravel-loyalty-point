<?php

namespace Soap\LaravelLoyaltyPoint\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PointsGiven implements ShouldBroadcast
{
    public function __construct()
    {
    }

    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
    }
}
