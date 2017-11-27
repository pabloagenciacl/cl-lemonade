<?php include "header_principal.php" ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-cta1.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-post.css">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="cl-banner-post col-md-12 " style="background-color: <?php echo get_color_category(); ?>;">

        <img class="cl-banner-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        
        <div class="cont-titulo col-md-12">

            <h4><?php get_categoria(); ?> </h4>
            <h2><?php the_title(); ?></h2>

            <div class="autor col-md-4">
                <?php echo get_avatar( get_the_author_meta('user_email'), $size = '50', $default, $alt, array( 'class' => 'avt' ) ); ?>
                <h3>Escrito por: <?php the_author_meta( 'display_name'); ?><br><em><?php echo ucfirst(get_the_time('l, j \d\e F \d\e Y')); ?></em></h3>
            </div>    
        </div>
    </section>

    <section class="cta1">
            <div class="col-md-6 ctat">
                    <div class="col-md-12 ">
                        <h5>Junte-se a mais de 150.000 pessoas!</h5>
                        <h3>Entre para nossa lista e receba conteúdos exclusivos!</h3>
                    </div>
            </div>
            <div class="col-md-6 ctaf">
                    <div class="col-md-12">
                        <form >
                            <input id="tf-email-txt" class="tf-email" placeholder="&#xf003; Seu email" value="">
                            <input type="submit"  value="Cadastrar" class="bt-env">
                        </form>
                    </div>
            </div>
    </section>


<!-- 
    <div class="entry-content col-md-12">
        <?php the_content(); ?>
    </div> -->

    
   <!--  <hr>
    <div class="comentarios">
     <?php if (comments_open()) : ?>
        <div id="disqus_thread"></div>
        <script>
            var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            (function() {  // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                
                s.src = '//couve-limao.disqus.com/embed.js';
                
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Por favor habilite o JavaScript para ver os <a href="http://disqus.com/?ref_noscript">comentários.</a></noscript>
    <?php endif; // comments_open ?>
</div> -->
<?php endwhile; else: ?>
<p><?php _e('Desculpe, essa página não existe.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>