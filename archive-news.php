<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="l-body">
  <?php get_template_part('includes/header'); ?>
  <div class="c-top-view u-top-view--news">
    <h1 class="c-top-view__title">お知らせ</h1>
  </div>

  <div class="c-bread-crump">
    <div class="l-container--1col">
      <div class="c-bread-crump__link breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </div>

  <article>
    <main>
      <section class="p-news c-news-summary">
        <h2 class="c-news-summary__title c-sub-title c-sub-title--small  c-sub-title--center">お知らせ一覧</h2>
        <div class="l-container--1col">
          <ul class="c-news-summary__list">
            <hr class="c-news-summary__hr">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'news', // 投稿タイプを指定
              'posts_per_page' => 10, // 表示する記事数
              'paged' => $paged,
            );
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
              while ($news_query->have_posts()) :
                $news_query->the_post();
            ?>

                <li class="c-news-summary__item">
                  <p class="c-news-summary__date"><?php the_time('Y-m-d'); ?></p>
                  <p class="c-news-summary__description"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                </li>
                <hr class="c-news-summary__hr">

              <?php endwhile; ?>
              <!-- pager -->
              <nav class="c-pagination">
                <?php echo paginate_links(
                  array(
                    'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => false, // 前・次ボタンの表示
                    'type'          => 'list', // 戻り値の指定 (plain/list)
                  )
                ); ?>
              </nav>
            <?php endif;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
      </section>
    </main>
  </article>


  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <?php get_footer(); ?>
</body>

</html>
