
    <div class="col-md-8">
    
        <?php
            //can I wrap this in a function and call it in the card section?

            $args = $arrayName = array(
                'post_type' => 'post',
                // 'category_name ' => 'cat'
            );
            
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                    while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            
                        echo '<li>
                            <h3 class="blogTitle"><a href="'. get_the_permalink() . '" >' . get_the_title() .'</a></h3>
                            <p>' . get_the_date() .'</p>
                            <p>' . get_the_excerpt() .'</p>
                            </li>';
                    }
                echo '</ul>';
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
                echo('nada');
            }
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">Post title</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="http://www.placehold.it/250x250" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>
