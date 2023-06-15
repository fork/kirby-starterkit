<?php if (isset($block)) : ?>
  <div class="grid-container">
    <div class="col-span-4 border-t-2 md:col-start-3 md:col-span-8 mb-xl pb-m">
      <?php foreach ($block->items()->toStructure() as $index => $item) : ?>
        <details class="border-b-2 group">
          <summary class="flex items-center justify-between w-full text-left cursor-pointer select-none py-m">
            <p class="font-bold copy"><?= $item->title() ?></p>

            <div class="group-open:rotate-180 w-s">
              <?= svg('assets/icons/chevron-down.svg') ?>
            </div>
          </summary>

          <div class="pb-m">
            <div class="richtext">
              <?= $item->text() ?>
            </div>
          </div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>