<section class="sec-7">
  <div class="sec-7__container container">
    <?php if (get_field('sec-7_title')): ?>
      <h2 class="sec-7__title _title">
        <?php the_field('sec-7_title'); ?>
      </h2>
    <?php endif; ?>
    <?php if (get_field('sec-7_subtitle')) : ?>
      <p class="sec-7__subtitle _subtitle">
        <?php the_field('sec-7_subtitle'); ?>
      </p>
    <?php endif; ?>
  </div>
  <div class="sec-7__background _image-abs">
    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/background.webp" alt=" Изображение - зеленая машина баннер">
  </div>
  <?php if (have_rows('sec-7_cards')): ?>
    <div class="sec-7__container container relative">
      <div class="sec-7__content">
        <?php while (have_rows('sec-7_cards')) : the_row(); ?>
          <div class="sec-7__card">
            <div class="sec-7__card-textbox">
              <?php if (get_sub_field('card_title')) : ?>
                <p class="sec-7__card-title _card-title _orange-text">
                  <?php the_sub_field('card_title'); ?>
                </p>
              <?php endif; ?>
              <?php if (get_sub_field('card_text')) : ?>
                <p class="sec-7__card-info _card-info">
                  <?php the_sub_field('card_text'); ?>
                </p>
              <?php endif; ?>
              <?php if (have_rows('card_list')): ?>
                <ul class="sec-7__card-list list-point">
                  <?php while (have_rows('card_list')) : the_row(); ?>
                    <li class="sec-7__card-point"><?php the_sub_field('list_point'); ?></li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
              <?php if (get_sub_field('card_textColor')) : ?>
                <p class="sec-7__card-text _card-info">
                  <?php the_sub_field('card_textColor'); ?>
                </p>
              <?php endif; ?>
            </div>
            <div class="sec-7__card-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.svg" alt=" Изображение - ">
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="sec-7__gallery swiper01 swiper">
    <div class="swiper-wrapper">
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">

          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-01.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-02.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-03.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-04.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-05.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-01.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-02.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-03.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-04.webp" alt=" Изображение - ">
        </div>
      </div>
      <div class="sec-7__gallery-item swiper-slide">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-05.webp" alt=" Изображение - ">
        </div>
      </div>
    </div>
  </div>
</section>