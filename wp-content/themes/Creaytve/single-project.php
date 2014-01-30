<?php get_header(); ?>

			<?php
			$attachments = get_children(
    			array(
    			'post_type' => 'attachment',
    			'post_mime_type' => 'image',
    			'post_parent' => $post->ID
    			));
			 ?>

 			<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
				<div class="fitvid">
					<?php echo get_post_meta($post->ID, 'video', true) ?>
				</div>


			<?php } else if(count($attachments) > 1) { ?>

				<div class="flexslider-container">
        			<div class="flexslider">
            			<ul class="slides">
                			<?php
                			$single_gallery_attachments = get_posts(
                			array(
                    			'orderby' => 'menu_order',
                    			'post_type' => 'attachment',
                    			'post_parent' => get_the_ID(),
		    					'post_thumbnail' => get_the_ID(),
		    					'post_excerpt' => get_the_ID(),
                    			'post_mime_type' => 'image',
                    			'post_status' => null,
                    			'posts_per_page' => -1
                				)
            				); 

                			foreach ( $single_gallery_attachments as $single_gallery_attachment ) :
                			if( get_post_meta($single_gallery_attachment->ID, 'be_rotator_include', true) !== '1' ) {
                			?>
                
                			<li class="slide">
								<img src="<?php echo ( wp_get_attachment_url( $single_gallery_attachment->ID, 'full' )); ?>" alt="<?php echo the_title(); ?>" />
							</li>
                			<?php } endforeach; ?>
            			</ul>
        			</div>
    			</div>

   			<?php } else { ?>

   			<?php the_post_thumbnail( 'large-image' ); ?>
   			<?php } ?>

		<div id="content">
			<div class="content-posts">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class('post'); ?>>
					<div class="entry-wrap">

						<div class="entry-content">		
								
									<?php the_content(); ?>

						</div>
					</div>
						
				</article>
			</div>	

			
		</div>

				<?php endwhile; ?>
				<?php endif; ?>
<?php get_footer(); ?>