document.addEventListener("DOMContentLoaded", function () {
	const form = document.querySelector(".sec-6__form");

	if (!form) return;

	const checkboxes = form.querySelectorAll(".sec-6__element-checkbox");
	const dynamicTitle = form.querySelector("._dinamic-title");
	const dynamicNumber = form.querySelector("._dinamic-number");

	function updateText() {
		const checkedCount = form.querySelectorAll(".sec-6__element-checkbox:checked").length;

		if (checkedCount === 0) {
			dynamicTitle.textContent = "Выберите";
			dynamicNumber.textContent = "элементы для";
		} else {
			dynamicTitle.textContent = "Вы выбрали";
			dynamicNumber.textContent = `${checkedCount} ${getDeclension(checkedCount)}`;
		}
	}

	function getDeclension(number) {
		if (number % 10 === 1 && number % 100 !== 11) {
			return "элемент";
		} else if ([2, 3, 4].includes(number % 10) && ![12, 13, 14].includes(number % 100)) {
			return "элемента";
		} else {
			return "элементов";
		}
	}

	checkboxes.forEach((checkbox) => {
		checkbox.addEventListener("change", updateText);
	});

	updateText(); // Обновляем текст при загрузке
});