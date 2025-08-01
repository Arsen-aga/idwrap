<?php

get_header(); ?>
<!-- Для этой страницы вот такой айди, потому что она отличается от всех -->
<main class="main" id="study-page">

  <!-- Для этой страницы вот такой первый блок, потому что он отличается от всех -->
  <section class="front-block _image-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/front-bg-3.webp);">
    <div class="overlay"></div>
    <div class="container">
      <div class="front-block__inner relative">
        <?php dimox_breadcrumbs(); ?>
        <h1 class="front-block__title">
          Индивидуальное обучение по
          антигравийной защите плёнкой в
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg" alt="">
        </h1>
        <p class="front-block__subtitle _subtitle">
          <?php include(get_template_directory() . '/assets/images/icons/crown.svg'); ?>
          <span>За 7 дней — от новичка до мастера под руководством владелицы студии</span>
        </p>
        <div class="front-block__btns">
          <a class="front-block__btn _main-btn" href="#callback-modal" data-fancybox>
            Получить консультацию<br>
            по обучению
          </a>
          <a class="front-block__link" href="https://wa.me/+79999999" target="_blank">
            <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
            <span>Или получите консультацию</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Для кого курс -->
  <section class="for-whom">
    <div class="container">
      <h2 class="for-whom__title _title">
        Для кого этот курс?
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="for-whom__items">
        <div class="for-whom__item">
          <div class="for-whom__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/for-whom-1.svg'); ?>
          </div>
          <h4 class="for-whom__item-title">
            Хотите научиться<br>
            оклейке с нуля
          </h4>
          <p class="for-whom__item-text">
            и начать зарабатывать<br>
            на детейлинге
          </p>
        </div>
        <div class="for-whom__item">
          <div class="for-whom__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/for-whom-2.svg'); ?>
          </div>
          <h4 class="for-whom__item-title">
            Или уже есть опыт,
          </h4>
          <p class="for-whom__item-text">
            но хотите освоить антигравийную<br>
            защиту на реальной практике
          </p>
        </div>
        <div class="for-whom__item">
          <div class="for-whom__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/for-whom-3.svg'); ?>
          </div>
          <h4 class="for-whom__item-title">
            Ищете наставника,<br>
            который будет рядом<br>
            и ведёт лично,
          </h4>
          <p class="for-whom__item-text">
            а не показывает с экрана
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Что входит в курс? -->
  <section class="course-inner">
    <div class="container">
      <h2 class="course-inner__title _title">
        Что входит в курс?
      </h2>
      <div class="course-inner__inner">
        <div class="course-inner__left">
          <h3 class="course-inner__left-title">
            7 дней
          </h3>
          <p class="course-inner__left-subtitle">
            полного погружения
            в антигравийную защиту
            на автомобиле
          </p>
          <div class="course-inner__elems">
            <div class="course-inner__elem">
              <?php include(get_template_directory() . '/assets/images/icons/course-inner-1.svg'); ?>
              <p class="course-inner__elem-text">
                <span>Стоимость:</span> 300 000 ₽
              </p>
            </div>
            <div class="course-inner__elem">
              <?php include(get_template_directory() . '/assets/images/icons/course-inner-2.svg'); ?>
              <p class="course-inner__elem-text">
                <span>Формат:</span> индивидуальное обучение (1 на 1)
              </p>
            </div>
          </div>
        </div>
        <div class="course-inner__right">
          <div class="course-inner__right-wrapper">
            <img class="course-inner__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/course-inner-1.webp" alt="">
          </div>
        </div>
      </div>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="course-inner__items">
        <div class="course-inner__item">
          <div class="course-inner__item-wrapper">
            <img class="course-inner__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/course-inner-2.webp" alt="Теория и погружение:">
          </div>
          <div class="course-inner__item-info">
            <p class="course-inner__item-suptitle">
              День 1
            </p>
            <h4 class="course-inner__item-title">
              Теория и погружение:
            </h4>
            <p class="course-inner__item-text">
              Разберём виды пленок,<br>
              инструменты, растворы,<br>
              ошибки, особенности<br>
              материалов
            </p>
          </div>
        </div>
        <div class="course-inner__item">
          <div class="course-inner__item-wrapper">
            <img class="course-inner__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/course-inner-3.webp" alt="Только практика:">
          </div>
          <div class="course-inner__item-info">
            <p class="course-inner__item-suptitle">
              День 2–6
            </p>
            <h4 class="course-inner__item-title">
              Только практика:
            </h4>
            <ul class="course-inner__item-list list-point">
              <li class="course-inner__item-point">
                Подготовка авто,<br>
                инструментов и растворов
              </li>
              <li class="course-inner__item-point">
                Выкраивание и работа с лекалами
              </li>
              <li class="course-inner__item-point">
                Позиционирование и натяжка
              </li>
              <li class="course-inner__item-point">
                Оклейка капота, бамперов, крыльев
              </li>
              <li class="course-inner__item-point">
                Работа с подворотами, углами<br>
                и сложными рельефами
              </li>
              <li class="course-inner__item-point">
                Все этапы — своими руками<br>
                под контролем наставника
              </li>
            </ul>
          </div>
        </div>
        <div class="course-inner__item">
          <div class="course-inner__item-wrapper">
            <img class="course-inner__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/course-inner-4.webp" alt="Экзамен и сертификация:">
          </div>
          <div class="course-inner__item-info">
            <p class="course-inner__item-suptitle">
              День 7
            </p>
            <h4 class="course-inner__item-title">
              Экзамен и сертификация:
            </h4>
            <p class="course-inner__item-text">
              Проверка навыков,<br>
              исправление ошибок, итоговая<br>
              оклейка, получение именного<br>
              сертификата
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Кто обучает? -->
  <div class="wrapper-brown">
    <section class="who-teaches">
      <div class="container">
        <h2 class="who-teaches__title _title">Кто обучает?</h2>
        <div class="who-teaches__items">
          <div class="who-teaches__item">
            <img class="who-teaches__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/who-teaches-1.webp" alt="">
            <div class="overlay"></div>
            <div class="who-teaches__item-inner">
              <h4 class="who-teaches__item-title">
                <span>Владелица студии IDwrap —</span> вы учитесь<br>
                у того, кто сам развил студию с нуля
              </h4>
            </div>
          </div>
          <div class="who-teaches__item">
            <img class="who-teaches__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/who-teaches-2.webp" alt="">
            <div class="overlay"></div>
            <div class="who-teaches__item-inner">
              <h4 class="who-teaches__item-title">
                <span>Старший мастер с опытом 10+ лет —</span><br>
                наставник в зоне практики
              </h4>
            </div>
          </div>
          <div class="who-teaches__item">
            <img class="who-teaches__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/who-teaches-3.webp" alt="">
            <div class="overlay"></div>
            <div class="who-teaches__item-inner">
              <h4 class="who-teaches__item-title">
                <span>Живой автомобиль, а не капот</span> из<br>
                тренажёра — всё как в реальной работе
              </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="space-sec"></div>
  </div>

  <!-- Что включено? -->
  <section class="course-include">
    <div class="container">
      <div class="course-include__inner">
        <div class="course-include__left">
          <div class="course-include__top">
            <h2 class="course-include__title _title">
              Что включено?
            </h2>
            <ul class="course-include__top-list list-point">
              <li class="course-include__top-point">
                Плёнка и инструменты — входят в стоимость
              </li>
              <li class="course-include__top-point">
                Чёткая программа: без воды, только нужные навыки
              </li>
              <li class="course-include__top-point">
                Наставничество и обратная связь 1 на 1
              </li>
              <li class="course-include__top-point">
                Прямой контакт с руководством и шанс попасть в команду
              </li>
            </ul>
          </div>
          <div class="course-include__bottom">
            <h2 class="course-include__title _title">
              Условия участия
            </h2>
            <ul class="course-include__bottom-list">
              <li class="course-include__bottom-point">
                <span>Стоимость курса:</span><br>
                300 000₽
              </li>
              <li class="course-include__bottom-point">
                <span>Предоплата</span> — 50% для<br>
                бронирования места
              </li>
              <li class="course-include__bottom-point">
                <span>Оставшиеся 50%</span> — после<br>
                первого дня обучения
              </li>
            </ul>
            <a class="course-include__bottom-btn _main-btn" href="#" data-fancybox="">
              Получить консультацию<br>
              по обучению
            </a>
          </div>
        </div>
        <div class="course-include__right">
          <div class="course-include__right-wrapper">
            <img class="course-include__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/course-include.webp" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper-brown">
    <?php get_template_part('template-parts/sections/pasting-of-any-complexity'); ?>
  </div>
  <?php get_template_part('template-parts/sections/sec-14'); ?>
  <?php get_template_part('template-parts/sections/map'); ?>
</main>

<?php get_footer(); ?>
