<?php
// Defaults
$variant = $variant ?? 'copy';
$class = $class ?? '';
$tag = $tag ?? 'p';

$variants = [
    'headline-1' => 'text-headline-1 md:text-headline-1-md font-bold hyphens-auto',
    'headline-2' => 'text-headline-2 md:text-headline-2-md font-bold hyphens-auto',
    'headline-3' => 'text-headline-3 md:text-headline-3-md font-bold hyphens-auto',
    'copy' => 'text-copy md:text-copy-md hyphens-auto',
    'copy-bold' => 'text-copy md:text-copy-md font-bold hyphens-auto',
    'copy-small' => 'text-copy-small md:text-copy-small-md hyphens-auto',
];

$class = $variants[$variant].' '.$class;

?>

<<?=$tag?> class="<?= $class ?>"><?= $text ?></<?=$tag?>>
