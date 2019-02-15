<?php

return [
    'supportsCredentials' => true,
    'allowedOrigins' => [
        env('WEB_URL', 'http://website.local'),
        env('WEB_DEV_URL', 'http://website.local:1234')
    ],
    'allowedOriginsPatterns' => ['#*#'],
    'allowedHeaders' => ['#*#'],
    'allowedMethods' => ['*'],
    'exposedHeaders' => [],
    'maxAge' => 0
];