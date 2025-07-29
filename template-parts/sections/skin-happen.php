
<?php if(have_rows('skin-happen_cards')) :
$counter = 1; ?>
  <section class="skin-happen">
    <div class="container">
      <?php if(get_field('skin-happen_title')) :?>
      <h2 class="skin-happen__title _title">
        <?php the_field('skin-happen_title'); ?>
      </h2>
      <?php endif; ?>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="skin-happen__items">
        <?php while(have_rows('skin-happen_cards')) : the_row(); ?>
        <div class="skin-happen__item">
          <div class="skin-happen__item-top">
            <span class="skin-happen__item-num">/<?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span>
            <?php include(get_template_directory() . '/assets/images/icons/id.svg'); ?>
          </div>
          <div class="skin-happen__item-info">
            <h4 class="skin-happen__item-title">
              <?php the_sub_field( 'card_text' ); ?>
            </h4>
          </div>
        </div>
        <?php $counter++; endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
