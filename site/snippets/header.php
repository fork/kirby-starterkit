<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <?php snippet('meta_information'); ?>
  <?php snippet('robots'); ?>

  <link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/icons/android-icon-192x192.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png"/>
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-icon-180x180.png"/>
  
  <link rel="manifest" href="/assets/icons/manifest.json"/>

  <meta name="msapplication-TileColor" content="#000000"/>
  <meta name="theme-color" content="#000000"/>
</head>
<body>
  <header>
    <nav>
    <?php if($site->navigation()->isNotEmpty()): ?>
      <ul>
        <?php foreach($site->navigation()->toStructure() as $nav): ?>
          <li>
            <a href="<?php echo $nav->url(); ?>" <?php e($nav->isOpen(), 'aria-current') ?>>
              <?php echo $nav->text() ?>
            </a>
            <?php if($nav->children()->isNotEmpty()): ?>
              <ul>
                <?php foreach($nav->children()->toStructure() as $child): ?>
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
  </header>