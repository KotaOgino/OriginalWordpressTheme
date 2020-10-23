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

// アーカイブページURL
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog-list';
    }
    return $args;
}

add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );