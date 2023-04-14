<?php
// Defaults
$title = $title ?? '';
$topline = $topline ?? null;
$excerpt = $excerpt ?? null;
$url = $url ?? null;
$image = $image ?? null;

?>

<article>
  <a href="<?= $url ?>" class="block">
    <div class="aspect-w-16 aspect-h-9 mb-l bg-neutral-10">
      <?php if ($image) : ?>
        <?=
        snippet('image', [
          'image' => $image,
          'class' => 'blog',
          'src' => [
            'width' => 1600,
            'height' => 900,
            'quality' => 80,
            'crop' => 'center',
          ],
          'srcset' => [
            '1200w' => ['width' => 1200, 'height' => 675, 'crop' => 'center', 'quality' => 80],
          ],
          'sizes' => '(min-width: 1200px) 1200px, 100vw',
        ])
        ?>
      <?php endif; ?>
    </div>

    <?php if ($topline) : ?>
      <p class="copy mt-m"><?= $topline ?></p>
    <?php endif; ?>

    <h2 class="headline-3"><?= $title ?></h2>

    <?php if ($excerpt) : ?>
      <div class="mt-s mb-m">
        <p class="copy"><?= $excerpt ?></p>
      </div>
    <?php endif; ?>

    <?php snippet('components/link', [
      'text' => t('readMore'),
    ]) ?>
  </a>
</article>