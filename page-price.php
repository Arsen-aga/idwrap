<?php

get_header(); ?>
<main class="main" id="price-page">
  <section class="front-block _image-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/front-bg-2.webp);">
    <div class="overlay"></div>
    <div class="container">
      <div class="front-block__inner relative">
        <?php dimox_breadcrumbs(); ?>
        <div class="front-block__top">
          <h1 class="front-block__title _title-1">
            Цены студии детейлинга
          </h1>
          <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
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

  <section class="services-price">
    <div class="container">
      <div class="services-price__inner">
        <div class="services-price__left">
          <form action="#" method="post" class="search services-price__search">
            <?php include(get_template_directory() . '/assets/images/icons/search.svg'); ?>
            <input class="search__inp" type="text" name="search" placeholder="Поиск по услугам">
          </form>
          <div class="services-price__items">
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Антигравийная оклейка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Бронирование фар пленкой
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Частичная оклейка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Полная оклейка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Оклейка зон риска
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Оклейка отдельных элементов
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Винилография
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Оклейка автомобиля
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Глянцевая пленка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Хром/Золото
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Матовая пленка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Хамелеон/Перламутр
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Камуфляжная пленка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Карбоновая пленка
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
            <div class="services-price__item change-price-item change-popup-item">
              <h4 class="services-price__item-title change-popup-title">
                Брендирование
              </h4>
              <div class="services-price__item-price">
                <p class="services-price__item-num change-price-num">
                  1000 ₽
                </p>
                <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox="">
                  Или напишите свою цену
                </a>
              </div>
              <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
            </div>
          </div>
          <a class="services-price__btn-more _transparent-btn" href="#">
            Показать больше услуг
          </a>
        </div>
        <div class="services-price__right">
          <div class="services-price__right-wrapper">
            <img class="services-price__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-price-1.webp" alt="">
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