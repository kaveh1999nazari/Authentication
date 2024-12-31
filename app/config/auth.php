<?php

use Spiral\Core\Container\Autowire;

return [
    // ...
    'storages' => [
        'session' => \Spiral\Auth\Session\TokenStorage::class,
        'jwt' => new Autowire(\App\Domain\Auth\Storage\JwtTokenStorage::class, [
            'secret' => 'secret',
            'algorithm' => 'HS256',
            'expiresAt' => '+30 days',
        ]),
    ],
];
