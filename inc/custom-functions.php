<?php

// Получение значений полей на разных типах страниц SEO
function get_seo_fields() {
  $title = '';
  $description = '';
  $h1 = '';

  // Главная страница
  if (is_front_page() || is_home()) {
    // Если это статическая страница
    if (is_front_page() && !is_home()) {
      $title = get_field('title') ?: get_the_title();
      $description = get_field('description') ?: get_bloginfo('description');
      $h1 = get_field('h1') ?: get_the_title();
    } else {
      // Если это блог (список постов)
      $title = get_field('title', 'option') ?: 'Блог'; // Поле для страницы блога можно задать в опциях
      $description = get_field('description', 'option') ?: get_bloginfo('description');
      $h1 = get_field('h1', 'option') ?: 'Блог';
    }
  }

  // Одиночные записи (посты, страницы, кастомные типы постов)
  elseif (is_singular()) {
    $title = get_field('title') ?: get_the_title();
    $description = get_field('description') ?: wp_trim_words(get_the_excerpt(), 20);
    $h1 = get_field('h1') ?: get_the_title();
  }

  // Категории
  elseif (is_category()) {
    $category = get_queried_object();
    $title = get_field('title', 'category_' . $category->term_id) ?: single_cat_title('', false);
    $description = get_field('description', 'category_' . $category->term_id) ?: category_description();
    $h1 = get_field('h1', 'category_' . $category->term_id) ?: single_cat_title('', false);
  }
  // Теги
  elseif (is_tag()) {
    $tag = get_queried_object();
    $title = get_field('title', 'post_tag_' . $tag->term_id) ?: single_tag_title('', false);
    $description = get_field('description', 'post_tag_' . $tag->term_id) ?: tag_description();
    $h1 = get_field('h1', 'post_tag_' . $tag->term_id) ?: single_tag_title('', false);
  }
  // Кастомные таксономии
  elseif (is_tax()) {
    $term = get_queried_object();
    $taxonomy = $term->taxonomy;
    $title = get_field('title', $taxonomy . '_' . $term->term_id) ?: single_term_title('', false);
    $description = get_field('description', $taxonomy . '_' . $term->term_id) ?: term_description();
    $h1 = get_field('h1', $taxonomy . '_' . $term->term_id) ?: single_term_title('', false);
  }
  // Архивы авторов
  elseif (is_author()) {
    $author = get_queried_object();
    $title = get_field('title', 'author_' . $author->ID) ?: 'Посты автора: ' . get_the_author();
    $description = get_field('description', 'author_' . $author->ID) ?: get_the_author_meta('description');
    $h1 = get_field('h1', 'author_' . $author->ID) ?: 'Посты автора: ' . get_the_author();
  }
  // Архивы по дате
  elseif (is_date()) {
    $title = 'Архив за ' . get_the_date('F Y');
    $description = 'Все записи за ' . get_the_date('F Y');
    $h1 = 'Архив за ' . get_the_date('F Y');
  }
  // Поиск
  elseif (is_search()) {
    $title = 'Результаты поиска: ' . get_search_query();
    $description = 'Найдено по запросу: ' . get_search_query();
    $h1 = 'Результаты поиска: ' . get_search_query();
  }
  // Страница 404
  elseif (is_404()) {
    $title = 'Страница не найдена';
    $description = 'К сожалению, страница, которую вы ищете, не существует.';
    $h1 = 'Ошибка 404';
  }
  // Другие архивы (например, кастомные типы постов)
  elseif (is_post_type_archive()) {
    $post_type = get_queried_object();
    $title = get_field('title', 'post_type_' . $post_type->name) ?: post_type_archive_title('', false);
    $description = get_field('description', 'post_type_' . $post_type->name) ?: '';
    $h1 = get_field('h1', 'post_type_' . $post_type->name) ?: post_type_archive_title('', false);
  }

  // Добавляем пагинацию в title, если есть
  if (get_query_var('paged') > 1) {
    $title .= ' - Страница ' . get_query_var('paged');
  }

  return [
    'title' => $title,
    'description' => $description,
    'h1' => $h1,
  ];
}


// Регистрируем и подключаем скрипт бля Блога
function blog_ajax_scripts() {
    // Регистрируем скрипт
    wp_register_script(
        'blog-ajax',
        get_template_directory_uri() . '/js/blog-ajax.js',
        array('jquery'),
        filemtime(get_template_directory() . '/js/blog-ajax.js'),
        true
    );

    // Локализуем переменные для AJAX
    wp_localize_script('blog-ajax', 'blogAjax', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('load_more_posts')
    ));

    // Подключаем скрипт только на нужных страницах
    if (is_category() || is_home() || is_post_type_archive('post')) {
        wp_enqueue_script('blog-ajax');
    }
}
add_action('wp_enqueue_scripts', 'blog_ajax_scripts');

// AJAX обработчики
add_action('wp_ajax_load_more_posts', 'load_more_posts_handler');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_handler');

function load_more_posts_handler() {
    check_ajax_referer('load_more_posts', 'nonce');

    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $category_id = isset($_POST['category']) ? intval($_POST['category']) : 0;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => $paged,
        'cat'            => $category_id,
        'post_status'    => 'publish'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/card-blog');
        endwhile;
    else :
        echo '<div class="no-more-posts">Больше записей нет</div>';
    endif;

    wp_reset_postdata();
    wp_die();
}


// Регистрируем и подключаем скрипт бля Услуг
// Регистрация всех скриптов
function services_all_scripts() {
    // Скрипт для подгрузки
    wp_enqueue_script(
        'services-ajax',
        get_template_directory_uri() . '/js/service-ajax.js',
        array('jquery'),
        filemtime(get_template_directory() . '/js/service-ajax.js'),
        true
    );

    wp_localize_script('services-ajax', 'servicesAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('load_more_services_nonce')
    ));

    // Скрипт для поиска
    wp_enqueue_script(
        'services-search',
        get_template_directory_uri() . '/js/service-search.js',
        array('jquery'),
        filemtime(get_template_directory() . '/js/service-search.js'),
        true
    );

    wp_localize_script('services-search', 'servicesSearch', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('services_search_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'services_all_scripts');

// AJAX обработчики
add_action('wp_ajax_load_more_services', 'load_more_services_handler');
add_action('wp_ajax_nopriv_load_more_services', 'load_more_services_handler');

add_action('wp_ajax_services_search', 'services_search_handler');
add_action('wp_ajax_nopriv_services_search', 'services_search_handler');

function load_more_services_handler() {
    check_ajax_referer('load_more_services_nonce', 'nonce');

    // Добавляем заголовки для CORS
    header("Access-Control-Allow-Origin: " . get_http_origin());
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Credentials: true");

    $page = isset($_POST['page']) ? intval($_POST['page']) : 2;
    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => 15,
        'post_parent__in' => array(86, 9),
        'orderby'        => 'title',
        'order'          => 'ASC',
        'paged'          => $page,
        // 's'              => $search
    );

    services_render_items($args);
}

function services_search_handler() {
    check_ajax_referer('services_search_nonce', 'nonce');

    // Добавляем заголовки для CORS
    header("Access-Control-Allow-Origin: " . get_http_origin());
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Credentials: true");

    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => 15,
        'post_parent__in' => array(86, 9),
        'orderby'        => 'title',
        'order'          => 'ASC',
        's'              => $search
    );

    services_render_items($args);
}

// Общая функция для вывода услуг
function services_render_items($args) {
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $price = get_field('priceService', get_the_ID());
            ?>
            <div class="services-price__item change-price-item change-popup-item">
                <h4 class="services-price__item-title change-popup-title">
                    <?php the_title(); ?>
                </h4>
                <div class="services-price__item-price">
                    <?php if ($price) : ?>
                        <p class="services-price__item-num change-price-num">
                            <?php echo number_format($price, 0, '', ' '); ?> ₽
                        </p>
                    <?php endif; ?>
                    <a class="services-price__item-link change-price-btn" href="#change-price" data-fancybox data-service="<?php the_title(); ?>">
                        Или напишите свою цену
                    </a>
                </div>
                <a class="services-price__item-btn _main-btn change-popup" href="#callback-modal" data-fancybox data-service="<?php the_title(); ?>">
                    Записаться
                </a>
            </div>
            <?php
        }
    } else { ?>
      <style>
        #load-more-services {
          display:none !important;
        }
      </style>
      <?php
    }

    wp_reset_postdata();
    wp_die();
}
