<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
the_post();
$id = get_the_ID();
$title = get_the_title();
?>
<section class="uk-section-small">
<div class="uk-container">
<div class="uk-grid-divider" uk-grid>
<section class="uk-article uk-width-expand@m uk-margin-top"">
<h2 class="uk-article-title uk-text-bolder"><?php echo $title; ?></h2>
<div class="main-article uk-margin-top">
<?php the_content(); ?>
</div>
</section>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer();