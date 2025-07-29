<section id="mapscroll" class="sec-map _sec-light">
  <div class="container">
    <h2 class="sec-map__title _title">
      Получите схему проезда <br>
      и все контакты себе на телефон
    </h2>
  </div>
  <div class="sec-map__map">
    <div id="map"></div>
    <div class="sec-map__container container">
      <div class="sec-map__contacts">
        <div class="sec-map__contacts-inner">
          <p class="sec-map__contacts-title">Заполните форму ниже,</p>
          <p class="sec-map__contacts-name">чтобы получить подробную схему<br> проезда в
            <span>WhatsApp</span>
          </p>
          <form onsubmit="ym(98054545,'reachGoal','ssf')" action="#" class="form sec-map__form form form-submit">
            <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
            <input type="hidden" name="from"
              value="Получить схему проезда и все контакты себе в WhatsApp">
            <div class="sec-12__form-inputs sec-map__contacts-inputs">
              <input class="sec-12__form-number" name="phone" type="tel" required
                placeholder="Введите ваш телефон">
              <button type="submit" class="sec-12__form-submit _whatsapp-btn _green-btn">
                Получить схему проезда <br>
                и все контакты себе в WhatsApp
              </button>
              <div class="sec-12__form-policy">
                <input class="sec-12__form-checkbox" checked required type="checkbox"
                  name="checkbox" id="checkboxmap1">
                <label class="sec-12__form-accept" for="checkboxmap1">
                  <span>
                    <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                        fill="#F37021" />
                    </svg>
                  </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                    href="#politics">политики конфиденциальности</a>
                </label>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
