jQuery(document).ready(function ($) {
  var searchInput = $(".header__search-inp");
  var searchResults = $(".ajax-search-results");
  var searchTimer;

  searchInput.on("input", function () {
    clearTimeout(searchTimer);
    var searchTerm = $(this).val().trim();

    if (searchTerm.length < 3) {
      searchResults.hide().empty();
      return;
    }

    searchTimer = setTimeout(function () {
      $.ajax({
        url: ajax_search_params.ajax_url,
        type: "GET",
        data: {
          action: "ajax_live_search",
          term: searchTerm,
          nonce: ajax_search_params.nonce,
        },
        beforeSend: function () {
          searchResults
            .html('<div class="search-loading">Поиск...</div>')
            .show();
        },
        success: function (response) {
          if (response.success) {
            searchResults.html(response.data).show();
          } else {
            searchResults
              .html('<div class="search-error">' + response.data + "</div>")
              .show();
          }
        },
        error: function () {
          searchResults
            .html('<div class="search-error">Ошибка соединения</div>')
            .show();
        },
      });
    }, 300); // Задержка 300мс
  });

  // Закрытие результатов при клике вне формы
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".header__search").length) {
      searchResults.hide();
    }
  });

  // Сохранение поиска при отправке формы
  $(".header__search").on("submit", function () {
    if (searchInput.val().trim().length > 0) {
      return true;
    }
    return false;
  });
});
