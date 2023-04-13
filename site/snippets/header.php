<header class="bg-white p-l">
  <div class="flex justify-between items-center max-w-default w-full mx-auto">
    <a href="/" class="block">
      <?= svg('assets/logo.svg') ?>
    </a>

    <nav>
      <?php if ($site->navigation()->isNotEmpty()) : ?>
        <ul class="flex gap-m">
          <?php foreach ($site->navigation()->toStructure() as $item) : ?>
            <li>
              <?php snippet('components/link', [
                'text' => $item->text(),
                'href' => $item->url(),
                'current' => $item->isOpen()
              ]) ?>

              <?php if ($item->children()->isNotEmpty()) : ?>
                <ul>
                  <?php foreach ($item->children()->toStructure() as $child) : ?>
                    <li>
                      <a href="<?php echo $child->url() ?>">
                        <?php echo $child->text() ?>
                      </a>
                    </li>
                  <?php endforeach ?>
                </ul>
              <?php endif ?>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </nav>
  </div>
</header>