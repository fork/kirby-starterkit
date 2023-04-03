<?php

Kirby::plugin('fork/block-factory', [
  'blueprints' => [
    'blocks/accordion'   => __DIR__ . '/blueprints/blocks/accordion.yml'
  ],
  'snippets' => [
    'blocks/accordion'   => __DIR__ . '/snippets/blocks/accordion.php'
  ],
  'translations' => [
    'en' => [
      'field.blocks.accordion.name'   => 'Accordion'
    ]
  ],
]);
