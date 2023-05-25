<?php

return function ($page) {
    $relatedArticles = null;
    $totalResults = 3;

    // find related articles by pages field
    $relatedByPage = $page->related()->toPages();
    if ($relatedByPage->count() > 0) {
        $relatedArticles = $relatedByPage;
    }

    // find articles related by tags
    // overall there should queried 3 teaser so only query as much as needed
    $limit = $totalResults - ($relatedArticles ? $relatedArticles->count() : 0);
    if ($limit > 0) {
        $relatedSiblings = $page->siblings(false)->filter(function ($sibling) use ($page) {
            return count(array_intersect($sibling->tags()->split(','), $page->tags()->split(','))) >= 1;
        });

        if (! $relatedArticles) {
            $relatedArticles = $relatedSiblings;
        } else {
            $relatedArticles = $relatedArticles->merge($relatedSiblings);
        }
    }

    return compact('relatedArticles');
};
