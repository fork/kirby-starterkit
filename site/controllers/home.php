<?php

return function ($site) {
    $articlePage = $site->find('articles');

    $articles = [
        'headline' => $articlePage->headline(),
        'intro' => $articlePage->intro(),
        'items' => $articlePage->children()->listed()->sortBy('created', 'desc')->limit(3),
    ];

    return compact('articles');
};
