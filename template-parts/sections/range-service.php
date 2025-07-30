<section class="range-services">
  <div class="container">
    <h2 class="range-services__title _title">
      Оказываем полный спектр услуг<br>
      по детейлингу автомобилей
    </h2>
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <div class="range-services__items">
      <?php
        // Получаем ID текущей страницы
        $current_page_id = 86;

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
            // $thumbnail_url = get_field('type-first-block_img', $child_page->ID);
            // Если нет миниатюры, используем изображение по умолчанию
            $image_url = $thumbnail_url ? $thumbnail_url['url'] : get_template_directory_uri() . '/assets/images/default-card-1.webp';

            // Получаем URL страницы
            $page_url = get_permalink($child_page->ID);
            ?>
            <div class="range-services__item default-card">
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
          <?php }
                } ?>
    </div>
  </div>
</section>
