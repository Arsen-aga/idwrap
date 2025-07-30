<?php

/**
 * Template Name: Статья
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
          <a class="front-block__btn _main-btn" href="#callback-modal" data-fancybox>
            Получить промокод на скидку
          </a>
          <a class="front-block__link" href="https://wa.me/+79999999" target="_blank">
            <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
            <span>Или получите консультацию</span>
          </a>
        </div>
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