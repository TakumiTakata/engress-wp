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
        <?php else: ?>
          <h2 class="c-archives__title c-sub-title c-sub-title--small  c-sub-title--center">新着一覧</h2>
        <?php endif; ?>

        <div class="l-container--1col">
          <ul class="c-archives__list">

            <?php
            $information = get_posts(array(
              //ここで取得条件を指定する
            ));
            if ($information) :
            ?>
              <ul>
                <?php
                foreach ($information as $post) :
                  setup_postdata($post);
                ?>
                  <li>
                    <?php the_time('Y年n月j日'); ?> - <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                  </li>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
              </ul>
            <?php else : ?>
              <p>表示できる情報はありません。</p>
            <?php endif; ?>

            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample01.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample02.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample03.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample02.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample03.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample02.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample03.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample02.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample03.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
            <li class="c-archives__item c-blog-item">
              <a class="c-blog-item__link" href="">
                <div class="c-archives__img-box c-blog-item__img-box">
                  <div class="c-archives__tag c-blog-item__img-tag">カテゴリー</div>
                  <img class="c-archives__img c-blog-item__img" src="../img/sample02.jpg" alt="サムネイル">
                </div>
                <div class="c-archives__contents c-blog-item__contents">
                  <p class="c-archives__date">2020-12-01</p>
                  <p class="c-archives__item-title">ブログタイトルテキストテキストテキストテキスト</p>
                  <p class="c-archives__description">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
              </a>
            </li>
          </ul>
          <div class="c-pagination">1 2 ... 3</div>
        </div>

      </section>
    </article>
  </main>


  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <? get_footer(); ?>

</body>

</html>
