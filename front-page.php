<?php include "header_principal.php" ?>



<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-home.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-cta1.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-categorias.css">



<section class="cl-banner-home col-md-12 bgazul">
	<div class="cont-home">
		<div class="col-md-6 txt-home">
			<h4>Agência Couve Limão</h4>
			<h3>Entre para nossa lista e receba conteúdos exclusivos!</h3>
		</div>
		<div class="col-md-6">
			<img class="cl-thumbnail-home" src="<?php echo get_template_directory_uri(); ?>/img/imghome.png" alt="<?php the_title(); ?>">
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
<div class="opcao">
	<div class="row">
		<div class="divisoria col-md-5 col-sm-5">
			<article class="vdb-call vertical right margin-top-50">
				<h3>Estude gratuitamente <br><small>através do nosso blog</small></h3>
				<p>Mais de 9 milhões de pessoas já aprenderam sobre marketing digital através dos nossos posts, e-books, infográficos, videos e muito mais.</p>
				<a href="#" > Quero conhecer</a>
			</article>
		</div>
		<div class=" divisor col-md-2 col-sm-2">
			<div class="vdb-divider vertical circle or margin-top-50"></div>
		</div>
		<div class="divisoria col-md-5 col-sm-5">
			<article class="vdb-call vertical left margin-top-50">
				<h3>Alcance os melhores <br><small>resultados com nossos cursos</small></h3>
				<p>Somos especialistas em produção de conteúdo e engajamento de audiência. Estude todos nossos segredos em profundidade.</p>
				<a href="https://viverdeblog.com/cursos/" class="button medium rpp full orange"> Quero conhecer</a>
			</article>
		</div>
	</div>
</div>
<div class="categorias col-md-12" align="center">
	<ul>
		<li><a href="#"><span class="itemc verde">Mais Leads</span></a></li>
		<li><a href="#"><span class="itemc amarelo">Mais Clientes</span></a></li>
		<li><a href="#"><span class="itemc vermelho">Mais Vendas</span></a></li>
		<li><a href="#"><span class="itemc azul">Mais Trafego</span></a></li>
		<li><a href="#"><span class="itemc rosa">Mais Presença</span></a></li>
	</ul>
</div> 
<div class="posts-h col-md-12">
	<?php 
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('posts_per_page=4' . '&paged='.$paged);

	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	<div class="post-h col-md-3">

		<img class="thumb-home" style="background-color: <?php echo get_color_category(); ?>;" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

		<h5><?php get_categoria(); ?> </h5>

		<h2><a href="<?php the_permalink(); ?>" title="Leia mais"><?php the_title(); ?></a></h2>

	</div>
<?php endwhile; ?>
</div>

<div class="ebooks">
	

</div>



<?php get_footer(); ?> 