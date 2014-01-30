						<div class="entry-wrap">
						<div class="entry-content">
							<header class="clearfix">
								<?php if(is_single() || is_page()) { ?>
								<?php } else { ?>					
									<h2 class="entry-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h2>
									<div class="date-title"><?php echo get_the_date(); ?> <span class="right-float"><?php if(comments_open()) { ?><?php comments_popup_link(__('0 comments', 'playne'), __('1 comment', 'playne'), __('% comments', 'playne'), 'comments-link', 'playne' ); ?><?php } ?> <?php if ( is_sticky () ) { ?><i class="icon-pushpin lefted"></i><?php } ?></span></div>
								<?php } ?>
							</header>

							<div class="post-content">	
								<?php if ( has_post_thumbnail() ) { ?>
								<a class="featured-image" href="<?php echo get_post_meta($post->ID, 'link', true) ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail( 'large-image' ); ?>
								</a>
								<?php } ?>
					
								<?php if(is_search() || is_archive()) { ?>
									<div class="excerpt-more">
										<?php playne_readmore(); ?>
									</div>
								<?php } else { ?>
									<?php the_content(''); ?>
									<div class="centered">
										<a href="<?php echo get_post_meta($post->ID, 'link', true) ?>" class="more-link" title="<?php _e('visit','playne'); ?>"><?php _e('visit','playne'); ?>
										</a>
									</div>	
									
									<?php if(is_single() || is_page()) { ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php } ?>
									
								<?php } ?>
							</div>
						</div>
				</div>