<?php get_header(); ?>
<main class="main">
  <section class="front-block _image-wrapper">
    <div class="overlay"></div>
    <div class="container">
      <p class="front-block__subtitle">
        детейлинг, которому<br>
        доверяют премиальные<br>
        автомобили
      </p>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
          Подобрать услугу
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79999999" target="_blank">
          <span>Получите консультацию</span>
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
        </a>
      </div>
    </div>
  </section>
  <section class="full-cycle">
    <div class="container">
      <h2 class="full-cycle__title _title">
        Студия полного цикла: защита,<br>
        восстановление и преображение авто
      </h2>
      <p class="full-cycle__subtitle _subtitle">
        с гарантией на весь срок эксплуатации автомобиля
      </p>
      <div class="full-cycle__swiper main-swiper swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем ID текущей страницы
            $current_page_id = 9;

            // Получаем дочерние страницы текущей страницы
            $child_pages = get_pages(array(
                'child_of' => $current_page_id,
                'sort_column' => 'menu_order',
                'sort_order' => 'ASC'
            ));

            // Проверяем, есть ли дочерние страницы
            if ($child_pages) {
                foreach ($child_pages as $child_page) {
                    // Получаем URL миниатюры страницы
                    // $thumbnail_url = get_the_post_thumbnail_url($child_page->ID, 'full');
                    $thumbnail_url = get_field('type-first-block_img', $child_page->ID);
                    // Если нет миниатюры, используем изображение по умолчанию
                    $image_url = $thumbnail_url ? $thumbnail_url['url'] : get_template_directory_uri() . '/assets/images/default-card-1.webp';

                    // Получаем URL страницы
                    $page_url = get_permalink($child_page->ID);
                    ?>
                    <div class="swiper-slide full-cycle__slide">
                        <div class="full-cycle__item main-swiper__item default-card">
                            <img class="default-card__img _img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($child_page->post_title); ?>">
                            <div class="overlay"></div>
                            <div class="default-card__inner">
                                <h4 class="default-card__title">
                                    <?php echo esc_html($child_page->post_title); ?>
                                </h4>
                                <div class="default-card__btns">
                                    <a class="default-card__link _main-btn" href="<?php echo esc_url($page_url); ?>">
                                        Подробнее
                                    </a>
                                    <a class="default-card__info" href="<?php echo esc_url($page_url); ?>">
                                        <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
    </div>
  </section>
  <section class="verified-materials">
    <div class="container">
      <h2 class="verified-materials__title _title">
        Используем только проверенные<br>
        материалы от ведущих мировых<br>
        производителей
      </h2>
    </div>
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <div class="verified-materials__elems-wrapper">
      <div class="container">
        <div class="verified-materials__elems">
          <div class="verified-materials__elem">
            <div class="verified-materials__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/verified-materials-1.svg'); ?>
            </div>
            <div class="verified-materials__elem-info">
              <h4 class="verified-materials__elem-title">
                Толщина пленок<br>
                от 200 микрон,
              </h4>
              <p class="verified-materials__elem-text">
                что обеспечивает надежную<br>
                защиту и долговечность
              </p>
            </div>
          </div>
          <div class="verified-materials__elem">
            <div class="verified-materials__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/verified-materials-2.svg'); ?>
            </div>
            <div class="verified-materials__elem-info">
              <h4 class="verified-materials__elem-title">
                С каждым производителем<br>
                сотрудничаем более 5 лет,
              </h4>
              <p class="verified-materials__elem-text">
                а долговечность пленок<br>
                протестирована на наших<br>
                собственных автомобилях
              </p>
            </div>
          </div>
          <div class="verified-materials__elem">
            <div class="verified-materials__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/verified-materials-3.svg'); ?>
            </div>
            <div class="verified-materials__elem-info">
              <h4 class="verified-materials__elem-title">
                Большое разнообразие<br>
                пленок в наличии,
              </h4>
              <p class="verified-materials__elem-text">
                что позволяет приступить<br>
                к оклейке уже сегодня
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="verified-materials__partners">
        <div class="verified-materials__partner">
          <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-1.webp" alt="">
        </div>
        <div class="verified-materials__partner">
          <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-2.webp" alt="">
        </div>
        <div class="verified-materials__partner">
          <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-3.webp" alt="">
        </div>
        <div class="verified-materials__partner">
          <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-4.webp" alt="">
        </div>
        <div class="verified-materials__partner">
          <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-5.webp" alt="">
        </div>
      </div>
      <div class="verified-materials__swiper main-swiper swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем ID текущей страницы
            $current_page_id = 9;

            // Получаем дочерние страницы текущей страницы
            $child_pages = get_pages(array(
                'child_of' => $current_page_id,
                'sort_column' => 'menu_order',
                'sort_order' => 'DESC'
            ));

            // Проверяем, есть ли дочерние страницы
            if ($child_pages) {
                foreach ($child_pages as $child_page) {
                    // Получаем URL миниатюры страницы
                    // $thumbnail_url = get_the_post_thumbnail_url($child_page->ID, 'full');
                    $thumbnail_url = get_field('type-first-block_img', $child_page->ID);
                    // Если нет миниатюры, используем изображение по умолчанию
                    $image_url = $thumbnail_url ? $thumbnail_url['url'] : get_template_directory_uri() . '/assets/images/default-card-1.webp';

                    // Получаем URL страницы
                    $page_url = get_permalink($child_page->ID);
                    ?>
                    <div class="swiper-slide full-cycle__slide">
                        <div class="full-cycle__item main-swiper__item default-card">
                            <img class="default-card__img _img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($child_page->post_title); ?>">
                            <div class="overlay"></div>
                            <div class="default-card__inner">
                                <h4 class="default-card__title">
                                    <?php echo esc_html($child_page->post_title); ?>
                                </h4>
                                <div class="default-card__btns">
                                    <a class="default-card__link _main-btn" href="<?php echo esc_url($page_url); ?>">
                                        Подробнее
                                    </a>
                                    <a class="default-card__info" href="<?php echo esc_url($page_url); ?>">
                                        <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
      <div class="verified-materials__bottom">
        <h3 class="verified-materials__bottom-title _title">
          Иные<br>
          виды<br>
          оклейки
        </h3>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="verified-materials__cards">
          <div class="verified-materials__card default-card">
            <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-13.webp" alt="">
            <div class="overlay"></div>
            <div class="default-card__inner">
              <h4 class="default-card__title">
                Брендирование
              </h4>
              <div class="default-card__btns">
                <a class="default-card__link _main-btn" href="<?php echo get_home_url();?>/okleyka/brendirovanie-avtomobilja-plenkoj/">
                  Подробнее
                </a>
                <a class="default-card__info" href="<?php echo get_home_url();?>/okleyka/brendirovanie-avtomobilja-plenkoj/">
                  <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="verified-materials__card default-card">
            <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-14.webp" alt="">
            <div class="overlay"></div>
            <div class="default-card__inner">
              <h4 class="default-card__title">
                Оклейка<br>
                интерьера
              </h4>
              <div class="default-card__btns">
                <a class="default-card__link _main-btn" href="<?php echo get_home_url(); ?>/okleyka/oklejka-interera/">
                  Подробнее
                </a>
                <a class="default-card__info" href="<?php echo get_home_url(); ?>/okleyka/oklejka-interera/">
                  <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="verified-materials__card default-card">
            <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-15.webp" alt="">
            <div class="overlay"></div>
            <div class="default-card__inner">
              <h4 class="default-card__title">
                Винилография
              </h4>
              <div class="default-card__btns">
                <a class="default-card__link _main-btn" href="<?php echo get_home_url(); ?>/okleyka/vinilografija/">
                  Подробнее
                </a>
                <a class="default-card__info" href="<?php echo get_home_url(); ?>/okleyka/vinilografija/">
                  <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-brown">
    <?php get_template_part('/template-parts/sections/pasting-of-any-complexity'); ?>
  </div>

  <?php get_template_part('/template-parts/sections/range-service'); ?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/sec-2');?>

  </div>

  <?php get_template_part('template-parts/sections/video-reviews');?>

  <div class="space-sec"></div>

  <?php get_template_part('template-parts/sections/sec-12'); ?>

  <?php get_template_part('template-parts/sections/sec-14'); ?>

  <?php get_template_part('template-parts/sections/map'); ?>

</main>

<?php get_footer(); ?>
