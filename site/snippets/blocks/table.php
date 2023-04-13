<div>
  <?php foreach ($block->items()->toStructure() as $item) : ?>
    <h3>
        <?= $item->title() ?>
    </h3>
    <div>
      <?= $item->text() ?>
    </div>
  <?php endforeach ?>
</div>