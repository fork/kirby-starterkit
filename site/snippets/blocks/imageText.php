<?php if (isset($block)) : ?>
  <?php
  $image = $block->image()->toFile();
  $imagePosition = $block->imagePosition();

  $imageColumns = $imagePosition == 'left' ? 'md:col-start-1' : 'md:col-start-7';
  $textColumns = $imagePosition == 'left' ? 'md:col-start-6' : 'md:col-start-1';
  ?>


  <div class="grid-container">
    <div class="col-span-4 md:col-start-2 md:col-span-10 mb-xxl md:grid md:grid-cols-10">
      <?php if ($block->headline()->isNotEmpty()) : ?>
        <h3 class="headline-3 mb-m md:col-span-5 <?= $textColumns ?>"><?= $block->headline() ?></h3>
      <?php endif; ?>

      <div class="<?= $textColumns ?> mb-m md:col-span-5 md:row-start-2">
        <div class="richtext">
          <?= $block->text() ?>
        </div>
      </div>

      <figure class="md:row-start-2 md:col-span-4 <?= $imageColumns ?>">
        <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>" class="w-full">

        <?php if ($image->caption()->isNotEmpty()) : ?>
          <figcaption class="mt-s">
            <p class="copy-small"><?= $image->caption() ?></p>
          </figcaption>
        <?php endif; ?>
      </figure>
    </div>
  </div>
<?php endif; ?>