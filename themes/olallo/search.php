<?php
/*
 * Template name: Search

*/

?>
<?php get_header();?>


        <div class="container_12"><!--Bloque de contenido-->


             <div class="contenidoBase">
                <h3 class="tituloBase"><?php echo $wp_query->found_posts; ?> <?php _e( 'Resultados de busqueda', 'locale' ); ?>: "<?php the_search_query(); ?>"</h3>
                    	<?php if(have_posts()): while(have_posts()) : the_post();?>
                            <ul class="linksPersonales"><li>  <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a></li></ul>

                        						<?php endwhile; else:?>
                        	 			<h2>No existen post</h2>
                                    </div>
                        	 		<?php endif;?>

             </div>



    </div>

  <?php get_footer();?>
