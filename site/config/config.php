<?php

return [
  'hooks' => [],
  'routes' => [],
  'cache' => [
    'pages' => [
      'active' => true,
      'type'   => 'static'
    ]
  ],
  'auth' => [
    'methods' => ['password', 'password-reset'],
    'challenge' => [
      'timeout' => 5000 * 60, // 5 minutes
      'email' => [
        'from'     => 'mail@example.com',
        'fromName' => 'My example project',
        'subject'  => 'Login code'
      ]
    ]
  ],
];
