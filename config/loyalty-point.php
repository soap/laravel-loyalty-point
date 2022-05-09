<?php
// config for Soap/LaravelLoyaltyPoint
return [
    'broadcast' => [
        /*
         *
         * Event broadcast name.
         *
         * The Pointable channel to broadcast to.
         *
         */
        'name' => 'points-givent',

        /*
         *
         * Broadcast channel.
         *
         * The prefix for the users channel to broadcast to.
         *
         * For example: 'users.' will be 'users.{id}'
         *
         */
        'channels' => ['users.', 'students.']
    ]
];
