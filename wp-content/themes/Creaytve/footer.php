<div class="clearfix"></div>
<footer class="clearfix">

<div class="bottom-footer clearfix centereds">
	<div class="container clearfix">
			&copy; <?php $the_year = date("Y"); echo $the_year; ?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
			
			<ul class="socials right clearfix">
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
</footer>
</div>
<!-- Load the scripts -->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5596160-21', 'owzzz.com');
  ga('send', 'pageview');

</script>
</body>
</html>