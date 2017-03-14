<?php

function mka_navigation()
{   

    register_nav_menus(array(
        'main-menu' => __('area de menú principal','mka')

        ));
    register_nav_menus(array(
        'main-footer' => __('Menu de footer','mka')

        ));
    

}
add_action('init','mka_navigation');



