<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
if (have_posts()):
?>
<?php
while (have_posts()):
the_post();
$id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat_name = $cat[0]->name;
$img = '';
if (has_post_thumbnail()) {
$img = get_the_post_thumbnail_url($id, 'medium');
} else {
$img = $wp_url.'/assets/img/no-image.png';
}
$thumbnail = '<img class="uk-width-expand" src='.$img.' alt="'.$title.'">';
?>
<a class="uk-link-reset" href="<?php echo $permalink; ?>">
<article class="uk-animation-fade">
<div class="uk-card uk-card-default">
<div class="uk-card-media-top">
<?php echo $thumbnail; ?>
</div>
<div class="uk-card-body">
<h3 class="uk-card-title"><?php echo $title; ?></h3>
<div class="uk-flex uk-flex-between uk-flex-middle">
<div>
<time datetime="<?php the_modified_time('Y-m-d'); ?>"><span class="uk-margin-small-right" uk-icon="history"></span><?php the_modified_time('Y.m.d'); ?></time>
</div>
<div>
<p class="uk-margin-remove"><span class="uk-label"><?php echo $cat_name ?></span></p>
</div>
</div>
</div>
</div>
</article>
</a>
<?php endwhile ?>
<?php else: ?>
<p class="uk-padding uk-text-lead">投稿がありません。</p>
<?php endif; ?>