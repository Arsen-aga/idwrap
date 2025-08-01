<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package customthemes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function customthemes_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'customthemes_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function customthemes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'customthemes_pingback_header' );


// Меню
require get_template_directory() . '/inc/walkerMenu.php';

// Поиск
require get_template_directory() . '/inc/search-script.php';

// Хлебные крошки
require get_template_directory() . '/inc/breadcrumbs.php';

// Хлебные крошки
require get_template_directory() . '/inc/custom-functions.php';

// Определение шаблона
require get_template_directory() . '/inc/single-template.php';

// Функция вывода блоков

function renderBlocks(){
	if(have_rows('sortBlocks')) {
		while(have_rows('sortBlocks')) {
			the_row();
			$type_block = get_sub_field('type_block');
			switch ($type_block){
				case 'type-first-block':
					get_template_part('template-parts/sections/type-first-block');
					break;
				case 'carcase-info':
					get_template_part('template-parts/sections/carcase-info');
					break;
				case 'skin-happen':
					get_template_part('template-parts/sections/skin-happen');
					break;
				case 'skin-option':
					get_template_part('template-parts/sections/skin-option');
					break;
				case 'full-wrapping':
					get_template_part('template-parts/sections/full-wrapping');
					break;
				case 'verified-materials-2':
					get_template_part('template-parts/sections/verified-materials-2');
					break;
				case 'pasting-options':
					get_template_part('template-parts/sections/pasting-options');
					break;
				case 'skin-listimg':
					get_template_part('template-parts/sections/skin-listimg');
					break;
				case 'polishing-types':
					get_template_part('template-parts/sections/polishing-types');
					break;
				case 'materials-manufacturers':
					get_template_part('template-parts/sections/materials-manufacturers');
					break;
				case 'pasting-of-any-complexity':
					get_template_part('template-parts/sections/pasting-of-any-complexity');
					break;
				case 'sec-2':
					get_template_part('template-parts/sections/sec-2');
					break;
				case 'video-reviews':
					get_template_part('template-parts/sections/video-reviews');
					break;
				case 'quiz':
					get_template_part('template-parts/sections/quiz');
					break;
				case 'sec-7':
					get_template_part('template-parts/sections/sec-7');
					break;
				case 'perfect-result':
					get_template_part('template-parts/sections/perfect-result');
					break;
				case 'quality-pasting':
					get_template_part('template-parts/sections/quality-pasting');
					break;
				case 'sec-10':
					get_template_part('template-parts/sections/sec-10');
					break;
				case 'sec-11':
					get_template_part('template-parts/sections/sec-11');
					break;
				case 'sec-12':
					get_template_part('template-parts/sections/sec-12');
					break;
				case 'complex-service':
					get_template_part('template-parts/sections/complex-service');
					break;
				case 'wrapper-start':
					echo '<div class="wrapper-brown">';
					break;
				case 'wrapper-end':
					echo '</div>';
					break;
				case 'space':
					echo '<div class="space-sec"></div>';
					break;
			}
		}
	}
}
