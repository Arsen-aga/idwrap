document.addEventListener('DOMContentLoaded', function(){
  new Swiper(".main-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    breakpoints: {
      1230: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      991.8: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      767.98: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      468: {
        slidesPerView: 2,
      },
    },
  });
})


// скроллбар кастом
document.addEventListener('DOMContentLoaded', () => {
	const scrollContainer = document.querySelector('.sec-13__scroll2');
	const scrollThumb = document.querySelector('.sec-13__scrollbar-thumb2');
	let isDragging = false;
	let startX;
	let startThumbLeft;

	if (scrollContainer && scrollThumb) {
		// Обновляем положение ползунка при прокрутке контента
		const updateThumbPosition = () => {
			const contentWidth = scrollContainer.scrollWidth - scrollContainer.clientWidth;
			const scrollPosition = scrollContainer.scrollLeft;
			const thumbPosition = (scrollPosition / contentWidth) * (100 - 37.5);

			scrollThumb.style.left = `${thumbPosition}%`;
		};

		scrollContainer.addEventListener('scroll', updateThumbPosition);
		window.addEventListener('resize', updateThumbPosition);

		// Начало перетаскивания
		scrollThumb.addEventListener('mousedown', (e) => {
			isDragging = true;
			startX = e.clientX;
			startThumbLeft = parseFloat(scrollThumb.style.left) || 0;

			document.body.style.userSelect = 'none'; // Отключаем выделение текста
		});

		// Движение мыши
		document.addEventListener('mousemove', (e) => {
			if (!isDragging) return;

			const deltaX = e.clientX - startX;
			const scrollBarWidth = scrollContainer.clientWidth - scrollThumb.clientWidth;
			const newThumbLeft = startThumbLeft + (deltaX / scrollBarWidth) * (100 - 37.5);

			// Ограничиваем ползунок в пределах контейнера
			const boundedThumbLeft = Math.min(Math.max(0, newThumbLeft), 100 - 37.5);
			scrollThumb.style.left = `${boundedThumbLeft}%`;

			// Прокручиваем содержимое
			const contentWidth = scrollContainer.scrollWidth - scrollContainer.clientWidth;
			scrollContainer.scrollLeft = (boundedThumbLeft / (100 - 37.5)) * contentWidth;
		});

		// Окончание перетаскивания
		document.addEventListener('mouseup', () => {
			isDragging = false;
			document.body.style.userSelect = ''; // Включаем выделение текста обратно
		});

		updateThumbPosition(); // Выставляем позицию ползунка при загрузке
	}
});

document.addEventListener("DOMContentLoaded", () => {
  const scrollContainer = document.querySelector(".sec-13__scroll1");
  const scrollThumb = document.querySelector(".sec-13__scrollbar-thumb1");
  let isDragging = false;
  let startX;
  let startThumbLeft;

  if (scrollContainer && scrollThumb) {
    // Обновляем положение ползунка при прокрутке контента
    const updateThumbPosition = () => {
      const contentWidth =
        scrollContainer.scrollWidth - scrollContainer.clientWidth;
      const scrollPosition = scrollContainer.scrollLeft;
      const thumbPosition = (scrollPosition / contentWidth) * (100 - 37.5);

      scrollThumb.style.left = `${thumbPosition}%`;
    };

    scrollContainer.addEventListener("scroll", updateThumbPosition);
    window.addEventListener("resize", updateThumbPosition);

    // Начало перетаскивания
    scrollThumb.addEventListener("mousedown", (e) => {
      isDragging = true;
      startX = e.clientX;
      startThumbLeft = parseFloat(scrollThumb.style.left) || 0;

      document.body.style.userSelect = "none"; // Отключаем выделение текста
    });

    // Движение мыши
    document.addEventListener("mousemove", (e) => {
      if (!isDragging) return;

      const deltaX = e.clientX - startX;
      const scrollBarWidth =
        scrollContainer.clientWidth - scrollThumb.clientWidth;
      const newThumbLeft =
        startThumbLeft + (deltaX / scrollBarWidth) * (100 - 37.5);

      // Ограничиваем ползунок в пределах контейнера
      const boundedThumbLeft = Math.min(Math.max(0, newThumbLeft), 100 - 37.5);
      scrollThumb.style.left = `${boundedThumbLeft}%`;

      // Прокручиваем содержимое
      const contentWidth =
        scrollContainer.scrollWidth - scrollContainer.clientWidth;
      scrollContainer.scrollLeft =
        (boundedThumbLeft / (100 - 37.5)) * contentWidth;
    });

    // Окончание перетаскивания
    document.addEventListener("mouseup", () => {
      isDragging = false;
      document.body.style.userSelect = ""; // Включаем выделение текста обратно
    });

    updateThumbPosition(); // Выставляем позицию ползунка при загрузке
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const carsContainer = document.querySelector(".sec-1__cars");
  const carSlides = document.querySelectorAll(".sec-1__cars-slide");
  const blocks = document.querySelectorAll(".sec-1__block");
  const nextButton = document.querySelector(".sec-1__cars-next._main-btn");

  // Проверяем наличие основных элементов
  if (!carsContainer || !carSlides.length || !blocks.length || !nextButton) {
    // console.error(
    //   "Не найдены необходимые элементы для инициализации слайдеров."
    // );
    return;
  }

  let currentSwiperGallery = null;
  let currentSwiperCars = null;
  let isManualScroll = false;

  function getCurrentCarIndex() {
    const activeSlide = document.querySelector(".sec-1__cars-slide._active");
    const index = activeSlide ? [...carSlides].indexOf(activeSlide) : 0;
    return index;
  }

  function goToSlide(index) {
    if (index >= carSlides.length) index = 0; // Если вышли за пределы, возвращаемся к первому

    const newActiveSlide = carSlides[index];
    const activeCar = newActiveSlide.getAttribute("data-car");

    // console.log(
    //   `Переход к слайду с индексом: ${index}, data-car: ${activeCar}`
    // );

    // Обновляем активный слайд
    carSlides.forEach((s) => s.classList.remove("_active"));
    newActiveSlide.classList.add("_active");

    // Прокручиваем контейнер к активному слайду
    isManualScroll = true;
    const slideWidth = carSlides[0].offsetWidth;
    carsContainer.scrollTo({ left: index * slideWidth, behavior: "smooth" });

    // Переключаем sec-1__block
    let targetBlock = null;
    blocks.forEach((block) => {
      if (block.getAttribute("data-box") === activeCar) {
        targetBlock = block;
      }
      block.classList.remove("_show");
    });

    if (targetBlock) {
      targetBlock.classList.add("_show");
      reinitSwipers(targetBlock, activeCar);
    } else {
      console.warn(
        "Блок для текущего автомобиля не найден. Возвращаемся к первому слайду."
      );
      goToSlide(0);
    }
  }

  // Обработчик клика по слайду
  carSlides.forEach((slide, index) => {
    slide.addEventListener("click", function () {
      // console.log(`Клик на слайде с индексом: ${index}`);
      goToSlide(index);
    });
  });

  // Кнопка "Next" — переключает по data-car
  nextButton.addEventListener("click", function () {
    let currentIndex = getCurrentCarIndex();
    // console.log(`Клик на кнопку Next. Текущий индекс: ${currentIndex}`);
    goToSlide(currentIndex + 1);
  });

  function reinitSwipers(block, swiperIndex) {
    // console.log(
    //   `Инициализация слайдеров для автомобиля с индексом: ${swiperIndex}`
    // );

    const gallerySelector = `.swiper-gallery${swiperIndex}`;
    const carsSelector = `.swiper-cars${swiperIndex}`;

    // console.log(
    //   `Селекторы: gallerySelector = ${gallerySelector}, carsSelector = ${carsSelector}`
    // );

    // Проверяем, существуют ли элементы для инициализации
    const galleryElement = document.querySelector(gallerySelector);
    const carsElement = document.querySelector(carsSelector);

    if (!galleryElement) {
      console.error(
        `Элемент для gallerySelector (${gallerySelector}) не найден.`
      );
    }
    if (!carsElement) {
      console.error(`Элемент для carsSelector (${carsSelector}) не найден.`);
    }

    if (currentSwiperGallery) currentSwiperGallery.destroy(true, true);
    if (currentSwiperCars) currentSwiperCars.destroy(true, true);

    if (galleryElement) {
      currentSwiperGallery = new Swiper(gallerySelector, {
        slidesPerView: 1,
        speed: 600,
        loop: true,
        navigation: {
          prevEl: `#prevCar${swiperIndex}`,
          nextEl: `#nextCar${swiperIndex}`,
        },
      });
      // console.log(
      //   `Главный слайдер (${gallerySelector}) успешно инициализирован.`
      // );
    }

    if (carsElement) {
      currentSwiperCars = new Swiper(carsSelector, {
        speed: 600,
        breakpoints: {
          992: { slidesPerView: 7, spaceBetween: 11 },
          768: { slidesPerView: 4, spaceBetween: 10 },
          526: { slidesPerView: 3, spaceBetween: 5 },
          1: { slidesPerView: 3, spaceBetween: 5 },
        },
      });
      // console.log(
      //   `Вторичный слайдер (${carsSelector}) успешно инициализирован.`
      // );
    }

    // Добавляем обработчики кликов для миниатюр
    if (carsElement) {
      document
        .querySelectorAll(`${carsSelector} .swiper-slide`)
        .forEach((slide, slideIndex) => {
          slide.addEventListener("click", function () {
            // console.log(`Клик на миниатюре с индексом: ${slideIndex}`);
            if (currentSwiperGallery)
              currentSwiperGallery.slideToLoop(slideIndex);
          });
        });
    }
  }

  goToSlide(0);
});

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper-rev", {
    spaceBetween: 30,
    slidesPerView: 3,
    speed: 600,
    slidesPerGroup: 3,
    loop: true,
    allowTouchMove: false,
    simulateTouch: false,
    grabCursor: false,
    autoHeight: true,
    navigation: {
      prevEl: "#prevButton-rev",
      nextEl: "#nextButton-rev",
    },
    breakpoints: {
      1200: {
        slidesPerGroup: 3,
        slidesPerView: 3,
        spaceBetween: 30,
      },
      991: {
        slidesPerGroup: 3,
        slidesPerView: 3,
        spaceBetween: 20,
      },
      767: {
        slidesPerGroup: 2,
        slidesPerView: 2,
        spaceBetween: 15,
      },
      526: {
        slidesPerGroup: 2,
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1: {
        slidesPerGroup: 1,
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  });
});

// свайпер луп автоплей
document.addEventListener('DOMContentLoaded', function () {
	const swiper = new Swiper('.swiper01', {
		spaceBetween: 12,
		slidesPerView: 3.7734,
		speed: 5000,
		autoplay: {
			delay: 0,
			disableOnInteraction: true,
		},
		loop: true,
		allowTouchMove: true,
		freeMode: true,
		freeModeMomentum: false,
		on: {
			touchEnd: function () {
				this.autoplay.start();
			},
			mouseLeave: function () {
				this.autoplay.start();
			}
		},
		breakpoints: {
			1200: {
				slidesPerView: 3.7734,
				speed: 5000,
				spaceBetween: 12,
			},
			991: {
				speed: 4500,
				slidesPerView: 3.3,
				spaceBetween: 11,
			},
			767: {
				speed: 4000,
				slidesPerView: 3,
				spaceBetween: 10,
			},
			525: {
				speed: 3500,
				slidesPerView: 2,
				spaceBetween: 9,
			},
			1: {
				speed: 3000,
				slidesPerView: 1,
				spaceBetween: 8,
			}
		}
	});
});