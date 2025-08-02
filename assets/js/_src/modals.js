// Изменение заголовка и инпут from в попапе, по нажатию на кнопку в item
document.addEventListener("DOMContentLoaded", function () {
  const btns = document.querySelectorAll(".change-popup");
  btns?.forEach((btn) => {
    btn.addEventListener("click", function () {
      const id = btn.href.split("#")[1];
      const modal = document.getElementById(id);
      const modalFrom = modal.querySelector('[name="from"]');
      const modalBtn = modal.querySelector(".form-btn");
      const modalTitle = modal.querySelector("h2");

      const textBtn = btn.textContent.trim();
      const changePopupItem = btn.closest(".change-popup-item");
      const changePopupPrice = changePopupItem
        ? changePopupItem.querySelector(".change-price-num")
        : null;
      const changePopupTitle = changePopupItem ? changePopupItem
            .querySelector(".change-popup-title")
            .textContent.trim()
        : null;

      const startTextBtn =
        "Заполните форму ниже, чтобы записаться на услугу - ";
      const resultText = `${startTextBtn} ${changePopupTitle} на сумму ${
        changePopupPrice && changePopupPrice.textContent.trim()
      }`;

      if (changePopupPrice) {
        modalFrom.value = resultText;
        modalTitle.textContent = resultText;
      } else if (changePopupTitle) {
        modalFrom.value = textBtn + " " + changePopupTitle;
        modalTitle.textContent = textBtn + " " + changePopupTitle;
      } else{
        modalFrom.value = textBtn.trim();
        modalTitle.textContent = textBtn.trim();
      }

      modalBtn ? (modalBtn.textContent = textBtn.trim()) : null;
    });
  });

  // код для изменения цены
  function handleChangePriceClick(btn) {
    btn.addEventListener("click", function (e) {
      const item = btn.closest(".change-price-item");
      const price = item.querySelector(".change-price-num");

      const id = btn.href.split("#")[1];
      const modal = document.getElementById(id);
      const inp = modal.querySelector("input");
      const modalBtn = modal.querySelector("button");

      // Удаляем предыдущие обработчики, чтобы избежать дублирования
      const newModalBtn = modalBtn.cloneNode(true);
      modalBtn.parentNode.replaceChild(newModalBtn, modalBtn);

      // Добавляем новый обработчик для кнопки в модальном окне
      newModalBtn.addEventListener("click", () =>
        handleModalButtonClick(inp, price)
      );
    });
  }
  // Функция для обработки клика по кнопке в модальном окне
  function handleModalButtonClick(input, priceElement) {
    if (input.value.trim().length < 2 && Number(input.value) < 0) {
      priceElement.textContent = priceElement.textContent; // Оставляем цену без изменений
    } else if (priceElement) {
      priceElement.textContent = `${input.value} ₽`; // Обновляем цену
    }
    Fancybox.close(); // Закрываем модальное окно
  }
  const changePriceBtn = document.querySelectorAll(".change-price-btn");
  // Проверяем наличие кнопок и добавляем обработчики
  if (changePriceBtn.length) {
    changePriceBtn.forEach((btn) => handleChangePriceClick(btn));
  }
});
