<?php get_header(); ?>

<div class="col-sm-8 blog-main">
	<div class="blog-post">

		<!-- LISTAR POSTS POR CATEGORIA -->
		<?php if(have_posts()) : while(have_posts()) : the_post();?>

		<h2 class="blog-post-title"><a href="<?php the_permalink();?>" class="h4"><?php the_title();?></a></h2>
		<p><?php the_excerpt();?></p>
		<p><a href="<?php the_permalink();?>"><button type="button" class="btn btn-primary">Acessar</button></a></p>
		
		<hr>
		
		<?php endwhile;?>

		<?php endif;?>

	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>