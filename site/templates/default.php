<?php snippet('layout', slots: true) ?>

<main>
  <?php snippet('components/stage', [
    'title' => $page->title(),
    'image' => $page->cover()->toFile()
  ]) ?>
</main>

<?= snippet('blocks') ?>
