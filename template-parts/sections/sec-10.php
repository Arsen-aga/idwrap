<section class="sec-10">
  <div class="sec-10__background _image-abs">
    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/1top/background.webp" alt=" Изображение - автомобиль в паркинге">
  </div>
  <div class="sec-10__container container relative">
    <h2 class="sec-10__title _title">
      После выполнения работ <br>
      ваш автомобиль будет находиться
    </h2>
    <p class="sec-10__subtitle _subtitle">
      в теплом охраняемом паркинге под видеонаблюдением
    </p>

    <?php if(have_rows('sec-10_cards') && get_field('sec-10_cardsHidden') != 1) :?>
    <div class="sec-10__content">
      <?php while(have_rows('sec-10_cards')) : the_row();
      $card_img = get_sub_field('card_img');
      $card_title = get_sub_field('card_title');
      $card_text = get_sub_field('card_text'); ?>
      <div class="sec-10__item">
        <div class="_image-abs">
          <?php if($card_img):?>
          <img class="_img" src="<?php echo $card_img['url'];?>"
            alt="<?php echo $card_img['alt'];?>">
            <?php endif; ?>
        </div>
        <div class="sec-10__item-textbox">
          <p class="sec-10__item-title">
            <?php echo $card_title; ?>
          </p>
          <?php if($card_text):?>
          <p class="sec-10__item-info _card-info">
            <?php echo $card_text; ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile;?>
    </div>
    <?php elseif(get_field('sec-10_cardsHidden') != 1):?>
    <div class="sec-10__content">
      <div class="sec-10__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/2bottom/osmotr.webp"
            alt=" Изображение - оплата после осмотра обложка">
        </div>
        <div class="sec-10__item-textbox">
          <p class="sec-10__item-title">
            Полную оплату вы <br>
            производите только после <br>
            осмотра автомобиля
          </p>
        </div>
      </div>
      <div class="sec-10__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/2bottom/free.webp"
            alt=" Изображение - бесплатный контрольный осмотр обложка">
        </div>
        <div class="sec-10__item-textbox">
          <p class="sec-10__item-title">
            Через 2 недели проводим <br>
            бесплатный контрольный осмотр —
          </p>
          <p class="sec-10__item-info _card-info">
            моем ваш авто и проводим осмотр <br>
            состояния пленки
          </p>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
