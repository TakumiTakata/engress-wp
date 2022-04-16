<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body class="l-body p-form">
  <?php get_template_part('includes/header'); ?>
  <div class="c-top-view u-top-view--contact">
    <h1 class="c-top-view__title">お問い合わせ・資料請求</h1>
  </div>

  <div class="c-bread-crump">
    <div class="l-container--1col">
      <p class="c-bread-crump__link">
        <a href="">ホーム</a>
        ＞
        <a href="">お問い合わせ</a>
      </p>
    </div>
  </div>

  <div class="l-container--1col">
    <main>
      <article>
        <section class="p-form__contents l-container--form">
          <?php the_content(); ?>
          <!-- <form action="">
            <div class="p-form__form-wrap c-form">
              <p class="p-form__message c-form__text">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
              <label class="p-form__label c-form__label" for="company">会社名</label>
              <input class="p-form__input c-form__str-input c-form__placeholder" id="company" type="text" placeholder="Engress">

              <label class="p-form__label c-form__label" for="name">氏名</label>
              <input class="p-form__input c-form__str-input c-form__placeholder" id="name" type="text" placeholder="田中　太郎">

              <label class="p-form__label c-form__label" for="email">メールアドレス</label>
              <input class="p-form__input c-form__str-input c-form__placeholder" id="email" type="email" placeholder="example@example.com">

              <label class="p-form__label c-form__label" for="number">電話番号</label>
              <input class="p-form__input c-form__str-input c-form__placeholder" id="number" type="number" placeholder="01-2345-6789">

              <p class="p-form__select c-form__text">お問い合わせの種類を選択してください（<span class="c-form__text--bold">資料請求の方は資料請求を選択ください</span>）</p>
              <label class="p-form__select-label c-form__label" for="business">
                <input class="p-form__select-input c-form__select-input" id="business" type="radio" name="contact-type">
                商談のご相談
              </label>
              <label class="p-form__select-label c-form__label" for="service">
                <input class="p-form__select-input c-form__select-input" id="service" type="radio" name="contact-type">
                サービスに関するお問い合わせ
              </label>
              <label class="p-form__select-label c-form__label" for="requets">
                <input class="p-form__select-input c-form__select-input" id="requets" type="radio" name="contact-type">
                資料請求
              </label>
              <label class="p-form__select-label c-form__label" for="ather">
                <input class="p-form__select-input c-form__select-input" id="ather" type="radio" name="contact-type">
                その他
              </label>

              <label class="p-form__textarea-label c-form__label" for="contents">お問い合わせ内容</label>
              <input class="p-form__textarea-input c-form__textarea c-form__placeholder" id="contents" type="textarea" placeholder="入力してください">

              <p class="p-form__policy-text c-form__policy-text"><a class="u-link u-link--orange" href="#">プライバシーポリシー</a>に同意の上、送信ください。</p>
              <label class="p-form__policy-label c-form__policy-label" for="privacy-policy">
                <input class="c-form__policy-input" id="privacy-policy" type="checkbox" name="contact-type">
                プライバシーポリシーに同意する
              </label>

              <div class="p-form__submit-button c-form__submit-button"><input class="c-form__submit-text" type="submit" value="送信する"></div>
            </div>
          </form> -->


        </section>
      </article>
    </main>
  </div>


  <?php get_template_part('includes/footer'); ?>


  <?php get_footer(); ?>

</body>

</html>
