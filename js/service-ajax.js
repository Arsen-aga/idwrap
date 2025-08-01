jQuery(document).ready(function ($) {
  // AJAX подгрузка услуг
  $("#load-more-services").on("click", function (e) {
    e.preventDefault();

    var $button = $(this);
    var page = $button.data("page") || 2;
    var searchQuery = $('input[name="services_search"]').val();

    $.ajax({
      url: servicesAjax.ajaxurl,
      type: "POST",
      data: {
        action: "load_more_services",
        page: page,
        search: searchQuery,
        nonce: servicesAjax.nonce,
      },
      beforeSend: function () {
        $button.text("Загрузка...").addClass("loading");
      },
      success: function (response) {
        if (response) {
          $(".services-price__items").append(response);
          $button.data("page", page + 1);

          if (response.trim() === "") {
            $button.text("Все услуги загружены").removeClass("loading");
          } else {
            $button.text("Показать больше услуг").removeClass("loading");
          }
        }
      },
      error: function (xhr) {
        console.error("Ошибка:", xhr.responseText);
        $button.text("Ошибка загрузки").removeClass("loading");
      },
    });
  });
});
