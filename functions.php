<?php
add_action('init', function () {
	add_theme_support('post-thumbnails'); // アイキャッチを追加

	// メニューを追加
	register_nav_menus([
		'global_nav' => 'グローバルナビゲーション',
		'footer_nav' => 'フッターナビゲーション'
	]);
});


//topページ 投稿表示件数
function home_pagesize($query)
{
	if ($query->is_home() && $query->is_main_query()) {
		$query->set('post_type', 'post');
		$query->set('posts_per_page', '3');
	}
}
add_action('pre_get_posts', 'home_pagesize');


// ページネーション クラス名付与
function custom_the_posts_pagination($template)
{
	$template = '
	<nav class="c-pagination %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		%3$s
	</nav>';
	return $template;
}
add_filter('navigation_markup_template', 'custom_the_posts_pagination');


// 投稿アーカイブページの作成
function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog';
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


//パンくずの階層追加
function bcn_add($bcnObj) {
	// デフォルト投稿の詳細ページかどうか
	if (is_singular('post')) {
		// 新規のtrailオブジェクトを2階層に追加する
		$bcnObj->add(new bcn_breadcrumb('ブログ', null, array('post-clumn-archive'), home_url('/blog'), null, true)); //リンクあり
		$trail_tmp = clone $bcnObj->trail[3];
		$bcnObj->trail[3] = clone $bcnObj->trail[2];
		$bcnObj->trail[2] = $trail_tmp;
	}
	// デフォルト投稿のアーカイブページかどうか
	if (is_archive() && !is_post_type_archive('news')) {
		// 新規のtrailオブジェクトを0階層に追加する
		$bcnObj->add(new bcn_breadcrumb('ブログ', null, array('post-clumn-archive'), home_url('/blog'), null, false)); //リンクなし
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
		$bcnObj->trail[0] = $trail_tmp;
	}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');



// お問い合わせフォーム p・brタグの削除
function mvwpform_autop_filter()
{
	if (class_exists('MW_WP_Form_Admin')) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
			add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
		}
	}
}
mvwpform_autop_filter();
