<section class="sec-4">
  <div class="sec-4__layout">
    <div class="sec-4__background">
      <div class="_image-abs">
        <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/vehicle.webp" alt=" Изображение - машина на фон">
      </div>
    </div>
    <div class="sec-4__container container relative">
      <?php if(get_field('quiz_title')) :?>
      <h2 class="sec-4__title _title">
        <?php the_field('quiz_title'); ?>
      </h2>
      <?php endif; ?>
      <?php if(get_field('quiz_subtitle')):?>
      <p class="sec-4__subtitle _subtitle">
        <?php the_field('quiz_subtitle'); ?>
      </p>
      <?php endif; ?>
      <form action="#" class="form sec-4__form form form-submit">
        <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
        <input type="hidden" name="from" value="Получить расчёт стоимости + подарок">
        <div class="progress-bar progress-bar1">
          <div class="progress progress1"></div>
          <span class="progress-num progress-num1">Осталось 5 вопросов из 5</span>
        </div>
        <?php if(have_rows('question1_variants')) :?>
        <div class="quiz-step quiz-step1 step-1">
          <h3 class="quiz-step__title">01. <?php the_field('quiz_question1'); ?></h3>
          <div class="quiz-options <?php echo 'quiz-options-'.count(get_field('question1_variants')) + 1;?>">
            <?php while(have_rows('question1_variants')) : the_row();
            $img = get_sub_field('variant_img');  ?>
            <label class="quiz-option quiz-option1" data-next="2">
              <input type="radio" name="step1" required value="<?php the_sub_field('variant'); ?>">
              <span class="quiz-option__image">
                <span class="_image-abs">
                  <img class="_img" src="<?php echo $img['url'];?>"
                    alt="<?php echo $img['alt'];?>">
                </span>
              </span>
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                <?php the_sub_field('variant'); ?>
              </span>
            </label>
            <?php endwhile; ?>
            <label class="quiz-option quiz-option1" data-next="2">
              <input type="radio" name="step1" required value="Затрудняюсь ответить">
              <span class="quiz-option__image">
                <span class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/ne_znayu.webp"
                    alt=" Изображение - затрудняюсь ответить">
                </span>
              </span>
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Затрудняюсь ответить
              </span>
            </label>
          </div>
          <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
        </div>
        <?php endif; ?>

        <div class="quiz-step quiz-step1 step-2">
          <h3 class="quiz-step__title">02. Что вы хотели бы сделать?</h3>
          <div class="quiz-options">
            <div class="quiz-options">
              <label class="quiz-option quiz-option1" data-next="3">
                <input type="radio" name="step2" required value="Защитить автомобиль">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/defence.webp"
                      alt=" Изображение - Защитить автомобиль">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Защитить автомобиль
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="3">
                <input type="radio" name="step2" required value="Поменять цвет">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/change_color.webp"
                      alt=" Изображение - Поменять цвет">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Поменять цвет
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="3">
                <input type="radio" name="step2" required value="Индивидуальный дизайн">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/individual_design.webp"
                      alt=" Изображение - Индивидуальный дизайн">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Индивидуальный дизайн
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="3">
                <input type="radio" name="step2" required
                  value="Защитить или убрать хромированные элементы авто (антихром)">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/defence_or_remove_chrome.webp"
                      alt=" Изображение - Защитить или убрать хромированные элементы авто (антихром)">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Защитить или убрать хромированные <br>
                  элементы авто (антихром)
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="3">
                <input type="radio" name="step2" required value="Стайлинг">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/styling.webp"
                      alt=" Изображение - Стайлинг">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Стайлинг
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="3">
                <input type="radio" name="step2" required value="Затрудняюсь ответить">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/i_dont_know.webp"
                      alt=" Изображение - затрудняюсь ответить">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Затрудняюсь ответить
                </span>
              </label>
            </div>
          </div>
          <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
        </div>

        <div class="quiz-step quiz-step1 step-3">
          <h3 class="quiz-step__title">03. Когда вы хотели бы провести оклейку?</h3>
          <div class="quiz-options">
            <label class="quiz-option quiz-option1" data-next="4">
              <input type="radio" name="step3" required value="В ближайшее время">
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                В ближайшее <br>
                время
              </span>
            </label>
            <label class="quiz-option quiz-option1" data-next="4">
              <input type="radio" name="step3" required value="В течение месяца">
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                В течение <br>
                месяца
              </span>
            </label>
            <label class="quiz-option quiz-option1" data-next="4">
              <input type="radio" name="step3" required value="Через месяц или более">
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Через месяц <br>
                или более
              </span>
            </label>
            <label class="quiz-option quiz-option1" data-next="4">
              <input type="radio" name="step3" required value="Затрудняюсь ответить">
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Затрудняюсь <br>
                ответить
              </span>
            </label>
          </div>
          <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
        </div>
        <div class="quiz-step quiz-step1 step-4">
          <h3 class="quiz-step__title">04. Выберите подарок при заказе оклейки</h3>
          <div class="quiz-options">
            <label class="quiz-option quiz-option1" data-next="5">
              <input type="radio" name="step4" required value="Оклейка порога" id="step4-1">
              <span class="quiz-option__image">
                <span class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/porog.webp"
                    alt=" Изображение - Оклейка порога">
                </span>
              </span>
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Оклейка порога
              </span>
            </label>
            <label class="quiz-option quiz-option1" data-next="5">
              <input type="radio" name="step4" required value="Оклейка фар" id="step4-2">
              <span class="quiz-option__image">
                <span class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/fara.webp" alt=" Изображение - Оклейка фар">
                </span>
              </span>
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Оклейка фар
              </span>
            </label>
            <label class="quiz-option quiz-option1" data-next="5">
              <input type="radio" name="step4" required value="Мойка кузова" id="step4-3">
              <span class="quiz-option__image">
                <span class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/kuzov.webp"
                    alt=" Изображение - Мойка кузова">
                </span>
              </span>
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Мойка кузова
              </span>
            </label>
            <label class="quiz-option quiz-option1" data-next="5">
              <input type="radio" name="step4" required value="Выберу подарок позже"
                id="step4-4">
              <span class="quiz-option__image">
                <span class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/ne_znayu.webp"
                    alt=" Изображение - Выберу подарок позже">
                </span>
              </span>
              <span class="quiz-option__circle">
                <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_577)">
                    <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                      stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                  </g>
                </svg>
              </span>
              <span style="display: block;" class="quiz-option__text">
                Выберу подарок позже
              </span>
            </label>
          </div>
          <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
        </div>
        <div class="quiz-step quiz-step1 step-5">
          <div class="quiz-step__background">
            <div class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/phone.webp" alt=" Изображение - телефон на фон">
            </div>
          </div>
          <h3 class="quiz-step__title">
            <span>Спасибо за ответы!</span> <br>
            Специалист уже приступил <br>
            к формированию стоимости
          </h3>
          <p class="quiz-step__subtitle">
            Оставьте контакты и получите:
          </p>
          <ul class="quiz-step__list">
            <li>
              <p class="quiz-option__text">стоимость оклейки по выбранным параметрам</p>
            </li>
            <li>
              <p class="quiz-option__text">подарок:&nbsp;<span id="gift-value"></span></p>
            </li>
          </ul>
          <p class="quiz-step__method">
            Каким способом вам удобнее получить <br>
            информацию от специалиста?
          </p>
          <div class="sec-6__form-methodbox sec-12__form-methodbox">
            <input class="sec-6__form-method sec-12__form-method" checked required name="method"
              id="method-elementquiz1" type="radio" value="Телефон">
            <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn"
              for="method-elementquiz1">
              <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_130_1508)">
                  <path
                    d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                    fill="#999999" />
                  <path
                    d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                    fill="#999999" />
                  <path
                    d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                    fill="#999999" />
                </g>
              </svg>
              Телефон
            </label>
            <input class="sec-6__form-method sec-12__form-method" name="method"
              id="method-elementquiz2" type="radio" value="WhatsApp">
            <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
              for="method-elementquiz2">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_130_1005)">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                    fill="white" />
                </g>
              </svg>
              WhatsApp
            </label>
          </div>
          <div class="sec-6__form-inputs">
            <input class="sec-6__form-number" name="phone" type="tel" required
              placeholder="Введите ваш телефон">
            <button type="submit" class="sec-6__form-submit _main-btn _orange-btn">
              Получить расчет стоимости + подарок
            </button>
            <div class="sec-6__form-policy">
              <input class="sec-12__form-checkbox" checked required type="checkbox"
                name="checkbox" id="checkbox-elementquiz">
              <label class="sec-6__form-accept sec-12__form-accept"
                for="checkbox-elementquiz">
                <span>
                  <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                      fill="#F37021" />
                  </svg>
                </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                  href="#policy">политики конфиденциальности</a>
              </label>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
