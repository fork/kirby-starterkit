<?php if (isset($block)) : ?>
  <div class="grid-container">
    <div class="richtext col-span-4 md:col-start-3 md:col-span-8 mb-xl">
      <?= $block->text(); ?>
    </div>
  </div>
<?php endif; ?>