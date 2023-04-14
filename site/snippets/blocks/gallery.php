<?php use Kirby\Cms\Html;

?>

<?php if(isset($block)): ?>
  <?php
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
<?php endif; ?>
