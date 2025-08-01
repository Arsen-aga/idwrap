// blog-ajax.js
jQuery(document).ready(function ($) {
  var page = 1;
  var maxPages = $(".pagination").data("max-pages");
  var loading = false;
  var categoryId = $("#load-more-posts").data("category");

  $("#load-more-posts").on("click", function (e) {
    e.preventDefault();

    if (loading || page >= maxPages) return;

    loading = true;
    page++;
    var $button = $(this);

    $.ajax({
      url: blogAjax.url,
      type: "POST",
      data: {
        action: "load_more_posts",
        page: page,
        category: categoryId,
        nonce: blogAjax.nonce,
      },
      beforeSend: function () {
        $button.html("<span>Загрузка...</span>").addClass("loading");
      },
      success: function (response) {
        if (response) {
          $("#blog-posts-container").append(response);

          if (page >= maxPages) {
            $button
              .html("<span>Все записи загружены</span>")
              .removeClass("loading");
          } else {
            $button.html("<span>Загрузить еще</span>").removeClass("loading");
          }
        }
      },
      error: function () {
        $button.html("<span>Ошибка загрузки</span>").removeClass("loading");
      },
      complete: function () {
        loading = false;
      },
    });
  });
});
