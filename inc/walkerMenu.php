<?php
class Custom_Header_Menu_Walker extends Walker_Nav_Menu {
    // Начало элемента меню
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class'), array_filter($classes), $item, $args, $depth);

        // Определяем классы для разных уровней
        if ($depth == 0) {
            $li_class = 'header-bottom__menu-item';
            $a_class = 'header-bottom__menu-link';
        } else {
            $li_class = 'submenu__item';
            $a_class = 'submenu__link';
            if ($depth == 2) $li_class .= ' third-level';
        }

        $output .= '<li class="' . esc_attr($li_class) . '">';

        // Атрибуты ссылки
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '#';
        $atts['class']  = $a_class;

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $output .= '<a' . $attributes . '>';
        $output .= $title;
        $output .= '</a>';
    }

    // Начало подменю
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth == 0) {
            $output .= '<div class="submenu__wrapper"><ul class="submenu">';
        } else {
            $output .= '<ul class="submenu">';
        }
    }

    // Конец подменю
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
        if ($depth == 0) {
            $output .= '</div>';
        }
    }
}
