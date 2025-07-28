document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".sec-6__form-image");
  if (!container) return;

  const images = container.querySelectorAll("._image-abs img");
  if (images.length === 0) return;

  let index = 0;
  images[index].classList.add("_active");

  setInterval(() => {
    images[index].classList.remove("_active");
    index = (index + 1) % images.length;
    images[index].classList.add("_active");
  }, 2000);
});
