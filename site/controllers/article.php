<?php

return function ($page) {
    $relatedArticles = [];
    $totalResults = 3;

    // find related articles by pages field
    $relatedByPage = $page->related()->toPages();
    if ($relatedByPage->count() > 0) {
        $relatedArticles = array_merge($relatedByPage->toArray(), $relatedArticles);
    }


    // find articles related by tags
    // overall there should queried 3 teaser so only query as much as needed
    $limit = $totalResults - count($relatedArticles);
    if ($limit > 0) {
        $siblings = $page->siblings(false)->listed();
        $tags = $page->tags()->split(',');
        $relatedByTags = $siblings->filter(function ($item) use ($tags) {
            return count(array_intersect($tags, $item->tags()->split(','))) > 0;
        })->limit($limit);
        $relatedArticles = array_merge($relatedArticles, $relatedByTags->toArray());
    }

    return compact('relatedArticles');
};
