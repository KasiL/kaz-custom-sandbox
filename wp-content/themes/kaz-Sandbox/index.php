<?php get_header(); ?>
<div class="row">
    <?php get_template_part('content1', get_post_format()); ?>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
