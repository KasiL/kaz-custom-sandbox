<?php get_header(); ?>
<h1>This is my new custom theme</h1>
    <?php 
        if(have_posts()):
            while( have_posts() ): the_post();
                get_template_part('content', get_post_format()); ?>
            <?php endwhile;
        endif;
    ?>
<?php get_footer(); ?>