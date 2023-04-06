<?php

return function ($site) {

  $query   = get('q');
  $results = $site->search($query, 'title|blocks');
  $results = $results->paginate(2);

  return [
    'query'   => $query,
    'results' => $results,
    'pagination' => $results->pagination()
  ];

};