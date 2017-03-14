<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title><?php wp_title('|',true,'right');?><?php bloginfo('name');?></title>
	<link rel="icon" type="image/png" href="<?php echo THEMEROOT;?>/favicon.png" />
	<link rel="pinback" href="<?php bloginfo('pingback_url');?>">
     <?php if(is_single() && comments_open()){
    	wp_enqueue_script('comment-reply' );
    }?>
		<noscript>
		<link rel="stylesheet" href="<?php echo THEMEROOT;?>/css/mobile.min.css" />
		</noscript>
		<script>
		// Edit to suit your needs.
		var ADAPT_CONFIG = {
			// Where is your CSS?
			path: '<?php echo THEMEROOT;?>/css/',

			// false = Only run once, when page first loads.
			// true = Change on window resize and page tilt.
			dynamic: true,

			// First range entry is the minimum.
			// Last range entry is the maximum.
			// Separate ranges by "to" keyword.
			range: [
				'0px    to 760px  = mobile.min.css',
				'760px  to 980px  = 720.min.css',
				'980px  to 1280px = 960.min.css',
				'1280px to 1600px = 1200.min.css',
				'1600px to 1940px = 1560.min.css',
				/*'1940px to 2540px = 1920.min.css',
				'2540px           = 2520.min.css'*/
			]
		};
		</script>
		<script src="<?php echo THEMEROOT;?>/js/adapt.min.js"></script>
	<?php wp_head();?>

</head>
<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72477939-1', 'auto');
  ga('send', 'pageview');

</script>
	<header><!--comienza tu header-->
		<div class="container_12">
			<div class="grid_12 contenidoHeader"<?php
	       if(is_home()){ }else{echo'style="border-bottom: 0px;"';}?>>

					<h1 class="logo grid_8 alpha"><a href="<?php echo home_url();?>" title="<?php the_title(); ?>"><img src="<?php echo THEMEROOT; ?>/img/logo-olallo.svg"></a></h1>
					<ul class="redesSociales grid_4 omega">
						<li><a href="https://www.facebook.com/olallofilm/?fref=ts" title="Elemento"><i class="icon-fb"></i><span class="hiden">facebook</span></a></li>
						<li><a href="https://twitter.com/Olallo_Rubio" title="Elemento"><i class="icon-tw"></i><span class="hiden">twitter</span></a></li>
						<li><a href="https://instagram.com/p/9l7yFGKzoE/" title="Elemento"><i class="icon-inst"></i><span class="hiden">instagram</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCE1JGZK-inrC1s1WQ8k05eA " title="Elemento"><i class="icon-yt"></i><span class="hiden">video</span></a></li>
					</ul>

		</div>
		<div class="clear"></div>

		<?php
       if(is_home()){?>
				 <div class="sldier grid_12">

					 <ul class="bxslider">
						 <?php

						 $slider = new WP_Query('cat=8');

 						if($slider->have_posts()): while($slider->have_posts()) : $slider->the_post();?>
				   <li>
						 <a href="<?php the_field('url_link');?>"><img src="<?php the_field('subir_imagen');?>" style="width: 100%;"/></a>
				      <div class="titleSlider">
				        <?php the_field('texto_slider');?>
				      </div>

				   </li>
				 <?php endwhile; else:?>
		 <h2>No existen post</h2>

	 <?php endif;?>
				 </ul>
				 </div>

			 <?php }else{?>
				 <div class="sldier grid_12" style="display: none;">
				 <img src="<?php echo THEMEROOT;?>/img/sliderBase.png" alt="">
				 </div>
			<?php } ?>

		<div class="clear"></div>
		<div class="grid_12">
			<nav class="Menu">
				<a href="#" class="nav-mobile" id="nav-mobile"></a>
				 <?php wp_nav_menu(array(
'theme_location' => 'main-menu',
'items_wrap'      => '<ul id="%1$s" class="%2$s ">%3$s</ul>',
'menu_class'     => 'MenuUl'
));?>
<!--Buscador-->
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<!--<span class="screen-reader-text"><?php //echo _x( 'Search for:', 'label' ) ?></span>-->
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<button type="submit" class="search-submit" name="button"></button>

</form>
			</nav>

		</div>
		</div>
		<div class="clear"></div>
	</header><!--Termina el header-->
	<section class="contenido"><!--Contenido sección-->