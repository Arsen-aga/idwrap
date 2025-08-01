<?php

get_header();
$seo_fields = get_seo_fields();?>
<main class="main" id="price-page">
  <section class="front-block _image-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/front-bg-2.webp);">
    <div class="overlay"></div>
    <div class="container">
      <div class="front-block__inner relative">
        <?php dimox_breadcrumbs(); ?>
        <div class="front-block__top">
          <h1 class="front-block__title _title-1">
            <?php echo esc_html($seo_fields['h1']); ?>
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

                <div class="search services-price__search">
                    <?php include(get_template_directory() . '/assets/images/icons/search.svg'); ?>
                    <input class="search__inp" type="text" name="services_search" placeholder="Поиск по услугам" autocomplete="off">
                    <span class="search__clear" style="display:none;">&times;</span>
                </div>

                <div class="services-price__items">
                    <?php
                    $args = array(
                        'post_type'      => 'page',
                        'posts_per_page' => 15,
                        'post_parent__in' => array(86, 9),
                        'orderby'        => 'title',
                        'order'          => 'ASC'
                    );

                    $services_query = new WP_Query($args);

                    if ($services_query->have_posts()) :
                        while ($services_query->have_posts()) : $services_query->the_post();
                            $price = get_field('priceService', get_the_ID());
                            ?>
                            <div class="services-price__item change-price-item change-popup-item">
                                <h4 class="services-price__item-title change-popup-title">
                                    <?php the_title(); ?>
                                </h4>
                                <div class="services-price__item-price">
                                    <?php if ($price) : ?>
                                        <p class="services-price__item-num change-price-num">
                                            <?php echo number_format($price, 0, '', ' '); ?> ₽
                                        </p>
                                    <?php endif; ?>
                                    <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox data-service="<?php the_title(); ?>">
                                        Или напишите свою цену
                                    </a>
                                </div>
                                <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox data-service="<?php the_title(); ?>">
                                    Записаться
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>Услуги не найдены</p>
                    <?php endif; ?>
                </div>

                <?php if ($services_query->max_num_pages > 1) : ?>
                    <button class="services-price__btn-more _transparent-btn" id="load-more-services" data-page="2">
                        Показать больше услуг
                    </button>
                <?php endif; ?>
            </div>

            <div class="services-price__right">
                <div class="services-price__right-wrapper">
                    <img class="services-price__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-price-1.webp" alt="Услуги">
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
