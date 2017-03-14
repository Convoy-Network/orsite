<?php
/*
 * Template name: Homepage (principal)

*/

?>
<?php get_header();?>
<div class="container_12">
<?php if(have_posts()): while(have_posts()) : the_post();?>
  <div class="grid_4"><!--Comienza la columna general de los posts-->
    <a class="LinkPost" href="<?php the_permalink(); ?>">
      <div class="Post"><!--Conteido del los post-->
      <div class="PostImg">
        <?php the_post_thumbnail();?>
      </div>
      <div class="PostText">
        	<?php the_content();?>
      </div><!--Termina el contenido de los post-->
    </div><!--Termina la columna de los posts-->
  </a>
  </div>


						<?php endwhile; else:?>
	 			<h2>No existen post</h2>
            </div>
	 		<?php endif;?>
	<?php get_footer();?>
