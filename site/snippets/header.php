<header class="bg-white">
  <div class="max-w-default w-full mx-auto">
    <div class="flex justify-between items-center p-m">
      <a href="/" class="block w-xl">
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
                  'target' => $item->popup()->toBool(), '_blank', '_self',
                  'current' => $item->url()->value() === kirby()->url('current'),
                ]) ?>
              </li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>
      </nav>
    </div>
  </div>
</header>