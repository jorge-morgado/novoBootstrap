<!-- SEARCH FORM -->
<form role="search"	id='searchform' method="get" action="<?php echo home_url( '/' );?>">
	<div class="input-group mb-3 w-75">

		<input type="search" class="form-control" name="s" value="<?php echo get_search_query();?>" placeholder="Digite aqui sua dúvida" aria-label="Buscar" aria-describedby="basic-addon2"/>
					
			<div class="input-group-append">
					
				<button class="btn btn-outline-primary" type="submit">Buscar</button>
						
			</div>
					
		</div>
</form>