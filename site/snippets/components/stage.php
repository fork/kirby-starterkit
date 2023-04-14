<?php
// Defaults
$title = $title ?? '';
$topline = $topline ?? null;
$intro = $intro ?? null;
$image = $image ?? null;
$tags = $tags ?? null;

?>

<section class="grid-container my-xl">
  <?php if ($image): ?>
    <div class="col-span-4 md:col-span-12 aspect-w-16 aspect-h-9 mb-l">
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
    </div>
  <?php endif; ?>

  <div class="col-span-4 md:col-start-3 md:col-span-8">
    <?php if ($topline): ?>
      <?php snippet('components/text', [
          'text' => $topline,
          'tag' => 'p',
      ]) ?>
    <?php endif; ?>
    
    <?php snippet('components/text', [
        'text' => $title,
        'variant' => 'headline-1',
        'tag' => 'h1',
    ]) ?>

    <?php if ($intro): ?>
      <div class="mt-s">
        <?php snippet('components/richtext', slots: true) ?>
          <?= $intro ?>
        <?php endsnippet() ?>
      </div>
    <?php endif; ?>

    <?php if ($tags): ?>
      <div class="flex mt-s gap-xs">
        <?php foreach ($tags as $tag): ?>
          <?php snippet('components/tag', [
              'text' => $tag,
          ]) ?>
        <?php endforeach ?>
      </div>
    <?php endif; ?>
  </div>
</section>