<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<aside id="sidebar" class="uk-width-1-3@m">
<div class="uk-margin-large-bottom">
<h3 class="uk-heading-line uk-text-center uk-text-lead primary"><span>カテゴリー</span></h3>
<ul class="uk-list uk-list-bullet">
<?php
$categories = get_category_list();
foreach ($categories as $category):
    $cat_link = get_category_link($category->term_id);
    $cat_name = $category->name;
?>
<li><a class="uk-link-text" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
<?php endforeach; ?>
</ul>
<div class="uk-card uk-card-default uk-card-small uk-box-shadow-small">
<div class="uk-card-header">
<div class="uk-grid-small uk-flex-middle" uk-grid>
<!-- <div class="uk-width-auto">
<img loading="lazy" class="uk-border-circle" width="40" height="40" src="<?php echo $wp_url; ?>/lib/images/me.jpg" alt="DoshishaBBSについて">
</div> -->
<div class="uk-width-expand">
<h3 class="uk-card-title uk-margin-remove-bottom uk-padding-small"><?php bloginfo( 'name' ); ?>について</h3>
</div>
</div>
</div>
<div class="uk-card-body uk-flex uk-flex-between uk-flex-middle">
<div>
<img class="avater" data-src="<?php echo $wp_url; ?>/assets/img/avater.jpg" width="100px" height="100px" alt="アバター" uk-img>
</div>
<div>
<p><?php bloginfo( 'description' ); ?></p>
</div>
</div>
<!-- <div class="uk-card-footer">
<a href="https://twitter.com/Anyushu" class="uk-icon-button uk-margin-small-right" uk-icon="twitter" target="_blank" rel="noopener noreferrer"></a>
<a href="https://www.facebook.com/Anyushu2017" class="uk-icon-button uk-margin-small-right" uk-icon="facebook" target="_blank" rel="noopener noreferrer"></a>
<a href="https://www.instagram.com/anyushu2017/" class="uk-icon-button uk-margin-small-right" uk-icon="instagram" target="_blank" rel="noopener noreferrer"></a>
<a href="mailto:info@anyushu.com" class="uk-icon-button" uk-icon="mail" target="_blank"></a>
</div> -->
</div>
</div>
</aside>