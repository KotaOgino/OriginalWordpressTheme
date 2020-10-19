<?php
// アイキャッチ設定
add_theme_support('post-thumbnails');

// 固定ページ一覧
function get_page_list()
{
    $args = array('order'=>'desc','post_type'=>'page');
    $page_list = get_posts($args);
    return $page_list;
}

// カテゴリー一覧
function get_category_list()
{
    $args = array('orderby' => 'id','order' => 'desc','hide_empty' => 0);
    $categories = get_categories($args);
    return $categories;
}