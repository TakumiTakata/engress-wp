<?php
add_action('init', function() {
  add_theme_support('post-thumbnails'); // add eye-catch
});

// pager
function custom_the_posts_pagination( $template ) {
	$template = '
	<nav class="c-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="c-pagination__wrap">%3$s</div>
	</nav>';
	return $template;
}
add_filter( 'navigation_markup_template', 'custom_the_posts_pagination' );
