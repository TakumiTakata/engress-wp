<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="l-body p-form">
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__logo"><a href="#"><img class="l-header__logo--img" src="./img/logo@2x.png" alt="ロゴ"></a>
      </div>
      <nav class="l-header__nav l-header__nav">
        <ul class="l-header__nav--list">
          <li class="l-header__nav--item"><a href="">ホーム</a></li>
          <li class="l-header__nav--item"><a href="">お知らせ</a></li>
          <li class="l-header__nav--item"><a href="">ブログ</a></li>
          <li class="l-header__nav--item"><a href="">コース・料金</a></li>
        </ul>
      </nav>
      <div class="l-header__reception c-reception">
        <p class="c-reception__date">平日08:00〜20:00</p>
        <p class="c-reception__num"><span class="c-reception__num--icon"><img
              src="img/tel-icon@2x.png"></span>0123-456-7890</p>
      </div>
      <a href="#" class="l-header__button c-header-button  c-header-button--request">資料請求</a>
      <a href="#" class="l-header__button c-header-button  c-header-button--inquiry">お問い合わせ</a>
    </div>
  </header>

  <div class="c-bread-crump">
    <div class="l-container--1col">
      <p class="c-bread-crump__link">
        <a href="">ホーム</a>
        ＞
        <a href="">送信完了</a>
      </p>
    </div>
  </div>

  <div class="l-container--1col">
    <main>
      <article>
        <section class="p-form__thanks">
          <div class="l-container--1col">
            <p class="p-form__thanks-message">
              お問い合わせいただきありがとうございます<br class="u-dn--sp">
              内容を確認した後、担当者よりご連絡いたします
            </p>
            <a class="p-form__thanks-link u-link" href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
          </div>
        </section>
      </article>
    </main>
  </div>


  <footer class="l-footer">
    <div class="l-footer__contents">
      <div class="l-footer__inner">
        <div class="l-footer__nav">
          <ul class="l-footer__nav-list">
            <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="">ホーム</a></li>
            <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="">お知らせ</a></li>
            <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="">ブログ</a></li>
            <li class="l-footer__nav-item"><a class="l-footer__nav-link" href="">コース・料金</a></li>
          </ul>
        </div>
        <div class="l-footer__content">
          <button class="l-footer__home-btn"><a href="#"><img src="../img/logo@2x.png" alt="ホーム"></a></button>
          <p class="l-footer__tel-num"><span><img src="img/tel-w-icon@2x.png"></span>0123-456-7890</p>
          <p class="l-footer__tel-date">平日08:00〜20:00</p>
        </div>
      </div>
    </div>

    <div class="l-footer__cw">
      <div class="l-footer__inner">
        <p class="l-footer__cw-text">&copy; 2020 Engress.</p>
      </div>
    </div>
  </footer>


</body>

</html>
