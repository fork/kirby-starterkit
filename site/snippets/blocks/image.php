<?php

$images = $block->image()->toFiles();
$multiple = count($images) > 1;
?>

<div class="">
  <?php foreach ($images as $item): ?>
  <figure>
    <img src="<?= $item->url() ?>" alt="<?= $item->alt()->esc() ?>">

    <?php if ($item->caption()->isNotEmpty()): ?>
      <?php snippet('components/text', [
        'text' => $item->caption(),
        'tag' => 'figcaption'
      ]) ?>
    <?php endif; ?>
  </figure>
  <?php endforeach ?>
</div>