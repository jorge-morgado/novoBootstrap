<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post();?>

	<div class="blog-post">
		<h2 class="blog-post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2><!-- TITULO POST -->
		<p class="blog-post-meta">Publicado em <?php echo get_the_date('d/m/Y');?> por <a href="#"><?php echo get_the_author();?></a></p>

		<!-- LISTA CATEGORIAS DO POST -->
		<p class="blog-post-meta">
		<?php
		$categories = get_the_category();

		if(!empty($categories)){
			foreach($categories AS $key => $value){
				echo '<a href="'.get_category_link($value->term_id).'">'.$value->name.'</a> ';
			}
		}
		?>
		</p>
		<p><?php the_excerpt();?></p><!-- RESUMO POST -->
            
	</div>	
			
	<?php endwhile;?>
			
	<?php else :?>
			
	Sem posts

	<?php endif;?>
	<!-- CRIAR PAGINAÇÃO -->
	
</div>

<?php get_footer(); ?>