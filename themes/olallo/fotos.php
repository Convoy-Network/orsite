<?php
/*
 * Template name: fotos

*/

?>
<?php get_header();?>
<div class="container_12">

<?php
 query_posts('cat=5');
if(have_posts()): while(have_posts()) : the_post();?>
      <div id="timeline" data-columns>
          <div class="item">
              <a class="fancybox" href="<?php the_field('image_galeria');?>" title="foto"><img src="<?php the_field('image_galeria');?>" alt="" width="100%" style="width:100%;"> </a>
          </div>

        </div>


						<?php endwhile; else:?>
	 			<h2>No existen post</h2>
            </div>
	 		<?php endif;?>
	<?php get_footer();?>
