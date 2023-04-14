<?php
// Defaults
$title = $title ?? '';
$image = $image ?? null;

$crops = [];
?>

<section class="max-w-content mx-auto my-xl">
  <?php if ($image): ?>
    <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
  <?php endif; ?>

  <?php snippet('components/text', [
      'text' => $title,
      'variant' => 'headline-1',
      'tag' => 'h1',
  ]) ?>
</section>