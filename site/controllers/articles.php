<?php

return function ($page) {
    // get all articles
    $articles = $page->children()->listed()->sortBy('created', 'desc');
    $tags = $page->children()->listed()->pluck('tags', ',', true);

    // add a tag filter
    if ($tag = get('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
    }

    // add pagination
    $articles = $articles->paginate(3);

    // create a shortcut for pagination
    $pagination = $articles->pagination();

    // pass $articles and $pagination to the template
    return compact('articles', 'pagination', 'tags');
};
