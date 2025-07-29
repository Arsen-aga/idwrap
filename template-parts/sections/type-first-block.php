<section class="sec-0 relative">
  <div class="sec-0__container container">
    <div class="sec-0__layout">
      <div class="sec-0__content">
        <img class="sec-0__content-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-0-bg.webp" alt="">
        <div class="breadcrumbs">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__point">
              <a class="breadcrumbs__link" href="#">Главная</a>
            </li>
            <li class="breadcrumbs__point">
              <a class="breadcrumbs__link" href="#">Услуги</a>
            </li>
            <li class="breadcrumbs__point">
              <a class="breadcrumbs__link active" href="#">Оклейка автомобилей антигравийной пленкой</a>
            </li>
          </ul>
        </div>
        <h1 class="sec-0__title _main-title">
          <?php echo wp_title(''); ?>
        </h1>
        <?php if(get_field('type-first-block_subtitle')):?>
        <p class="sec-0__guarant">
          <?php the_field('type-first-block_subtitle'); ?>
        </p>
        <?php endif; ?>
        <?php if(have_rows('type-first-block_list')) :?>
        <ul class="front-block__list">
          <?php while(have_rows('type-first-block_list')) : the_row();
          $icon = get_sub_field('list_icon'); ?>
          <li class="front-block__point">
            <?php if($icon) {
              echo $icon['url'];
            } else {
              include(get_template_directory() . '/assets/images/icons/front-block-1.svg');
            }?>
            <p class="front-block__point-text">
              <?php the_sub_field('list_point'); ?>
            </p>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>

        <div class="front-block__btns">
          <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
            Рассчитать стоимость <br>
            оклейки авто за 4 шага
          </a>
          <a class="front-block__link" target="_blank" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0">
            <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
            Или получите консультацию
          </a>
        </div>
      </div>
      <?php
        $video = get_field('type-first-block_video');
        $img = get_field('type-first-block_img'); ?>

      <?php if ($img || $video) : ?>
        <a data-fancybox
          href="<?php echo $video ? esc_url($video) : ($img ? esc_url($img['url']) : '#'); ?>"
          class="sec-0__image _image-abs">

          <?php if ($img) : ?>
            <img class="_img"
                src="<?php echo esc_url($img['url']); ?>"
                alt="<?php echo esc_attr($img['alt'] ?: 'Изображение'); ?>">
          <?php endif; ?>

          <?php if ($video) : ?>
            <video class="sec-0__image-video"
                  style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; pointer-events: none; z-index: 3;"
                  playsinline autoplay muted loop>
              <source src="<?php echo esc_url($video); ?>" type="video/mp4">
            </video>
          <?php endif; ?>
        </a>
      <?php endif; ?>

    </div>
  </div>
</section>
