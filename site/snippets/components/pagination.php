<?php if(isset($pagination)): ?>
<nav class="max-w-default mx-auto px-m flex items-center justify-center gap-s my-xxl">
<?php if ($pagination->hasPrevPage()): ?>
    <a href="<?= $pagination->prevPageUrl() ?>" class="block w-s">
      <?= svg('assets/icons/arrow-left.svg') ?>
    </a>
  <?php else: ?>
    <div class="w-s text-neutral-50">
      <?= svg('assets/icons/arrow-left.svg') ?>
    </div>
  <?php endif; ?>

  <?php snippet('components/text', [
      'text' => $pagination->page().'/'.$pagination->pages(),
      'variant' => 'copy-bold',
  ]) ?>

  <?php if ($pagination->hasNextPage()): ?>
    <a href="<?= $pagination->nextPageUrl() ?>" class="block w-s">
      <?= svg('assets/icons/arrow-right.svg') ?>
    </a>
  <?php else: ?>
    <div class="w-s text-neutral-50">
      <?= svg('assets/icons/arrow-right.svg') ?>
    </div>
  <?php endif; ?>
</nav>
<?php endif; ?>