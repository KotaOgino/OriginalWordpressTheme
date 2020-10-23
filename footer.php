<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</body>
<footer class="uk-padding-small uk-section-muted">
<div class="uk-container">
<a class="uk-float-left" href="<?php echo $home; ?>">
<?php bloginfo( 'name' ); ?>
</a>
<a class="uk-float-right" href="#" uk-totop uk-scroll></a>
</div>
</footer>
<div class="uk-padding-small uk-section-muted socket">
<div class="uk-container">
<div class="uk-column-1-2@s">
<p class="uk-text-small uk-margin-remove uk-text-left@s uk-text-center">
<a class="uk-text-small uk-link-text uk-display-inline-block uk-margin-small-right" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
<a class="uk-text-small uk-link-text uk-display-inline-block" href="<?php echo $home; ?>/site-map/">サイトマップ</a>
</p>
<p class="uk-text-small uk-margin-remove uk-text-right@s uk-text-center">©2020 <a class="uk-link-text" href="<?php echo $home; ?>"><?php bloginfo( 'name' ); ?></a></p>
</div>
</div>
</div>
<script src="<?php echo $wp_url; ?>/lib/js/bundle.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>