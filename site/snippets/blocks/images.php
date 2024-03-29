<?php if (isset($block)) : ?>
  <?php
  $images = $block->images()->toFiles();
    $multiple = count($images) > 1;

    $class = $multiple ? 'col-span-1' : 'col-span-2';
    ?>

  <div class="grid-container">
    <div class="col-span-4 md:col-span-12 md:grid md:grid-cols-2 md:gap-x-m">
      <?php foreach ($images as $item) : ?>
        <figure class="<?= $class ?> mb-l">
          <img src="<?= $item->url() ?>" alt="<?= $item->alt()->esc() ?>" class="w-full">

          <?php if ($item->caption()->isNotEmpty()) : ?>
            <figcaption class="mt-s">
              <p class="copy-small"><?= $item->caption() ?></p>
            </figcaption>
          <?php endif; ?>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
