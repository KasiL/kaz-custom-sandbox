<!-- the blog post formatting -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>
    <small>Posted in:
        <?php the_category(); ?>
    </small>
    <div class="row">
        <?php if(has_post_thumbnail() ) : ?>
        <div class="col-sm-4">
            <?php the_post_thumbnail('thumbnail'); ?>

        </div>
        <div class="col-sm-8">
            <?php the_excerpt(); ?>
        </div>
        <?php else: ?>
        <div class="col-sm-12">
            <?php the_excerpt(); ?>
        </div>
        <?php endif ?>
    </div>
</article>
<hr>