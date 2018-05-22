<?php get_header(); ?>

<?php 
    if ( have_posts() ):
        while ( have_posts() ): the_post(); ?>
            <article id= 'post <?php the_ID(); ?>' class='<?php post_class(); ?>'>
                <?php if( has_post_thumbnail()):
                    the_post_thumbnail( 'small' ); 
                endif ?>
                <h1><?php the_title(); ?></h1>
                <small><?php single_cat_title(); ?></small>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
    endif; 
?>
<?php 
    if( get_field('info_box_content') ){
        $image = get_field('info_box_bg_image');
        $theTitle = get_field('info_box_title');

        echo '<pre>' . var_export($image, true) . '</pre>';
        ?>
        
        <div class="info-box">
            <div class="title-wrapper">
                <h2 class ="info-box-title">
                    <?php $theTitle; ?>
                </h2>
            </div>
            <div class="title-content" style="background-image: url(' <?php echo $image['url']; ?> ')"> 
                <?php get_field('info_box_content'); ?>
            </div>
        </div>
    <?php }; ?>
<?php get_footer( ); ?>