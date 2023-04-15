<footer class="w-full bg-white text-black mt-xxxl">
  <div class="grid-container w-full py-l">
    <div class="col-span-4 md:col-span-6 mb-l">
      <a href="/" class="block w-xl mb-l">
        <?= svg('assets/logo.svg') ?>
      </a>

      <div class="richtext">
        <?= $site->footerText() ?>
      </div>
    </div>

    <nav class="col-span-4 md:col-start-10 md:col-span-2 self-end md:row-span-2">
      <?php if ($site->footerNavigation()->isNotEmpty()) : ?>
        <ul class="flex flex-col gap-s">
          <?php foreach ($site->footerNavigation()->toStructure() as $item) : ?>
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

      <?php if ($site->metaNavigation()->isNotEmpty()) : ?>
        <ul class="flex flex-col gap-s mt-l">
          <?php foreach ($site->metaNavigation()->toStructure() as $item) : ?>
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

      <div class="mt-l">
        <p class="copy"><?= '<b>©'.date('Y').'</b> '.$site->title() ?></p>
      </div>
    </nav>

    <?php if ($site->socialMedia()->isNotEmpty()) : ?>
      <div class="flex gap-m mt-l col-span-4 md:mt-auto">
        <?php foreach ($site->socialMedia()->toStructure() as $social) : ?>
          <a href="<?php echo $social->url(); ?>" target="_blank" rel="noopener noreferrer" class="w-l block hover:text-interaction-50 focus:text-interaction-50">
            <?= svg('assets/icons/'.$social->service().'.svg') ?>
          </a>
        <?php endforeach ?>
      </div>
    <?php endif ?>
  </div>
</footer>