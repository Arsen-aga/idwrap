<?php if(have_rows('carcase-info_cards')) :?>
<section class="carcase-info">
  <div class="container">
    <?php if(get_field('carcase-info_title')) :?>
    <h2 class="carcase-info__title _title">
      <?php the_field('carcase-info_title');?>
    </h2>
    <?php endif; ?>
    <?php if(get_field('carcase-info_subtitle')) :?>
    <p class="carcase-info__subtitle _subtitle">
      <?php the_field('carcase-info_subtitle'); ?>
    </p>
    <?php endif; ?>
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <div class="carcase-info__items">
      <?php while(have_rows('carcase-info_cards')) : the_row();
      $img = get_sub_field('card_img'); ?>
      <div class="carcase-info__item">
        <img class="carcase-info__item-img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
        <div class="overlay"></div>
        <div class="carcase-info__item-inner">
          <?php if(get_sub_field('card_title')) :?>
          <h4 class="carcase-info__item-title">
            <?php the_sub_field('card_title'); ?>
          </h4>
          <?php endif; ?>
          <?php if(get_sub_field('card_text')) :?>
          <p class="carcase-info__item-text">
            <?php the_sub_field('card_text'); ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
