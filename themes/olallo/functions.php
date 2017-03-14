<?php
/*comenzando con las funciones del tema*/

//Rutas de la carpeta del tema
define('THEMEROOT',get_stylesheet_directory_uri());
//Ruta a la carpetya imagenes
define('IMAGES',THEMEROOT.'/img');

//Eliminar la opción de editor
//define('DISALLOW_FILE_EDIT',true);

//Funciones base de wordpress
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 980;

if ( ! function_exists('mka_custom_theme_features') ) {

// Register Theme Features
function mka_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	//add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'd9d9d9',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-style.css' );

	// Add theme support for Translation
	load_theme_textdomain( 'mka', get_template_directory() . '/language' );
	//edición de imagenes personales
	add_image_size('interior',806,416,true);
	add_image_size('blog',390,376,true);
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'mka_custom_theme_features' );



require_once('includes/scripts-stylesheets.php');


/*Archivo menú de cosas del thema*/

require_once('includes/menu-ds.php');

require_once('includes/sidebars.php');

/*Cambiamos las entradas de cajon*/


function shortcode_recientes($atts, $content = null, $code) {

//Uso: [recientes  limite="3" longitud_titulo="50" longitud_desc="50" thumbnail="1" tamano="50"]
//thumbnail="1" muestra imagen destacada. thumbnail="0" no muestra la imagen
    extract(shortcode_atts(array(
        'limite' => 5,
        'longitud_titulo' => 50,
        'longitud_desc' => 200,
        'thumbnail' => false,
        'tamano' => 390

    ), $atts));

    $query = array('cat'=> '-2,-5,-8,-6', 'showposts' => $limite,  'orderby'=> 'date', 'order'=>'DESC', 'post_status' => 'publish', 'ignore_sticky_posts' => 1);

    $q = new WP_Query($query);
    if ($q->have_posts()) :
    $salida  = '';
    $salida .= '<ul class="listado-recientes">';

    /* comienzo while */
    while ($q->have_posts()) : $q->the_post();
    $salida .= '<li>';
    if ( has_post_thumbnail() && $thumbnail == true):
    $salida .= '<a href="'.get_permalink().'" title="'.sprintf( "Enlace permanente a %s", get_the_title() ).'">';
    $salida .= get_the_post_thumbnail(get_the_id(),array($tamano,$tamano),array('title'=>get_the_title(),'alt'=>get_the_title(),'class'=>'imageborder alignleft'));
    $salida .= '</a>';
    endif;

    $salida .= '<div class="Post">';
    $salida .= '<div class="PostText"><h2><a href="'.get_permalink().'" title="'.sprintf( "Enlace permanente a %s", get_the_title() ).'">';
    $salida .= wp_html_excerpt (get_the_title(), $longitud_titulo );
    $salida .= '</a></h2>';
    $salida .= '<p>';

        /* Calculo las categorías  */

        //$categories = get_the_category();
        $separator = ' ';
        $output = '';
        if($categories){
                foreach($categories as $category) {
                        $output .= $category->cat_name.''.$separator;
                }
                $salida .= trim($output, $separator);
        }
    $salida .= '</p>';
        /* Escribo fecha  */
    //$salida .= '<p>'.get_the_time().'</p>';

        /* Escribo extracto  */

    $excerpt = get_the_excerpt();
    $salida .= ($excerpt)?'<p>'.wp_html_excerpt($excerpt,$longitud_desc).'...</p>':'';

    $salida .= '</div></div>';
    $salida .= '</li>';
    endwhile;
    wp_reset_query();
    /* fin while */

    $salida .= '</ul>';
    endif;

    return $salida;

}
add_shortcode('recientes',    'shortcode_recientes');


//para insertarlo en un widget del sidebar
add_filter('widget_text', 'do_shortcode');



function tweakjp_rm_comments_att( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'tweakjp_rm_comments_att', 10 , 2 );








}
