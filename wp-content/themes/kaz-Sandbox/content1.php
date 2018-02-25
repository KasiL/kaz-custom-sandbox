<div class="col-md-12">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <?php  echo 
                '<strong class="d-inline-block mb-2 text-success">' . the_category( ', ' ) .'</strong>
                <h3 class="mb-0"><a class="text-dark" href=" ' . get_the_permalink() . '">' .get_the_title() . '</a></h3>
                <p class="mb-1 text-muted">' . get_the_date() .'</p>
                <p class="card-text mb-auto"> ' . wp_trim_excerpt( get_the_excerpt() ) .'</p>'
            ?>
        </div>
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'thumbnail');
        } ?>
    </div>
</div>
