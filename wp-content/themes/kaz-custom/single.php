<?php get_header(); ?>

<?php 
    if ( have_posts() ):
        while ( have_posts() ): the_post(); ?>
            <article id= 'post <?php the_ID(); ?>' class='<?php post_class(); ?>'>
                <?php if( has_post_thumbnail()):
                    the_post_thumbnail( 'small' ); 
                endif ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
    endif; 
?>
<?php 
    if( get_field('info_box_content') ){
        $image = get_field('info_box_bg_image');

        echo '<pre>';
        print_r( get_the_category());
        print_r( the_category());
        echo '</pre>';

        echo '<div class="info-box">
            <div class="title-wrapper">
                <h2 class ="info-box-title">'
                    . get_field('info_box_title') .
        '</h2>
            </div>
            <div class="title-content" style="background-image: url(' . $image['url'] . ');"> '
                . get_field('info_box_content') .'
            </div>
        </div>';
    }; 
?>
<?php get_footer( ); ?>