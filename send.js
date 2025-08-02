"use strict";

document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("submit", function (event) {
    event.preventDefault();
    let isValid = true;
    const form = event.target; // <- вот она, форма
    const phoneInput = form.querySelector('input[type="tel"]');
    if (!validatePhoneNumber(phoneInput)) {
      isValid = false;
      alert("Пожалуйста, введите полный номер телефона (+7 (XXX) XXX-XX-XX)");
      return;
    }

    if (!isValid) return;
    const btnSubmit = form.querySelector('button[type="submit"]');
    btnSubmit.innerHTML = "Отправка формы...";
    formSend(event);
    // Звпускаем скрипт обработчика
    async function formSend(event) {
      event.preventDefault();
      // let error = formValidate(form);
      let result;
      let error = 0;
      let formData = new FormData(form);
      // formData.append('image', formImage.files[0]);
      if (error === 0) {
        form.classList.add("_sending");
        let response = await fetch(
          "/idwrap/wp-content/themes/idwrap/sendmail.php",
          {
            method: "POST",
            body: formData,
          }
        );

        if (response.ok) {
          try {
            const result = await response.json();
            if (result.success) {
              window.location.href = "/thankyou";
            } else {
              alert(result.message);
              form.classList.remove("_sending");
            }
          } catch (e) {
            console.error("Error parsing JSON:", e);
            window.location.href = "thankyou"; // Фолбек
          }
        } else {
          alert("Server error: " + response.status);
          form.classList.remove("_sending");
        }
      } else {
        // можно выводить popup или добавлять div
        alert("Заполните обязталельные поля");
      }
    }
    function getInputsNumbersValue(input) {
      return input.value.replace(/\D/g, "");
    }

    // Валидация номера телефона
    function validatePhoneNumber(input) {
      const inputNumbersValue = getInputsNumbersValue(input);
      // Российский номер должен содержать 11 цифр (включая код страны)
      return inputNumbersValue.length === 11;
    }
    function formValidate(form) {
      let error = 0;
      let formRequired = document.querySelectorAll("._required");
      for (let index = 0; index < formRequired.length; index++) {
        const input = formRequired[index];
        formRemoveError(input);
        if (input.classList.contains("_email")) {
          if (emailTest(input)) {
            formAddError(input);
            error++;
          }
        } else if (
          input.getAttribute("type") === "checkbox" &&
          input.checked === false
        ) {
          formAddError(input);
          error++;
        } else {
          if (input.value === "") {
            formAddError(input);
            error++;
          }
        }
      }
      return error;
    }
    function formAddError(input) {
      input.parentElement.classList.add("_error");
      input.classList.add("_error");
    }
    function formRemoveError(input) {
      input.parentElement.classList.remove("_error");
      input.classList.remove("_error");
    }
    // Функция места email
    function emailTest(input) {
      return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
    if (document.getElementById("formImage")) {
      //Получаем инпут file в переменную
      const formImage = document.getElementById("formImage");
      //Получаем див для превью в переменную
      const formPreview = document.getElementById("formPreview");
      // Слушаем изменения в инпуте file
      formImage.addEventListener("change", () => {
        uploadFile(formImage.files[0]);
      });
      function uploadFile(file) {
        //проверяем тип файла
        if (!["image/jpeg", "image/png", "image/gif"].includes(file.type)) {
          alert("разрешены только изображения");
          formImage.value = "";
          return;
        }
        //проверка размера файла (<2мб)
        if (file.size > 2 * 1024 * 1024) {
          alert("Файл должен быть менее 2Мб");
          return;
        }
        var reader = new FileReader();
        reader.onload = function (e) {
          formPreview.innerHTML = `<img src="${e.target.result}" alt="Фото">`;
        };
        reader.onerror = function (e) {
          alert("Ошибка");
        };
        reader.readAsDataURL(file);
      }
    }
  });
});
