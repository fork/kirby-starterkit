<?php snippet('layout', slots: true) ?>

<main>
  <?php snippet('components/stage', [
      'title' => $page->headline()->or($page->title()),
      'intro' => $page->intro(),
  ]) ?>
</main>

<?= snippet('blocks') ?>
