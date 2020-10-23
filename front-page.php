<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section class="uk-section">
<div class="uk-container">
<div class="uk-grid-divider" uk-grid>
<div class="uk-width-expand@m">
<h2 class="uk-heading-line uk-text-lead primary"><span>最新記事</span></h2>
<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-2@m" uk-grid>
<?php get_template_part('template/loop'); ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer(); ?>