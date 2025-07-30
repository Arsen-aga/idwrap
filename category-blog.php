<?php

/**
 * Template Name: Блог основной
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */


get_header(); ?>
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
              <a class="breadcrumbs__link active" href="#">Блог</a>
            </li>
          </ul>
        </div>
        <div class="front-block__top">
          <h1 class="front-block__title _title-1">
            Блог студии детейлинга
          </h1>
          <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
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
  <!-- Блок со статьями -->
  <?php get_template_part('template-parts/sections/blog-artikles'); ?>

  <!-- Узнайте больше о студии -->
  <div class="wrapper-brown">
    <?php get_template_part('template-parts/sections/more-info'); ?>
    <div class="space-sec"></div>
  </div>
  <?php get_template_part('template-parts/sections/sec-14'); ?>
  <?php get_template_part('template-parts/sections/map'); ?>
</main>

<?php get_footer(); ?>