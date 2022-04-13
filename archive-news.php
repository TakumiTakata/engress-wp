<!DOCTYPE html>
<html lang="ja">

<head>
  <? get_header(); ?>
</head>

<body class="l-body">
  <?php get_template_part('includes/header'); ?>
  <div class="c-top-view u-top-view--news">
    <h1 class="c-top-view__title">お知らせ</h1>
  </div>

  <div class="c-bread-crump">
    <div class="l-container--1col">
      <p class="c-bread-crump__link">
        <a href="">ホーム</a>
        ＞
        <a href="">お知らせ</a>
      </p>
    </div>
  </div>

  <article>
    <main>
      <section class="p-news c-news-summary">
        <h2 class="c-news-summary__title c-sub-title c-sub-title--small  c-sub-title--center">お知らせ一覧</h2>
        <div class="l-container--1col">
          <ul class="c-news-summary__list">
            <hr class="c-news-summary__hr">
            <!-- loop -->
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <!-- /loop -->
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
            <li class="c-news-summary__item">
              <p class="c-news-summary__date">2020-12-30</p>
              <p class="c-news-summary__description">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </li>
            <hr class="c-news-summary__hr">
          </ul>
          <div class="c-pagination">1 2 ... 3</div>
        </div>
      </section>
    </main>
  </article>


  <div class="l-request">
    <div class="l-request__contents">
      <h2 class="l-request__title">まずは無料で資料請求から</h2>
      <a class="l-request__btn c-request-button c-request-button--small" href="">資料請求</a>
      <a class="l-request__link c-contact-link" href="">お問い合わせ</a>
    </div>
    <div class="l-request__tell">
      <div class="l-request__tell-inner">
        <p class="l-request__tell-text">お電話でのお問い合わせはこちら</p>
        <p class="l-request__tell-num">0123-456-7890</p>
        <p class="l-request__tell-date">平日 08:00~20:00</p>
      </div>
    </div>
  </div>


  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <? get_footer(); ?>
</body>

</html>
