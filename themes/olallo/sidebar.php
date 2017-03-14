<aside>
                
							
						
						<?php if(is_active_sidebar('main-sidebar')){
					dynamic_sidebar('main-sidebar');
				}else{?>
					<?php _e('Busqueda','mka');?></h3>
						
							<?php get_search_form();?>
					
					
			<?php	}
				?>
	 </aside>