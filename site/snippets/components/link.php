<?php
// Defaults
$target = $target ?? '_self';
$icon = $icon ?? null;
$text = $text ?? '';
$href = $href ?? '';
?>

<a class="flex text-copy lg:text-copy-lg font-bold underline-offset-4 decoration-2 hover:underline active:text-primary-90 disabled:text-primary-50" href="<?= $href ?>" target="<?= $target ?>" <?php e($current, 'aria-current') ?>>
  <?= $text ?>

  <?php if ($icon): ?>
    <div class="w-m ml-xs">
      <?= svg('assets/icons/'.$icon.'.svg') ?>
    </div>
  <?php endif; ?>
</a>
