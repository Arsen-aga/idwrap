<?php if(have_rows('materials-manufacturers_cards')) :?>
<section class="materials-manufacturers">
  <div class="container">
    <h2 class="materials-manufacturers__title _title">
      <?php the_field('materials-manufacturers_title'); ?>
    </h2>
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <div class="materials-manufacturers__items">
      <?php while(have_rows('materials-manufacturers_cards')) : the_row();
      $img = get_sub_field('card_img'); ?>
      <div class="default-item materials-manufacturers__item">
        <div class="default-item__wrapper">
          <img class="default-item__img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
        </div>
        <div class="default-item__info">
          <?php if(get_sub_field('card_title')) :?>
          <h4 class="default-item__title">
            <?php the_sub_field('card_title'); ?>
          </h4>
          <?php endif; ?>
          <?php if(get_sub_field('card_text')) :?>
          <p class="default-item__text materials-manufacturers__item-text">
            <?php the_sub_field('card_text'); ?>
          </p>
          <?php endif; ?>
          <?php if(get_sub_field('card_textColor')) :?>
          <p class="default-item__text-primary">
            <?php the_sub_field('card_textColor'); ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
