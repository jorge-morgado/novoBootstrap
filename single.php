<?php get_header(); ?>
<div class="col-sm-8 blog-main">
	<div class="container">
		<div class="row">
			<div class="col-lg">
		  
			<!-- LISTAR O POST -->
			<?php if(have_posts()) : while(have_posts()) : the_post();?>			
			
			<h2><?php the_title();?></h2>
			
			<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
			
			<!-- LISTA CATEGORIAS DO POST -->
			<?php
			$categories = get_the_category();
 
			if(!empty($categories)){
				foreach($categories AS $key => $value){
					echo '<a href="'.get_category_link($value->term_id).'">'.$value->name.'</a> ';
				}
			}
			?>
			
			<!-- CONTEUDO DO POST -->
            <p><?php the_content();?></p>
			
			Publicado em <?php echo get_the_date('d/m/Y');?>  por <a href="#"><?php echo get_the_author();?></a>
			
			<!-- SISTEMA DE COMENTARIO -->
			<p><?php comments_template();?></p>			
			
			<?php endwhile;?>
			
			<?php else : get_404_template();?>

			<?php endif;?>

			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>	  
<?php get_footer(); ?>