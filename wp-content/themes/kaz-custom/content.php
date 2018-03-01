<!-- the blog post formatting -->
<div class="blog-post">
    <?php the_post_thumbnail('thumbnail'); ?>
    <h3><?php the_title(); ?></h3>
    <small>Posted in: <?php the_category(); ?></small>
    <?php the_excerpt(); ?>
    <hr>
</div>