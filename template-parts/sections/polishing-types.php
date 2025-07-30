<!-- Вариант 1 -->

<?php $type_block = get_field('polishing-types_variants');
switch($type_block){
  case 'grid-default':
    echo variant_1();
    break;
  case 'grid-4':
    echo variant_2();
    break;
  case 'grid-6':
    echo variant_3();
    break;
} ?>

<?php
function variant_1(){
  ob_start(); ?>

  <?php if(have_rows('polishing-types_cards')) :?>
    <section class="polishing-types">
      <div class="container">
        <?php if(get_field('polishing-types_title')) :?>
          <h2 class="polishing-types__title _title">
            <?php the_field('polishing-types_title'); ?>
          </h2>
        <?php endif; ?>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>

        <div class="polishing-types__items">
        <?php while(have_rows('polishing-types_cards')) : the_row();
        $img = get_sub_field('card_img'); ?>
          <div class="polishing-types__item default-elem">
            <img class="default-elem__img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
            <div class="overlay"></div>
            <div class="default-elem__inner polishing-types__item-inner">
              <?php if(get_sub_field('card_title')):?>
              <h4 class="default-elem__title polishing-types__item-title">
                <?php the_sub_field('card_title'); ?>
              </h4>
              <?php endif; ?>
              <?php if(get_sub_field('card_text')) :?>
              <p class="default-elem__text polishing-types__item-text">
                <?php the_sub_field('card_text');?>
              </p>
              <?php endif; ?>
              <?php if(have_rows('card_list')) :?>
              <ul class="default-elem__list polishing-types__item-list list-point">
                <?php while(have_rows('card_list')) : the_row(); ?>
                <li class="default-elem__list-point polishing-types__item-point">
                  <?php the_sub_field('list_point'); ?>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php endif; ?>
              <a class="polishing-types__item-btn default-elem__btn _main-btn" href="">
                Рассчитать стоимость
              </a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php return ob_get_clean();
}

function variant_2(){
  ob_start(); ?>

  <?php if(have_rows('polishing-types_cards')) :?>
    <section class="polishing-types">
      <div class="container">
        <?php if(get_field('polishing-types_title')):?>
        <h2 class="polishing-types__title _title">
          <?php the_field('polishing-types_title'); ?>
        </h2>
        <?php endif; ?>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="polishing-types__cards">
        <?php while(have_rows('polishing-types_cards')) : the_row();
        $img = get_sub_field('card_img');  ?>
          <div class="polishing-types__card default-item">
            <div class="default-item__wrapper">
              <img class="default-item__img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
            </div>
            <div class="default-item__info">
              <h4 class="default-item__title">
                <?php the_sub_field('card_title'); ?>
              </h4>
              <a class="default-item__btn _main-btn" href="#">
                Рассчитать стоимость
              </a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php return ob_get_clean();
}

function variant_3(){
  ob_start(); ?>

  <?php if(have_rows('polishing-types_cards')) :
    $count = 0; ?>
    <section class="polishing-types">
      <div class="container">
        <?php if(get_field('polishing-types_title')):?>
        <h2 class="polishing-types__title _title">
          <?php the_field('polishing-types_title'); ?>
        </h2>
        <?php endif; ?>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="polishing-types__cards grid-6">
        <?php while(have_rows('polishing-types_cards')) : the_row();
          $img = get_sub_field('card_img');
         if($count < 3) {?>
          <div class="polishing-types__card default-item">
            <div class="default-item__wrapper">
              <img class="default-item__img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
            </div>
            <div class="default-item__info">
              <h4 class="default-item__title">
                <?php the_sub_field('card_title'); ?>
              </h4>
              <a class="default-item__btn _main-btn" href="#">
                Рассчитать стоимость
              </a>
            </div>
          </div>
          <?php } else { ?>
            <div class="polishing-types__card default-item default-item__horizontal">
              <div class="default-item__wrapper">
                <img class="default-item__img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
              </div>
              <div class="default-item__info">
                <h4 class="default-item__title">
                  <?php the_sub_field('card_title'); ?>
                </h4>
                <?php if(have_rows('card_list')) :?>
                <ul class="default-item__list default-item__text list-point">
                  <?php while(have_rows('card_list')) : the_row(); ?>
                  <li class="default-item__list-point">
                    <?php the_sub_field('list_point'); ?>
                  </li>
                  <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <a class="default-item__btn _main-btn" href="#">
                  Рассчитать стоимость
                </a>
              </div>
            </div>
          <?php } ?>
        <?php $count++; endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php return ob_get_clean();
}
?>
