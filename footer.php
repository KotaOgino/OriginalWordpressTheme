<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</main>
<script src="<?php echo $wp_url; ?>/lib/js/bundle.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>