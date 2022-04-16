<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="l-body">
  <?php get_template_part('includes/header'); ?>
  <div class="c-top-view u-top-view--price">
    <h1 class="c-top-view__title">コース・料金</h1>
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

  <main>
    <article>

      <section class="p-price">
        <div class="l-container--1col">
          <div class="p-price__summary c-summary">
            <h2 class="c-summary__title c-sub-title c-sub-title--small  c-sub-title--center">料金体系</h2>
            <div class="c-summary__wrap">
              <p class="c-summary__item">入会金 39,800円</p>
              <span class="c-summary__plus"></span>
              <p class="c-summary__item">月額費用</p>
            </div>
            <p class="c-summary__text">
              Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
          </div>

          <div class="p-price__plans">
            <h2 class="c-plans__title c-sub-title c-sub-title--small c-sub-title--center">料金表</h2>
            <ul class="c-plans__cards js-scrollable">
              <li class="c-plans__card">
                <div class="c-plans__header">
                  <p class="c-plans__header-txt">基礎プラン</p>
                </div>
                <div class="c-plans__body">
                  <p class="c-plans__price">
                    <?php
                    $price = number_format(get_field('basic'));
                    echo $price . '円~';
                    ?>
                  </p>
                  <p class="c-plans__attention">*月額（税抜価格）</p>
                  <ul class="c-plans__list">
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>カリキュラム作成</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>TOEFL学習サポート</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>週一回のビデオMTG</li>
                  </ul>
                </div>
              </li>
              <li class="c-plans__card">
                <div class="c-plans__header">
                  <p class="c-plans__header-txt">演習プラン</p>
                </div>
                <div class="c-plans__body">
                <p class="c-plans__price">
                    <?php
                    $price = number_format(get_field('exercises'));
                    echo $price . '円~';
                    ?>
                  </p>
                  <p class="c-plans__attention">*月額（税抜価格）</p>
                  <ul class="c-plans__list">
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>カリキュラム作成</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>TOEFL学習サポート</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>週一回のビデオMTG</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>月二回の模試（解説 付き）</li>
                  </ul>
                </div>
              </li>
              <li class="c-plans__card">
                <div class="c-plans__header--rec">
                  <p class="c-plans__header-txt">おすすめ</p>
                  <p class="c-plans__header-txt">志望校対策プラン</p>
                </div>
                <div class="c-plans__body">
                <p class="c-plans__price">
                    <?php
                    $price = number_format(get_field('counter'));
                    echo $price . '円~';
                    ?>
                  </p>
                  <p class="c-plans__attention">*月額（税抜価格）</p>
                  <ul class="c-plans__list">
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>カリキュラム作成</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>TOEFL学習サポート</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>週一回のビデオMTG</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>月二回の模試（解説付き）</li>
                    <li class="c-plans__list-item"><span class="c-plans__check"></span>週一の英語面接対策</li>
                  </ul>
                </div>
              </li>
              <li class="c-plans__card">
                <div class="c-plans__header">
                  <p class="c-plans__header-txt">フレックスプラン</p>
                </div>
                <div class="c-plans__body">
                <p class="c-plans__price">
                    <?php
                    $price = number_format(get_field('flex'));
                    echo $price . '円~';
                    ?>
                  </p>
                  <p class="c-plans__attention">*月額（税抜価格）</p>
                  <ul class="c-plans__list">
                    <li class="c-plans__list-item">＊別途ご相談ください</li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </article>
  </main>


  <?php get_template_part('includes/request'); ?>
  <?php get_template_part('includes/footer'); ?>


  <?php get_footer(); ?>

</body>

</html>
