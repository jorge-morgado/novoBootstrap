<?php
	//NAVWALKER
    require_once(get_template_directory().'/functions/class-wp-bootstrap-navwalker.php');
	
	//REGISTRAR AS CATEGORIAS DO NAVMENU
	register_nav_menus (array (	
	'primary' => __(' Menu Principal', 'novoBootstrap')	
	));
	
	//HABILITAR UPLOAD DE IMAGEM POST
	add_theme_support('post-thumbnails');
	
	//LIMITA O TAMANHO DO PRE POST
	add_filter('excerpt_length', function(){
		return 40;
	});
	
	//REGISTRAR O SIDEBAR
	register_sidebar(array(
		'name' => 'Categorias',
		'id' => 'sidebar',
		'class' => '',
		'before_widget' => '<div class="list-group">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => ''
	));
	
	//REGISTRAR O SEARCH
	register_sidebar(array(
		'name' => 'Buscas',
		'id' => 'search',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
	
	//REMOVER O TITULO DO SIDEBAR
	add_filter('widget_title','my_widget_title'); 
	function my_widget_title($t)
	{
		return null;
	}
	
?>