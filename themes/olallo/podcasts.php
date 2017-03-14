<?php
/*
 * Template name: podcasts

*/

?>
<?php get_header();?>
<div class="container_12">
    <h1 class="line">Podcasts - <span class="azul">Escucha más en</span> <a href="https://convoynetwork.com/" target="_blank"><img src="<?php echo THEMEROOT;?>/img/logoconvoy.png" alt="" /></a></h1>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 query_posts('cat=6&paged='. $paged);
if(have_posts()): while(have_posts()) : the_post();?>
  <div class="grid_4" style="position: relative;"><!--Comienza la columna general de los posts-->
    <a href="#<?php the_field('podcasts_nombre');?>" class="various LinkPost">
      <div class="Post"><!--Conteido del los post-->
      <div class="PostImg BtnPlay">

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


  <div class="lightboxStyle" id="<?php the_field('podcasts_nombre');?>" style="width:100%;display: none;">
    <h2 class="lightboxTitulo"><?php the_title();?></h2>
      <div class="lightboxImg">

        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }
          else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/portadas/olallo.png" />';
          }?>
      </div>
      <audio src="<?php the_field('cargar_pods')?>" controls>

      </audio>

    <!--<?php //the_field('podcasts_contenido'); ?>-->
    <div class="lightboxTexto">
      <?php the_content();?>
    </div>
  </div>



  </div>


						<?php endwhile; else:?>
	 			<h2>No existen post</h2>
            </div>
	 		<?php endif;?>
    <nav>
    <ul id="pagination">
      <li class="future"><?php posts_nav_link('','','') ?></li>
    </ul>
</nav> 
	<?php get_footer();?>
