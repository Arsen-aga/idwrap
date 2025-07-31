<?php
//   Поиск
// Подключение скриптов
add_action('wp_enqueue_scripts', 'register_ajax_search_scripts');
function register_ajax_search_scripts() {
    wp_enqueue_script('ajax-search', get_template_directory_uri() . '/assets/js/search.js', array('jquery'), '1.0', true);
    wp_localize_script('ajax-search', 'ajax_search_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax_search_nonce')
    ));
}

// Обработчик AJAX
add_action('wp_ajax_ajax_live_search', 'ajax_live_search');
add_action('wp_ajax_nopriv_ajax_live_search', 'ajax_live_search');
function ajax_live_search() {
    check_ajax_referer('ajax_search_nonce', 'nonce');

    $search_term = sanitize_text_field($_GET['term']);

    if (empty($search_term)) {
        wp_send_json_error('Введите поисковый запрос');
    }

    $args = array(
        'post_type' => array('post', 'page'), // Укажите нужные типы записей
        'posts_per_page' => 10,
        's' => $search_term
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            echo '<div class="search-result-item">';
            echo '<a href="' . get_permalink() . '">';
            echo '<h4>' . get_the_title() . '</h4>';
            if (has_excerpt()) {
                echo '<p>' . get_the_excerpt() . '</p>';
            }
            echo '</a></div>';
        }
    } else {
        echo '<div class="no-results">Ничего не найдено</div>';
    }

    wp_reset_postdata();
    $output = ob_get_clean();

    wp_send_json_success($output);
}
