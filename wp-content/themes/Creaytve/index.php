<?php get_header(); ?>
		<div id="content" class="clearfix">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class('post clearfix'); ?>>
				<?php
						if(!get_post_format()) {
						   get_template_part('format', 'standard');
						} else {
						   get_template_part('format', get_post_format());
						};
					?>
				</article>
				
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( is_single () ) { ?>
				<?php if ('open' == $post->comment_status) { ?>
					<div class="comments">
						<?php comments_template(); ?>
					</div>
				<?php } ?>
			

			<?php } ?>
	
<?php if( playne_page_has_nav() ) : ?>
<!-- If there is pagination display load area -->
<div id="load" class="clearfix">
			<div class="insider clearfix">
					<div class="paged-nav"><?php current_paged(); ?></div>

					<?php if($link = get_next_posts_link()) { ?>
					<?php next_posts_link(__('<div class="post-nav-right off"><i class="icon-angle-right"></i></div>', 'playne')) ?>
					<?php } else { ?>
					<div class="post-nav-inactive off"><i class="icon-angle-right"></i></div>
					<?php } ?>
					<?php if($link = get_previous_posts_link()) { ?>
					<?php previous_posts_link(__('<div class="post-nav-left"><i class="icon-angle-left"></i></div>', 'playne')) ?>
					<?php } else { ?>
					<div class="post-nav-inactive"><i class="icon-angle-left"></i></div>
					<?php } ?>
			</div>
</div>

<?php endif; ?>
	
		</div>
<?php get_footer(); ?>