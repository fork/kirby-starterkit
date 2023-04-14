<?php
/* Defaults */
$text = $text ?? '';
$href = $href ?? null;
$active = $active ?? false;

$class = 'inline-flex text-copy-small md:text-copy-small-md font-bold text-neutral-10 px-xs py-xxs disabled:text-primary-50';
$background = $active ? 'bg-interaction-50' : 'bg-neutral-90';

$tag = $href ? 'a' : 'span'
?>

<<?= $tag ?> class="<?= $class ?> <?= $background ?>" <?php if ($href): ?>href="<?= $href ?>"<?php endif ?>>
  <?= $text ?>
</<?= $tag ?>>
