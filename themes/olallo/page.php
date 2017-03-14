<?php get_header();?>


        <div class="container_12"><!--Bloque de contenido-->

            <?php if(have_posts()): while(have_posts()) : the_post();?>
             <div class="contenidoBase">
                <!--<h3 class="tituloBase"><?php //the_title()?></h3>-->
             <div class="textoBase"> <?php  the_content();//the_excerpt(); ?><div>
             </div>


            <?php endwhile; else:?>
        <h2>No existen post</h2>
            </div>
      <?php endif;?>
    </div>

  <?php get_footer();?>
