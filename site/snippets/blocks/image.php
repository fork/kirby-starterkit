<?php

use Kirby\Toolkit\Str;
use Kirby\Toolkit\Html;

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$src     = null;

if ($image = $block->image()->toFile()) {
    $alt = $alt->or($image->alt());
    $src = $image->url();
}

?>
<?php if ($src): ?>
<figure>
  <img src="<?= $src ?>" alt="<?= $alt->esc() ?>">
  <?php if ($caption->isNotEmpty()): ?>
  <figcaption>
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>