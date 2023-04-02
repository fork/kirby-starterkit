<?php snippet('header'); ?>

<h1><?= $page->title() ?></h1>

<?php
if (!empty($relatedArticles)):
    ?>
  <h2>Related articles</h2>
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

<?php snippet('footer'); ?>

