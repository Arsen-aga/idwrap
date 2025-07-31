<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/x-icon">
  <meta content="<?php echo get_template_directory_uri(); ?>/assets/images/social.png" property="og:image">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

  <?php wp_head(); ?>

</head>

<body>
  <div class="body_wrapper">
    <header class="header <?php echo is_front_page() ? 'no-bg' : ''; ?>">
      <div class="header__top">
        <div class="container">
          <div class="header__inner">
            <div class="header__left">
              <a class="logo header__logo" href="/">
                <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
                <p class="logo__text">
                  Студия детейлинга
                </p>
              </a>
              <a class="header__map" href="https://yandex.ru/maps/-/CHXo721O" target="_blank">
                <img class="header__map-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/map-point.webp" alt="map-point">
                <p class="header__map-text">
                  ул. Архитектора Щусева, 5, к1
                </p>
              </a>
            </div>
            <div class="header__right">
              <div class="social-block header__social-block">
                <div class="social-block__left header__social-left">
                  <a class="social-block__btn _main-btn" href="#callback-modal" data-fancybox="">
                    Записаться
                  </a>
                  <a class="social-block__link social-block__whatsapp" href="#">
                    <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                  </a>
                  <a class="social-block__link social-block__telegram" href="#">
                    <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
                  </a>
                </div>
                <div class="social-block__phone">
                  <a class="social-block__phone-number" href="tel:+74952980377">
                    +7 495 298 03 77
                  </a>
                  <a class="social-block__phone-link" href="#callback-modal" data-fancybox>
                    <span>Перезвоним за 1 минуту</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <nav class="header-bottom__menu">
            <ul class="header-bottom__menu-list">
              <?php
              wp_nav_menu(array(
                'menu' => 'mainMenu',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new Custom_Header_Menu_Walker(),
                'depth' => 3
              ));
              ?>
            </ul>

            <a class="header__map header-bottom__menu-map" href="https://yandex.ru/maps/-/CHcs6XPF" target="_blank">
              <img class="header-bottom__map-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/map-point.webp" alt="map-point">
              <p class="header__map-text">
                ул. Архитектора Щусева, 5, к1
              </p>
            </a>

            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="header__search open-search">
                <div class="header__search-icon">
                    <?php include(get_template_directory() . '/assets/images/icons/search.svg'); ?>
                </div>
                <input class="header__search-inp open-search-inp"
                      type="text"
                      name="s"
                      placeholder="Поиск.."
                      value="<?php echo isset($_GET['s']) ? esc_attr($_GET['s']) : ''; ?>">
                <div class="ajax-search-results" style="display: none;"></div> <!-- Контейнер для результатов -->
            </form>

            <div class="burger">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>

          </nav>
        </div>
      </div>
    </header>
    <div class="popup-menu">
      <a class="logo popup-menu__logo" href="/">
        <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
      </a>
      <div class="popup-menu__close">
        x
      </div>
      <nav class="popup-menu__menu">
        <ul class="popup-menu__menu-list">
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Чек-апы
            </a>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Направления
            </a>
            <div class="popup-submenu__wrapper">
              <ul class="popup-submenu">
                <li class="popup-submenu__item">
                  <a class="popup-submenu__link" href="#">
                    Аллергология
                  </a>
                  <ul class="popup-submenu">
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Чекап пациентов<br>
                        18-30+ (мужчины)
                      </a>
                    </li>
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Чекап пациентов после<br>
                        40 лет (мужчины)
                      </a>
                    </li>
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Чекап пациентов<br>
                        после 60 лет (мужчины)
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="popup-submenu__item">
                  <a class="popup-submenu__link" href="#">
                    Гастроэнтерология
                  </a>
                  <ul class="popup-submenu">
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Чекап пациентов<br>
                        18-30+ (мужчины)
                      </a>
                    </li>
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Чекап пациентов после<br>
                        40 лет (мужчины)
                      </a>
                    </li>
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Чекап пациентов<br>
                        после 60 лет (мужчины)
                      </a>
                    </li>
                    <li class="popup-submenu__item third-level">
                      <a class="popup-submenu__link" href="#">
                        Гематология
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="popup-submenu__item">
                  <a class="popup-submenu__link" href="#">
                    Гематология
                  </a>
                </li>
                <li class="popup-submenu__item">
                  <a class="popup-submenu__link" href="#">
                    Гинекология
                  </a>
                </li>
                <li class="popup-submenu__item">
                  <a class="popup-submenu__link" href="#">
                    Функциональная диагностика
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Услуги
            </a>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Врачи
            </a>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Цены
            </a>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              О клинике
            </a>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Пациентам
            </a>
          </li>
          <li class="popup-menu__menu-item">
            <a class="popup-menu__menu-link" href="#">
              Контакты
            </a>
          </li>
        </ul>
      </nav>
    </div>
