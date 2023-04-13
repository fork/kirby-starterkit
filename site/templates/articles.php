<?php snippet('layout', slots: true) ?>

<main class="max-w-content mx-auto my-xl">
  <?php snippet('components/text', [
    'text' => $page->title(),
    'variant' => 'headline-1',
    'tag' => 'h1'
  ]) ?>
</main>

<?= snippet('blocks') ?>
