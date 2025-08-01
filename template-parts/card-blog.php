<a class="blog-artikles__item action-card" href="<?php the_permalink(); ?>">
  <div class="action-card__wrapper">
    <?php if (has_post_thumbnail()) : ?>
      <img class="action-card__img _img"
           src="<?php the_post_thumbnail_url('full'); ?>"
           alt="<?php the_title_attribute(); ?>">
    <?php else : ?>
      <img class="action-card__img _img"
           src="<?php echo get_template_directory_uri(); ?>/assets/images/more-info-2.webp"
           alt="<?php the_title_attribute(); ?>">
    <?php endif; ?>

    <div class="action-card__date">
      <?php include(get_template_directory() . '/assets/images/icons/dat-list.svg'); ?>
      <span class="action-card__date-text">
        <?php echo get_the_date('d.m.Y'); ?>
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
