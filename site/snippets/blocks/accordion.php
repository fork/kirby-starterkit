<div>
  <?php foreach ($block->accordion()->toStructure() as $item) : ?>
    <h3>
      <button id="accordion-trigger-<?= $block->id() ?>" aria-controls="accordion-panel-<?= $block->id() ?>" aria-expanded="false">
        <?= $item->summary() ?>
      </button>
    </h3>
    <div id="accordion-panel-<?= $block->id() ?>" role="region" aria-labelledby="accordion-trigger-<?= $block->id() ?>">
      <?= $item->details() ?>
    </div>
    </li>
  <?php endforeach ?>
</div>