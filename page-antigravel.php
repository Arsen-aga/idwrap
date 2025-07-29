<?php

/**
 * Template Name: Оклейка автомобиля (single)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */



get_header(); ?>
<!-- Сингловая пленок -->
<main class="main" id="skin-single">



  <!-- каркас инфо -->
  <?php get_template_part('template-parts/sections/carcase-info'); ?>
  <!-- skin-option -->
  <?php get_template_part('template-parts/sections/skin-option'); ?>
  <div class="wrapper-brown">
    <!-- skin-happen блок с карточками -->
    <?php get_template_part('template-parts/sections/skin-happen'); ?>
    <!-- большой отступ -->
    <div class="space-sec"></div>
    <!-- skin-listimg блок с картинкой и списком -->
    <?php get_template_part('template-parts/sections/skin-listimg'); ?>
  </div>
  
  <?php get_template_part('template-parts/sections/verified-materials'); ?>

  <!-- Виды  -->
  <?php get_template_part('template-parts/sections/polishing-types'); ?>


  <!-- материалы мировых производителей карточки -->
  <?php get_template_part('template-parts/sections/materials-manufacturers'); ?>

  <?php get_template_part('template-parts/sections/pasting-of-any-complexity'); ?>

  <?php get_template_part('template-parts/sections/full-wrapping'); ?>

  <div class="wrapper-brown">
    <?php get_template_part('template-parts/sections/sec-2');?>
  </div>

  <?php get_template_part('template-parts/sections/video-reviews');?>

  <div class="space-sec"></div>

  <?php get_template_part('template-parts/sections/quiz');?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/verified-materials');?>

    <div class="divider"></div>

    <?php get_template_part('template-parts/sections/pasting-options'); ?>

    <div class="space-sec"></div>

  </div>

  <?php get_template_part('template-parts/sections/sec-7'); ?>

  <?php get_template_part('template-parts/sections/perfect-result'); ?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/quality-pasting'); ?>

    <div class="space-sec"></div>

  </div>

  <?php get_template_part('template-parts/sections/sec-10'); ?>

  <?php get_template_part('template-parts/sections/sec-11'); ?>

  <?php get_template_part('template-parts/sections/sec-12'); ?>

  <?php get_template_part('template-parts/sections/complex-service');?>

  <div class="wrapper-brown">
    <section class="quality-pasting">
      <div class="container">
        <h2 class="quality-pasting__title _title">
          Хотите увидеть процесс лично<br>
          и убедиться в качестве оклейки?
        </h2>
        <div class="quality-pasting__items">
          <div class="quality-pasting__item">
            <div class="quality-pasting__item-wrapper">
              <img class="quality-pasting__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-09/excurs.webp" alt="">
            </div>
            <div class="quality-pasting__item-info">
              <h4 class="quality-pasting__item-title">
                Проведем экскурсию<br>
                по детейлинг-студии
              </h4>
              <p class="quality-pasting__item-text">
                Приглашаем вас посетить нашу<br> студию, где вы сможете увидеть <br>автомобили, находящиеся в работе,<br>
                и ознакомиться с процессом<br> разборки и сборки
              </p>
              <address class="footer__col-address quality-pasting__item-address">
                <?php include(get_template_directory() . '/assets/images/icons/geo.svg'); ?>
                <p>ул. Архитектора Щусева, 5, к1</p>
              </address>
              <a class="quality-pasting__item-btn _main-btn" href="">
                Записаться на экскурсию<br>
                по детелинг-студии
              </a>
            </div>
          </div>
          <div class="quality-pasting__item">
            <div class="quality-pasting__item-info">
              <h4 class="quality-pasting__item-title">
                Предоставим видеоотчеты<br>
                выполненных оклеек,
              </h4>
              <p class="quality-pasting__item-text">
                в которых вы увидите все этапы —<br>
                от процесса разборки до оклейки<br>
                и сборки автомобиля
              </p>
              <a class="quality-pasting__item-btn _main-btn" href="">
                Получить видеоотчеты<br>
                выполненных оклеек
              </a>
            </div>
            <div class="quality-pasting__item-wrapper">
              <img class="quality-pasting__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-09/report.webp" alt="">
            </div>
          </div>
          <div class="quality-pasting__item">
            <div class="quality-pasting__item-wrapper">
              <img class="quality-pasting__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-09/translation.webp" alt="">
            </div>
            <div class="quality-pasting__item-info">
              <h4 class="quality-pasting__item-title">
                Организуем онлайн- <br>
                трансляцию из студии<br>
                из детейлинга
              </h4>
              <p class="quality-pasting__item-text">
                Специалист выйдет с вами<br>
                на видеосвязь прямо из студии <br>детейлинга и покажет любой <br>интересующий процесс
              </p>
              <a class="quality-pasting__item-btn _main-btn" href="">
                Согласовать время<br>
                видеосозвона
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="space-sec"></div>

  </div>

  <section class="sec-10">
    <div class="sec-10__background _image-abs">
      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/1top/background.webp" alt=" Изображение - автомобиль в паркинге">
    </div>
    <div class="sec-10__container container relative">
      <h2 class="sec-10__title _title">
        После выполнения работ <br>
        ваш автомобиль будет находиться
      </h2>
      <p class="sec-10__subtitle _subtitle">
        в теплом охраняемом паркинге под видеонаблюдением
      </p>
      <div class="sec-10__content">
        <div class="sec-10__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/2bottom/osmotr.webp"
              alt=" Изображение - оплата после осмотра обложка">
          </div>
          <div class="sec-10__item-textbox">
            <p class="sec-10__item-title">
              Полную оплату вы <br>
              производите только после <br>
              осмотра автомобиля
            </p>
          </div>
        </div>
        <div class="sec-10__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/2bottom/free.webp"
              alt=" Изображение - бесплатный контрольный осмотр обложка">
          </div>
          <div class="sec-10__item-textbox">
            <p class="sec-10__item-title">
              Через 2 недели проводим <br>
              бесплатный контрольный осмотр —
            </p>
            <p class="sec-10__item-info _card-info">
              моем ваш авто и проводим осмотр <br>
              состояния пленки
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section sec-11 _sec-light">
    <div class="sec-11__background _image-abs">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-11/background.svg" alt=" Изображение - логотип на фон">
    </div>
    <div class="sec-11__container container relative">
      <div class="sec-11__content">
        <div class="sec-11__element">
          <div class="_image-abs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-11/docs.webp" alt=" Изображение - документы на фон">
          </div>
        </div>
        <h2 class="sec-11__title _title">
          Гарантия <br>
          действует <br>
          <span>на весь срок <br>
            эксплуатации <br>
            автомобиля:</span>
        </h2>
        <ul class="sec-11__list">
          <li>
            <p class="sec-11__info _card-info">
              гарантия на <span>качество оклейки: </span><br>
              отсутствие вздутий пленки или отклеиваний
            </p>
          </li>
          <li>
            <p class="sec-11__info _card-info">
              гарантия на <span>качество сборки </span>автомобиля
            </p>
          </li>
          <li>
            <p class="sec-11__info _card-info">
              гарантия на <span>оригинальность пленки</span>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section sec-12">
    <div class="sec-12__container container">
      <h2 class="sec-12__title _title">
        Получите промокод <br>
        на бесплатную оклейку <br>
        элементов автомобиля
      </h2>
      <div class="sec-12__content">
        <form action="#" class="form sec-12__form form form-submit">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <input type="hidden" name="from"
            value="получите промокод на бесплатную оклейку элементов автомобиля">
          <p class="sec-12__form-li _li-1">
            1. Выберите вид оклейки и подарок:
          </p>
          <div class="sec-12__form-typebox">
            <input class="sec-12__form-type" checked required name="type" id="type1" type="radio"
              value="При частичной оклейке — защита под ручками или внутреннего водительского порога">
            <label class="sec-12__form-button _transparent-btn" for="type1">
              <span class="sec-12__button-text">При частичной оклейке <span class="sec-12__button-specialize">— защита под ручками <br>
                  или внутреннего водительского порога</span></span>
            </label>
            <input class="sec-12__form-type" name="type" id="type2" type="radio"
              value="При полной оклейке — защита передней оптики">
            <label class="sec-12__form-button _transparent-btn" for="type2">
              <span class="sec-12__button-text">При полной оклейке — <span class="sec-12__button-specialize">защита передней оптики</span></span>
            </label>
          </div>
          <p class="sec-12__form-li _li-2">
            2. Куда вам удобно получить промокод?
          </p>
          <div class="sec-12__form-methodbox">
            <input class="sec-12__form-method" checked required name="method" id="method1"
              type="radio" value="Телефон">
            <label class="sec-12__form-social _transparent-btn _callbtn" for="method1">
              <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_130_1508)">
                  <path
                    d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                    fill="#999999" />
                  <path
                    d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                    fill="#999999" />
                  <path
                    d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                    fill="#999999" />
                </g>
              </svg>
              Телефон
            </label>
            <input class="sec-12__form-method" name="method" id="method2" type="radio"
              value="WhatsApp">
            <label class="sec-12__form-social _transparent-btn _whatsapp" for="method2">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_130_1005)">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                    fill="white" />
                </g>
              </svg>
              WhatsApp
            </label>
          </div>
          <p class="sec-12__form-li _li-3">
            3. Введите номер телефона
          </p>
          <div class="sec-12__form-inputs">
            <input class="sec-12__form-number" name="phone" type="tel" required
              placeholder="Введите ваш телефон">
            <button type="submit" class="sec-12__form-submit _main-btn _orange-btn">
              Получить промокод
            </button>
            <div class="sec-12__form-policy">
              <input class="sec-12__form-checkbox" checked required type="checkbox"
                name="checkbox" id="checkbox1">
              <label class="sec-12__form-accept" for="checkbox1">
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

  <section class="complex-services">
    <div class="container">
      <h2 class="complex-services__title _title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg" alt="logo">
        это полный комплекс услуг<br>
        для самых требовательных<br>
        клиентов
      </h2>
      <div class="complex-services__swiper main-swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide complex-services__slide main-swiper__slide">
            <div class="complex-services__item main-swiper__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-28.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Химчистка<br>
                  автомобиля
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-29.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Полировка<br>
                  автомобиля
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-30.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Нанесение<br>
                  защитных<br>
                  покрытий
                </h4>
                <div class="default-card__usluga-infobox">
                  <ul class="list-point default-card__usluga-box _morebox _noactive" id="more1">
                    <li>
                      <p class="sec-13__usluga-info">
                        керамика
                      </p>
                    </li>
                    <li>
                      <p class="sec-13__usluga-info">
                        антидождь
                      </p>
                    </li>
                    <li>
                      <p class="sec-13__usluga-info">
                        жидкое стекло
                      </p>
                    </li>
                    <li>
                      <p class="sec-13__usluga-info">
                        кварц
                      </p>
                    </li>
                  </ul>
                  <div class="default-card__btns">
                    <a class="default-card__link _main-btn info-more" href="#more1">
                      Подробнее
                    </a>
                    <a class="default-card__info" href="#">
                      <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-31.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Шумоизоляция
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-32.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Восстановление<br>
                  кузова
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-33.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Антихром
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="complex-services__cards">
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/priemka.webp" alt=" Изображение - приемка и выдача автомобиля">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <span></span>
            <div class="complex-services__card-content">
              <p class="complex-services__card-title">
                Приемка и выдача автомобиля <br>
                проходит в теплом охраняемом <br>
                паркинге
              </p>
            </div>
          </div>
        </div>
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/podmena.webp" alt=" Изображение - предоставляем подменный автомобиль">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <ul class="complex-services__usluga-list list-point">
              <li>
                <p class="complex-services__usluga-info">
                  полный привод
                </p>
              </li>
              <li>
                <p class="complex-services__usluga-info">
                  автопилот
                </p>
              </li>
              <li>
                <p class="complex-services__usluga-info">
                  полная шумоизоляция
                </p>
              </li>
              <li>
                <p class="complex-services__usluga-info">
                  запуск с ключа
                </p>
              </li>
            </ul>
            <div class="complex-services__card-content">
              <p class="complex-services__card-title">
                Предоставляем подменный автомобиль <br>
                Geely Manjaro при оклейке на сумму <br>
                от 300 тыс. руб.
              </p>
            </div>
          </div>
        </div>
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/zaberi.webp" alt=" Изображение - услуга забери и привези">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <div class="complex-services__card-content _last-content">
              <span class="complex-services__card-sign _main-btn">
                По запросу
              </span>
              <p class="complex-services__card-title">
                Услуга «Забери и привези» —
              </p>
              <p class="complex-services__card-info">
                мы сами заберем ваш автомобиль и доставим <br>
                его после завершения работ
              </p>
            </div>
          </div>
        </div>
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/oneday.webp"
            alt=" Изображение - услуга оклейка автомобиля за один день">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <div class="complex-services__card-content _last-content">
              <span class="complex-services__card-sign _main-btn">
                По запросу
              </span>
              <p class="complex-services__card-title">
                Услуга «Оклейка автомобиля <br>
                за один день» —
              </p>
              <p class="complex-services__card-info">
                по запросу выполним полную оклейку авто <br>
                всего за 1 день, вместо стандартных 3-4 дней
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper-brown">

    <section class="sec-14">
      <div class="sec-14__container container">
        <div class="sec-14__layout">
          <div class="sec-14__content">
            <h2 class="sec-14__title _title">
              Ждем вас в <br>
              студии детейлинга
            </h2>
            <div class="sec-14__logo">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt=" Изображение - логотип">
            </div>
            <p class="sec-14__time">
              Ежедневно с 10:00 до 22:00 <br>без выходных
            </p>
            <p class="sec-14__li _location">
              Адрес в Москве:
            </p>
            <p class="sec-14__location">
              ул. Архитектора Щусева, 5, к1
            </p>
            <p class="sec-14__li _phone">
              Телефон для предварительной записи:
            </p>
            <a href="tel:+74952980377" class="sec-14__phone">
              +7 495 298 03 77
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0" class="sec-14__whatsapp _whatsapp-btn">
              <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              Написать в WhatsApp
            </a>
          </div>
          <div class="sec-14__banner">
            <div class="_image-abs">

              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-14-banner.webp"
                alt=" Изображение - баннер секции ждем вас в студии детейлинга">
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <section id="mapscroll" class="sec-map _sec-light">
    <div class="container">
      <h2 class="sec-map__title _title">
        Получите схему проезда <br>
        и все контакты себе на телефон
      </h2>
    </div>
    <div class="sec-map__map">
      <div id="map"></div>
      <div class="sec-map__container container">
        <div class="sec-map__contacts">
          <div class="sec-map__contacts-inner">
            <p class="sec-map__contacts-title">Заполните форму ниже,</p>
            <p class="sec-map__contacts-name">чтобы получить подробную схему<br> проезда в
              <span>WhatsApp</span>
            </p>
            <form onsubmit="ym(98054545,'reachGoal','ssf')" action="#" class="form sec-map__form form form-submit">
              <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
              <input type="hidden" name="from"
                value="Получить схему проезда и все контакты себе в WhatsApp">
              <div class="sec-12__form-inputs sec-map__contacts-inputs">
                <input class="sec-12__form-number" name="phone" type="tel" required
                  placeholder="Введите ваш телефон">
                <button type="submit" class="sec-12__form-submit _whatsapp-btn _green-btn">
                  Получить схему проезда <br>
                  и все контакты себе в WhatsApp
                </button>
                <div class="sec-12__form-policy">
                  <input class="sec-12__form-checkbox" checked required type="checkbox"
                    name="checkbox" id="checkboxmap1">
                  <label class="sec-12__form-accept" for="checkboxmap1">
                    <span>
                      <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                          fill="#F37021" />
                      </svg>
                    </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                      href="#politics">политики конфиденциальности</a>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
