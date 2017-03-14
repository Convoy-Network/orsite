<?php get_header();?>

      <div class="container_12"><!--Bloque de contenido-->
        <div class="grid_8">
            <?php if(have_posts()): while(have_posts()) : the_post();?>

              <div class="Post">
                <div class="PostText text-left">
                  <p class="fecha"><?php the_time('m / j / Y '); // Display the time published ?></p>
                  <h2 class="sinPadding textoLarge"><?php the_title(); ?></h2>
                </div>
                <div class="PostImg">

                </div>
               <div class="PostText text-left paddingTexto">
                <?php the_content();?>
              </div>
              <div class="grid_8 post_pagina">
                <?php $prev_post = get_previous_post(); ?>

                <?php if ( !empty( $prev_post ) ) : ?>
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php the_title_attribute(); ?>"><i class="icon-arrowleft"></i> Anterior</a>

                <?php endif; ?>

                <?php $next_post = get_next_post(); ?>
                 <?php if ( !empty( $next_post ) ) : ?>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php the_title_attribute(); ?>"> Siguiente <i class="icon-arrowright"></i></a>


                <?php endif; ?>
              </div>

            </div>


            <?php endwhile; else:?>
        <h2>No existen post</h2>
        <?php endif;?>
      </div>
          <aside class="grid_4">
              <?php get_sidebar();?>
          </aside>
   </div>

  <?php get_footer();?>
