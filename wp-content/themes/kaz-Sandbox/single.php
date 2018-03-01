<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-12">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; endif; 
				echo '<nav>
					<ul class="pager">
						<li> Test' . next_posts_link( 'Previous' ) . '</li>
						<li>' . previous_posts_link( 'Next' ) . '</li>
					</ul>
				</nav>'
				
			?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
<?php get_footer(); ?>