<?php
function mka_sidebars()
{
   //sidebar principal
	register_sidebar(array(
        'name' =>  __('Sidebar principal','mka'),
        'id'  =>  'main-sidebar',
        'description' => __('ffEste es el side bar principal','mka'),
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget servicio %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center bold form-text">',
        'after_title' => '</h3>'

  
		));


    register_sidebar(array(
        'name' =>  __('Sidebar blog','mka'),
        'id'  =>  'sidebar-blog',
        'description' => __('footer-sidebar','mka'),
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget servicio  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sin-centrar">',
        'after_title' => '</h3>'

  
        ));

    /*register_sidebar(array(
        'name' =>  __('footer sidebar','mka'),
        'id'  =>  'footer-sidebar',
        'description' => __('footer-sidebar','mka'),
        'class' => '',
        'before_widget' => '<div id="%1$s" class="col-md-12 col-sm-12 text-center personal-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sin-centrar">',
        'after_title' => '</h4>'

  
        ));
      */
      register_sidebar(array(
        'name' =>  __('footer-derechos','mka'),
        'id'  =>  'footer-derechos',
        'description' => __('footer-derechos','mka'),
        'class' => '',
        'before_widget' => '<div id="%1$s" class="text-center footerderechos">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="">',
        'after_title' => '</h4>'

  
        ));

      //register_sidebar(array(
        //'name' =>  __('vacantes-links','mka'),
        //'id'  =>  'vacantes-links',
        //'description' => __('vacantes-links','mka'),
        //'class' => '',
        //'before_widget' => '<div id="%1$s" class="">',
        //'after_widget' => '</div>',
        //'before_title' => '<h4 class="sin-centrar">',
        //'after_title' => '</h4>'

  
       //));
      register_sidebar(array(
        'name' =>  __('newsletter','mka'),
        'id'  =>  'newsletter',
        'description' => __('newsletter','mka'),
        'class' => '',
        'before_widget' => '<div id="%1$s" class="">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sin-centrar">',
        'after_title' => '</h4>'

  
        ));






}
add_action('widgets_init','mka_sidebars' );





?>