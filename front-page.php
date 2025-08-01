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
        <a class="front-block__btn _main-btn anchor" href="#services">
          Подобрать услугу
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0" target="_blank">
          <span>Получите консультацию</span>
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
        </a>
      </div>
    </div>
  </section>

  <section class="full-cycle" id="services">
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
            $firstCards = get_field('firstCards', 9);
            if($firstCards) :
                foreach($firstCards as $post_id) :
                    $child_page = get_post($post_id);
                    $image = get_field('type-first-block_img', $post_id); // Получаем изображение из ACF поля
                    $image_url =  $image['url']; // Проверяем наличие изображения
                    $page_url = get_permalink($post_id);
            ?>
                <div class="swiper-slide full-cycle__slide">
                    <div class="full-cycle__item main-swiper__item default-card">
                        <?php if($image_url) : ?>
                            <img class="default-card__img _img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($child_page->post_title); ?>">
                        <?php endif; ?>
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
                endforeach;
            endif;
            ?>
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
            $secondCards = get_field('secondCards', 9);
            if($secondCards) :
                foreach($secondCards as $post_id) :
                    $child_page = get_post($post_id);
                    $image = get_field('type-first-block_img', $post_id); // Получаем изображение из ACF поля
                    $image_url =  $image['url']; // Проверяем наличие изображения
                    $page_url = get_permalink($post_id);
            ?>
          <div class="swiper-slide verified-materials__slide">
            <div class="verified-materials__item default-card">
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
                endforeach;
            endif;
            ?>
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
          <?php
            $thirdCards = get_field('thirdCards', 9);
            if($thirdCards) :
                foreach($thirdCards as $post_id) :
                    $child_page = get_post($post_id);
                    $image = get_field('type-first-block_img', $post_id); // Получаем изображение из ACF поля
                    $image_url =  $image['url']; // Проверяем наличие изображения
                    $page_url = get_permalink($post_id);
            ?>
          <div class="verified-materials__card default-card">
            <img class="default-card__img _img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_html($child_page->post_title); ?>">
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
          <?php
                endforeach;
            endif;
            ?>
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper-brown">
    <?php get_template_part('/template-parts/sections/pasting-of-any-complexity'); ?>
  </div>

  <?php get_template_part('/template-parts/sections/range-service'); ?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/sec-2'); ?>

  </div>

  <?php get_template_part('template-parts/sections/video-reviews'); ?>

  <div class="space-sec"></div>

  <?php get_template_part('template-parts/sections/sec-12'); ?>

  <?php get_template_part('template-parts/sections/sec-14'); ?>

  <?php get_template_part('template-parts/sections/map'); ?>

</main>

<?php get_footer(); ?>
