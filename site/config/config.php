<?php

return [
  'hooks' => [],
  'routes' => [
    [
      // articles overview is not a page itself but just a container
      'pattern' => 'articles',
      'action' => fn () => false
    ],
    [
      'pattern' => 'media',
      'action' => fn () => false,
    ],
    [
      'pattern' => 'sitemap.xml',
      'action'  => function () {
          $pages = site()->pages()->index();

          // fetch the pages to ignore from the config settings,
          // if nothing is set, we ignore the error page
          $ignore = kirby()->option('sitemap.ignore', ['error']);

          $content = snippet('sitemap', compact('pages', 'ignore'), true);

          // return response with correct header type
          return new Kirby\Cms\Response($content, 'application/xml');
      }
    ],
    [
      'pattern' => 'sitemap',
      'action'  => function () {
          return go('sitemap.xml', 301);
      }
    ]
  ],
  'sitemap.ignore' => ['error'],
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
  'arnoson.kirby-vite' => [
    'entry' => 'main.ts',
    'outDir' => 'assets/dist'
  ]
];
