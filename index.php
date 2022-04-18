<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="l-body">
  <?php get_template_part('includes/header'); ?>
  <main class="p-home">
    <article>
      <section class="p-home__main-view c-main-view">
        <h1 class="c-main-view__title">TOEFL対策はEngress</h1>
        <p class="c-main-view__text">
          日本人へのTOEFL指導歴豊かな講師陣の<br>
          コーチング型TOEFLスクール
        </p>
        <a class="c-main-view__btn c-request-button c-request-button--top" href="<?php the_permalink('10'); ?>">資料請求</a>
        <a class="c-main-view__link c-contact-link" href="<?php the_permalink('10'); ?>">お問い合わせ</a>
      </section>

      <section class="p-home__catch-copy c-catch-copy">
        <div class="l-container--1col">
          <h2 class="c-catch-copy__title c-sub-title c-sub-title--white c-sub-title--center">TOEFL学習でこんな悩み<br class="u-dn--tb u-dn--pc">ありませんか？</h2>
          <div class="c-catch-copy__text-wrap">
            <p class="c-catch-copy__text">
              勉強の習慣が<br>
              身についていない
            </p>
            <p class="c-catch-copy__text">
              勉強しているはず<br>
              なのに点数が伸びない
            </p>
            <p class="c-catch-copy__text">
              正しい勉強方法が<br>
              わからない
            </p>
          </div>
          <div class="c-catch-copy__answer">
            <div class="c-catch-copy__answer-inner">
              <p class="c-catch-copy__answer-title c-sub-title">
                Engressは<br>
                <span>TOEFLに特化した<br class="u-dn--tb u-dn--pc">スクール</span>です
              </p>
              <p class="c-catch-copy__answer-text">
                完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="u-dn--sp">
                TOEFLの苦手分野を克服します。
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="p-home__concept c-concept">
        <div class="l-container--1col">
          <h2 class="c-concept__title c-sub-title c-sub-title--navy c-sub-title--center">TOEFL対策に特化したEngress3つの強み</h2>
          <ul class="c-concept__item-wrap">
            <li class="c-concept__item">
              <div class="c-concept__contents">
                <div class="c-concept__item-tag">特徴1</div>
                <p class="c-concept__item-ttl">
                  TOEFLに最適化された<br>
                  無駄のないカリキュラム
                </p>
                <p class="c-concept__item-txt">
                  TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                </p>
              </div>
              <div class="c-concept__img"><img src="<?php echo get_template_directory_uri(); ?>/img/feature01.jpg" alt="カリキュラム イメージ画像"></div>
            </li>
            <li class="c-concept__item">
              <div class="c-concept__contents">
                <div class="c-concept__item-tag">特徴2</div>
                <p class="c-concept__item-ttl">
                  日本人指導歴10年以上の<br>
                  経験豊富な講師陣
                </p>
                <p class="c-concept__item-txt">
                  Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
                </p>
              </div>
              <div class="c-concept__img"><img src="<?php echo get_template_directory_uri(); ?>/img/feature02.jpg" alt="カリキュラム イメージ画像"></div>
            </li>
            <li class="c-concept__item">
              <div class="c-concept__contents">
                <div class="c-concept__item-tag">特徴3</div>
                <p class="c-concept__item-ttl">
                  平均3ヶ月でTOEFL iBT20点アップ
                </p>
                <p class="c-concept__item-txt">
                  Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
                </p>
              </div>
              <div class="c-concept__img"><img src="<?php echo get_template_directory_uri(); ?>/img/feature03.jpg" alt="カリキュラム イメージ画像"></div>
            </li>
          </ul>
          <div class="c-concept__plan">
            <div class="c-concept__plan-inr">
              <p class="c-concept__plan-ttl">Engressの料金プランはこちら</p>
              <a class="c-concept__plan-link" href="">料金を見てみる</a>
            </div>
          </div>
        </div>
      </section>

      <section class="p-home__case c-case">
        <div class="l-container--1col">
          <h2 class="c-case__title c-sub-title c-sub-title--white  c-sub-title--center">TOEFL成功事例</h2>
          <div class="c-case__card-wrap">
            <div class="c-case__card">
              <p class="c-case__message"><?php the_field('message-1',2799); ?></p>
              <div class="c-case__img"><img src="<?php the_field('img-1',2799); ?>" alt="イメージ"></div>
              <div class="c-case__status">
                <p class="c-case__job"><?php the_field('job-1',2799); ?></p>
                <p class="c-case__name"><?php the_field('name-1',2799); ?></p>
                <p class="c-case__result"><?php the_field('result-1',2799); ?></p>
              </div>
            </div>
            <div class="c-case__card">
              <p class="c-case__message"><?php the_field('message-2',2799); ?></p>
              <div class="c-case__img"><img src="<?php the_field('img-2',2799); ?>" alt="イメージ"></div>
              <div class="c-case__status">
                <p class="c-case__job"><?php the_field('job-2',2799); ?></p>
                <p class="c-case__name"><?php the_field('name-2',2799); ?></p>
                <p class="c-case__result"><?php the_field('result-2',2799); ?></p>
              </div>
            </div>
            <div class="c-case__card">
              <p class="c-case__message"><?php the_field('message-3',2799); ?></p>
              <div class="c-case__img"><img src="<?php the_field('img-3',2799); ?>" alt="イメージ"></div>
              <div class="c-case__status">
                <p class="c-case__job"><?php the_field('job-3',2799); ?></p>
                <p class="c-case__name"><?php the_field('name-3',2799); ?></p>
                <p class="c-case__result"><?php the_field('result-3',2799); ?></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-home__process c-process">
        <div class="l-container--1col">
          <h2 class="c-process__title c-sub-title c-sub-title--navy c-sub-title--center">ご利用の流れ</h2>
          <dl class="c-process__list">
            <div class="c-process__item">
              <span class="c-process__number">01</span>
              <dt class="c-process__item-name">お問い合わせ</dt>
              <span class="c-process__border"></span>
              <dd class="c-process__item-description">まずはフォームまたはお電話からお申し込みください。</dd>
            </div>
            <div class="c-process__item">
              <span class="c-process__number">02</span>
              <dt class="c-process__item-name">ヒアリング</dt>
              <span class="c-process__border"></span>
              <dd class="c-process__item-description">現在の学習状況やTOEFLスコア、目標スコアをお聞きします。</dd>
            </div>
            <div class="c-process__item">
              <span class="c-process__number">03</span>
              <dt class="c-process__item-name">学習プランのご提供</dt>
              <span class="c-process__border"></span>
              <dd class="c-process__item-description">目標達成のために最適な学習プランをご提案致します。</dd>
            </div>
            <div class="c-process__item">
              <span class="c-process__number">04</span>
              <dt class="c-process__item-name">ご入会</dt>
              <span class="c-process__border"></span>
              <dd class="c-process__item-description">お申込み完了後、レッスンがスタートします。</dd>
            </div>
          </dl>
        </div>
      </section>

      <section class="p-home__faq c-faq">
        <div class="l-container--1col">
          <h2 class="c-faq__title c-sub-title c-sub-title--navy c-sub-title--center">よくある質問</h2>
          <div class="c-faq__contents">
            <hr class="c-faq__hr">
            <div class="c-faq__question js-question">
              <p class="c-faq__q-text">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
            </div>
            <div class="c-faq__answer js-answer" style="display: none;">
              <p class="c-faq__a-text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
            </div>
            <hr class="c-faq__hr">
            <div class="c-faq__question js-question">
              <p class="c-faq__q-text">教材はオリジナルのものを使用しているのでしょうか？？</p>
            </div>
            <div class="c-faq__answer js-answer" style="display: none;">
              <p class="c-faq__a-text">Engressでは実績のある講師とタッグを組み、オリジナルの教材を制作、使用しております。</p>
            </div>
            <hr class="c-faq__hr">
            <div class="c-faq__question js-question">
              <p class="c-faq__q-text">講師に日本人はいますか？？</p>
            </div>
            <div class="c-faq__answer js-answer" style="display: none;">
              <p class="c-faq__a-text">日本人講師も多数在籍しております。</p>
            </div>
            <hr class="c-faq__hr">
            <div class="c-faq__question js-question">
              <p class="c-faq__q-text">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
            </div>
            <div class="c-faq__answer js-answer" style="display: none;">
              <p class="c-faq__a-text">志望校対策プランではお客様に合わせたサポート実施しており、海外大学の合格サポートも行っております。</p>
            </div>
            <hr class="c-faq__hr">
          </div>

        </div>
      </section>

      <section class="p-home__archives  l-container--1col">
        <div class="p-home__blog c-blog">
          <div class="c-blog__inner">
            <h2 class="c-blog__title c-sub-title c-sub-title--small">ブログ</h2>
            <ul class="c-blog__list">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li class="c-blog__item c-blog-item">
                    <a class="c-blog-item__link" href="<?php the_permalink(); ?>">
                      <div class="c-blog__img-box c-blog-item__img-box">
                        <div class="c-blog__tag c-blog-item__img-tag">
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
                      <div class="c-blog__contents c-blog-item__contents">
                        <p class="c-blog__description"><?php the_title(); ?></p>
                        <p class="c-blog__date"><?php the_time('Y-m-d'); ?></p>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>

        <div class="p-home__news c-news">
          <div class="c-news__inner">
            <h2 class="c-news__title c-sub-title c-sub-title--small">お知らせ</h2>
            <?php
            $args = [
              'post_type' => 'news',
              'posts_per_page' => 3,
            ];
            $my_query = new WP_Query($args); ?>
            <?php if ($my_query->have_posts()) : // 投稿がある場合
            ?>
              <ul class="c-news__list">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <li class="c-news__item">
                    <a href="<?php the_permalink(); ?>">
                      <p class="c-news__date"><?php the_time('Y-m-d'); ?></p>
                      <p class="c-news__description"><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php else : ?>
              <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
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
