<?php
function get_img() {
  return [
    '1' => [
        'img_url' => 'img/borzch.png',
    ],

    '2' => [
        'img_url' => 'img/lapsha.png',
    ],
    '3' => [
        'img_url' => 'img/pjure.png',
    ],
    '4' => [
      'img_url' => 'img/uha.png',
    ]
    ];
}
function get_ingr() {
  return [
    '1' => [
        'img_url' => 'img/borzchi.png',
    ],
    '2' => [
        'img_url' => 'img/lapshai.png',
    ],
    '3' => [
        'img_url' => 'img/pjurei.png',
    ],
    '4' => [
      'img_url' => 'img/uhai.png',
    ]
    ];
}
function get_product_attribute($id, $attr) {
    $products = get_img();
    $result = $products[$id][$attr] ?? null;
    return $result;
  }
function get_img_url($id) {
    return get_product_attribute($id, 'img_url');
  }
function get_ingr_attribute($id, $attr) {
    $productes = get_ingr();
    $results = $productes[$id][$attr] ?? null;
    return $results;
  }
function get_ingr_url($id) {
    return get_ingr_attribute($id, 'img_url');
  }