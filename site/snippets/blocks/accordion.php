<?php if (isset($block)) : ?>
  <div class="col-span-4 md:col-start-3 md:col-span-8 mb-xl pb-m border-t-2">
    <?php foreach ($block->items()->toStructure() as $item) : ?>
      <div x-data="{ activeAccordion: false }" class="group border-b-2">
        <button @click="activeAccordion = !activeAccordion" :aria-expanded="activeAccordion" aria-controls="accordion-panel-<?= $block->id() ?>" class="group flex justify-between items-center py-m w-full text-left">
          <p class="copy font-bold"><?= $item->title() ?></p>

          <div class="group-aria-expanded:rotate-180 w-s">
            <?= svg('assets/icons/chevron-down.svg') ?>
          </div>
        </button>

        <section :hidden="!activeAccordion" id="accordion-panel-<?= $block->id() ?>" aria-labelledby="accordion-header-<?= $block->id() ?>" class="pb-m">
          <div class="richtext">
            <?= $item->text() ?>
          </div>
        </section>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>