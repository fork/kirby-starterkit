<?php snippet('header'); ?>

<h1><?= $page->title() ?></h1>

<?php foreach ($page->blocks()->toBlocks() as $block): ?>
<div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
  <?php snippet('blocks/' . $block->type(), [
    'block' => $block
  ]) ?>
</div>
<?php endforeach ?>
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

