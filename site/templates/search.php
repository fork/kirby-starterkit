<?php snippet('header') ?>

<ul>
  <?php foreach ($results ?? [] as $result): ?>
  <li>
    <a href="<?= $result->url() ?>">
        <?= $result->title() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php if(isset($pagination)): ?>
<nav>
  <ul>

    <?php if ($pagination->hasPrevPage()): ?>
    <li>
      <a href="<?= $pagination->prevPageURL() ?>">‹</a>
    </li>
    <?php else : ?>
    <li>
      <span>‹</span>
    </li>
    <?php endif ?>

    <?php foreach ($pagination->range(10) as $r): ?>
    <li>
      <a<?= $pagination->page() === $r ? ' aria-current="page"' : '' ?> href="<?= $pagination->pageURL($r) ?>">
        <?= $r ?>
      </a>
    </li>
    <?php endforeach ?>

    <?php if ($pagination->hasNextPage()): ?>
    <li>
      <a href="<?= $pagination->nextPageURL() ?>">›</a>
    </li>
    <?php else: ?>
    <li>
      <span>›</span>
    </li>
    <?php endif ?>

  </ul>
</nav>

<?php endif ?>

<?php snippet('footer') ?>