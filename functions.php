<?php

function remove_wordpress_version_number() {
    return '';
}
add_filter('the_generator', 'remove_wordpress_version_number');
function remove_version_from_scripts( $src ) {
   if ( strpos( $src, '?ver=' ) )
       $src = remove_query_arg( 'ver', $src );
   return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_scripts');
add_filter( 'script_loader_src', 'remove_version_from_scripts');
/**
 * Enqueue scripts and styles.
 */
function ex_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'kosmos-css', get_template_directory_uri() . '/css/main.min.css' );
	wp_enqueue_style( 'scroll-css', get_template_directory_uri() . '/css/scroll.css' );
	wp_enqueue_script( 'kosmos-js', get_template_directory_uri() . '/js/scripts.min.js', array(), '', true );
	
	wp_enqueue_script( 'ajax-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), '', true );
    wp_enqueue_script( 'auto-mask', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'ex_scripts' );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

//show_admin_bar(false);

require_once ( get_stylesheet_directory() . '/theme-options.php' );
//require_once ( get_stylesheet_directory() . '/inc/ajax-search.php' );

add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );

function new_excerpt_length($length) {
	return 20;
}

add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
	return '...';
});

## Отключаем Emojis в WordPress
if(1){
	## отключаем DNS prefetch
	add_filter('emoji_svg_url', '__return_empty_string');

	/**
	 * Disable the emoji's
	 */
	add_action( 'init', 'disable_emojis' );
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	}

	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 *
	 * @param    array  $plugins
	 * @return   array             Difference betwen the two arrays
	 */
	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'main-top', 'main-top' );
	
}

add_action( 'widgets_init', 'metrica_widjet' );
function metrica_widjet(){
	register_sidebar( array(
		'name'          => 'metrica_widjet',
		'id'            => "metrica_widjet",
		'description'   => 'Виджет для счетчиков FB Google Яндекс и т.д.',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '',
		'after_title'   => "",
	) );
}

//add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio') );

add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}


  function wptp_register_taxonomy() {
    register_taxonomy( 'car_types', 'post',
    array(
      'labels' => array(
        'name'              => 'Тип кузова',
        'singular_name'     => 'Кузова',
        'search_items'      => 'Поиск Кузова',
        'all_items'         => 'Все Кузова',
        'edit_item'         => 'Создать Кузов',
        'update_item'       => 'Обновить Кузов',
        'add_new_item'      => 'Добавить Кузов',
        'add_new_item'      => 'Добавить Пункт Категории',
        'new_item_name'     => 'New Article Category Name',
        'menu_name'         => 'Категории Кузовов',
        ),
      'hierarchical' => false,
      'sort' => true,
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true,
      'show_in_rest' => true,
      'rewrite'       => array( 'with_front' => false,  )
      )
    );

    register_taxonomy( 'common_types', 'post',
    array(
      'labels' => array(
        'name'              => 'Общие категории авто',
        'singular_name'     => 'Общая категория',
        'search_items'      => 'Поиск категории',
        'all_items'         => 'Все категории',
        'edit_item'         => 'Создать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить категорию',
        'add_new_item'      => 'Добавить Пункт категорию',
        'new_item_name'     => 'New Article Category Name',
        'menu_name'         => 'Общие категории авто',
        ),
      'hierarchical' => true,
      'sort' => true,
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true,
      'show_in_rest' => true
      )
    );
  
    register_taxonomy( 'year_cats', 'post',
    array(
      'labels' => array(
        'name'              => 'Категории по годам',
        'singular_name'     => 'Общая категория',
        'search_items'      => 'Поиск категории',
        'all_items'         => 'Все категории',
        'edit_item'         => 'Создать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить категорию',
        'add_new_item'      => 'Добавить Пункт категорию',
        'new_item_name'     => 'New Article Category Name',
        'menu_name'         => 'Категории по годам',
        ),
      'hierarchical' => true,
      'sort' => true,
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true,
      'show_in_rest' => true
      )
    );

  }
  add_action( 'init', 'wptp_register_taxonomy' );

 

  
$labels_news = array(
    'name' => __( 'Новости' ),
    'singular_name' => __( 'Все Новости' ),
    'add_new' => __( 'Добавить Новость' ),
    'add_new_item' => __( 'Добавить Новость' ),
    'edit_item' => __( 'Редактировать Новость' ),
    'new_item' => __( 'Новая Новость' ),
    'view_item' => __( 'Смотреть Новость' ),
    'search_items' => __( 'Поиск Новость' ),
    'not_found' =>  __( 'Не знайдено етап' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_news = array(
    'labels' => $labels_news,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      ),
    );
  register_post_type( 'news', $args_news );


  $labels_faq = array(
    'name' => __( 'Вопрос-ответ' ),
    'singular_name' => __( 'Все Вопрос-ответ' ),
    'add_new' => __( 'Добавить Вопрос-ответ' ),
    'add_new_item' => __( 'Добавить Вопрос-ответ' ),
    'edit_item' => __( 'Редактировать Вопрос-ответ' ),
    'new_item' => __( 'Новый Вопрос-ответ' ),
    'view_item' => __( 'Смотреть Вопрос-ответ' ),
    'search_items' => __( 'Поиск Вопрос-ответ' ),
    'not_found' =>  __( 'Не найдено Вопрос-ответ' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_faq = array(
    'labels' => $labels_faq,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      'editor'
      ),
    );
  register_post_type( 'faq', $args_faq );

  $labels_rev = array(
    'name' => __( 'Отзыв' ),
    'singular_name' => __( 'Все Отзывы' ),
    'add_new' => __( 'Добавить Отзывт' ),
    'add_new_item' => __( 'Добавить Отзыв' ),
    'edit_item' => __( 'Редактировать Отзыв' ),
    'new_item' => __( 'Новый Отзыв' ),
    'view_item' => __( 'Смотреть Отзыв' ),
    'search_items' => __( 'Поиск Отзывов' ),
    'not_found' =>  __( 'Не найдено Отзыв' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_rev = array(
    'labels' => $labels_rev,
    'has_archive' => true,
    'public' => false,
    'hierarchical' => false,
    'menu_position' => 5,
    'show_ui' => true,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      'editor'
      ),
    );
  register_post_type( 'rev', $args_rev );


  $labels_auk = array(
    'name' => __( 'Аукционы' ),
    'singular_name' => __( 'Все Аукционы' ),
    'add_new' => __( 'Добавить Аукцион' ),
    'add_new_item' => __( 'Добавить Аукцион' ),
    'edit_item' => __( 'Редактировать Аукцион' ),
    'new_item' => __( 'Новый Аукцион' ),
    'view_item' => __( 'Смотреть Аукцион' ),
    'search_items' => __( 'Поиск Аукционов' ),
    'not_found' =>  __( 'Не найдено Аукцион' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_auk = array(
    'labels' => $labels_auk,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'excerpt',
      'thumbnail', 
      'editor'
      ),
    );
  register_post_type( 'auk', $args_auk );




add_filter('request', 'rudr_change_term_request', 1, 1 );
 
function rudr_change_term_request($query){
 
	$tax_name = 'car_types'; // specify you taxonomy name here, it can be also 'category' or 'post_tag'
 
	// Request for child terms differs, we should make an additional check
	if( $query['attachment'] ) :
		$include_children = true;
		$name = $query['attachment'];
	else:
		$include_children = false;
		$name = $query['name'];
	endif;
 
 
	$term = get_term_by('slug', $name, $tax_name); // get the current term to make sure it exists
 
	if (isset($name) && $term && !is_wp_error($term)): // check it here
 
		if( $include_children ) {
			unset($query['attachment']);
			$parent = $term->parent;
			while( $parent ) {
				$parent_term = get_term( $parent, $tax_name);
				$name = $parent_term->slug . '/' . $name;
				$parent = $parent_term->parent;
			}
		} else {
			unset($query['name']);
		}
 
		switch( $tax_name ):
			case 'category':{
				$query['category_name'] = $name; // for categories
				break;
			}
			case 'post_tag':{
				$query['tag'] = $name; // for post tags
				break;
			}
			default:{
				$query[$tax_name] = $name; // for another taxonomies
				break;
			}
		endswitch;
 
	endif;
 
	return $query;
 
}
 
 
add_filter( 'term_link', 'rudr_term_permalink', 10, 3 );
 
function rudr_term_permalink( $url, $term, $taxonomy ){
 
	$taxonomy_name = 'car_types'; // your taxonomy name here
	$taxonomy_slug = 'car_types'; // the taxonomy slug can be different with the taxonomy name (like 'post_tag' and 'tag' )
 
	// exit the function if taxonomy slug is not in URL
	if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;
 
	$url = str_replace('/' . $taxonomy_slug, '', $url);
 
	return $url;
}


add_filter('request', 'rudr_change_term_request2', 1, 1 );
 
function rudr_change_term_request2($query){
 
	$tax_name = 'common_types'; // specify you taxonomy name here, it can be also 'category' or 'post_tag'
 
	// Request for child terms differs, we should make an additional check
	if( $query['attachment'] ) :
		$include_children = true;
		$name = $query['attachment'];
	else:
		$include_children = false;
		$name = $query['name'];
	endif;
 
 
	$term = get_term_by('slug', $name, $tax_name); // get the current term to make sure it exists
 
	if (isset($name) && $term && !is_wp_error($term)): // check it here
 
		if( $include_children ) {
			unset($query['attachment']);
			$parent = $term->parent;
			while( $parent ) {
				$parent_term = get_term( $parent, $tax_name);
				$name = $parent_term->slug . '/' . $name;
				$parent = $parent_term->parent;
			}
		} else {
			unset($query['name']);
		}
 
		switch( $tax_name ):
			case 'category':{
				$query['category_name'] = $name; // for categories
				break;
			}
			case 'post_tag':{
				$query['tag'] = $name; // for post tags
				break;
			}
			default:{
				$query[$tax_name] = $name; // for another taxonomies
				break;
			}
		endswitch;
 
	endif;
 
	return $query;
 
}
 
 
add_filter( 'term_link', 'rudr_term_permalink2', 10, 3 );
 
function rudr_term_permalink2( $url, $term, $taxonomy ){
 
	$taxonomy_name = 'common_types'; // your taxonomy name here
	$taxonomy_slug = 'common_types'; // the taxonomy slug can be different with the taxonomy name (like 'post_tag' and 'tag' )
 
	// exit the function if taxonomy slug is not in URL
	if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;
 
	$url = str_replace('/' . $taxonomy_slug, '', $url);
 
	return $url;
}




add_action('init', 'do_rewrite');
function do_rewrite(){
	// Правило перезаписи
	
	//add_rewrite_rule( '^(.?.+?)/([0-9]{4})/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2008)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2009)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2010)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2011)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2012)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2013)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2014)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2015)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2016)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2017)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2018)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2019)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2020)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
	add_rewrite_rule( '^(.?.+?)/(2021)/?', 'index.php?category_name=$matches[1]&yearcar=$matches[2]', 'top' );
   

	add_filter( 'query_vars', function( $vars ){
		$vars[] = 'yearcar';
		return $vars;
	} );
}



function do_single_seo( $post_type, $year, $car_name, $alias, $price, $permalink, $thumb, $odometr, $vin_code ){
    //echo '<title>' . $year . '</title>';
    echo '<title>Купить автомобиль БУ '. $alias[0] . ' ' . $alias[1] . ' ' . $year . ' за $'. $price. ' из США - бу авто ' . $alias[2]. ' '  . $alias[3] . ' ' . $year . ' за $' . $price . ' из Америки в Киеве - AutoKosmos </title>'."\n"  ;

    echo '<meta name="description" content="Купить '. $alias[0] . ' ' . $alias[1] . ' ' . $year . ' за $'. $price. ' с пробегом '.$odometr . ' '. $vin_code .' с доставкой из США ✅ Пригон автомобилей под ключ 🔥 Подбор, растаможивание и поставка авто на учет." />';
    echo '
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:title" content="Купить автомобиль БУ '. $alias[0] . ' ' . $alias[1] . ' ' . $year . ' за $'. $price. ' из США - бу авто ' . $alias[2]. ' '  . $alias[3] . ' ' . $year . ' за $' . $price . ' из Америки в Киеве - AutoKosmos" />
        <meta property="og:description" content="'.$car_name.'" />
        <meta property="og:url" content="'.$permalink.'" />
        <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
        <meta property="og:image" content="'.$thumb.'" />
        <meta property="og:image:width" content="640" />
        <meta property="og:image:height" content="480" />
    ';
    echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
} 

add_action( 'single_seo', 'do_single_seo', 10, 10 );




function archive_seo_brand( $post_type, $alias, $permalink ){
   echo '<title>Купить автомобиль '.$alias[0].' из США - бу авто '.$alias[1].'  из Америки в Киеве - AutoKosmos</title>' ;
   echo '<meta name="description" content="Купить пригнанный автомобиль '.$alias[0].' из США 🚗. Смотреть бу машины '.$alias[1].' из Америки, ✅ цена на автомобили в Украине и на аукционах за границей. 🔥" />';
   echo '
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:title" content="Купить автомобиль '.$alias[0].' из США - бу авто '.$alias[1].'  из Америки в Киеве - AutoKosmos" />
        <meta property="og:url" content="'.$permalink.'" />
        <meta property="og:image" content="https://autokosmos.com.ua/wp-content/themes/avtokosmos/img/fon.jpg" />
        <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
    ';
    echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
} 

add_action( 'archive_seo_brand', 'archive_seo_brand', 10, 5 );





function archive_seo_model( $post_type, $alias, $permalink ){
    echo '<title>Купить '.$alias[0].' ' .$alias[2].', продажа бу '.$alias[1].' ' .$alias[3].' в Украине из США - AutoKosmos</title>' ;
    echo '<meta name="description" content="Купить пригнанный автомобиль '.$alias[0].' ' .$alias[2].' из США 🚗. Смотреть бу машины '.$alias[1].' ' .$alias[2].' из Америки, ✅ цена на автомобили в Украине и на аукционах за границей. 🔥" />';
    echo '
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:title" content="Купить '.$alias[0].' ' .$alias[2].', продажа бу '.$alias[1].' ' .$alias[2].' в Украине из США - AutoKosmos" />
    <meta property="og:url" content="'.$permalink.'" />
    <meta property="og:image" content="https://autokosmos.com.ua/wp-content/themes/avtokosmos/img/fon.jpg" />
    <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
';
echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
 } 
 
 add_action( 'archive_seo_model', 'archive_seo_model', 10, 5 );






function archive_seo_brand_year( $post_type, $alias, $year, $permalink ){
   echo '<title>Купить автомобиль '.$alias[0]. ' '. $year .' года из США - бу авто '.$alias[1].' '.$year.' года из Америки в Киеве - AutoKosmos</title>' ;
   echo '<meta name="description" content="Купить пригнанный автомобиль '.$alias[0]. ' '. $year .' из США 🚗. Смотреть бу машины '.$alias[1]. ' '. $year .' из Америки, ✅ цена на автомобили в Украине и на аукционах за границей. 🔥" />';
   echo '
   <meta property="og:locale" content="ru_RU" />
   <meta property="og:title" content="Купить автомобиль '.$alias[0]. ' '. $year .'года из США - бу авто '.$alias[1].' '.$year.' года из Америки в Киеве - AutoKosmos" />
   <meta property="og:url" content="'.$permalink.'" />
   <meta property="og:image" content="https://autokosmos.com.ua/wp-content/themes/avtokosmos/img/fon.jpg" />
   <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
';
echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
} 

add_action( 'archive_seo_brand_year', 'archive_seo_brand_year', 10, 5 );






function archive_seo_model_year( $post_type, $alias, $year, $permalink ){
    echo '<title>Купить '.$alias[0].' ' .$alias[2].' '.$year.' года, продажа бу '.$alias[1].' ' .$alias[3].' '.$year. ' года в Украине из США - AutoKosmos</title>' ;
    echo '<meta name="description" content="Купить пригнанный автомобиль '.$alias[0].' ' .$alias[2].' '.$year.' из США 🚗. Смотреть бу машины '.$alias[1].' ' .$alias[2].' '.$year.' из Америки, ✅ цена на автомобили в Украине и на аукционах за границей. 🔥" />';
    echo '
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:title" content="Купить '.$alias[0].' ' .$alias[2].' '.$year.' года, продажа бу '.$alias[1].' ' .$alias[2].' '.$year. ' года в Украине из США - AutoKosmos" />
    <meta property="og:url" content="'.$permalink.'" />
    <meta property="og:image" content="https://autokosmos.com.ua/wp-content/themes/avtokosmos/img/fon.jpg" />
    <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
 ';
 echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
 } 
 
 add_action( 'archive_seo_model_year', 'archive_seo_model_year', 10, 5 );





 
function archive_seo_page( $post_type, $title, $permalink ){
    $slogan = 'купить Авто из США в Киеве - AUTOKOSMOS';
    echo '<title>' . ' ' . $title . ' - ' . $slogan . '</title>' ;

    echo '<meta name="description" content="' . ' ' . $title . ' - ' . $slogan . '" />';
    
    echo '
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:title" content="'. $title . ' - ' . $slogan . '" />
    <meta property="og:url" content="'.$permalink.'" />
    <meta property="og:image" content="https://autokosmos.com.ua/wp-content/themes/avtokosmos/img/fon.jpg" />
    <meta property="og:site_name" content="купить Авто из США в Киеве - AUTOKOSMOS" />
 ';



 echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />';
 } 
 
 add_action( 'archive_seo_page', 'archive_seo_page', 10, 5 );

 
 add_filter('robots_txt','custom_robots');

function custom_robots($output) {
     $public = get_option( 'blog_public' );
     if ( '0' != $public )
     return str_replace('Disallow','Allow',$output);
}


//  add_filter('wpseo_robots', 'yoast_no_home_noindex', 999);
//     function yoast_no_home_noindex($string= "") {
//         if (is_home() || is_front_page() || is_search()) {
//             $string= "index,follow";
//         }
//         return $string;
//     }

//  add_action( 'wp_head', 'myRobots' );

//  function myRobots() {
//      if( ! is_search() )
//          echo( '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />' );
//  }
 
//  function yoast_seo_canonical_change_archives( $canonical ) {
//     if ( is_archive() ) {
//     $path = parse_url( $canonical, PHP_URL_PATH );
//     return 'https://autokosmos.com.ua' . $path;
//     }
//     return $canonical;
// }
// add_filter( 'wpseo_canonical', 'yoast_seo_canonical_change_archives', 10, 1 );

remove_action( 'wp_head', 'rel_canonical');


remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );

function mayak_category_description($container = ''){
	$content = is_object($container) && isset($container->description) ? html_entity_decode($container->description) : '';
	$editor_id = 'tag_description';
	$settings = 'description';		
	?>
    <tr class="form-field">
	<th scope="row" valign="top"><label for="description">Описание</label></th>
	<td><?php wp_editor($content, $editor_id, array(
				'textarea_name' => $settings,
				'editor_css' => '<style> .html-active .wp-editor-area{border:0;}</style>',
	)); ?><br />
	<span class="description">Описание по умолчанию не отображается, однако некоторые темы могут его показывать.</span></td>
    </tr>
    <?php	
}
add_filter('edit_category_form_fields', 'mayak_category_description');
add_filter('edit_tag_form_fields', 'mayak_category_description');

function mayak_remove_category_description(){
    if ( $mk_description->id == 'edit-category' or 'edit-tag' ){
    ?>
        <script type="text/javascript">
        jQuery(function($) {
        $('textarea#description').closest('tr.form-field').remove();
        });
        </script>
    <?php
    }
}
add_action('admin_head', 'mayak_remove_category_description');
