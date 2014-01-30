<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title><?php wp_title( '-', true, 'right' ); ?><?php echo bloginfo( 'name' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
	
	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
	document.documentElement.className = 'js';
	</script>
	
	<?php if ( get_theme_mod('theme_customizer_favicon') ) { ?>
	<!-- Get the favicon -->
	<link rel="icon" type="image/png" href="<?php echo '' .get_theme_mod( 'theme_customizer_favicon', '' )."\n";?>" />
	<?php } ?>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrap">

<!-- Get the hidden area above the main header -->
<div id="overlay" class="clearfix">
	    <div class="overlay-inner clearfix">
			<nav role="navigation" class="header-nav">
				<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav clearfix')); ?>
				<?php if (get_theme_mod( 'theme_customizer_hiddenheader-text', '' )) { ?><?php } ?>
			</nav>		    

				<ul class="socials clearfix right">
				<?php if ( get_theme_mod('theme_customizer_footerfacebook') ) { ?>
				<li><a class="facebook" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerfacebook', '' )."\n");?>"><i class="icon-facebook"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footertwitter') ) { ?>
				<li><a class="twitter" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertwitter', '' )."\n");?>"><i class="icon-twitter"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footeryoutube') ) { ?>
				<li><a class="google" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footeryoutube', '' )."\n");?>"><i class="icon-google-plus"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerlinkedin') ) { ?>
				<li><a class="linkedin" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerlinkedin', '' )."\n");?>"><i class="icon-linkedin"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footertumblr') ) { ?>
				<li><a class="tumblr" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footertumblr', '' )."\n");?>"><i class="icon-tumblr"></i></a></li>
				<?php } ?>

				<?php if ( get_theme_mod('theme_customizer_footerflickr') ) { ?>
				<li><a class="flickr" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerflickr', '' )."\n");?>"><i class="icon-flickr"></i></a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footerdribbble') ) { ?>
				<li><a class="dribbble" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerdribbble', '' )."\n");?>"><i class="icon-dribbble"></i></a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footerinstagram') ) { ?>
				<li><a class="instagram" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerinstagram', '' )."\n");?>"><i class="icon-instagram"></i></a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footermail') ) { ?>
				<li><a class="mail" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footermail', '' )."\n");?>"><i class="icon-envelope"></i></a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footerskype') ) { ?>
				<li><a class="skype" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerskype', '' )."\n");?>"><i class="icon-skype"></i></a></li>
				<?php } ?>
				
				<?php if ( get_theme_mod('theme_customizer_footerrss') ) { ?>
				<li><a class="rss" href="<?php echo esc_url('' .get_theme_mod( 'theme_customizer_footerrss', '' )."\n");?>"><i class="icon-rss"></i></a></li>
				<?php } ?>
			</ul>
		</div>
</div>

<header id="header" class="clearfix">

	<div class="header-top">
		<div class="header-inner clearfix">
		<?php if ( get_theme_mod('theme_customizer_logo') ) { ?>
			<!-- Get the Logo image -->
	    	<div class="logo-image">
				<a href="<?php echo home_url( '/' ); ?>">
					<img class="logo fadeInY animated" src="<?php echo  esc_url('' .get_theme_mod( 'theme_customizer_logo', '' )."\n");?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
		<?php } else { ?>
			<!-- Get the Logo text -->
	    	<h1 class="logo-text flipInY animated">
	    		<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a>
	    	</h1>
		<?php } ?>
			<!-- Get the hidden toggles -->
			<span class="hidden-trigger"> 
				<nav role="navigation" class="header-nav2">
				<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav2 clearfix')); ?>
				<?php if (get_theme_mod( 'theme_customizer_hiddenheader-text', '' )) { ?><?php } ?>
				</nav>
				<a href="#" id="drawer-toggle"><i class="icon-reorder"></i></a> 
				<a href="#" id="search-toggle"><i class="icon-search"></i></a> 
				<a href="#" id="widget-toggle"><i class="icon-list-alt"></i></a>
			</span>
		</div>	
	</div>

	<?php if (is_404()) { ?>
	<div id="hero">
	<?php } else { ?>
	<div id="hero" <?php if ( get_post_meta($post->ID, '_playnes_colorpickerz', true) || get_post_meta($post->ID, '_playnes_imagepickerz', true) ) { ?>style="<?php } ?> <?php if ( get_post_meta($post->ID, '_playnes_imagepickerz', true) ) { ?><?php global $post; $imagepickerz = get_post_meta( $post->ID, '_playnes_imagepickerz', true ); echo "background:url($imagepickerz) no-repeat center center; background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;" ?><?php } ?><?php if ( get_post_meta($post->ID, '_playnes_colorpickerz', true) ) { ?><?php global $post; $colorpickerz = get_post_meta( $post->ID, '_playnes_colorpickerz', true ); echo "background-color:$colorpickerz"; ?>;<?php } ?> <?php if ( get_post_meta($post->ID, '_playnes_colorpickerz', true) || get_post_meta($post->ID, '_playnes_imagepickerz', true) ) { ?>"<?php } ?>>
	<?php } ?>

		<div class="heros-inner clearfix">

			<!-- Get the widgets -->
			<div class="hero-widget-inner clearfix">
				<div id="footer" class="clearfix">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets') ) : else : ?>		
				<?php endif; ?>
				<?php dynamic_sidebar('footer-one'); ?>
				<?php dynamic_sidebar('footer-two'); ?>
				<?php dynamic_sidebar('footer-three'); ?>
				</div>
			</div>

			<!-- Get the search area -->
			<div class="hero-search-inner clearfix">
				<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
					<?php if (get_theme_mod( 'theme_customizer_searchheader', '' )) { ?><?php echo '' .get_theme_mod( 'theme_customizer_searchheader', '' )."\n";?><?php } ?>
				</h1>

				<?php if (get_theme_mod( 'theme_customizer_searchtext', '' )) { ?><p class="inner"><?php echo '' .get_theme_mod( 'theme_customizer_searchtext', '' )."\n";?></p><?php } ?>
				<?php get_search_form();?>
			</div>

			<!-- Get the intro text and or buttons -->
			<div class="hero-inner clearfix">

					<?php if (is_front_page() && !is_home() && !is_page_template('portfolio.php') ) { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php if (get_theme_mod( 'theme_customizer_headertextline', '' )) { ?><?php echo '' .get_theme_mod( 'theme_customizer_headertextline', '' )."\n";?><?php } ?>
						</h1>
						
						<p><?php echo '' .get_theme_mod( 'theme_customizer_movingtextone', '' )."\n";?></p>

						<?php if (get_theme_mod( 'theme_customizer_buttontext', '' )) { ?>
						<div class="button accent">
						<a href="<?php echo '' .get_theme_mod( 'theme_customizer_buttonurl', '' )."\n";?>"><?php echo '' .get_theme_mod( 'theme_customizer_buttontext', '' )."\n";?></a>
						</div>
						<?php } ?>
		
					<?php } else if (is_home() ) { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php echo '' .get_theme_mod( 'theme_customizer_headertextlineblogheader', '' )."\n";?> 
						</h1>
				
						<div class="inner">
						<p <?php if ( get_post_meta($post->ID, '_playnes_colortext', true)) { ?>style="<?php global $post; $colortext = get_post_meta( $post->ID, '_playnes_colortext', true ); echo "color:$colortext"; ?>"<?php } ?>><?php echo '' .get_theme_mod( 'theme_customizer_headertextlineblogtwo', '' )."\n";?></p>

						<?php if (get_theme_mod( 'theme_customizer_buttontextblog', '' ) && get_theme_mod( 'theme_customizer_buttonurlblog', '' ) ) { ?>
						<div class="button accent">
						<a href="<?php echo '' .get_theme_mod( 'theme_customizer_buttonurlblog', '' )."\n";?>"><?php echo '' .get_theme_mod( 'theme_customizer_buttontextblog', '' )."\n";?></a>
						</div>
						<?php } else if (get_theme_mod( 'theme_customizer_buttontextblog', '' ) && !get_theme_mod( 'theme_customizer_buttonurlblog', '' ) ) { ?>
						<div class="button accent">
						<a href="#content" id="link"><?php echo '' .get_theme_mod( 'theme_customizer_buttontextblog', '' )."\n";?></a>
						</div>
						<?php } else { ?>
						<?php } ?>

						</div>
			
					<?php } else if (is_404() ) { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php _e('404 Error', 'playne'); ?>
						</h1>
				
						<div class="inner">
						<p <?php if ( get_post_meta($post->ID, '_playnes_colortext', true)) { ?>style="<?php global $post; $colortext = get_post_meta( $post->ID, '_playnes_colortext', true ); echo "color:$colortext"; ?>"<?php } ?>><?php _e('The page you are looking for could not be found. Search what you are looking for or check out my latest work below.','playne'); ?></p>
						<?php get_search_form();?>
						</div>

					<?php } else if(is_search()) { ?>
						<h1 class="intro"><?php _e('Results for','playne'); ?> "<?php the_search_query() ?>"</h1>
					
					<?php } else if(is_tag()) { ?>
						<h1 class="intro"><?php _e('Archive:','playne'); ?> <?php single_tag_title(); ?></h1>
					
					<?php } else if(is_day()) { ?>
						<h1 class="intro"><?php _e('Archive:','playne'); ?> <?php echo get_the_date(); ?></h1>
					
					<?php } else if(is_month()) { ?>
						<h1 class="intro"><?php _e('Archive:','playne'); ?> <?php echo get_the_date('F Y'); ?></h1>
					
					<?php } else if(is_year()) { ?>
						<h1 class="intro"><?php _e('Archive:','playne'); ?> <?php echo get_the_date('Y'); ?></h1>
					
					<?php } else if(is_category()) { ?>
						<h1 class="intro"><?php _e('Archive:','playne'); ?> <?php single_cat_title(); ?></h1>
					
					<?php } else if(is_author()) { ?>
						<h1 class="intro"><?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name; ?></h1>

					<?php } else if ( is_page_template('portfolio.php') ) { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php if(get_theme_mod('theme_customizer_portfoliotextheader')) { ?><?php echo '' .get_theme_mod( 'theme_customizer_portfoliotextheader', '' )."\n";?><?php } else { ?><?php the_title('') ?><?php } ?>
						</h1>

						<?php if(get_theme_mod( 'theme_customizer_portfoliotext')) { ?><p class="offed"><?php echo '' .get_theme_mod( 'theme_customizer_portfoliotext', '' )."\n";?></p><?php } ?>

						<div class="inner">
						<div id="filter-hide">
							<?php
				 			$terms = get_terms("tagportfolio");
							$count = count($terms);
				 			echo '<ul id="portfolio-filter">';
				 			echo '<li><a href="#" class="selected" data-filter="*" title="">All</a></li>';
				 				if ( $count > 0 ){
								foreach ( $terms as $term ) {
								$termname = strtolower($term->name);
								$termname = str_replace(' ', '-', $termname);
								echo '<li><a href="#" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
								}
				 				}
				 			echo "</ul>";
							?>
						</div>
						</div>

					<?php } else if ( get_body_class('single-project') && is_single() ) { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php wp_title(''); ?> 
						</h1>

						<div class="inner singleoffset">
							<?php
						$terms = get_the_terms( $post->ID, 'tagportfolio' );
						if ( $terms && ! is_wp_error( $terms ) ) :
							$links = array();
							foreach ( $terms as $term )
							{
								$links[] = $term->name;
							}
							$links = str_replace(' ', ' ', $links);
							$tax = join( " ", $links );
						else :
							$tax = '';
						endif;
						?>
						<p <?php if ( get_post_meta($post->ID, '_playnes_colortext', true)) { ?>style="<?php global $post; $colortext = get_post_meta( $post->ID, '_playnes_colortext', true ); echo "color:$colortext"; ?>"<?php } ?>>


						<i class="icon-folder-open"></i> <?php echo($tax); ?><?php the_category(' '); ?> <?php if (is_sticky()) { ?> <i class="icon-pushpin lefty"></i> <?php } ?>
						</p>
						
						<?php if(get_adjacent_post(false, '', false)) { ?>
							<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="post-nav-right off"><i class="icon-angle-right"></i></a>
						<?php } else { ?><span class="post-nav-inactive off"><i class="icon-angle-right"></i></span><?php } ?>

						<?php if(get_adjacent_post(false, '', true)) { ?>
							<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="post-nav-left"><i class="icon-angle-left"></i></a>
						<?php } else { ?><span class="post-nav-inactive"><i class="icon-angle-left"></i></span><?php } ?>
						
						</div>
					
					<?php } else if (is_single()) { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php the_title(); ?> 
						</h1>

						<div class="inner">
						<p <?php if ( get_post_meta($post->ID, '_playnes_colortext', true)) { ?>style="<?php global $post; $colortext = get_post_meta( $post->ID, '_playnes_colortext', true ); echo "color:$colortext"; ?>"<?php } ?>><?php global $post; $hdrtext = get_post_meta( $post->ID, '_playnes_hdrtext', true ); echo "$hdrtext"; ?></p>
						</div>

					<?php } else { ?>
						<h1 class="intro" <?php if ( get_post_meta($post->ID, '_playnes_colorheadertext', true)) { ?>style="<?php global $post; $colorheader = get_post_meta( $post->ID, '_playnes_colorheadertext', true ); echo "color:$colorheader"; ?>"<?php } ?>>
						<?php the_title(); ?> 
						</h1>

						<div class="inner">
						<p <?php if ( get_post_meta($post->ID, '_playnes_colortext', true)) { ?>style="<?php global $post; $colortext = get_post_meta( $post->ID, '_playnes_colortext', true ); echo "color:$colortext"; ?>"<?php } ?>><?php global $post; $hdrtext = get_post_meta( $post->ID, '_playnes_hdrtext', true ); echo "$hdrtext"; ?></p>
						</div>
					<?php } ?>
					
				</div>
		</div>
	</div>
</header>