<footer class="l-footer">
  <div class="l-footer__contents">
    <div class="l-footer__inner l-container--1col">
      <?php
      // メニューIDを取得
      $menu_name = 'footer_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <div class="l-footer__nav">
        <ul class="l-footer__nav-list">
          <?php foreach ($menu_items as $item) : ?>
            <li class="l-footer__nav-item">
              <a class="l-footer__nav-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="l-footer__info">
        <button class="l-footer__home-btn">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo02.png" alt="ホーム">
          </a>
        </button>
        <p class="l-footer__tel-num">
          <span><img src="<?php echo get_template_directory_uri(); ?>/img/icon-tell-w.png"></span>
          0123-456-7890
        </p>
        <p class="l-footer__tel-date">平日08:00〜20:00</p>
      </div>
    </div>
  </div>

  <div class="l-footer__cw">
    <div class="l-container--1col">
      <p class="l-footer__cw-text">&copy; 2020 Engress.</p>
    </div>
  </div>
</footer>
