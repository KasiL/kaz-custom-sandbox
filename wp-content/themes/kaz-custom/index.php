<?php get_header(); ?>
<h1>This is my new custom theme</h1>
<div class="row">
    <div class="col-sm-8">
        <?php 
            if(have_posts()):
                while( have_posts() ): the_post();
                    get_template_part('content', get_post_format()); ?>
        <?php endwhile;
                endif;
            ?>
    </div>
    <div class="col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>