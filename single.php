<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="l-body p-archive">
  <?php get_template_part('includes/header'); ?>

  <div class="c-bread-crump">
    <div class="l-container--1col">
      <div class="c-bread-crump__link breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </div>

  <div class="l-container--2col">
    <main class="l-container--2col-main">
      <article>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <section class="p-archive__contents c-blog-contents">
              <p class="p-archive__tag c-blog-contents__tag">
                <?php
                $category = get_the_category();
                echo $category[0]->cat_name;
                ?>
              </p>
              <h1 class="p-archive__title c-blog-contents__title"><?php the_title(); ?></h1>

              <div class="c-blog-contents__data-wrap">
                <ul class="c-blog-contents__share-list">
                  <li class="c-blog-contents__share-item c-blog-contents__share-item--fb"><a href="http://www.facebook.com/share.php?u={{<?php echo esc_url(home_url('/')); ?>}}"><i class="c-blog-contents__share-icon fa-solid fa-thumbs-up"></i>Like! 0</a></li>
                  <li class="c-blog-contents__share-item c-blog-contents__share-item--sns"><a href="#">Share</a></li>
                  <li class="c-blog-contents__share-item c-blog-contents__share-item--tw"><a href="https://twitter.com/share?url={{<?php echo esc_url(home_url('/')); ?>}}"><i class="c-blog-contents__share-icon fa-brands fa-twitter"></i>いいね</a></li>
                </ul>
                <p class="c-blog-contents__date"><?php the_time('Y-m-d'); ?></p>
              </div>

              <?php the_content(); ?>
              <?php if (has_post_thumbnail()) : ?>
                <div class="p-archive__img c-blog-contents__img c-blog-contents__img--main">
                  <img src="<?php the_post_thumbnail(); ?>" alt="アイキャッチ">
                </div>
              <?php endif; ?>
              <?php if (get_field('h2')) : ?>
                <h2 class="p-archive__h2 c-blog-contents__h2"><?php the_field('h2'); ?></h2>
              <?php endif; ?>
              <?php if (get_field('text1')) : ?>
                <p class="p-archive__text c-blog-contents__text"><?php the_field('text1'); ?></p>
              <?php endif; ?>
              <?php if (get_field('h3')) : ?>
                <h3 class="p-archive__h3 c-blog-contents__h3"><?php the_field('h3'); ?></h3>
              <?php endif; ?>
              <?php if (get_field('text2')) : ?>
                <p class="p-archive__text c-blog-contents__text"><?php the_field('text2'); ?></p>
              <?php endif; ?>
              <?php if (get_field('quote-text')) : ?>
                <div class="p-archive__quote-area c-blog-contents__quote-area">
                  <span class="c-blog-contents__quote-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/quote-icon.png"></span>
                  <p class="c-blog-contents__quote-text"><?php the_field('quote-text'); ?></p>
                </div>
              <?php endif; ?>
              <?php if (get_field('sub_img')) : ?>
                <div class="p-archive__img--sub c-blog-contents__img c-blog-contents__img--sub">
                  <img src="<?php the_field('sub_img'); ?>" alt="サブ画像">
                </div>
              <?php endif; ?>
              <ul class="p-archive__list c-blog-contents__list">
                <?php if (get_field('list1')) : ?>
                  <li class="c-blog-contents__list-item"><?php the_field('list1'); ?></li>
                <?php endif; ?>
                <?php if (get_field('list2')) : ?>
                  <li class="c-blog-contents__list-item"><?php the_field('list2'); ?></li>
                <?php endif; ?>
                <?php if (get_field('list3')) : ?>
                  <li class="c-blog-contents__list-item"><?php the_field('list3'); ?></li>
                <?php endif; ?>
              </ul>
              <?php
              $link = get_field('text-link');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="p-archive__link c-blog-contents__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </section>
          <?php endwhile; ?>
        <?php endif; ?>

        <aside class="p-archive__recommend">
          <h2 class="c-recommend__title">おすすめの記事</h2>
          <?php
          $arg   = array(
            'posts_per_page' => 3, // 表示する件数
            'orderby'        => 'date', // 日付でソート
            'order'          => 'DESC', // DESCで最新から表示、ASCで最古から表示
            'tag'            => 'pickup' // 表示したいタグのスラッグを指定
          );
          $posts = get_posts($arg);
          if ($posts) : ?>
            <ul class="c-recommend__list">
              <?php
              foreach ($posts as $post) :
                setup_postdata($post); ?>
                <li class="c-recommend__item c-blog-item">
                  <a class="c-blog-item__link" href="<?php the_permalink(); ?>">
                    <div class="c-recommend__img-box c-blog-item__img-box">
                      <div class="c-recommend__tag c-blog-item__img-tag">
                        <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        ?>
                      </div>
                      <?php if (has_post_thumbnail()) : ?>
                        <img class="c-recommend__img c-blog-item__img" src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル">
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg" alt="ダミー画像">
                      <?php endif; ?>
                    </div>
                    <div class="c-recommend__contents c-blog-item__contents">
                      <p class="c-recommend__date"><?php the_time('Y-m-d'); ?></p>
                      <p class="c-recommend__description"><?php the_title(); ?></p>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php
          endif;
          wp_reset_postdata();
          ?>
        </aside>
      </article>

    </main>

    <aside class="l-container--2col-side">
      <div class="p-archive__relation c-relation">
        <h3 class="c-relation__title">関連記事</h3>
        <ul class="c-relation__list">

          <?php
          // 同じカテゴリーの記事を表示
          $categories = get_the_category();
          $category_ID = array();
          foreach ($categories as $category) :
            array_push($category_ID, $category->cat_ID);
          endforeach;
          $args = array(
            'post__not_in' => array($post->ID),
            'posts_per_page' => 3,
            'category__in' => $category_ID,
            'orderby' => 'rand',
          );
          $query = new WP_Query($args);
          ?>

          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <li class="c-relation__item">
                <div class="c-relation__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル">
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg" alt="ダミー画像">
                  <?php endif; ?>
                </div>
                <p class="c-relation__blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
              </li>
            <?php endwhile;
          else : ?>
            <p class="c-blog-contents__text">関連記事はありませんでした。</p>
          <?php endif; ?>
        </ul>
      </div>
      <h3 class="c-relation__title">カテゴリー</h3>
      <ul class="c-relation__category">

        <?php
        // 親カテゴリーのものだけを一覧で取得
        $args = array(
          'parent' => 0,
          'orderby' => 'term_order',
          'order' => 'ASC'
        );
        $categories = get_categories($args);
        ?>

        <?php foreach ($categories as $category) : ?>
          <li class="c-relation__category-item">
            <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </aside>

  </div>

  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <?php get_footer(); ?>

</body>

</html>
