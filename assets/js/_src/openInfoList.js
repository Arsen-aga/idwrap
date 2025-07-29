document.addEventListener("DOMContentLoaded", () => {
  const btns = document.querySelectorAll(".info-more");
  if (btns.length) {
    btns.forEach((btn) =>
      btn.addEventListener("click", function (e) {
        e.preventDefault();
        const infoMoreId = btn.getAttribute("href");
        const infoMore = document.querySelector(infoMoreId);
        if (infoMore) {
          infoMore.classList.toggle("_noactive");
        }
      })
    );
  }
});
