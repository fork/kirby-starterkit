<?php if(isset($block)): ?>
<div>
  <?php foreach ($block->items()->toStructure() as $item): ?>
    <h3>
      <button id="accordion-trigger-<?= $block->id() ?>" aria-controls="accordion-panel-<?= $block->id() ?>" aria-expanded="false">
        <?= $item->title() ?>
      </button>
    </h3>
    <div id="accordion-panel-<?= $block->id() ?>" role="region" aria-labelledby="accordion-trigger-<?= $block->id() ?>">
      <?= $item->text() ?>
    </div>
    </li>
  <?php endforeach ?>
</div>
<?php endif ?>