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

<?php if (! empty($relatedArticles)): ?>
  <h2><?= t('relatedArticles') ?></h2>

  <ul>
    <?php foreach($relatedArticles as $article): ?>
    <li>
      <a href="<?= $article['url'] ?>">
      <?= $article['content']['title'] ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>
