<?php get_header(); ?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="cl-banner-post" style="background-color: <?php echo get_color_category();?>;">
            <div class="large-12 columns">
                <h1><?php the_title(); ?></h1>
            </div>


        <p><em><?php echo ucfirst(get_the_time('l, j \d\e F \d\e Y')); ?></em></p>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <hr>
    <?php comments_template(); ?>

<?php endwhile; else: ?>
<p><?php _e('Desculpe, essa página não existe.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>