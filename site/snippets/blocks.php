<div class="my-xl">
  <?php foreach ($page->blocks()->toBlocks() as $block) : ?>
    <?php snippet('blocks/' . $block->type(), ['block' => $block]) ?>
  <?php endforeach ?>
</div>