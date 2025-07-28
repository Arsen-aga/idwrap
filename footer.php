<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__cols">
        <div class="footer__col">
          <h4 class="footer__col-title">
            Оклейка автомобиля
          </h4>
          <ul class="footer__col-list list-point">
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Антигравийная оклейка
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Цветной полиуретан
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Полная оклейка автомобиля
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Оклейка зон риска
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Антихром
              </a>
            </li>
          </ul>
          <div class="footer__col-more">
            Посмотреть все виды оклейки
          </div>
        </div>
        <div class="footer__col">
          <h4 class="footer__col-title">
            Детейлинг
          </h4>
          <ul class="footer__col-list list-point">
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Полировка кузова
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Автокерамика
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Химчистка салона
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Мойка кузова
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Мойка подвески
              </a>
            </li>
          </ul>
          <div class="footer__col-more">
            Посмотреть все виды оклейки
          </div>
        </div>
        <div class="footer__col">
          <h4 class="footer__col-title">
            О нас
          </h4>
          <ul class="footer__col-list">
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Акции
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Цены
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Наши работы
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Отзывы
              </a>
            </li>
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Обучение
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4 class="footer__col-title">
            Блог
          </h4>
          <ul class="footer__col-list">
            <li class="footer__col-point">
              <a class="footer__col-link" href="#">
                Контакты
              </a>
            </li>
          </ul>
          <div class="social-block footer__social-block">
            <div class="social-block__left footer__social-left">
              <a class="social-block__btn _main-btn" href="#callback-modal" data-fancybox="">
                Записаться
              </a>
              <a class="social-block__link social-block__whatsapp" href="#">
                <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              </a>
              <a class="social-block__link social-block__telegram" href="#">
                <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
              </a>
            </div>
            <div class="social-block__phone">
              <a class="social-block__phone-number" href="tel:+74952980377">
                +7 495 298 03 77
              </a>
              <a class="social-block__phone-link" href="#callback-modal" data-fancybox>
                <span>Перезвоним за 1 минуту</span>
              </a>
            </div>
          </div>
          <address class="footer__col-address">
            <?php include(get_template_directory() . '/assets/images/icons/geo.svg'); ?>
            <p>ул. Архитектора Щусева, 5, к1</p>
          </address>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <a class="logo footer__logo" href="/">
        <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
        <p class="logo__text">
          Студия детейлинга
        </p>
      </a>
      <a class="footer__bottom-link" href="#politics" data-fancybox="">
        Политика конфиденциальности
      </a>
      <a class="footer__bottom-link" href="#soglas" data-fancybox="">
        Обработка персональных данных
      </a>
      <a class="footer__bottom-tfa" href="#">
        <?php include(get_template_directory() . '/assets/images/icons/tfa.svg'); ?>
        <span>Разработка сайта</span>
      </a>
    </div>
  </div>
</footer>

</div>

<?php get_template_part('template-parts/modals'); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>