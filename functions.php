<?php
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// filter tag in the_content()
function content_filter($content){
	$patterns = []; $patterns_non_amp = []; $replacements = []; $replacements_non_amp = [];

	$patterns = [
		'/<img ([^>]+)? class="([^>]+)?>/',
		'/<figcaption>/',
		'/<blockquote class="(.*?)"><p>(.*?)<\/p><cite>(.*?)<\/cite><\/blockquote>/'
	];
	$replacements = [
		'<img $1 class="img-fluid rounded w-100 $2>',
		'<figcaption class="figure-caption" $1>',
		'<blockquote class="$1 nk-blockquote">
			<div class="nk-blockquote-icon"><span>"</span></div>
			<p class="nk-blockquote-content">$2</p>
			<cite class="nk-blockquote-author"><span>$3</span></cite>
		</blockquote>',
	];
	
  return preg_replace($patterns, $replacements, $content);
}
add_filter('the_content', 'content_filter');

// set default image
function get_default_image()
{
	return get_template_directory_uri().'/img/default.png';
}

// get first image in post
function get_first_image_in_post() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	
	if(empty($first_img)){
		$first_img = get_default_image();
	}
	return $first_img;
}

// get list post
function get_list_posts($total, $category = null, $tag = NULL, $offset = 0){
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = [
		'post_type'        => 'post',
		'posts_per_page'   => $total,
		'category_name'    => $category,
		'tag'							 => $tag,
		'offset'           => $offset,
		'paged'		         => $paged,
		'order'            => 'DESC',
		'orderby'          => 'date',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	];
	return get_posts( $args );
}

// get popular post
function get_list_popular_posts($total, $offset = 0){
	$args = [
		'post_type'        => 'post',
		'posts_per_page'   => $total,
		'offset'           => $offset,
		'order'            => 'DESC',
		'orderby'          => 'meta_value_num',
		'meta_key'				 => 'post_views_count',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	];
	return get_posts( $args );
}

add_theme_support( 'post-thumbnails' );

function get_top_navigation(){
	return 
	'<header class="header">'
	.get_template_part( 'template-parts/components/top-navs' )
	.get_template_part( 'template-parts/components/navbar' )
	.'</header>'
	.get_template_part( 'template-parts/components/navbar-mobile' );
}

function get_logo(){
	return 'https://jejakcyber.com/wp-content/uploads/2021/02/Logo-Jejak-Cyber.png';
}

include 'inc/get-view-count.php';

include 'inc/comments.php';