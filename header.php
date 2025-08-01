<?php session_start();

$utm_keys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];

foreach ($utm_keys as $key) {
    if (empty($_SESSION[$key]) || $_SESSION[$key] == 'Не удалось определить') {
        $_SESSION[$key] = !empty($_GET[$key]) ? sanitize_text_field($_GET[$key]) : 'Не удалось определить';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<?php $seo_fields = get_seo_fields(); ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
		<?php echo esc_html($seo_fields['title']); ?>
	</title>
  <meta name="description" content="<?php echo esc_html($seo_fields['description']); ?>" />
	<meta property="og:title" content="<?php echo esc_html($seo_fields['title']); ?>" />
	<meta property="og:description" content="<?php echo esc_html($seo_fields['description']); ?>" />

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/x-icon">
  <meta content="<?php echo get_template_directory_uri(); ?>/assets/images/social.png" property="og:image">
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
                  <a class="social-block__link social-block__whatsapp" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0" target="_blank">
                    <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                  </a>
                  <a class="social-block__link social-block__telegram" href="https://t.me/ID_wrap" target="_blank">
                    <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
                  </a>
                </div>
                <div class="social-block__phone">
                  <a class="social-block__phone-number" href="tel:+74952980377">
                    +7 495 298 03 77
                  </a>
                  <a class="social-block__phone-link" href="#callback-modal-2" data-fancybox>
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

            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="header-bottom__search search">
              <?php include(get_template_directory() . '/assets/images/icons/search.svg'); ?>
              <input class="header-bottom__search-inp search__inp"
                type="text"
                name="s"
                placeholder="Поиск.."
                value="<?php echo isset($_GET['s']) ? esc_attr($_GET['s']) : ''; ?>">
              <!-- Контейнер для результатов -->
              <div class="ajax-search-results" style="display: none;"></div>
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
      <!-- <nav class="popup-menu__menu">
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
      </nav> -->
      <?php
      wp_nav_menu(array(
        'menu' => 'mainMenu', // укажите нужное расположение меню
        'container'      => 'nav',
        'container_class' => 'popup-menu__menu',
        'menu_class'     => 'popup-menu__menu-list',
        'walker'         => new Popup_Menu_Walker(),
        'depth'         => 3, // максимальная глубина меню
      ));
      ?>
    </div>
