<?php

//DELETE META TAGS FROM WP_HEAD()
	remove_action( 'wp_head', 'feed_links_extra', 3 ); 
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', array($sitepress, 'meta_generator_tag' ) );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	//define('WP_DEBUG', true);
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
	remove_filter( 'term_description','wpautop' );
	remove_filter( 'comment_text', 'wpautop' );
	remove_filter( 'the_content', 'wptexturize' );


// INCLUDE RESOURCES
function include_resources(){
    
    $theme_uri = get_template_directory_uri();
    
    /// CSS
    wp_register_style('style', $theme_uri.'/style.css');
    wp_enqueue_style('style');
    
    // Language CSS
    switch (ICL_LANGUAGE_CODE){
        
        case "ru":
            wp_register_style('style-ru', $theme_uri.'/style-ru.css');
            wp_enqueue_style('style-ru');
            break;

        case "en":
            wp_register_style('style-en', $theme_uri.'/style-en.css');
            wp_enqueue_style('style-en');
            break;
            
        default:
            wp_register_style('style-ru', $theme_uri.'/style-ru.css');
            wp_enqueue_style('style-ru');
            break;

    }

    // Admin CSS
    if ( (current_user_can('editor')) || (current_user_can('administrator')) ){
        wp_register_style('style-admin', $theme_uri.'/style.admin.css');
        wp_enqueue_style('style-admin'); 
    };
    
    /// JS
    wp_register_script('script', $theme_uri.'/js/jquery.our.js', array('jquery'));
    wp_enqueue_script('script');
    
    /// JS Color
    wp_register_script('script-color', $theme_uri.'/js/jquery.animate-colors.js', array('jquery'));
    wp_enqueue_script('script-color');
    
    // Admin JS
    if ( (current_user_can('editor')) || (current_user_can('administrator')) ){
        wp_register_script('script-admin', $theme_uri.'/js/jquery.admin.js', array('jquery'));
        wp_enqueue_script('script-admin');
    }
    
    
}
add_action('wp_enqueue_scripts', 'include_resources');


// DELETE AUTO <P>
	/*
	function filter_ptags_on_images($content){
	    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
	add_filter('the_content', 'filter_ptags_on_images');
	*/

/** 
 * Расстановка "мягких" переносов в словах. 
 * Браузеры, которые показывают их: IE 6.0.x, Opera 7.54u2 
 * В Firefox 1.0.4, Opera 7.11 не работает. 
 * Поддерживается текст для русского (UTF-8) и английского языков (ANSI). 
 * 
 * [url]http://shy.dklab.ru/newest/[/url] 
 * Nasibullin Rinat <rin at starlink ru> 
 * ANSI 
 * 2.0.2 
 */ 
if ( ! function_exists('hyphen_words') ) :
function hyphen_words($text){
    #буква (letter) 
    $l = '(?:\xd0[\x90-\xbf\x81]|\xd1[\x80-\x8f\x91]  #А-я (все) 
           | [a-zA-Z] 
           )'; 

    #гласная (vowel) 
    $v = '(?:\xd0[\xb0\xb5\xb8\xbe]|\xd1[\x83\x8b\x8d\x8e\x8f\x91]  #аеиоуыэюяё (гласные) 
           | \xd0[\x90\x95\x98\x9e\xa3\xab\xad\xae\xaf\x81]         #АЕИОУЫЭЮЯЁ (гласные) 
           | (?i:[aeiouy]) 
           )'; 

    #согласная (consonant) 
    $c = '(?:\xd0[\xb1-\xb4\xb6\xb7\xba-\xbd\xbf]|\xd1[\x80\x81\x82\x84-\x89]  #бвгджзклмнпрстфхцчшщ (согласные) 
           | \xd0[\x91-\x94\x96\x97\x9a-\x9d\x9f-\xa2\xa4-\xa9]                #БВГДЖЗКЛМНПРСТФХЦЧШЩ (согласные) 
           | (?i:sh|ch|qu|[bcdfghjklmnpqrstvwxz]) 
           )'; 

    #специальные 
    $x = '(?:\xd0[\x99\xaa\xac\xb9]|\xd1[\x8a\x8c])';   #ЙЪЬйъь (специальные) 

    /* 
    #алгоpитм П.Хpистова в модификации Дымченко и Ваpсанофьева 
    $rules = array( 
        # $1       $2 
        "/($x)     ($l$l)/sx", 
        "/($v)     ($v$l)/sx", 
        "/($v$c)   ($c$v)/sx", 
        "/($c$v)   ($c$v)/sx", 
        "/($v$c)   ($c$c$v)/sx", 
        "/($v$c$c) ($c$c$v)/sx" 
    ); 
    */ 

    #improved rules by D. Koteroff 
    $rules = array( 
        # $1       $2 
        "/($x)     ($l$l)/sx", 
        "/($v$c$c) ($c$c$v)/sx", 
        "/($v$c$c) ($c$v)/sx", 
        "/($v$c)   ($c$c$v)/sx", 
        "/($c$v)   ($c$v)/sx", 
        "/($v$c)   ($c$v)/sx", 
        "/($c$v)   ($v$l)/sx", 
    ); 

    #\xc2\xad = &shy; 
    return preg_replace($rules, "$1\xc2\xad$2", $text);
}
endif;
// END

//	TREE TITLES
function pg_wp_title($title){
	$ml_title = str_by_lang('Стеклянный бассейн', 'PoolGlass');
	if ( is_home() || is_front_page() ){
		$title = $ml_title;
	} else {
		$title = "$title".$ml_title;
	}
	return $title;
}
add_filter('wp_title', 'pg_wp_title', 10, 2);

// LANGUAGE LIST ON FRONT PAGE
if ( ! function_exists( 'languages_list' ) ) :
function languages_list(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<div id="lang">';
        foreach($languages as $l){
            if(!$l['active']) $langs[] = '<a id="'.$l['language_code'].'" href="'.$l['url'].'"><div class="pointer"></div></a>';
        }
        echo join(', ', $langs);
        echo '</div>';
    }
}
endif;
// END


// MULTILANG STRINGS
if ( ! function_exists('str_by_lang') ) :
function str_by_lang($ru, $en){
    switch (ICL_LANGUAGE_CODE){
        case "ru": return $ru; break;
        case "en": return $en; break;
        default: return $ru; break;
    }
}
endif;


//SYSTEM SITE INFO
	function usage() {
	printf(('Queries: %d  /  Time: %s'), get_num_queries(), timer_stop(0, 3));
	if ( function_exists('memory_get_usage') ) echo '  /  RAM: '
	. round(memory_get_usage()/1024/1024, 2) . 'MB ';
	}
	add_action('admin_footer_text', 'usage');
	
	
// WP-CAPTION	
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );
function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ( !empty( $attr['id'] ) ? ' id="'.esc_attr( $attr['id'] ).'"' : '' );
	$attributes .= ' class="wp-caption '.esc_attr( $attr['align'] ).'"';
	$attributes .= ' style="width: '.esc_attr( $attr['width']+2 ).'px"';

	/* Open the caption <div>. */
	$output = '<div' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<p class="wp-caption-text">' . $attr['caption'] . '</p>';

	/* Close the caption </div>. */
	$output .= '</div>';

	/* Return the formatted, clean caption. */
	return $output;
}

	
	 
?>