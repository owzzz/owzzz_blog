						<!-- Check if there is a video or image -->
						<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
						<div class="fitvid">
							<?php echo get_post_meta($post->ID, 'video', true) ?>
						</div>
						<?php } else { ?>
					
				
						<?php if ( has_post_thumbnail() ) { ?>
							<a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail( 'large-image' ); ?>
							</a>
						<?php } ?>
					
						<?php } ?>
						<div class="entry-wrap">
						<div class="entry-content">
								<?php if(is_page()) { ?>
								<?php } else { ?>	
							<header>				
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<div class="date-title"><?php echo get_the_date(); ?> <span class="right-float"><?php if(comments_open()) { ?><?php comments_popup_link(__('0 comments', 'playne'), __('1 comment', 'playne'), __('% comments', 'playne'), 'comments-link', 'playne' ); ?><?php } ?> <?php if ( is_sticky () ) { ?><i class="icon-pushpin lefted"></i><?php } ?></span></div>
							</header>
								<?php } ?>
								
							<div class="post-content">
								<?php if(is_search() || is_archive()) { ?>
									<div class="excerpt-more">
										<?php playne_readmore(); ?></div>
								<?php } else { ?>
									<!-- Post content -->
									<?php the_content(''); ?>																	
										<?php if( strpos($post->post_content, '<!--more-->') >= 1 ) { ?>																	
										<div class="centered">
											<a href="<?php the_permalink(); ?>" class="more-link" title="<?php _e('read more','playne'); ?>"><?php _e('Read more','playne'); ?></a>
										</div>
										<?php } ?>	
									<?php if(is_single() || is_page()) { ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php } ?>
									
									<?php if(is_single()) { ?>
										<ul class="meta">
											
											<?php $posttags = get_the_tags(); if ($posttags) { ?>
												<li><?php the_tags('', ', ', ''); ?></li>
											<?php } ?>
											
										</ul>									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>