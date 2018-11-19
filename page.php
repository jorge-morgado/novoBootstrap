<?php get_header(); ?>

<div class="col-sm-8 blog-main">

<!-- PAGINA BLOG (DESIGN CUSTOMIZADO) -->
<?php if(is_page('blog')) :?>
	
	<?php
	//CHAMA UMA NOVA QUERY DE POST
	$get_default_post_value = get_option( 'posts_per_page' ); //RECEBE A CONFIG PADRÃO DE POST DO ADMIN
	$categoria_post = 0; // CATEGORIA DE POST QUE SERÁ MOSTRADO; PADRÃO = 0 (TODOS)
	$args = array('cat' => $categoria_post, 'posts_per_page'=> $get_default_post_value);
			
	$wp_query = new WP_Query($args);
	if($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); 
	//echo the_search_query();
	?>	
	
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
		<p><?php the_content();?></p><!-- RESUMO POST -->
            
	</div>	
			
	<?php endwhile;?>
			
	<?php else :?>
			
	Sem posts

	<?php endif;?>

	<!-- CRIAR PAGINAÇÃO -->
	
<!-- PAGINA CONTATO (DESIGN CUSTOMIZADO) -->
<?php else : if (is_page('contato')) :?> 

	<div class="container">
		<div class="row">
			<div class="col-lg">
			
				<?php if(have_posts()) : while(have_posts()) : the_post();?>
		  
				<h2><?php the_title();?></h2>			
			
				<p><?php the_content();?></p>
			
				<?php endwhile;?>			

				<?php endif;?>
			
			</div>
		</div>
	</div>


<!-- QUALQUER OUTRA PÁGINA CRIADA NO PAINEL (DESIGN PADRÃO) -->
<?php else :?>

	<div class="container">
		<div class="col-lg">
		  
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
		  
			<h2><?php the_title();?></h2>			
			
			<p><?php the_content();?></p>
			
			<?php endwhile;?>
			
			<?php endif;?>

		</div>
	</div>

<?php endif; endif;?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>