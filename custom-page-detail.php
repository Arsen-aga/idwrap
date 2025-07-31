<?php

/**
 * Template Name: Детейлинг (single)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */



get_header(); ?>

<main class="main" id="skin-single">

  <?php renderBlocks();?>

  <div class="wrapper-brown">

    <?php get_template_part('template-parts/sections/sec-14'); ?>

  </div>

  <?php get_template_part('template-parts/sections/map'); ?>

</main>

<?php get_footer(); ?>
