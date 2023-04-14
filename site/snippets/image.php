<?php
/* Defaults */

$loading = $loading ?? 'lazy';

$thumb = $image->thumb($src);

/*
  snippet('image', [
    'image' => $image,
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
    'loading' => 'Lazy'
  ])
 */
?>

<?php if (isset($image) && isset($src)): ?>
    <img
        alt="<?= $image->alt() ?>"
        width="<?= $thumb->width() ?>"
        height="<?= $thumb->height() ?>"
        src="<?= $thumb->url() ?>"
        loading="<?= $loading ?>"
        <?php if (isset($srcset)): ?>srcset="<?= $image->srcset($srcset) ?>"<?php endif ?>
        <?php if (isset($sizes)): ?>sizes="<?= $sizes ?>"<?php endif ?>
        <?php if (isset($class)): ?>class="<?= $class ?>"<?php endif ?>
    >
<?php endif ?>