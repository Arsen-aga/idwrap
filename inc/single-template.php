<?php
function use_single_project_template($single) {
	global $post;

	// ID основной категории
	$main_category_id = 1;


	$news_category_id = NULL;


	$components_category_id = NUll;



	// Получаем все категории записи
	$categories = get_the_category($post->ID);

	// Флаг для проверки принадлежности записи к основной категории или ее дочерним категориям
	$is_main_category = false;

	// Флаг для проверки принадлежности записи к категории "news"
	$is_news_category = false;

	// Флаг для проверки принадлежности записи к категории "components"
	$is_components_category = false;

	// Проверяем, относится ли запись к основной категории или ее дочерним категориям, или к категории "news"
	foreach ($categories as $category) {
			if ($category->term_id == $main_category_id || $category->parent == $main_category_id) {
					$is_main_category = true;
			}
			if ($category->term_id == $components_category_id || $category->parent == $components_category_id) {
					$is_components_category = true;
			}
			if ($category->term_id == $news_category_id) {
					$is_news_category = true;
			}
	}

	// Если запись относится к категории "news"
	if ($is_main_category) {
			if (file_exists(get_template_directory() . '/single-blog.php')) {
					return get_template_directory() . '/single-blog.php';
			}
	}

	// Если запись относится к основной категории или ее дочерним категориям
	// if ($is_main_category or $is_components_category) {
	// 		if (file_exists(get_template_directory() . '/single-catalog.php')) {
	// 				return get_template_directory() . '/single-catalog.php';
	// 		}
	// } else {
	// 		if (file_exists(get_template_directory() . '/single-portfolio.php')) {
	// 				return get_template_directory() . '/single-portfolio.php';
	// 		}
	// }

	// Возвращаем стандартный шаблон, если условие не выполнено
	return $single;
}
add_filter('single_template', 'use_single_project_template');
