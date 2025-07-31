document.addEventListener("DOMContentLoaded", function () {
  const callNowRadio = document.getElementById("call_now");
  const callLaterRadio = document.getElementById("call_later");
  const callTimeInput = document.getElementById("call_time_input");

  function toggleCallTimeInput() {
    callTimeInput.disabled = callNowRadio.checked; // Заблокировать, если выбрано "Сейчас"
  }

  // Обработчики событий для переключения
  callNowRadio.addEventListener("change", toggleCallTimeInput);
  callLaterRadio.addEventListener("change", toggleCallTimeInput);

  // Начальная проверка
  toggleCallTimeInput();
});
