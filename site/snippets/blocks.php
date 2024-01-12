<div class="my-xl">
  <?php foreach ($page->blocks()->toBlocks() as $block) : ?>
    <?php snippet('blocks/'.$block->type(), ['block' => $block]) ?>
  <?php endforeach ?>
</div><?php var_dump($page->blocks()->toBlocks()) ?>