<?php
/*
Template Name: Portfolio Standard
*/
?>  
<?php get_header(); ?>

			
<div id="full">
	<div class="content-posts-full">
	
			<!-- Create the filter menu -->

			<div id="portfolio-wrapper">

			<?php
				$loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => -1));
				$count =0;
			?>
			<?php
				 $terms = get_terms("tagportfolio");
				 $count = count($terms);
				 if ( $count > 0 ){
						foreach ( $terms as $term ) {
							$termname = strtolower($term->name);
							$termname = str_replace(' ', '-', $termname);
							}
				 }
			?>
				<!-- Portfolio items list -->
				<ul id="portfolio-list">
				<?php if ( $loop ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php
						$terms = get_the_terms( $post->ID, 'tagportfolio' );
						if ( $terms && ! is_wp_error( $terms ) ) :
							$links = array();
							foreach ( $terms as $term )
							{
								$links[] = $term->name;
							}
							$links = str_replace(' ', '-', $links);
							$tax = join( " ", $links );
						else :
							$tax = '';
						endif;
						?>
						<?php $infos = get_post_custom_values('_url'); ?>
				
	<li class="homepage-item <?php echo strtolower($tax); ?>">
		<a class="featuredimage loadcontent" href="<?php the_permalink(); ?>">	
		<?php the_post_thumbnail( 'large-image' ); ?>
		
		<div class="overlay">
			<div class="overlay-inner">
					<div class="caption">
						<div class="slide-in">
							<span><?php (the_title()) ?></span>
							<span class="sub"><?php echo ($term->name); ?> <i class="icon-external-link"></i></span>
						</div>
					</div>
			</div>
		</div>

	</a> 
</li>
					<?php endwhile; else: ?>
					<div class="error-not-found">Sorry, no portfolio entries found :(.</div>
				<?php endif; ?>
				</ul>
				
			</div> <!-- end #portfolio-wrapper-->
			<!-- Portfolio filterable jQuery -->
	</div>
</div>
<?php get_footer(); ?>