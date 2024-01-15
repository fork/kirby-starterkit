<?php
// Defaults
$target = $target ?? '_self';
$icon = $icon ?? null;
$text = $text ?? '';
$href = $href ?? null;
$current = $current ?? false;
$tag = $href ? 'a' : 'span';

$class = 'flex text-copy md:text-copy-md font-bold underline-offset-4 decoration-2 hover:underline group-hover:underline aria-[current=true]:underline active:text-primary-90 disabled:text-primary-50';
?>

<<?= $tag ?> class="<?= $class ?>" <?php if ($href) : ?>href="<?= $href ?>" <?php endif ?> <?php if ($target) : ?>target="<?= $target ?>" <?php endif ?> <?php e($current, 'aria-current="true"') ?>>
  <?= $text ?>

  <?php if ($icon) : ?>
    <div class="w-m ml-xs">
      <?= svg('assets/icons/'.$icon.'.svg') ?>
    </div>
  <?php endif; ?>
</<?= $tag ?>>