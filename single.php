<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
the_post();
$post_id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat = $cat[0];
$cat_id = $cat->term_id;
$cat_name = $cat->name;
$cat_slug = get_category_link($cat_id);
$img = '';
if (has_post_thumbnail()) {
$img = get_the_post_thumbnail_url($id, 'medium');
}
?>
<section class="uk-section-small uk-margin-top"">
<div class="uk-container">
<div class="uk-grid-divider" uk-grid>
<article id="post-main" class="post-main uk-article uk-width-expand@m">
<h1 class="uk-h2 uk-text-bolder"><?php echo $title; ?></h1>
<div class="uk-flex uk-flex-wrap">
<time class="uk-margin-right" datetime="<?php the_modified_time('Y-m-d'); ?>"><span class="uk-margin-small-right" uk-icon="history"></span><?php the_modified_time('Y.m.d'); ?></time>
</div>
<?php if ($img != ''): ?>
<figure>
<img loading="lazy" class="uk-box-shadow-small uk-width-expand" src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
</figure>
<?php endif; ?>
<div class="main-article uk-padding uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right blog-content">
<?php the_content(); ?>
</div>
</article>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer(); ?>