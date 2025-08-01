<?php

/**
 * Template Name: Акции (source)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */



get_header();
?>

<!-- Сингловая пленок -->
<main class="main" id="price-page">
  <section class="front-block _image-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/front-bg-2.webp);">
    <div class="overlay"></div>
    <div class="container">
      <div class="front-block__inner relative">
        <div class="breadcrumbs">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__point">
              <a class="breadcrumbs__link" href="#">Главная</a>
            </li>
            <li class="breadcrumbs__point">
              <a class="breadcrumbs__link active" href="#">Акции</a>
            </li>
          </ul>
        </div>
        <div class="front-block__top">
          <h1 class="front-block__title _title-1">
            Акции студии детейлинга
          </h1>
          <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
        </div>
        <div class="front-block__btns">
          <a class="front-block__btn _main-btn" href="#callback-modal" data-fancybox>
            Получить промокод на скидку
          </a>
          <a class="front-block__link" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0" target="_blank">
            <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
            <span>Или получите консультацию</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="actual-actions">
    <div class="container">
      <h2 class="actual-actions__title _title ">
        Актуальные акции
      </h2>
      <div class="actual-actions__inner">
        <form class="actual-actions__form form-submit" action="#">
          <div class="actual-actions__form-sup">
            <img class="actual-actions__form-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/actual-actions-logo.webp" alt="">
          </div>
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <input type="hidden" name="from" value="«Детейлинг как подарок» — приведи друга и получи уход бесплатно">
          <p class="actual-actions__form-suptitle _main-btn">
            Акция до 29 мая
          </p>
          <h4 class="actual-actions__form-title">
            «Детейлинг как подарок» — приведи<br>
            друга и получи уход бесплатно
          </h4>
          <p class="actual-actions__form-text">
            Приводите друга — он получает скидку 15% на<br> любую услугу, а вы — бесплатную мойку с воском<br> или химчистку ковров.
          </p>
          <div class="sec-6__form-inputs actual-actions__form-inputs">
            <img class="actual-actions__form-gift" src="<?php echo get_template_directory_uri(); ?>/assets/images/actual-actions-gift.webp" alt="">
            <input class="sec-6__form-number  actual-actions__form-inp" name="phone" type="tel" required
              placeholder="Введите ваш телефон">
            <button type="submit" class="sec-6__form-submit  actual-actions__form-btn _main-btn _orange-btn">
              Воспользоваться акцией
            </button>
            <div class="sec-6__form-policy actual-actions__form-policy">
              <input class="sec-12__form-checkbox" checked required type="checkbox"
                name="checkbox" id="checkbox-element3">
              <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-element3">
                <span>
                  <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                      fill="#F37021" />
                  </svg>
                </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                  href="#policy">политики конфиденциальности</a>
              </label>
            </div>
          </div>
        </form>
        <div class="actual-actions__inner-right">
          <div class="actual-actions__inner-wrapper">
            <img class="actual-actions__inner-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/actual-actions-1.webp" alt="">
          </div>
        </div>
      </div>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="actual-actions__items">
        <div class="default-item actual-actions__item">
          <div class="default-item__wrapper">
            <img class="default-item__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/polishing-types-1.webp" alt="">
          </div>
          <div class="default-item__info">
            <h4 class="default-item__title">
              «Комплекс за полцены»<br>
              на первую услугу
            </h4>
            <p class="default-item__text">
              Первым 20 клиентам месяца — 50% <br>на комплексную полировку или <br>химчистку салона.
            </p>
            <a class="default-item__btn _main-btn" href="#">
              Воспользоваться акцией
            </a>
          </div>
        </div>
        <div class="default-item actual-actions__item">
          <div class="default-item__wrapper">
            <img class="default-item__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/polishing-types-1.webp" alt="">
          </div>
          <div class="default-item__info">
            <h4 class="default-item__title">
              «Защита на год<br>
              в подарок»
            </h4>
            <p class="default-item__text">
              При полной оклейке авто плёнкой —<br> нанесение защитной керамики на<br> стёкла и диски бесплатно.
            </p>
            <a class="default-item__btn _main-btn" href="#">
              Воспользоваться акцией
            </a>
          </div>
        </div>
        <div class="default-item actual-actions__item">
          <div class="default-item__wrapper">
            <img class="default-item__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/polishing-types-1.webp" alt="">
          </div>
          <div class="default-item__info">
            <h4 class="default-item__title">
              «Вторая услуга<br>
              за 1 рубль»
            </h4>
            <p class="default-item__text">
              Заказываете, например, химчистку<br> салона — наносим антидождь на<br> лобовое за 1 рубль.
            </p>
            <a class="default-item__btn _main-btn" href="#">
              Воспользоваться акцией
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="space-sec"></div>
  <?php get_template_part('template-parts/sections/sec-12'); ?>
  <?php get_template_part('template-parts/sections/sec-14'); ?>
  <?php get_template_part('template-parts/sections/map'); ?>


</main>

<?php get_footer(); ?>