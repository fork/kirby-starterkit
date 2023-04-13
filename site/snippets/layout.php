<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <?php snippet('meta_information'); ?>
  <?php snippet('robots'); ?>

  <link rel="icon" type="image/svg+xml" href="/assets/favicons/favicon.svg">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicons/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-icon-180x180.png" />

  <link rel="manifest" href="/assets/favicons/manifest.json" />

  <meta name="msapplication-TileColor" content="#000000" />
  <meta name="theme-color" content="#000000" />

  <?= vite()->css() ?>
  <?= $slots->head() ?>
</head>

<body>
  <?php snippet('header') ?>
  
  <?= $slot ?>
  
  <?php snippet('footer') ?>

  <?= vite()->js() ?>
  <?= $slots->scripts() ?>
</body>

</html>