<?php

declare(strict_types=1);

return [
    'response' => [
        /*
         * This setting is responsible for applying middleware to routes.
         *
         * You can specify route group names to apply the `SetHeaderMiddleware`
         * middleware to them, or specify null to apply it to all routes.
         *
         * For example,
         *
         *   json => null
         *   json => 'api'
         *   json => ['api', 'web']
         */
        'json' => null,
    ],
];
