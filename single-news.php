<!DOCTYPE html>
<html lang="ja">

<head>
  <? get_header(); ?>
</head>

<body class="l-body p-news-post">
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

  <div class="l-container--1col">
    <main>
      <article>
        <section class="p-news-post__contents c-blog-contents">
          <h1 class="p-news-post__title c-blog-contents__title"><?php the_title(); ?></h1>

          <p class="p-news-post__date"><?php the_time('Y-m-d'); ?></p>
          <h2 class="p-news-post__h2 c-blog-contents__h2"><?php the_field('h2'); ?></h2>

          <p class="p-news-post__text c-blog-contents__text"><?php the_field('text1'); ?></p>

          <h3 class="p-news-post__h3 c-blog-contents__h3"><?php the_field('h3'); ?></h3>

          <p class="p-news-post__text c-blog-contents__text"><?php the_field('text2'); ?></p>

          <div class="p-news-post__quote-area c-blog-contents__quote-area">
            <span class="c-blog-contents__quote-icon"><img src="#" alt=""></span>
            <p class="c-blog-contents__quote-text"><?php the_field('quote-text'); ?></p>
          </div>

          <div class="p-news-post__img c-blog-contents__img c-blog-contents__img--single"><img src="<?php the_field('sub_img'); ?>" alt="画像"></div>
          <ul class="p-news-post__list c-blog-contents__list">
            <li class="c-blog-contents__list-item"><?php the_field('list1'); ?></li>
            <li class="c-blog-contents__list-item"><?php the_field('list1'); ?></li>
            <li class="c-blog-contents__list-item"><?php the_field('list3'); ?></li>
          </ul>
          <?php
          $link = get_field('link');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="p-archive__link c-blog-contents__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </section>
      </article>

    </main>
  </div>

  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <? get_footer(); ?>

</body>

</html>
