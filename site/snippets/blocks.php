<?php foreach ($page->blocks()->toBlocks() as $block): ?>

<div id="<?= $block->id() ?>" class="block block--<?= $block->type() ?>">
  <?php snippet('blocks/'.$block->type(), ['block' => $block]) ?>
</div>

<?php endforeach ?>