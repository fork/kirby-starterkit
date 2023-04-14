<?php snippet('layout', slots: true) ?>

<main>
  <?php snippet('components/stage', [
      'title' => $page->headline()->or($page->title()),
      'intro' => $page->intro(),
      'tags' => false,
  ]) ?>

  <div class="grid-container">
    <?php snippet('components/text', [
        'text' => t('filterTags'),
        'variant' => 'copy-bold',
        'class' => 'col-span-4 md:col-start-3 md:col-span-8 mb-xs',
    ]) ?>

    <div class="col-span-4 md:col-start-3 md:col-span-8 mb-xl flex gap-xs flex-wrap">
      <?php foreach ($tags ?? [] as $tag) : ?>
        <?php snippet('components/tag', [
            'text' => $tag,
            'active' => get('tag') == $tag,
            'href' => get('tag') == $tag ? $page->url() : url($page->url(), ['query' => ['tag' => $tag]]),
        ]) ?>
      <?php endforeach ?>
    </div>
  </div>

  <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-x-m gap-y-xl max-w-default mx-auto px-m">
    <?php foreach ($articles ?? [] as $article) : ?>
      <?php snippet('components/teaser', [
          'topline' => $article->created()->toDate('d.m.Y'),
          'title' => $article->title(),
          'excerpt' => $article->excerpt(),
          'url' => $article->url(),
          'image' => $article->cover()->toFile(),
      ]) ?>
    <?php endforeach ?>
  </div>

  <?php if (isset($pagination)) : ?>
    <?php snippet('components/pagination') ?>
  <?php endif; ?>
</main>

<?= snippet('blocks') ?>