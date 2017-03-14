<?php 
/*
 * Template name: blog (principal)

*/

?>
<?php get_header();?>
<section class="contenido">
<div class="blogcontenido">
       <?php if(have_posts()): while(have_posts()) : the_post();?>
            <div class="blog">

            	<a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
                                <?php the_title(); // Show the title of the posts as a link ?>
                            </a>
                <p class="blogfecha"><?php the_time('m/d/Y'); // Display the time published ?></p>
                <h2 class="blogtitulo">The Making of "Gimme the power"</h2>
                <img src="" alt="">
                <?php the_content();?>
                   
                <p class="blogautor">Posted by El patas</p> 
                <ul class="blogcategorias">
                        <li><a href="#">Elemento</a></li>
                        <li><a href="#">Elemeto</a></li>
                        <li><a href="#">Elemnto</a></li>
                    </ul>
                
            </div>
            

            <?php endwhile; else:?>
	 			<h2>No existen post</h2>
	 			<?php endif;?>
             </div>
             	<?php get_siderbar();?>
</section>
	


			
	
					
           
	 			
	<?php get_footer();?>