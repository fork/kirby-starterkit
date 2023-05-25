<?php if (isset($block)) : ?>
  <div class="grid-container">
    <div class="col-span-4 md:col-start-3 md:col-span-8 mb-l">
      <?php if ($block->headline()->isNotEmpty()) : ?>
        <h3 class="headline-3 mb-l"><?= $block->headline() ?></h3>
      <?php endif; ?>

      <?php foreach ($block->items()->toStructure() as $item) : ?>
        <div class="flex flex-col md:grid md:grid-cols-8 gap-s md:gap-m border-b-2 pb-m mb-m">
          <div class="md:col-span-2">
            <p class="copy font-bold"><?= $item->title() ?></p>
          </div>

          <div class="md:col-span-6">
            <div class="richtext">
              <?= $item->text() ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>