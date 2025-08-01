<div id="politics" style="display: none;" class="politics-modal fancybox__content">
  <div class="modal__container">
    <h3 class="politics-modal__title">Политика конфиденциальности</h3>
    <div class="politics-modal__text">
      <p>
        Администрация данного Сайта не&nbsp;может передать или раскрыть информацию предоставленную пользователем
        (далее Пользователь) при регистрации и&nbsp;использовании функций сайта третьим лицам, кроме случаев,
        описанных законодательством страны, на&nbsp;территории которой пользователь ведет свою деятельность.
      </p>
      <p>
        Для регистрации на&nbsp;сайте, пользователь обязан внести некоторую персональную информацию. Для проверки
        предоставленных данных, сайт оставляет за&nbsp;собой право потребовать доказательства идентичности
        в&nbsp;онлайн или офлайн режимах.
      </p>
      <p>
        Сайт использует личную информацию Пользователя для обслуживания и&nbsp;для улучшения качества
        предоставляемых услуг. Часть персональной информации может быть предоставлена банку или платежной системе,
        в&nbsp;случае, если предоставление этой информации обусловлено процедурой перевода средств платежной
        системе, услугами которой Пользователь желает воспользоваться.
      </p>
      <p>
        Сайт прилагает все усилия для сбережения в&nbsp;сохранности личных данных Пользователя.
        Личная информация может быть раскрыта в&nbsp;случаях, описанных законодательством, либо
        когда администрация сочтет подобные действия необходимыми для соблюдения юридической процедуры, судебного
        распоряжения или легального процесса необходимого для работы Пользователя с&nbsp;Сайтом.
      </p>
      <p>
        В&nbsp;других случаях, ни&nbsp;при каких условиях, информация, которую Пользователь передает Сайту,
        не&nbsp;будет раскрыта третьим лицам.
      </p>
    </div>
  </div>
</div>
<div id="soglas" style="display: none;" class="politics-modal fancybox__content">
  <div class="modal__container">
    <h3 class="politics-modal__title">Согласие на обработку персональных данных</h3>
    <div class="politics-modal__text">
      <p>
        Настоящим согласием, Пользователь, под которым понимается любое лицо, пользующееся Сайтом, на котором размещено
        настоящее согласие в соответствии со ст. 9 Федерального закона от 27.07.2006 № 152-ФЗ «О персональных данных»
        принимает
        решение и дает свое согласие свободно, своей волей и в своем интересе о предоставлении его персональных данных и
        их
        обработку в достаточном и необходимом объеме Оператору – Общество с ограниченной ответственностью «АРХИТЕНТ»
        (ООО
        «АРХИТЕНТ») ОГРН 123400000645, ИНН 4000004348, адрес: 248017, ул. Московская, д. 287А, оф. 1 г. Калуга
      </p>
      <p>
        В соответствии с Политикой в области обработки персональных данных Оператор также может получать персональные
        данные
        Пользователя, которые предоставлены им путем размещения на Сайте, под которым понимается совокупность
        информационно-телекоммуникационных технологий, используемых для предоставления информации, об Услуге и о
        Продукте. (сайт
        в сети Интернет, мессенджеры, облачные хранилища, системы организации интернет-конференций и пр.).
      </p>
      <p>
        Персональные данные, разрешенные к обработке в рамках настоящего Согласия, предоставляются Пользователем
        добровольно
        путем заполнения различных форм, размещенных на сайте, и могут включать в себя любую информацию, на основании
        которой
        возможна идентификация субъекта персональных данных.
      </p>
      <p>
        Настоящее Согласие не предполагает составление дополнительных письменных документов, поскольку явно и очевидно
        выражает
        волю Сторон, направленную на достижение общих целей.
      </p>
      <p>
        В случае необходимости отзыва настоящего Согласия Пользователь направляет соответствующее уведомление по адресу
        электронной почты info@fabrika-shatrov.ru.
      </p>
      <p>
        Настоящее согласие предоставляется во исполнение Конституции Российской Федерацией, Федерального закона от
        27.07.2006 №
        152-ФЗ «О персональных данных», Политики в области обработки персональных данных Исполнителя.
      </p>
    </div>
  </div>
</div>



<div id="callback-modal" style="display: none;" class="modal modal__callback">
  <div class="modal__callback-layout">
    <div class="modal__callback-left">
      <div class="modal__callback-author">
        <div class="modal__callback-wrapp">
          <!-- <div class="modal__callback-avatar">
            <div class="modal__callback-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/wm.webp"
                alt=" Изображение - аватарка автора">
            </div>
            <div class="modal__callback-namebox">
              <p class="modal__callback-name">
                Имя Фамилия
              </p>
              <p class="modal__callback-rank">
                служба заботы о клиентах
              </p>
            </div>
          </div> -->
          <p class="modal__callback-title">
            Введите <br>ваш номер<br> телефона
          </p>
          <p class="modal__callback-subtitle">
            и наш специалист поможет<br> с подбором услуги и записью<br> на удобное время
          </p>
        </div>
        <div class="modal__callback-phone">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/ph.webp" alt=" Изображение - телефон на фон">
        </div>
      </div>
    </div>
    <form id="modal__form" class="sec-form12__form modal__form form  form-submit" action="#" method="POST"
      enctype="multipart/form-data">
      <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)); ?>">
      <input type="hidden" name="from" value="Заказать обратный звонок">

      <div class="modal__form-mobile">
        <h2 class="modal__callback-title">
          Введите <br>ваш номер<br> телефона
        </h2>
        <p class="modal__callback-subtitle">
          и наш специалист поможет<br> с подбором услуги и записью<br> на удобное время
        </p>
      </div>

      <input class="sec-6__form-number" name="phone" type="tel" required=""
        placeholder="Введите ваш телефон" maxlength="18">

      <p class="modal__form-line sec-form12__form-title">Выберите способ связи:</p>
      <div class="sec-6__form-methodbox sec-12__form-methodbox">
        <input class="sec-6__form-method sec-12__form-method" checked="" required="" name="method"
          id="method-element12" type="radio" value="Звонок">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn" for="method-element12">
          <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_130_1508)">
              <path
                d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                fill="#999999"></path>
              <path
                d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                fill="#999999"></path>
              <path
                d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                fill="#999999"></path>
            </g>
          </svg>
          Звонок
        </label>
        <input class="sec-6__form-method sec-12__form-method" name="method" id="method-element22"
          type="radio" value="WhatsApp">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
          for="method-element22">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_130_1005)">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                fill="white"></path>
            </g>
          </svg>
          WhatsApp
        </label>
      </div>
      <p class="modal__form-line sec-form12__form-title">Выберите время звонка:</p>
      <div class="modal__form-inner">
        <input class="_radio-btn" type="radio" id="call_now" checked="" name="call_time"
          value="сейчас"><label
          class="modal__form-button-2 _now-time sec-6__form-social sec-12__form-social"
          for="call_now">Сейчас</label>
        <input class="_radio-btn" type="radio" id="call_later" name="call_time" value="По времени">
        <label class="modal__form-button-2 _when-time" for="call_later">По времени</label>


      </div>
      <p class="modal__form-line sec-form12__form-title">Когда вам будет удобно принять звонок?</p>
      <input class="modal__form-calltime sec-12__form-number" disabled id="call_time_input" name="call_time_input"
        placeholder="Например завтра в 12:00">
      <button class="modal__form-button form-btn sec-12__form-submit _main-btn _orange-btn" type="submit">Записаться</button>
      <div class="sec-6__form-policy">
        <input class="sec-12__form-checkbox" checked="" required="" type="checkbox" name="checkbox"
          id="checkbox-element0">
        <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-element0">
          <span>
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                fill="#F37021"></path>
            </svg>
          </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox=""
            href="#policy">политики конфиденциальности</a>
        </label>
      </div>
    </form>
  </div>
</div>
<div id="callback-modal-2" style="display: none;" class="modal modal__callback">
  <div class="modal__callback-layout">
    <div class="modal__callback-left">
      <div class="modal__callback-author">
        <div class="modal__callback-wrapp">
          <!-- <div class="modal__callback-avatar">
            <div class="modal__callback-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/wm.webp"
                alt=" Изображение - аватарка автора">
            </div>
            <div class="modal__callback-namebox">
              <p class="modal__callback-name">
                Имя Фамилия
              </p>
              <p class="modal__callback-rank">
                служба заботы о клиентах
              </p>
            </div>
          </div> -->
          <p class="modal__callback-title">
            Закажите  <br>
            обратный звонок
          </p>
          <p class="modal__callback-subtitle">
            Наш специалист свяжется с вами <br>
            в течение 5 минут или в удобное <br>
            для вас время
          </p>
        </div>
        <div class="modal__callback-phone">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/ph.webp" alt=" Изображение - телефон на фон">
        </div>
      </div>
    </div>
    <form id="modal__form" class="sec-form12__form modal__form form  form-submit" action="#" method="POST"
      enctype="multipart/form-data">
      <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)); ?>">
      <input type="hidden" name="from" value="Заказать обратный звонок">

      <div class="modal__form-mobile">
        <h2 class="modal__callback-title">
          Закажите  <br>
          обратный звонок
        </h2>
        <p class="modal__callback-subtitle">
          Наш специалист свяжется с вами <br>
          в течение 5 минут или в удобное <br>
          для вас время
        </p>
      </div>

      <input class="sec-6__form-number" name="phone" type="tel" required=""
        placeholder="Введите ваш телефон" maxlength="18">

      <p class="modal__form-line sec-form12__form-title">Выберите способ связи:</p>
      <div class="sec-6__form-methodbox sec-12__form-methodbox">
        <input class="sec-6__form-method sec-12__form-method" checked="" required="" name="method"
          id="method-element12" type="radio" value="Звонок">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn" for="method-element12">
          <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_130_1508)">
              <path
                d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                fill="#999999"></path>
              <path
                d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                fill="#999999"></path>
              <path
                d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                fill="#999999"></path>
            </g>
          </svg>
          Звонок
        </label>
        <input class="sec-6__form-method sec-12__form-method" name="method" id="method-element22"
          type="radio" value="WhatsApp">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
          for="method-element22">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_130_1005)">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                fill="white"></path>
            </g>
          </svg>
          WhatsApp
        </label>
      </div>
      <p class="modal__form-line sec-form12__form-title">Выберите время звонка:</p>
      <div class="modal__form-inner">
        <input class="_radio-btn" type="radio" id="call_now" checked="" name="call_time"
          value="сейчас"><label
          class="modal__form-button-2 _now-time sec-6__form-social sec-12__form-social"
          for="call_now">Сейчас</label>
        <input class="_radio-btn" type="radio" id="call_later" name="call_time" value="По времени">
        <label class="modal__form-button-2 _when-time" for="call_later">По времени</label>


      </div>
      <p class="modal__form-line sec-form12__form-title">Когда вам будет удобно принять звонок?</p>
      <input class="modal__form-calltime sec-12__form-number" disabled id="call_time_input" name="call_time_input"
        placeholder="Например завтра в 12:00">
      <button class="modal__form-button form-btn sec-12__form-submit _main-btn _orange-btn" type="submit">Заказать
        обратный
        звонок</button>
      <div class="sec-6__form-policy">
        <input class="sec-12__form-checkbox" checked="" required="" type="checkbox" name="checkbox"
          id="checkbox-element0">
        <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-element0">
          <span>
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                fill="#F37021"></path>
            </svg>
          </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox=""
            href="#policy">политики конфиденциальности</a>
        </label>
      </div>
    </form>
  </div>
</div>




<!-- <div id="callback-modal" style="display: none;" class="modal modal__callback">
  <div class="modal__callback-layout">
    <div class="modal__callback-left">
      <div class="modal__callback-author">
        <div class="modal__callback-wrapp">
          <div class="modal__callback-avatar">
            <div class="modal__callback-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/wm.webp"
                alt=" Изображение - аватарка автора">
            </div>
            <div class="modal__callback-namebox">
              <p class="modal__callback-name">
                Имя Фамилия
              </p>
              <p class="modal__callback-rank">
                служба заботы о клиентах
              </p>
            </div>
          </div>
          <p class="modal__callback-title">
            Закажите  <br>
            обратный звонок
          </p>
          <p class="modal__callback-subtitle">
            Наш специалист свяжется с вами <br>
            в течение 5 минут или в удобное <br>
            для вас время
          </p>
        </div>
        <div class="modal__callback-phone">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thanks/ph.webp" alt=" Изображение - телефон на фон">
        </div>
      </div>
    </div>
    <form id="modal__form" class="sec-form12__form modal__form form  form-submit" action="#" method="POST"
      enctype="multipart/form-data">
      <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)); ?>">
      <input type="hidden" name="from" value="Заказать обратный звонок">

      <div class="modal__form-mobile">
        <h2 class="modal__callback-title">
          Закажите  <br>
          обратный звонок
        </h2>
        <p class="modal__callback-subtitle">
          Наш специалист свяжется с вами <br>
          в течение 5 минут или в удобное <br>
          для вас время
        </p>
      </div>

      <input class="sec-6__form-number" name="phone" type="tel" required=""
        placeholder="Введите ваш телефон" maxlength="18">

      <p class="modal__form-line sec-form12__form-title">Выберите способ связи:</p>
      <div class="sec-6__form-methodbox sec-12__form-methodbox">
        <input class="sec-6__form-method sec-12__form-method" checked="" required="" name="method"
          id="method-element12" type="radio" value="Звонок">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn" for="method-element12">
          <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_130_1508)">
              <path
                d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                fill="#999999"></path>
              <path
                d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                fill="#999999"></path>
              <path
                d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                fill="#999999"></path>
            </g>
          </svg>
          Звонок
        </label>
        <input class="sec-6__form-method sec-12__form-method" name="method" id="method-element22"
          type="radio" value="WhatsApp">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
          for="method-element22">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_130_1005)">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                fill="white"></path>
            </g>
          </svg>
          WhatsApp
        </label>
      </div>
      <p class="modal__form-line sec-form12__form-title">Выберите время звонка:</p>
      <div class="modal__form-inner">
        <input class="_radio-btn" type="radio" id="call_now" checked="" name="call_time"
          value="сейчас"><label
          class="modal__form-button-2 _now-time sec-6__form-social sec-12__form-social"
          for="call_now">Сейчас</label>
        <input class="_radio-btn" type="radio" id="call_later" name="call_time" value="По времени">
        <label class="modal__form-button-2 _when-time" for="call_later">По времени</label>


      </div>
      <p class="modal__form-line sec-form12__form-title">Когда вам будет удобно принять звонок?</p>
      <input class="modal__form-calltime sec-12__form-number" disabled id="call_time_input" name="call_time_input"
        placeholder="Например завтра в 12:00">
      <button class="modal__form-button form-btn sec-12__form-submit _main-btn _orange-btn" type="submit">Заказать
        обратный
        звонок</button>
      <div class="sec-6__form-policy">
        <input class="sec-12__form-checkbox" checked="" required="" type="checkbox" name="checkbox"
          id="checkbox-element0">
        <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-element0">
          <span>
            <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                fill="#F37021"></path>
            </svg>
          </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox=""
            href="#policy">политики конфиденциальности</a>
        </label>
      </div>
    </form>
  </div>
</div> -->











<div class="_modal modal__quiz" style="display: none" id="quiz">
  <form class="form sec-4__form form form-submit" action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
    <input type="hidden" name="from" value="Получить расчёт стоимости + подарок">
    <div class="progress-bar progress-bar2">
      <div class="progress progress2"></div>
      <span class="progress-num progress-num2">Осталось 5 вопросов из 5</span>
    </div>

    <div class="quiz-step quiz-step2 step-1 steps-1">
      <h3 class="quiz-step__title">01. Какую часть автомобиля вы планируете оклеить?</h3>
      <div class="quiz-options">
        <label class="quiz-option quiz-option2" data-next="2" onclick="ym(98054545,'reachGoal','qwiz1')">
          <input type="radio" name="step1" required value="Полная оклейка">
          <span class="quiz-option__image">
            <span class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/polnaya_okleyka.webp"
                alt=" Изображение - полная оклейка">
            </span>
          </span>
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Полная оклейка
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="2" onclick="ym(98054545,'reachGoal','qwiz1')">
          <input type="radio" name="step1" required value="Частичная оклейка">
          <span class="quiz-option__image">
            <span class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/chastichnaya_okleyka.webp"
                alt=" Изображение - частичная оклейка">
            </span>
          </span>
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Частичная оклейка
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="2" onclick="ym(98054545,'reachGoal','qwiz1')">
          <input type="radio" name="step1" required value="Оклейка отдельных элементов">
          <span class="quiz-option__image">
            <span class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/okleyka_otdelnih_elementov.webp"
                alt=" Изображение - оклейка отдельных элементов">
            </span>
          </span>
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Оклейка отдельных <br>
            элементов
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="2" onclick="ym(98054545,'reachGoal','qwiz1')">
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
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
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

    <div class="quiz-step quiz-step2 step-2 steps-2">
      <h3 class="quiz-step__title">02. Что вы хотели бы сделать?</h3>
      <div class="quiz-options">
        <div class="quiz-options">
          <label class="quiz-option quiz-option2" data-next="3" onclick="ym(98054545,'reachGoal','qwiz2')">
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
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                </g>
              </svg>
            </span>
            <span style="display: block;" class="quiz-option__text">
              Защитить автомобиль
            </span>
          </label>
          <label class="quiz-option quiz-option2" data-next="3" onclick="ym(98054545,'reachGoal','qwiz2')">
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
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                </g>
              </svg>
            </span>
            <span style="display: block;" class="quiz-option__text">
              Поменять цвет
            </span>
          </label>
          <label class="quiz-option quiz-option2" data-next="3" onclick="ym(98054545,'reachGoal','qwiz2')">
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
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                </g>
              </svg>
            </span>
            <span style="display: block;" class="quiz-option__text">
              Индивидуальный дизайн
            </span>
          </label>
          <label class="quiz-option quiz-option2" data-next="3" onclick="ym(98054545,'reachGoal','qwiz2')">
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
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                </g>
              </svg>
            </span>
            <span style="display: block;" class="quiz-option__text">
              Защитить или убрать хромированные <br>
              элементы авто (антихром)
            </span>
          </label>
          <label class="quiz-option quiz-option2" data-next="3" onclick="ym(98054545,'reachGoal','qwiz2')">
            <input type="radio" name="step2" required value="Стайлинг">
            <span class="quiz-option__image">
              <span class="_image-abs">
                <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/styling.webp" alt=" Изображение - Стайлинг">
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
              Стайлинг
            </span>
          </label>
          <label class="quiz-option quiz-option2" data-next="3" onclick="ym(98054545,'reachGoal','qwiz2')">
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
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" />
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

    <div class="quiz-step quiz-step2 step-3 steps-3">
      <h3 class="quiz-step__title">03. Когда вы хотели бы провести оклейку?</h3>
      <div class="quiz-options">
        <label class="quiz-option quiz-option2" data-next="4" onclick="ym(98054545,'reachGoal','qwiz3')">
          <input type="radio" name="step3" required value="В ближайшее время">
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            В ближайшее <br>
            время
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="4" onclick="ym(98054545,'reachGoal','qwiz3')">
          <input type="radio" name="step3" required value="В течение месяца">
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            В течение <br>
            месяца
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="4" onclick="ym(98054545,'reachGoal','qwiz3')">
          <input type="radio" name="step3" required value="Через месяц или более">
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Через месяц <br>
            или более
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="4" onclick="ym(98054545,'reachGoal','qwiz3')">
          <input type="radio" name="step3" required value="Затрудняюсь ответить">
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
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
    <div class="quiz-step quiz-step2 step-4 steps-4">
      <h3 class="quiz-step__title">04. Выберите подарок при заказе оклейки</h3>
      <div class="quiz-options">
        <label class="quiz-option quiz-option2" data-next="5" onclick="ym(98054545,'reachGoal','qwiz4')">
          <input type="radio" name="step4" required value="Оклейка порога" id="step4-1q">
          <span class="quiz-option__image">
            <span class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/porog.webp" alt=" Изображение - Оклейка порога">
            </span>
          </span>
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Оклейка порога
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="5" onclick="ym(98054545,'reachGoal','qwiz4')">
          <input type="radio" name="step4" required value="Оклейка фар" id="step4-2q">
          <span class="quiz-option__image">
            <span class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/fara.webp" alt=" Изображение - Оклейка фар">
            </span>
          </span>
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Оклейка фар
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="5" onclick="ym(98054545,'reachGoal','qwiz4')">
          <input type="radio" name="step4" required value="Мойка кузова" id="step4-3q">
          <span class="quiz-option__image">
            <span class="_image-abs">
              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/kuzov.webp" alt=" Изображение - Мойка кузова">
            </span>
          </span>
          <span class="quiz-option__circle">
            <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_130_577)">
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
              </g>
            </svg>
          </span>
          <span style="display: block;" class="quiz-option__text">
            Мойка кузова
          </span>
        </label>
        <label class="quiz-option quiz-option2" data-next="5" onclick="ym(98054545,'reachGoal','qwiz4')">
          <input type="radio" name="step4" required value="Выберу подарок позже" id="step4-4q">
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
                <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" />
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
    <div class="quiz-step quiz-step2 step-5 steps-5">
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
          <p class="quiz-option__text">подарок:&nbsp;<span id="gift-value2"></span></p>
        </li>
      </ul>
      <p class="quiz-step__method">
        Каким способом вам удобнее получить <br>
        информацию от специалиста?
      </p>
      <div class="sec-6__form-methodbox sec-12__form-methodbox">
        <input class="sec-6__form-method sec-12__form-method" checked required name="method"
          id="method-elementquizmod1" type="radio" value="Телефон">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn"
          for="method-elementquizmod1">
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
        <input class="sec-6__form-method sec-12__form-method" name="method" id="method-elementquizmod2"
          type="radio" value="WhatsApp">
        <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
          for="method-elementquizmod2">
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
          <input class="sec-12__form-checkbox" checked required type="checkbox" name="checkbox"
            id="checkbox-elementquizmod">
          <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-elementquizmod">
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

<div class="modal modal__change-price" id="change-price" style="display: none;">
  <div class="modal__container">
    <h3 class="politics-modal__title">Введите свою цену</h3>
    <div class="sec-6__form-inputs">
      <input class="sec-6__form-number modal__form-inp" type="number" placeholder="1000" minlength="3">
      <button class="modal__form-button _main-btn" type="button">Заменить</button>
    </div>
  </div>
</div>

<div class="modal" style="display: none;" id="modal-main">
  <form class="form-submit relative modal__form" action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="from" value="Записаться на консультацию">
    <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
    <h2 class="modal__form-title">
      Заполните форму
    </h2>
    <p class="modal__form-subtitle">
      Введите телефон в форме ниже
    </p>
    <div class="modal__form-inputs">
      <input class="modal__form-inp sec-12__form-number" type="tel" name="phone" placeholder="Введите номер телефона" required>
      <button class="modal__form-btn _main-btn form-btn" type="submit">
        Получите консультацию
      </button>
    </div>
    <div class="sec-6__form-policy modal__form-policy">
      <input class="sec-12__form-checkbox" checked required type="checkbox" name="checkbox"
        id="checkbox-elementquizmod123">
      <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-elementquizmod123">
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
  </form>
</div>
<div class="modal" style="display: none;" id="change-number">
  <form class="form-submit relative modal__form" action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="from" value="Записаться на консультацию">
    <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
    <h2 class="modal__form-title">
      Оставьте свой исправленный номер
    </h2>
    <p class="modal__form-subtitle">
      Введите телефон в форме ниже
    </p>
    <div class="modal__form-inputs">
      <input class="modal__form-inp sec-12__form-number" type="tel" name="phone" placeholder="Введите номер телефона" required>
      <button class="modal__form-btn _main-btn form-btn" type="submit">
        Получите консультацию
      </button>
    </div>
    <div class="sec-6__form-policy modal__form-policy">
      <input class="sec-12__form-checkbox" checked required type="checkbox" name="checkbox"
        id="checkbox-elementquizmod123">
      <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-elementquizmod123">
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
  </form>
</div>












<section class="section sec-12" style="display:none; background-image: url(<?php echo get_template_directory_uri() . '/assets/salon.webp'; ?>);" id="promocode">
  <div class="sec-12__container container">
    <h2 class="sec-12__title _title">
      Получите промокод <br>
      на бесплатную оклейку <br>
      элементов автомобиля
    </h2>
    <div class="sec-12__content">
      <form action="#" method="POST" enctype="multipart/form-data" class="form sec-12__form form form-submit">
        <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
        <input type="hidden" name="from"
          value="получите промокод на бесплатную оклейку элементов автомобиля">
        <p class="sec-12__form-li _li-1">
          1. Выберите вид оклейки и подарок:
        </p>
        <div class="sec-12__form-typebox">
          <input class="sec-12__form-type" checked required name="type" id="type1" type="radio"
            value="Скидка 20% на комплексную мойку">
          <label class="sec-12__form-button _transparent-btn" for="type1">
            <span class="sec-12__button-text">Скидка 20% на комплексную мойку</span>
          </label>
          <input class="sec-12__form-type" name="type" id="type2" type="radio"
            value="Скидка 10% на химчистку салона">
          <label class="sec-12__form-button _transparent-btn" for="type2">
            <span class="sec-12__button-text">Скидка 10% на химчистку салона</span>
          </label>
        </div>
        <p class="sec-12__form-li _li-2">
          2. Куда вам удобно получить промокод?
        </p>
        <div class="sec-12__form-methodbox">
          <input class="sec-12__form-method" checked required name="method" id="method1"
            type="radio" value="Телефон">
          <label class="sec-12__form-social _transparent-btn _callbtn" for="method1">
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
          <input class="sec-12__form-method" name="method" id="method2" type="radio"
            value="WhatsApp">
          <label class="sec-12__form-social _transparent-btn _whatsapp" for="method2">
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
          <input class="sec-12__form-method" name="method" id="method3" type="radio"
            value="Telegram">
          <label class="sec-12__form-social _transparent-btn _telegram" for="method3">
            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_295_978)">
                <path d="M18 0.584729C17.9081 0.980695 17.8085 1.37322 17.7204 1.76919C17.1383 4.40667 16.5562 7.04415 15.974 9.68163C15.7098 10.873 15.4455 12.0643 15.1889 13.2591C15.0472 13.9133 14.1702 14.2266 13.5804 13.8238C11.4396 12.3535 9.30255 10.8799 7.1617 9.40618C7.13489 9.38896 7.10809 9.36486 7.06979 9.33387C7.20766 9.22024 7.33787 9.1135 7.47192 9.00677C9.99575 6.96151 12.5234 4.9197 15.0472 2.87101C15.1545 2.78493 15.254 2.68163 15.3268 2.57145C15.4187 2.43028 15.3345 2.3201 15.1545 2.35453C14.9936 2.38552 14.8289 2.44405 14.6911 2.52324C13.4732 3.21188 12.2591 3.91085 11.0413 4.60293C8.95021 5.79771 6.85915 6.98906 4.77191 8.18729C4.64936 8.25615 4.54979 8.26648 4.41574 8.22516C3.2017 7.8533 1.98766 7.48832 0.773617 7.1199C0.428936 7.0166 0.145532 6.84444 0 6.52767V6.30731C0.149362 6.04907 0.402128 5.9079 0.693191 5.80804C5.85192 3.98316 11.0145 2.16171 16.177 0.343706C16.514 0.226637 16.8549 0.109569 17.2034 0.0303758C17.6209 -0.0625903 17.8391 0.0441485 18 0.360922V0.581286V0.584729Z" fill="#939393" />
              </g>
            </svg>
            Telegram
          </label>
        </div>
        <p class="sec-12__form-li _li-3">
          3. Введите номер телефона
        </p>
        <div class="sec-12__form-inputs">
          <input class="sec-12__form-number" name="phone" type="tel" required
            placeholder="Введите ваш телефон">
          <button type="submit" class="sec-12__form-submit _main-btn _orange-btn">
            Получить промокод
          </button>
          <div class="sec-12__form-policy">
            <input class="sec-12__form-checkbox" checked required type="checkbox"
              name="checkbox" id="checkbox1">
            <label class="sec-12__form-accept" for="checkbox1">
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
      </form>
    </div>
  </div>
</section>