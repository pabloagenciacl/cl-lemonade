<?php get_header(); ?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="cl-banner-post" style="background-color: <?php echo get_color_category(); ?>;">
        <img class="cl-banner-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <div class="large-12 columns">
            <div class="cont-titulo">
                <h4><?php get_categoria(); ?> </h4>
                <h2><?php the_title(); ?></h2>

                <?php echo get_avatar( get_the_author_meta('user_email'), $size = '50', $default, $alt, array( 'class' => 'avt' ) ); ?>
                <h3>Escrito por: <span class="neg"><?php the_author_meta( 'display_name'); ?></span><br><br><em><?php echo ucfirst(get_the_time('l, j \d\e F \d\e Y')); ?></em></h3>    
            </div>
        </div>
    </section>
    <section class="cta1">
        <h5>Junte-se a mais de 150.000 <br> pessoas!</h5>
        <h3>Entre para nossa lista e receba conteúdos exclusivos!</h3>
        <div class="col-md-6">
            <form align="center">
                    <input class="tf-email" type="email" name="email" placeholder="Qual seu melhor email?" value="" required="">
                    <input type="submit"  value="Cadastrar email" class="bt-env">
            </form>
        </div>
    </section>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <hr>
    <?php comments_template(); ?>

<?php endwhile; else: ?>
<p><?php _e('Desculpe, essa página não existe.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>