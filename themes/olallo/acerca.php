<?php
/*
 * Template name: Acerca

*/

?>
<?php get_header();?>

      <div class="container_12"><!--Bloque de contenido-->
        <div class="grid_9">
            <?php if(have_posts()): while(have_posts()) : the_post();?>

              <div class="interPost">
                <div class="InterImg">
                     <?php
                      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail('interior');
                      }
                      ?>
                </div>
                <div class="interTexto">
                 <?php the_content();?>
               </div>
              </div>
            </div>
            <?php endwhile; else:?>
        <h2>No existen post</h2>
        <?php endif;?>
      
          <aside class="grid_3">
              <?php the_field('texto_lateral');?>
          </aside>
   </div>

  <?php get_footer();?>
