<section class="verified-materials">
  <div class="container">
    <h2 class="verified-materials__title _title">
      Используем только проверенные<br>
      материалы от ведущих мировых<br>
      производителей
    </h2>
  </div>

  <div class="cursor">
    <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
  </div>
  <div class="verified-materials__elems-wrapper">
    <div class="container">

      <div class="verified-materials__elems">

        <div class="verified-materials__elem">
          <div class="verified-materials__elem-icon">
            <?php include(get_template_directory() . '/assets/images/icons/verified-materials-1.svg'); ?>
          </div>
          <div class="verified-materials__elem-info">
            <h4 class="verified-materials__elem-title">
              Толщина пленок<br>
              от 200 микрон,
            </h4>
            <p class="verified-materials__elem-text">
              что обеспечивает надежную<br>
              защиту и долговечность
            </p>
          </div>
        </div>
        <div class="verified-materials__elem">
          <div class="verified-materials__elem-icon">
            <?php include(get_template_directory() . '/assets/images/icons/verified-materials-2.svg'); ?>
          </div>
          <div class="verified-materials__elem-info">
            <h4 class="verified-materials__elem-title">
              С каждым производителем<br>
              сотрудничаем более 5 лет,
            </h4>
            <p class="verified-materials__elem-text">
              а долговечность пленок<br>
              протестирована на наших<br>
              собственных автомобилях
            </p>
          </div>
        </div>
        <div class="verified-materials__elem">
          <div class="verified-materials__elem-icon">
            <?php include(get_template_directory() . '/assets/images/icons/verified-materials-3.svg'); ?>
          </div>
          <div class="verified-materials__elem-info">
            <h4 class="verified-materials__elem-title">
              Большое разнообразие<br>
              пленок в наличии,
            </h4>
            <p class="verified-materials__elem-text">
              что позволяет приступить<br>
              к оклейке уже сегодня
            </p>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="container">
    <div class="cursor">
      <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
    </div>
    <div class="verified-materials__partners">
      <div class="verified-materials__partner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-1.webp" alt="Partner 1" class="verified-materials__partner-img">
      </div>
      <div class="verified-materials__partner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-2.webp" alt="Partner 2" class="verified-materials__partner-img">
      </div>
      <div class="verified-materials__partner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-3.webp" alt="Partner 3" class="verified-materials__partner-img">
      </div>
      <div class="verified-materials__partner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-4.webp" alt="Partner 4" class="verified-materials__partner-img">
      </div>
      <div class="verified-materials__partner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-5.webp" alt="Partner 5" class="verified-materials__partner-img">
      </div>
    </div>

    <!-- Технический блок (вариант 3) -->
    <?php if (have_rows('verified-materials_list')) : ?>
      <div class="verified-materials__list">
        <?php $listImg = get_field('verified-materials_listImg');
        if ($listImg) : ?>
          <div class="verified-materials__list-left">
            <div class="verified-materials__list-wrapper">
              <img src="<?php echo $listImg['url']; ?>" alt="<?php echo $listImg['alt']; ?>" class="_img">
            </div>
          </div>
        <?php endif; ?>
        <div class="verified-materials__list-items">
          <?php while (have_rows('verified-materials_list')) : the_row();
            $icon = get_sub_field('point_icon'); ?>
            <div class="verified-materials__list-item">
              <div class="verified-materials__list-icon">
                <?php include(get_template_directory() . '/assets/images/icons/verified-materials-1.svg'); ?>
              </div>
              <div class="verified-materials__list-right">
                <?php if (get_sub_field('point_title')) : ?>
                  <h4 class="verified-materials__list-title">
                    <?php the_sub_field('point_title'); ?>
                  </h4>
                <?php endif; ?>
                <?php if (get_sub_field('point_text')): ?>
                  <p class="verified-materials__list-text">
                    <?php the_sub_field('point_text'); ?>
                  </p>
                <?php endif; ?>
                <?php if (have_rows('point_list')) : ?>
                  <ul class="verified-materials__list-list list-point grid-2">
                    <?php while (have_rows('point_list')) : the_row(); ?>
                      <li class="verified-materials__list-point"><?php the_sub_field('item'); ?></li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (get_field('verified-materials_cardsTitle')) : ?>
      <h2 class="verified-materials__title _title">
        <?php the_field('verified-materials_cardsTitle'); ?>
      </h2>
    <?php endif; ?>

    <?php if (have_rows('verified-materials_cards')) :
      $count = 1; ?>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>

      <?php $type_block = get_field('verified-materials_variants');
      switch ($type_block) {
        case 'grid-default':
          $class = 'grid-default';
          break;
        case 'grid-4':
          $class = 'grid-4';
          break;
        case 'grid-6':
          $class = 'grid-6';
          break;
      } ?>
      <div class="verified-materials__items <?php echo $class; ?>">
        <!-- Вариант 1 - 6 карточек -->
        <?php while (have_rows('verified-materials_cards')) : the_row();
          $img = get_sub_field('card_img');
          $img_url = $img ? $img['url'] : get_template_directory_uri() . '/assets/images/verified-materials-item-4.webp';
          $img_alt = $img ? esc_attr($img['alt']) : ''; ?>
          <div class="verified-materials__item default-item change-popup-item <?php if ($class == 'grid-6' && $count > 3) {
                                                                                echo 'default-item__horizontal';
                                                                              } ?>">
            <div class="default-item__wrapper">
              <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" class="default-item__img _img">
            </div>
            <div class="default-item__info">
              <h4 class="default-item__title change-popup-title"><?php the_sub_field('card_title'); ?></h4>
              <?php if (get_sub_field('card_text')) : ?>
                <p class="default-item__text">
                  <?php the_sub_field('card_text'); ?>
                </p>
              <?php endif; ?>
              <?php if (have_rows('card_list')) : ?>
                <ul>
                  <?php while (have_rows('card_list')) : the_row(); ?>
                    <li><?php the_sub_field('list_point'); ?></li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
              <a href="#callback-modal" class="default-item__btn _main-btn change-popup" data-fancybox>Рассчитать стоимость</a>
            </div>
          </div>
        <?php $count++;
        endwhile; ?>
      </div>
    <?php endif; ?>

    <!-- CTA блоки (общие для всех вариантов) -->
    <div class="verified-materials__blocks">

      <div class="verified-materials__block">
        <h4 class="verified-materials__block-title">
          Хотите <span>частично восстановить</span><br>
          уже нанесенную пленку?
        </h4>
        <p class="verified-materials__block-text">
          Подберем пленку, учитывая все особенности<br>
          оригинала — цвет, текстуру и производителя
        </p>
        <a href="#callback-modal" class="verified-materials__block-btn _main-btn change-popup" data-fancybox="">
          Рассчитать стоимость<br>
          восстановления пленки
        </a>
      </div>
      <div class="verified-materials__block">
        <h4 class="verified-materials__block-title">
          Хотите <span>улучшить состояние</span><br>
          и внешний вид пленки?
        </h4>
        <p class="verified-materials__block-text">
          Проведем детейлинг-мойку, полировку пленки<br>
          и нанесение покрытия для блеска
        </p>
        <a href="#callback-modal" class="verified-materials__block-btn _main-btn change-popup" data-fancybox="">
          Рассчитать стоимость<br>
          улучшения состояния пленки
        </a>
      </div>

    </div>
  </div>
</section>