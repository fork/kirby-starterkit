<?php
die(var_dump($block));
use Kirby\Cms\Html;

$caption = $block->caption();
$crop = $block->crop()->isTrue();
$ratio = $block->ratio()->or('auto');

$attr = Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop]);
?>
<figure<?= $attr ?>>
  <ul>
    <?php foreach ($block->images()->toFiles() as $image): ?>
    <li>
      <?= $image ?>
    </li>
    <?php endforeach ?>
  </ul>
  <?php if ($caption->isNotEmpty()): ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
