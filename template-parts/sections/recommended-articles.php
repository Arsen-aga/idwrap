<section class="recommended-articles">
  <div class="container">
    <h2 class="recommended-articles__title _title">
      Рекомендованные статьи
    </h2>
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <div class="recommended-articles__items">
      <?php
      // Получаем ID текущей записи и ее категории
      $current_post_id = get_the_ID();
      $categories = get_the_category($current_post_id);
      $category_id = !empty($categories) ? $categories[0]->term_id : 0;

      if ($category_id) :
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post__not_in'   => array($current_post_id), // Исключаем текущую запись
          'cat'            => $category_id, // Только записи из этой же категории
          'orderby'        => 'rand', // Можно изменить на 'date' для сортировки по дате
        );

        $related_posts = new WP_Query($args);

        if ($related_posts->have_posts()) :
          while ($related_posts->have_posts()) : $related_posts->the_post();
            $post_img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $post_date = get_the_date('d.m.Y');
            ?>
            <a class="recommended-articles__item action-card" href="<?php the_permalink(); ?>">
              <div class="action-card__wrapper">
                <?php if ($post_img) : ?>
                  <img class="action-card__img _img" src="<?php echo esc_url($post_img); ?>" alt="<?php the_title_attribute(); ?>">
                <?php else : ?>
                  <img class="action-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/more-info-2.webp" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <div class="action-card__date">
                  <?php include(get_template_directory() . '/assets/images/icons/dat-list.svg'); ?>
                  <span class="action-card__date-text">
                    <?php echo esc_html($post_date); ?>
                  </span>
                </div>
              </div>
              <div class="action-card__info">
                <h4 class="action-card__title">
                  <?php the_title(); ?>
                </h4>
                <p class="action-card__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </p>
                <div class="action-card__link">
                  <span>Перейти к прочтению</span>
                  <?php include(get_template_directory() . '/assets/images/icons/arrows.svg'); ?>
                </div>
              </div>
            </a>
            <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>Других статей в этой категории пока нет</p>';
        endif;
      endif;
      ?>
    </div>
  </div>
</section>
