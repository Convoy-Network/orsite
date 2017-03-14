<?php get_header();?>
<div class="container_12">
<?php $video = new WP_Query('cat=9');

if($video->have_posts()): while($video->have_posts()) : $video->the_post();?>
<div class="grid_4"><!--Comienza la columna general de los posts-->
  <a class="LinkPost" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <div class="Post"><!--Conteido del los post-->
    <div class="PostImg">
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        }
        else {
          echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/portadas/olallo.png" />';
        }?>
    </div>
    <div class="PostText">
         <h2><?php the_title();?></h2>
        <?php the_excerpt();?>
    </div><!--Termina el contenido de los post-->
  </div><!--Termina la columna de los posts-->
</a>
</div>


            <?php endwhile; else:?>
        <h2>No existen post</h2>
        <?php endif;?>


 </div>

  <?php get_footer();?>
