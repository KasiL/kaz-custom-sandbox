<?php get_header(); ?>
<h2>Custom Template page</h2>
    <?php 
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="blog-post">
                    <h3>I have a custom 'About Me' template: <?php the_title(); ?></h3>
                    <p class="bonus-info">Also, I work</p>
                    <?php the_content(); ?>
                    <hr>
                </div>
            <?php endwhile;
        endif;
    ?>
<?php get_footer(); ?>