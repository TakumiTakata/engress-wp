<?php
add_action('init', function () {
	add_theme_support('post-thumbnails'); // add eye-catch

	// メニューを追加
	register_nav_menus([
		'global_nav' => 'グローバルナビゲーション'
	]);
});

// pager
function custom_the_posts_pagination($template)
{
	$template = '
	<nav class="c-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="c-pagination__wrap">%3$s</div>
	</nav>';
	return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog';
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
