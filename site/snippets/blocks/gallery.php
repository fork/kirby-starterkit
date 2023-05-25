<?php if (isset($block)) : ?>
  <div class="relative overflow-hidden mb-xl" x-data="Gallery">
    <section class="flex items-center snap-x snap-proximity overflow-x-scroll scrollbar-none max-w-full mx-auto" x-ref="container" x-resizeobserver="onResize" tabindex="0">
      <?php foreach ($block->images()->toFiles() as $image) : ?>
        <figure class="shrink-0 h-[100vh] min-h-[500px] max-h-[650px] snap-center">
          <img src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>" class="h-full">
        </figure>
      <?php endforeach ?>
    </section>

    <div class="flex gap-x-m mt-s justify-end max-w-default mx-auto px-m">
      <button type="button" @click.prevent="onClickPrev" :disabled="prevHidden" title="<?= t('prevImages') ?>" class="block w-s disabled:text-neutral-50">
        <?= svg('assets/icons/arrow-left.svg') ?>
      </button>
      <button type="button" @click.prevent="onClickNext" :disabled="nextHidden" title="<?= t('nextImages') ?>" class="block w-s disabled:text-neutral-50">
        <?= svg('assets/icons/arrow-right.svg') ?>
      </button>
    </div>
  </div>
<?php endif; ?>