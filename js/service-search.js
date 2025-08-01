// // services-search.js
// jQuery(document).ready(function ($) {
//   // Дебаунс для поиска
//   function debounce(func, wait) {
//     let timeout;
//     return function () {
//       const context = this,
//         args = arguments;
//       clearTimeout(timeout);
//       timeout = setTimeout(() => func.apply(context, args), wait);
//     };
//   }

//   // Обработчик поиска
//   $('input[name="services_search"]').on(
//     "input",
//     debounce(function () {
//       const searchQuery = $(this).val().trim();
//       const $resultsContainer = $(".services-price__items");
//       const $loadMoreBtn = $("#load-more-services");

//       if (searchQuery.length >= 2 || searchQuery.length === 0) {
//         $.ajax({
//           url: servicesAjax.ajaxurl,
//           type: "POST",
//           data: {
//             action: "services_search",
//             search: searchQuery,
//             nonce: servicesAjax.nonce,
//           },
//           beforeSend: function () {
//             $resultsContainer.addClass("loading");
//           },
//           success: function (response) {
//             $resultsContainer.html(response).removeClass("loading");
//             $loadMoreBtn.toggle(
//               response.trim() !== "" && $(".services-price__item").length >= 15
//             );
//           },
//           error: function () {
//             $resultsContainer
//               .html("<p>Ошибка загрузки</p>")
//               .removeClass("loading");
//           },
//         });
//       }
//     }, 300)
//   );

//   // Очистка поиска
//   $(".search").on("click", ".search__clear", function () {
//     $('input[name="services_search"]').val("").trigger("input");
//   });
// });

jQuery(document).ready(function ($) {
  // Дебаунс для уменьшения количества запросов
  function debounce(func, wait) {
    let timeout;
    return function () {
      const context = this,
        args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(context, args), wait);
    };
  }

  // Обработчик поиска
  $('input[name="services_search"]').on(
    "input",
    debounce(function () {
      const searchQuery = $(this).val().trim();
      const $resultsContainer = $(".services-price__items");
      const $loadMoreBtn = $("#load-more-services");

      if (searchQuery.length >= 2 || searchQuery.length === 0) {
        $.ajax({
          url: servicesSearch.ajaxurl,
          type: "POST",
          data: {
            action: "services_search",
            search: searchQuery,
            nonce: servicesSearch.nonce,
          },
          beforeSend: function () {
            $resultsContainer.addClass("loading");
          },
          success: function (response) {
            $resultsContainer.html(response).removeClass("loading");
            $loadMoreBtn.toggle(
              response.trim() !== "" && $(".services-price__item").length >= 15
            );
          },
          error: function (xhr) {
            console.error("Ошибка:", xhr.responseText);
            $resultsContainer
              .html("<p>Ошибка загрузки</p>")
              .removeClass("loading");
          },
        });
      }
    }, 300)
  );

  // Очистка поиска
  $(".search").on("click", ".search__clear", function () {
    $('input[name="services_search"]').val("").trigger("input");
  });
});
