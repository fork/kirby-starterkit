<?php snippet('layout', slots: true) ?>

<main>
  <?php snippet('components/stage', [
      'topline' => $page->created()->toDate('d.m.Y'),
      'title' => $page->title(),
      'tags' => $page->tags()->split(),
      'image' => $page->cover()->toFile(),
  ]) ?>

  <?= snippet('blocks') ?>
</main>

<?php if (isset($relatedArticles) && $relatedArticles->isNotEmpty()) : ?>
  <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-x-m max-w-default mx-auto px-m mb-xxxl">
    <h2 class="headline-3 md:col-span-2 lg:col-span-3 mb-l"><?= t('relatedArticles') ?></h2>

    <?php foreach ($relatedArticles as $article) : ?>
      <?php snippet('components/teaser', [
          'topline' => $article->created()->toDate('d.m.Y'),
          'title' => $article->title(),
          'excerpt' => $article->excerpt(),
          'url' => $article->url(),
          'image' => $article->cover()->toFile(),
      ]) ?>
    <?php endforeach ?>
  </div>
<?php endif ?>