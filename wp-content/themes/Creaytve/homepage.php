<?php
/*
Template Name: Custom homepage
*/
?>  
<?php get_header(); ?>
<ul id="homepage" class="clearfix">

			<?php
				$loop = new WP_Query();			
 		 		$loop->query('showposts=6&post_type=project'.'&paged='.$paged); 
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

			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<!-- Homepage items list -->
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

<li class="homepage-item cbp-so-side cbp-so-side-left">
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
					<div class="error-not-found">Sorry, no homepage entries found :(.</div>
				<?php endif; ?>

</ul>												

<?php get_footer(); ?>