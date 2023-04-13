<div>
  <?php foreach ($block->items()->toStructure() as $item) : ?>
    <?php snippet('components/text', [
      'text' => $item->title(),
      'variant' => 'copy-bold'
    ]) ?>

    <?php snippet('components/text', [
      'text' => $item->text()
    ]) ?>
  <?php endforeach ?>
</div>