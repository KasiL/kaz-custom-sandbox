<?php get_header(); ?>
<h1>The Home Page (page-home-page)</h1>
<div class="row">
        <?php 
            $args = array(
                'type'              => 'post',
                'posts_per_page'    => 3
            );
            $lastBlog = new WP_Query($args);

            if ($lastBlog->have_posts()) :
                while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>
                    <div class ="col-sm-4" >
                        <?php get_template_part('content', 'featured'); ?>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>

    <div class="col-sm-8">
        <?php 
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('content', get_post_format());
                endwhile;
            endif;
        ?>
    </div>
    <div class="col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>