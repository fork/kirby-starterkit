<?php snippet('layout', slots: true) ?>

<main class="max-w-content mx-auto my-xl">
  <?php snippet('components/text', [
    'text' => $page->title(),
    'variant' => 'headline-1',
    'tag' => 'h1'
  ]) ?>

  <?= snippet('blocks') ?>
</main>

<?php if (!empty($relatedArticles)): ?>
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
