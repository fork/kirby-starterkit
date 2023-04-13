<footer class="w-full bg-white text-black p-l">
  <div class="max-w-default w-full mx-auto md:grid md:grid-cols-2 md:gap-xl">
    <div>
      <?php snippet('components/richtext', slots: true) ?>
        <?= $site->footerText() ?>
      <?php endsnippet() ?>
  </div>

    <nav>
      <?php if ($site->footerNavigation()->isNotEmpty()) : ?>
        <ul class="flex">
          <?php foreach ($site->footerNavigation()->toStructure() as $item) : ?>
            <li>
              <?php snippet('components/link', [
                'text' => $item->text(),
                'href' => $item->url(),
                'current' => $item->isOpen()
              ]) ?>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

      <?php if ($site->metaNavigation()->isNotEmpty()) : ?>
        <ul class="flex mt-m">
          <?php foreach ($site->metaNavigation()->toStructure() as $item) : ?>
            <li>
              <?php snippet('components/link', [
                'text' => $item->text(),
                'href' => $item->url(),
                'current' => $item->isOpen()
              ]) ?>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </nav>

    <?php if($site->socialMedia()->isNotEmpty()): ?>
        <div class="flex gap-l">
          <?php foreach($site->socialMedia()->toStructure() as $social): ?>
            <a href="<?php echo $social->url(); ?>" target="_blank" rel="noopener noreferrer" class="w-l block hover:text-interaction-50 focus:text-interaction-50">
              <?= svg("assets/icons/" . $social->service() . ".svg") ?>
            </a>
          <?php endforeach ?>
        </div>
    <?php endif ?>
  </div>
</footer>
