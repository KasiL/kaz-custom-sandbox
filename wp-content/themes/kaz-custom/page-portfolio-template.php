<?php 
/*
    Template Name: Portfolio Template
*/

get_header(); ?>
    <h1>Portfolio Template Title</h1>
    <?php 
        $args = [
            'post_type'     => 'portfolio',
            'post_per_page' => '3'
        ];
        $loop = new WP_Query( $args );

        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="portfolio-item">
                    <h3><?php the_title(); ?></h3>
                    <small>Posted in: <?php the_category(); ?></small>
                    <?php the_content(); ?>
                    <hr>
                </div>
            <?php endwhile;
        endif;
    ?>
<?php get_footer(); ?>