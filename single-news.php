<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
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
          <?php if (get_field('h2')) : ?>
                <h2 class="p-news-post__h2 c-blog-contents__h2"><?php the_field('h2'); ?></h2>
              <?php endif; ?>
              <?php if (get_field('text1')) : ?>
                <p class="p-news-post__text c-blog-contents__text"><?php the_field('text1'); ?></p>
              <?php endif; ?>
              <?php if (get_field('h3')) : ?>
                <h3 class="p-news-post__h3 c-blog-contents__h3"><?php the_field('h3'); ?></h3>
              <?php endif; ?>
              <?php if (get_field('text2')) : ?>
                <p class="p-news-post__text c-blog-contents__text"><?php the_field('text2'); ?></p>
              <?php endif; ?>
              <?php if (get_field('quote-text')) : ?>
                <div class="p-news-post__quote-area c-blog-contents__quote-area">
                  <span class="c-blog-contents__quote-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/quote-icon.png"></span>
                  <p class="c-blog-contents__quote-text"><?php the_field('quote-text'); ?></p>
                </div>
              <?php endif; ?>
              <?php if (get_field('sub_img')) : ?>
                <div class="p-news-post__img c-blog-contents__img c-blog-contents__img--sub">
                  <img src="<?php the_field('sub_img'); ?>" alt="サブ画像">
                </div>
              <?php endif; ?>
              <ul class="p-news-post__list c-blog-contents__list">
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
            <a class="p-news-post__link c-blog-contents__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </section>
      </article>

    </main>
  </div>

  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <?php get_footer(); ?>

</body>

</html>
