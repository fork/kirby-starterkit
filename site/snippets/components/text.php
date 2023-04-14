<?php
// Defaults
$variant = $variant ?? 'copy';
$class = $class ?? '';
$tag = $tag ?? 'p';

$variants = [
    'headline-1' => 'text-headline-1 lg:text-headline-1-lg font-bold',
    'headline-2' => 'text-headline-2 lg:text-headline-2-lg font-bold',
    'headline-3' => 'text-headline-3 lg:text-headline-3-lg font-bold',
    'copy' => 'text-copy lg:text-copy-lg',
    'copy-bold' => 'text-copy lg:text-copy-lg font-bold',
    'copy-small' => 'text-copy-small lg:text-copy-small-lg',
];

$class = $variants[$variant].' '.$class;

?>

<<?=$tag?> class="<?= $class ?>"><?= $text ?></<?=$tag?>>
