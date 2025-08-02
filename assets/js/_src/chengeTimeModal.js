document.addEventListener("DOMContentLoaded", function () {
  const timeToggleWrapper = document.querySelectorAll(".time-check");
  
  if (timeToggleWrapper.length) {
    timeToggleWrapper.forEach((wrapper) => {
      const timeToggle = wrapper.querySelectorAll("input.time-toggle");
      const timeInput = wrapper.querySelector(".time-input");
      timeToggle.forEach(btn => {
        btn.addEventListener("click", function () {
          if (btn.value === "По времени" && btn.checked) {
            timeInput.disabled = false;
          } else {
            timeInput.disabled = true;
            timeInput.value = "";
          }
        });
      });
    });
  }
});
