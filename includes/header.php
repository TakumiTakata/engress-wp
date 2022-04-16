<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img class="l-header__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/logo01.png" alt="ロゴ"></a>
    </div>

    <?php
    // メニューIDを取得
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <nav class="l-header__nav l-header__nav u-dn--sp">
      <ul class="l-header__nav--list">
        <?php foreach ($menu_items as $item) : ?>
          <li class="l-header__nav--item">
            <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <div class="l-header__reception c-reception u-dn--sp">
      <p class="c-reception__date">平日08:00〜20:00</p>
      <p class="c-reception__num"><span class="c-reception__num--icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-tell.png"></span>0123-456-7890</p>
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
            <?php foreach ($menu_items as $item) : ?>
              <li class="c-hamburger__menu-item c-hamburger__nav-item">
                <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
          <a href="#" class="c-hamburger__menu-item c-hamburger__menu-button c-header-button  c-header-button--request">資料請求</a>
          <a href="<?php get_permalink('10'); ?>" class="c-hamburger__menu-item c-hamburger__menu-button c-header-button  c-header-button--inquiry">お問い合わせ</a>
        </div>
      </div>
    </div>
  </div>
</header>
