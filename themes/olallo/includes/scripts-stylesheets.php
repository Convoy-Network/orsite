<?php
/*Hojas de estilos y scripts*/
function mka_theme_style()
{
   //Registro de estilos
	//wp_register_style('normalize',THEMEROOT,'/css/normailize.css','','','all');
	//wp_register_style('normalize',THEMEROOT,'/css/normailize.css','','','all');
	//wp_register_style('normalize',THEMEROOT,'/css/normailize.css','','','all');
	wp_register_style('theme-style',THEMEROOT.'/style.css');
  //Cargar estilos
     wp_enqueue_style('theme-style');

}
add_action('wp_enqueue_scripts','mka_theme_style' );


function mka_theme_scripts()
{
   //Registro de estilos
    wp_register_script('boots',THEMEROOT.'/js/jquery.bxslider.js',array('jquery'),3.0,true);
   	//wp_register_script('theme-fucntions',THEMEROOT.'/js/app.js',array('jquery'),1.0,true );
    //wp_enqueue_script('theme-fucntions');
    wp_enqueue_script('boots');



}
add_action('wp_enqueue_scripts','mka_theme_scripts' );

/*Estilos htlm5 explorer*/

function explorer()
{
   ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
}
add_action('wp_head','explorer');
