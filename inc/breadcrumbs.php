<?php
/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox (адаптировано)
 * версия: 2025.03.21
 * лицензия: MIT
 */
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home']     = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author']   = 'Статьи автора %s'; // текст для страницы автора
  $text['404']      = 'Ошибка 404'; // текст для страницы 404
  $text['page']     = 'Страница %s'; // текст 'Страница N'
  $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before    = '<div class="breadcrumbs"><ul class="breadcrumbs__list">'; // открывающий тег обертки
  $wrap_after     = '</ul></div>'; // закрывающий тег обертки
  $before         = '<li class="breadcrumbs__point"><span class="breadcrumbs__link active">'; // тег перед текущей "крошкой"
  $after          = '</span></li>'; // тег после текущей "крошки"
  $link_before    = '<li class="breadcrumbs__point">'; // тег перед ссылкой
  $link_after     = '</li>'; // тег после ссылки
  $link           = '<a class="breadcrumbs__link" href="%1$s">%2$s</a>'; // формат ссылки

  $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');

  if (is_home() || is_front_page()) {
    if ($show_on_home) {
      echo $wrap_before . $link_before . sprintf($link, $home_url, $text['home']) . $link_after . $wrap_after;
    }
    return;
  }

  echo $wrap_before;

  if ($show_home_link) {
    echo $link_before . sprintf($link, $home_url, $text['home']) . $link_after;
  }

  if (is_category()) {
    $parents = get_ancestors(get_query_var('cat'), 'category');
    foreach (array_reverse($parents) as $cat) {
      echo $link_before . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $link_after;
    }
    if (get_query_var('paged')) {
      $cat = get_query_var('cat');
      echo $link_before . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $link_after;
      echo $before . sprintf($text['page'], get_query_var('paged')) . $after;
    } else {
      if ($show_current) {
        echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }
    }
  } elseif (is_search()) {
    if (get_query_var('paged')) {
      echo $link_before . sprintf($link, $home_url . '?s=' . get_search_query(), sprintf($text['search'], get_search_query())) . $link_after;
      echo $before . sprintf($text['page'], get_query_var('paged')) . $after;
    } else {
      if ($show_current) {
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }
    }
  } elseif (is_year()) {
    if ($show_current) {
      echo $before . get_the_time('Y') . $after;
    }
  } elseif (is_month()) {
    echo $link_before . sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $link_after;
    if ($show_current) {
      echo $before . get_the_time('F') . $after;
    }
  } elseif (is_day()) {
    echo $link_before . sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $link_after;
    echo $link_before . sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $link_after;
    if ($show_current) {
      echo $before . get_the_time('d') . $after;
    }
  } elseif (is_single() && !is_attachment()) {
    if (get_post_type() != 'post') {
      $post_type = get_post_type_object(get_post_type());
      echo $link_before . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->labels->name) . $link_after;
      if ($show_current) {
        echo $before . get_the_title() . $after;
      }
    } else {
      $cat = get_the_category();
      if (!empty($cat)) {
        $catID = $cat[0]->cat_ID;
        $parents = get_ancestors($catID, 'category');
        $parents = array_reverse($parents);
        $parents[] = $catID;
        foreach ($parents as $cat) {
          echo $link_before . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $link_after;
        }
      }
      if (get_query_var('cpage')) {
        echo $link_before . sprintf($link, get_permalink(), get_the_title()) . $link_after;
        echo $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
      } else {
        if ($show_current) {
          echo $before . get_the_title() . $after;
        }
      }
    }
  } elseif (is_post_type_archive()) {
    $post_type = get_post_type_object(get_post_type());
    if (get_query_var('paged')) {
      echo $link_before . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $link_after;
      echo $before . sprintf($text['page'], get_query_var('paged')) . $after;
    } else {
      if ($show_current) {
        echo $before . $post_type->label . $after;
      }
    }
  } elseif (is_attachment()) {
    $parent = get_post($post->post_parent);
    $cat = get_the_category($parent->ID);
    if (!empty($cat)) {
      $catID = $cat[0]->cat_ID;
      $parents = get_ancestors($catID, 'category');
      $parents = array_reverse($parents);
      $parents[] = $catID;
      foreach ($parents as $cat) {
        echo $link_before . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $link_after;
      }
    }
    echo $link_before . sprintf($link, get_permalink($parent), $parent->post_title) . $link_after;
    if ($show_current) {
      echo $before . get_the_title() . $after;
    }
  } elseif (is_page() && !$post->post_parent) {
    if ($show_current) {
      echo $before . get_the_title() . $after;
    }
  } elseif (is_page() && $post->post_parent) {
    $parents = get_post_ancestors(get_the_ID());
    foreach (array_reverse($parents) as $pageID) {
      echo $link_before . sprintf($link, get_page_link($pageID), get_the_title($pageID)) . $link_after;
    }
    if ($show_current) {
      echo $before . get_the_title() . $after;
    }
  } elseif (is_tag()) {
    if (get_query_var('paged')) {
      $tagID = get_query_var('tag_id');
      echo $link_before . sprintf($link, get_tag_link($tagID), single_tag_title('', false)) . $link_after;
      echo $before . sprintf($text['page'], get_query_var('paged')) . $after;
    } else {
      if ($show_current) {
        echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }
    }
  } elseif (is_author()) {
    $author = get_userdata(get_query_var('author'));
    if (get_query_var('paged')) {
      echo $link_before . sprintf($link, get_author_posts_url($author->ID), sprintf($text['author'], $author->display_name)) . $link_after;
      echo $before . sprintf($text['page'], get_query_var('paged')) . $after;
    } else {
      if ($show_current) {
        echo $before . sprintf($text['author'], $author->display_name) . $after;
      }
    }
  } elseif (is_404()) {
    if ($show_current) {
      echo $before . $text['404'] . $after;
    }
  } elseif (has_post_format() && !is_singular()) {
    echo get_post_format_string(get_post_format());
  }

  echo $wrap_after;
}
