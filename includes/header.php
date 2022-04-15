<header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__logo"><a href="#"><img class="l-header__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/logo01.png" alt="ロゴ"></a>
      </div>

      

      <nav class="l-header__nav l-header__nav u-dn--sp">
        <ul class="l-header__nav--list">
          <li class="l-header__nav--item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
          <li class="l-header__nav--item"><a href="<?php the_permalink(); ?>">お知らせ</a></li>
          <li class="l-header__nav--item"><a href="">ブログ</a></li>
          <li class="l-header__nav--item"><a href="<?php the_permalink(8); ?>">コース・料金</a></li>
        </ul>
      </nav>
      <div class="l-header__reception c-reception u-dn--sp">
        <p class="c-reception__date">平日08:00〜20:00</p>
        <p class="c-reception__num"><span class="c-reception__num--icon"><img
              src="<?php echo get_template_directory_uri(); ?>/img/icon-tell.png"></span>0123-456-7890</p>
      </div>
      <a href="#" class="l-header__button c-header-button  c-header-button--request u-dn--sp">資料請求</a>
      <a href="<?php the_permalink('10'); ?>" class="l-header__button c-header-button  c-header-button--inquiry u-dn--sp">お問い合わせ</a>
      <div class="l-header__hamburger c-hamburger">
        <div class="c-hamburger__button js-ham-button">
          <span class="c-hamburger__bar c-hamburger__bar--1st"></span>
          <span class="c-hamburger__bar c-hamburger__bar--2nd"></span>
          <span class="c-hamburger__bar c-hamburger__bar--3rd"></span>
        </div>
        <div class="c-hamburger__contents js-ham-contents">
          <div class="c-hamburger__inner">
            <ul class="c-hamburger__nav">
              <li class="c-hamburger__menu-item c-hamburger__nav-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
              <li class="c-hamburger__menu-item c-hamburger__nav-item"><a href="<?php the_permalink(); ?>">お知らせ</a></li>
              <li class="c-hamburger__menu-item c-hamburger__nav-item"><a href="<?php the_permalink(); ?>">ブログ</a></li>
              <li class="c-hamburger__menu-item c-hamburger__nav-item"><a href="<?php the_permalink(8); ?>">コース・料金</a></li>
            </ul>
            <a href="#" class="c-hamburger__menu-item c-hamburger__menu-button c-header-button  c-header-button--request">資料請求</a>
            <a href="<?php get_permalink('10'); ?>" class="c-hamburger__menu-item c-hamburger__menu-button c-header-button  c-header-button--inquiry">お問い合わせ</a>
          </div>
        </div>
      </div>
    </div>
  </header>
