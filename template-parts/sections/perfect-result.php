<section class="section sec-8 _sec-light">
  <div class="sec-8__container container">
    <h2 class="sec-8__title _title">
      <?php the_field('perfect-result_title'); ?>
    </h2>
    <?php if(get_field('perfect-result_subtitle')): ?>
    <p class="sec-8__subtitle _subtitle">
      <?php the_field('perfect-result_subtitle'); ?>
    </p>
    <?php endif; ?>
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <?php if(have_rows('perfect-result_cards')) :?>
    <div class="sec-8__content">
      <?php while(have_rows('perfect-result_cards')) : the_row();
      $card_img = get_sub_field('card_img');
      $card_title = get_sub_field('card_title');
      $card_text = get_sub_field('card_text'); ?>
      <div class="sec-8__item">

        <div class="_image-abs">
          <?php if($card_img):?>
            <img class="_img" src="<?php echo $card_img['url'];?>" alt="<?php echo $card_img['alt'];?>">
          <?php endif; ?>
        </div>

        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            <?php echo $card_title; ?>
          </p>
          <?php if($card_text):?>
          <p class="sec-8__item-info _card-info">
            <?php echo $card_text; ?>
          </p>
          <?php endif; ?>
          <?php if(have_rows('card_mainList')) :?>
          <ul class="sec-8__item-checklist">
            <?php while(have_rows('card_mainList')) : the_row(); ?>
            <li>
              <p class="sec-8__item-text _card-info">
                <?php the_sub_field('list_text'); ?>
              </p>
            </li>
            <?php endwhile;?>
          </ul>
          <?php endif;?>
          <?php if(have_rows('card_list')) :?>
          <ul class="sec-8__item-list">
            <?php while(have_rows('card_list')) : the_row(); ?>
            <li>
              <p class="sec-8__item-more">
                <?php the_sub_field('list_text'); ?>
              </p>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php else :?>
    <div class="sec-8__content">
      <div class="sec-8__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/masters.webp" alt=" Изображение - ">
        </div>
        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            Все мастера — <br>
            штатные сотрудники,
          </p>
          <p class="sec-8__item-info">
            что гарантирует стабильность качества <br>
            и надежность каждого этапа работы
          </p>
        </div>
      </div>
      <div class="sec-8__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/fixation.webp" alt=" Изображение - ">
        </div>
        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            До старта работ проводим <br>
            фото- и видеофиксацию <br>
            всех элементов,
          </p>
          <p class="sec-8__item-info _card-info">
            которые были установлены на вашем <br>
            автомобиле, чтобы зафиксировать их состояние <br>
            до разборки
          </p>
        </div>
      </div>
      <div class="sec-8__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/okleika.webp" alt=" Изображение - ">
        </div>
        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            Проводим оклейку с разбором <br>
            только необходимых элементов <br>
            для качественной оклейки
          </p>
          <p class="sec-8__item-info _card-info">
            Строго соблюдаем стандарты при разборке — если <br>
            по регламенту предусмотрены одноразовые клипсы, <br>
            мы обязательно заменим их на новые, оригинальные
          </p>
        </div>
      </div>
      <div class="sec-8__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/report.webp" alt=" Изображение - ">
        </div>
        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            Ежедневно присылаем <br>
            отчеты о ходе работы, <br>
            в мессенджер фото и видео
          </p>
          <p class="sec-8__item-info _card-info">
            чтобы вы могли следить за процессом и своевременно <br>
            согласовывать дополнительные детали
          </p>
        </div>
      </div>
      <div class="sec-8__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/photofix.webp" alt=" Изображение - ">
        </div>
        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            В финале работ <br>
            проводим повторную фото- <br>
            и видеофиксацию,
          </p>
          <p class="sec-8__item-info _card-info">
            чтобы вы могли сравнить и убедиться <br>
            в качестве выполненных услуг
          </p>
        </div>
      </div>
      <div class="sec-8__item">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/result.webp" alt=" Изображение - ">
        </div>
        <div class="sec-8__item-textbox">
          <p class="sec-8__item-title">
            Финальный результат <br>
            проверяется в 2 этапа
          </p>
          <ul class="sec-8__item-checklist">
            <li>
              <p class="sec-8__item-text _card-info">
                проверка мастером по 30+ пунктам
              </p>
            </li>
            <li>
              <p class="sec-8__item-text _card-info">
                проверка главным мастером цеха каждого <br>
                оклеенного элемента авто по 5 пунктам:
              </p>
            </li>
          </ul>
          <ul class="sec-8__item-list">
            <li>
              <p class="sec-8__item-more">
                качество реза
              </p>
            </li>
            <li>
              <p class="sec-8__item-more">
                отсутствие мусора
              </p>
            </li>
            <li>
              <p class="sec-8__item-more">
                отсутствие пузырей
              </p>
            </li>
            <li>
              <p class="sec-8__item-more">
                качество укладки
              </p>
            </li>
            <li>
              <p class="sec-8__item-more">
                отсутствие клеевых растяжек
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
