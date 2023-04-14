<?php snippet('layout', slots: true) ?>

<main>
  <?php snippet('components/stage', [
      'title' => $page->title(),
      'image' => $page->cover()->toFile(),
  ]) ?>

  <?= snippet('blocks') ?>
</main>

