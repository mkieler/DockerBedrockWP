<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

 if(is_page()){
	require_once __DIR__ . '/core-templates/page.php';
 } else if (is_404()){
	require_once __DIR__ . '/core-templates/404.php';
 } else if (is_single()){
	require_once __DIR__ . '/core-templates/single.php';
 } else if (is_archive()){
	require_once __DIR__ . '/core-templates/archive.php';
 } else if (is_archive()){
	require_once __DIR__ . '/core-templates/archive.php';
 } else if (is_search()){
	require_once __DIR__ . '/core-templates/search.php';
 } else if (is_author()){
	require_once __DIR__ . '/core-templates/author.php';
 } else if (is_category()){
	require_once __DIR__ . '/core-templates/category.php';
 } else if (is_tag()){
	require_once __DIR__ . '/core-templates/tag.php';
 } else {
	require_once __DIR__ . '/core-templates/404.php';
 }

// $context          = Timber::context();
// $context['posts'] = Timber::get_posts();
// $context['foo']   = 'bar';
// $templates        = array( 'index.twig' );
// if ( is_home() ) {
// 	array_unshift( $templates, 'front-page.twig', 'home.twig' );
// }
// Timber::render( $templates, $context );
