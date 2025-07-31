document.addEventListener("DOMContentLoaded", function () {
  let currentStep = 1;
  const steps = document.querySelectorAll(".quiz-step1");
  const progress = document.querySelector(".progress1");
  const progressValues = ["20%", "40%", "60%", "80%", "0%"];

  function showStep(step) {
    const progressNum = document.querySelector(".progress-num1"); // Получаем элемент для обновления текста
    steps.forEach((s) => s?.classList.remove("active"));
    document.querySelector(".step-" + step) ? document.querySelector(".step-" + step).classList.add("active") : null;
    progress.style.width = progressValues[step - 1];
    if (step === 5)
      document.querySelector(".progress-bar1").style.display = "none";

    // Обновляем текст в .progress-num
    const remainingQuestions = 5 - step + 1; // Изменено на 5 - step + 1
    const questionText = remainingQuestions === 5 ? "вопросов" : "вопроса"; // Определяем правильное склонение
    progressNum.textContent = `Осталось ${remainingQuestions} ${questionText} из 5`;
  }

  document.querySelectorAll(".quiz-option1").forEach((option) => {
    option.addEventListener("click", function () {
      let nextStep = this.dataset.next;
      if (nextStep) {
        currentStep = parseInt(nextStep);
        showStep(currentStep);
      }
    });
  });

  document.querySelectorAll(".next-step1").forEach((button) => {
    button.addEventListener("click", function () {
      let stepOptions =
        this.closest(".quiz-step1").querySelectorAll(".quiz-option1");
      if (!Array.from(stepOptions).some((option) => option.dataset.next)) {
        alert("Выберите вариант, чтобы продолжить");
      }
    });
  });

  showStep(1);
});
