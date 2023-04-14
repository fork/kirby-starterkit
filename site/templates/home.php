<?php

snippet('layout', slots: true) ?>

<main class="grid-container">
  <div class="col-span-4 md:col-start-3 md:col-span-8 mb-xl flex gap-xs flex-wrap mt-l">
    <h2 class="headline-2"><?= $articles['headline'] ?></h2>

    <div class="richtext">
      <?= $articles['intro'] ?>
    </div>
  </div>

  <div class="col-span-12 md:grid md:grid-cols-2 lg:grid-cols-3 gap-x-m gap-y-xl">
    <?php foreach ($articles['items'] ?? [] as $article) : ?>
      <?php snippet('components/teaser', [
          'topline' => $article->created()->toDate('d.m.Y'),
          'title' => $article->title(),
          'excerpt' => $article->excerpt(),
          'url' => $article->url(),
          'image' => $article->cover()->toFile(),
      ]) ?>
    <?php endforeach ?>
  </div>
</main>

<?= snippet('blocks') ?>