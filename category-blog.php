<?php

get_header(); ?>
<main class="main" id="price-page">

  <?php get_template_part('template-parts/sections/default-first-block'); ?>

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
