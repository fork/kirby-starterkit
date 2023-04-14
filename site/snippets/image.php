<?php
/*
  snippet('image', [
    'class' => 'blog',
    'src' => $image->thumb([
      'width' => 300,
      'height' => 300,
      'quality' => 80,
      'crop' => center,
      'quality' => 80]
      )->url(),
    'srcset' => [
      '300w'  => ['width' => 300, 'height' => 300, 'crop' => 'center', 'quality' => 80],
      '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => 'center', 'quality' => 80],
    ],
    'sizes' => '(min-width: 1280px) 25vw, (min-width: 1024px) 50vw, 100vw',
    'loading' => 'eager',
    'class' => 'myImage'
  ])
 */
?>
<?php if ($image && $src): ?>
    <img
        alt="<?= $image->alt() ?>"
        src="<?= $src ?>"
        loading="<?= $loading ?: 'lazy'; ?>"
        <?php if ($srcset): ?>srcset="<?= $image->srcset($srcset) ?>"<?php endif ?>
        <?php if ($class): ?>class="<?= $class ?>"<?php endif ?>
        width="<?= $width ? $width : $image->width(); ?>"
        height="<?= $height ? $height : $image->height(); ?>"
    >
<?php endif ?>