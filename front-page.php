<?php include "header_principal.php" ?>

<section class="cl-banner-home col-md-12 bgazul ajuste">
	<div class="cont-artigos">
		<div class="col-md-6 texto_banner">
			<h4>Agencia Couve Limão</h4>
			<h2>Tudo o que você precisa para alcançar o próximo nível</h2>	
		</div>
		<div class="col-md-6">
			<img class="bghome" src="wp-content/themes/cl-lemonade/img/bghome.png">
		</div>
	</div>

</section>

<div class="cta1 container">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12 ctat">
					<h5>Junte-se a mais de 150.000 pessoas!</h5>
					<h3>Entre para nossa lista e receba conteúdos exclusivos!</h3>
				</div>
			</div>
		</div>
		<div class="col-md-6 ctaf">
			<div class="row">

				<div class="col-md-12">
					<form >
						<input id="tf-email-txt" class="tf-email" placeholder="&#xf003; Seu email" value="">
						<input type="submit"  value="Cadastrar" class="bt-env">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<section>
</section>

<div class="posts col-md-3">
	<?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=8' . '&paged='.$paged);

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div class="post col-md-3 scroll">

				<img class="thumb-artigos" style="background-color: <?php echo get_color_category(); ?>;" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

				<h5><?php get_categoria(); ?> </h5>

				<h2><a href="<?php the_permalink(); ?>" title="Leia mais"><?php the_title(); ?></a></h2>
				
			</div>
		<?php endwhile; ?>
	<div class="col-md-12" align="center">
			<nav id="nav-posts" >
				<a href="#">Leia mais</a>
			</nav>
	</div>
</div>


<?php get_footer(); ?>