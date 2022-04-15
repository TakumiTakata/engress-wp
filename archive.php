<!DOCTYPE html>
<html lang="ja">

<head>
  <? get_header(); ?>
</head>

<body class="l-body">
  <?php get_template_part('includes/header'); ?>
  <div class="c-top-view u-top-view--blog">
    <h1 class="c-top-view__title">ブログ</h1>
  </div>

  <div class="c-bread-crump">
    <div class="l-container--1col">
      <p class="c-bread-crump__link">
        <a href="">ホーム</a>
        ＞
        <a href="">ブログ</a>
      </p>
    </div>
  </div>

  <main>
    <article>

      <section class="p-archives c-archives">
        <!-- タイトル出し分け -->
        <?php if (is_category()) : ?>
          <h2 class="c-archives__title c-sub-title c-sub-title--small  c-sub-title--center"><?php wp_title(''); ?>一覧</h2>
        <?php else : ?>
          <h2 class="c-archives__title c-sub-title c-sub-title--small  c-sub-title--center">新着一覧</h2>
        <?php endif; ?>

        <div class="l-container--1col">
          <ul class="c-archives__list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post() ?>

                <li class="c-archives__item c-blog-item">
                  <a class="c-blog-item__link" href="<?php the_permalink(); ?>">
                    <div class="c-archives__img-box c-blog-item__img-box">
                      <div class="c-archives__tag c-blog-item__img-tag">
                        <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        ?>
                      </div>
                      <?php if (has_post_thumbnail()) : ?>
                        <img class="c-archives__img c-blog-item__img" src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル">
                      <?php else : ?>
                        <img class="c-archives__img c-blog-item__img" src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg" alt="ダミー画像">
                      <?php endif; ?>
                    </div>
                    <div class="c-archives__contents c-blog-item__contents">
                      <p class="c-archives__date"><?php the_time('Y-m-d'); ?></p>
                      <p class="c-archives__item-title"><?php the_title(); ?></p>
                      <?php if (get_field('text1')) : ?>
                        <p class="c-archives__description"><?php the_field('text1'); ?></p>
                      <?php else : ?>
                        <p class="c-archives__description"><?php echo get_the_excerpt(); ?></p>
                      <?php endif; ?>
                    </div>
                  </a>
                </li>

              <?php endwhile; ?>
          </ul>
          <!-- pager -->
          <?php the_posts_pagination(
                array(
                  'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                  'prev_next'     => false, // 前・次ボタンの表示
                  'type'          => 'list', // 戻り値の指定 (plain/list)
                )
              ); ?>
          <div class="c-pagination">1 2 ... 3</div>
        <?php else : ?>
          <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
        </div>

      </section>
    </article>
  </main>


  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <? get_footer(); ?>

</body>

</html>
