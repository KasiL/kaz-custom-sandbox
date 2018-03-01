<?php get_header(); ?>
<h1>This is my new custom theme</h1>
    <?php 
        if(have_posts()):
            while( have_posts() ): the_post(); ?>
                <div class="blog-post">
                    <h3><?php the_title(); ?></h3>
                    <small>Posted in: <?php the_category( ); ?></small>
                    <?php the_content(); ?>
                    <hr>
                </div>
            <?php endwhile;
        endif;
    ?>
<?php get_footer(); ?>