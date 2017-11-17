<?php get_header(); ?>



<section class="cl-banner-post col-md-12 bgazul">
	<div class="cont-artigos col-md-12">
		<h4>Artigos Memoráveis</h4>
		<h2>Tudo o que você precisa para alcançar o próximo nível</h2>
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

 <div class="categorias col-md-12">
	<?php 
	

	get_categorias(); ?>
</div> 
<div class="posts col-md-3">
	<?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=18' . '&paged='.$paged);

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div class="post col-md-3">

				<img class="thumb-artigos" style="background-color: <?php echo get_color_category(); ?>;" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

				<h5><?php get_categoria(); ?> </h5>

				<h2><a href="<?php the_permalink(); ?>" title="Leia mais"><?php the_title(); ?></a></h2>
				
			</div>
		<?php endwhile; ?>
</div>
<div class="col-md-12">

	<article>


		<?php if ($paged > 1) ?>

		<nav id="nav-posts">
			<?php echo paginate_links( $args ); ?>
		</nav>

		<?php wp_reset_postdata(); ?>

	</article>
</div>
<?php get_footer(); ?>