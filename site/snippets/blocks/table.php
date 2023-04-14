<?php if(isset($block)): ?>
<div class="col-span-4 md:col-start-3 md:col-span-8 mb-xl pb-m">
  <?php if ($block->headline()): ?>
    <?php snippet('components/text', [
        'text' => $block->headline(),
        'variant' => 'headline-3',
        'class' => 'mb-s',
        'tag' => 'h3',
    ]) ?>
  <?php endif; ?>

  <?php foreach ($block->items()->toStructure() as $item) : ?>
    <div class="flex flex-col md:grid md:grid-cols-8 gap-s md:gap-m border-b-2 py-m">
      <div class="md:col-span-2">
        <?php snippet('components/text', [
            'text' => $item->title(),
            'variant' => 'copy-bold',
        ]) ?>
      </div>
      
      <div class="md:col-span-6">
        <?php snippet('components/richtext', slots: true) ?>
          <?= $item->text() ?>
        <?php endsnippet() ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>