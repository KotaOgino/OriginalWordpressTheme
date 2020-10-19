<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#7e13ab">
<?php wp_head(); ?>
</head>
<header>
<div class="uk-box-shadow-small">
<div class="uk-navbar-container uk-navbar" uk-navbar>
<div class="uk-navbar-left">
<a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #menu"></a>
</div>
<div class="uk-navbar-center">
<h1 class="uk-margin-remove"><a class="uk-navbar-item" href="<?php echo $home; ?>"><?php bloginfo( 'name' ); ?></a></h1>
</div>
</div>
</div>
</header>
<!-- offcanvas -->
<div id="menu" uk-offcanvas="mode: slide" class="uk-offcanvas">
<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
<button class="uk-offcanvas-close uk-close uk-icon" type="button" uk-close></button>
<ul class="uk-nav uk-nav-default uk-margin-bottom">
<li class="uk-heading-divider uk-text-bold uk-margin-small-bottom">ページ</li>
<li><a class="uk-link-text" href="<?php echo $home; ?>">トップ</a></li>
<?php
$pages = get_page_list();
foreach ($pages as $key => $page): ?>
<li><a class="uk-link-text" href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
<?php endforeach; wp_reset_query(); ?>
</ul>
<ul class="uk-nav uk-nav-default">
<li class="uk-heading-divider uk-text-bold uk-margin-small-bottom">カテゴリー</li>
<?php
$categories = get_category_list();
foreach ($categories as $category):
    $cat_link = get_category_link($category->term_id);
    $cat_name = $category->name;
?>
<li><a class="uk-link-text" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
<main>