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

  <?php get_template_part('template-parts/sections/type-first-block'); ?>

  <?php get_template_part('template-parts/sections/carcase-info'); ?>

  <?php get_template_part('template-parts/sections/skin-option'); ?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/skin-happen'); ?>

    <div class="space-sec"></div>

    <?php get_template_part('template-parts/sections/skin-listimg'); ?>

  </div>

  <?php get_template_part('template-parts/sections/pasting-of-any-complexity'); ?>

  <?php get_template_part('template-parts/sections/full-wrapping'); ?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/sec-2');?>

  </div>

  <?php get_template_part('template-parts/sections/video-reviews');?>

  <div class="space-sec"></div>

  <?php get_template_part('template-parts/sections/quiz');?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/verified-materials-2');?>

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

    <?php get_template_part('template-parts/sections/sec-14'); ?>

  </div>

  <?php get_template_part('template-parts/sections/map'); ?>


</main>

<?php get_footer(); ?>
