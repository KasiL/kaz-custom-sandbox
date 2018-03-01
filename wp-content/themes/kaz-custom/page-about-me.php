<?php get_header(); ?>
<h2>Custom Template page</h2>
    <?php 
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
                <div class="blog-post">
                    <h3>I have a custom template: <?php the_title(); ?></h3>
                    <small>Posted in: <?php the_category(); ?></small>
                    <?php the_content(); ?>
                    <hr>
                </div>
            <?php endwhile;
            endif;
            ?>
<?php get_footer(); ?>