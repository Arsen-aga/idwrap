<?php


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
              <a class="breadcrumbs__link" href="#">Блог</a>
            </li>
            <li class="breadcrumbs__point">
              <a class="breadcrumbs__link active" href="#">Атермальная плёнка: как в IDWrap мы делаем салон прохладнее, а поездки комфортнее</a>
            </li>
          </ul>
        </div>
        <div class="front-block__top">
          <h1 class="front-block__title _title-1">
            Атермальная плёнка: как в IDWrap<br>
            мы делаем салон прохладнее, а поездки<br> комфортнее
          </h1>
        </div>
        <div class="front-block__btns">
          <a class="front-block__btn _main-btn" href="#promocode" data-fancybox>
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
  <section class="content-block">
    <div class="container">
      <div class="content-block__inner">
        <div class="content-block__left">
          <div class="theContent">
            <p>
              Атермальная плёнка — это не мода и не маркетинг. Это продуманное решение, которое в IDWrap мы рекомендуем каждому, кто хочет защитить салон от жары, сохранить обивку и снизить нагрузку на кондиционер. Мы устанавливаем такие плёнки ежедневно и знаем, как превратить невидимую технологию в заметный комфорт.
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content-block-1.webp" alt="">
            <h4>
              Что такое атермальная плёнка и как она работает
            </h4>
            <p>
              Атермальная плёнка — это многослойный полимер с металлизированным или керамическим покрытием, который блокирует инфракрасные (тепловые) и ультрафиолетовые лучи, не затемняя стекло. Иными словами, плёнка остаётся почти прозрачной, но при этом салон остаётся прохладным.
            </p>
            <h5>
              Что получают наши клиенты после установки в IDWrap:
            </h5>
            <ul>
              <li>
                Снижение температуры в салоне до 10°C в жару,
              </li>
              <li>
                Защиту кожи, торпедо и сидений от выгорания,
              </li>
              <li>
                Уменьшение бликов и усталости глаз,
              </li>
              <li>
                Меньшую нагрузку на кондиционер,
              </li>
            </ul>
          </div>
        </div>
        <form class="content-block__form form-submit _image-wrapper" action="#">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <input type="hidden" name="from" value="«Детейлинг как подарок» — приведи друга и получи уход бесплатно">
          <h4 class="content-block__form-title">
            Заполните<br>
            форму и получите
          </h4>
          <p class="content-block__form-subtitle">
            промокод на мойку<br>
            со скидкой 50%
          </p>
          <div class="sec-6__form-inputs content-block__form-inputs">
            <input class="sec-6__form-number content-block__form-inp" name="phone" type="tel" required
              placeholder="Введите ваш телефон">
            <button type="submit" class="sec-6__form-submit content-block__form-btn _main-btn">
              Получить промокод<br>
              на мойку со скидкой 50%
            </button>
            <div class="sec-6__form-policy content-block__form-policy">
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
      </div>
    </div>
  </section>

  <div class="divider"></div>
  <!-- Рекомендованные статьи -->
  <?php get_template_part('template-parts/sections/recommended-articles'); ?>
  <!-- Узнайте больше о студии -->
  <div class="wrapper-brown">
    <?php get_template_part('template-parts/sections/more-info'); ?>
    <div class="space-sec"></div>
  </div>
  <div class="space-sec"></div>
  <?php get_template_part('template-parts/sections/sec-12'); ?>
  <?php get_template_part('template-parts/sections/sec-14'); ?>
  <?php get_template_part('template-parts/sections/map'); ?>


</main>

<?php get_footer(); ?>