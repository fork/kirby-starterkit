<header class="sticky top-0 bg-white z-10">
  <div class="max-w-default w-full mx-auto">
    <div class="flex justify-between items-center p-m">
      <a href="/" class="block w-xl" aria-label="<?= t('home') ?>">
        <?= svg('assets/logo.svg') ?>
      </a>

      <?php if ($site->navigation()->isNotEmpty()) : ?>
        <nav class="hidden md:block">
          <ul class="flex gap-m">
            <?php foreach ($site->navigation()->toStructure() as $item) : ?>
              <li>
                <?php snippet('components/link', [
                    'text' => $item->text(),
                    'href' => $item->link()->toUrl(),
                    'current' => $item->url()->value() === kirby()->url('current'),
                ]) ?>
              </li>
            <?php endforeach ?>
          </ul>
        </nav>
      <?php endif ?>

      <?php if ($site->navigation()->isNotEmpty()) : ?>
        <div x-data="MobileNavigation" class="block md:hidden">
          <button @click="open" :aria-expanded="isOpen.toString()" x-ref="toggleButton" type="button" class="block">
            <svg class="w-l h-l" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <span class="sr-only"><?= t('openMenu') ?></span>
          </button>

          <nav x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 " x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" :aria-hidden="(!isOpen).toString()" x-trap="isOpen" x-ref="navigation" class="fixed inset-0 flex flex-col justify-center z-50 w-full bg-neutral-10">
            <ul class="flex flex-col gap-xs p-xxl items-center">
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

            <div class="flex justify-between items-center p-m fixed top-0 right-0 left-0">
              <a href="/" class="block w-xl" aria-label="<?= t('home') ?>">
                <?= svg('assets/logo.svg') ?>
              </a>

              <button type="button" class="block" @click="close">
                <svg class="w-l h-l" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <span class="sr-only"><?= t('closeMenu') ?></span>
              </button>
            </div>
          </nav>
        </div>
      <?php endif ?>
    </div>
  </div>
</header>
