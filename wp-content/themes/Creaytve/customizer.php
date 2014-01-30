<?php
 
add_filter( 'customize_register', 'theme_customizer_register' );

function theme_customizer_register($wp_customize) {

	class WP_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}	
	//Section Style Options

	$wp_customize->add_section( 'theme_customizer_basic', array(
		'title' => __( 'Logo image', 'section' ),
		'priority' => 100,
		'description'    => sprintf( __('Upload a logo image which will replace the logo text.','playne'))
	) );
	

	
	//Logo Image
	$wp_customize->add_setting( 'theme_customizer_logo', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_logo', array(
		'label' => __( 'Logo Upload', 'section' ),
		'section' => 'theme_customizer_basic',
		'settings' => 'theme_customizer_logo'
	) ) );

	//Favicon Image
	$wp_customize->add_section( 'theme_customizer_favicon', array(
		'title' => __( 'Favicon image', 'section' ),
		'priority' => 120,
		'description'    => sprintf( __('Upload a favicon for your webpage.','playne'))
	) );
	
	$wp_customize->add_setting( 'theme_customizer_favicon', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_favicon', array(
		'label' => __( 'Favicon Upload', 'section' ),
		'section' => 'theme_customizer_favicon',
		'settings' => 'theme_customizer_favicon'
	) ) );
	
	//Footer social buttons
	$wp_customize->add_section( 'theme_customizer_footersocial', array(
		'title' => __( 'Social icons', 'section' ),
		'priority' => 105,
		'description'    => sprintf( __('These are the social icons that appear inside the header area and the footer area. If they are left blank they will not display.','playne')) 
	) );

	$wp_customize->add_setting( 'theme_customizer_footerfacebook', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerfacebook', array(
		'label' => __( 'Facebook link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerfacebook'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footeryoutube', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footeryoutube', array(
		'label' => __( 'Google link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footeryoutube'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertwitter', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertwitter', array(
		'label' => __( 'Twitter link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footertwitter'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertumblr', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertumblr', array(
		'label' => __( 'Tumblr link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footertumblr'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerflickr', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerflickr', array(
		'label' => __( 'Flickr link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerflickr'
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_footerdribbble', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerdribbble', array(
		'label' => __( 'Dribbble link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerdribbble'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerlinkedin', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerlinkedin', array(
		'label' => __( 'Linkedin link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerlinkedin'
	) ) );
	
		$wp_customize->add_setting( 'theme_customizer_footerinstagram', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerinstagram', array(
		'label' => __( 'Instagram link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerinstagram'
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_footermail', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footermail', array(
		'label' => __( 'Mail link (mailto:youremail@mail.com)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footermail'
	) ) );
	
		$wp_customize->add_setting( 'theme_customizer_footerskype', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerskype', array(
		'label' => __( 'Skype link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerskype'
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_footerrss', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerrss', array(
		'label' => __( 'RSS link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocial',
		'settings' => 'theme_customizer_footerrss'
	) ) );

	$wp_customize->add_section( 'theme_customizer_searchbox', array(
		'title' => __( 'Search area', 'section' ),
		'priority' => 114,
		'description'    => sprintf( __('This is the text and intro header for the hidden search toggle area.','playne'))
	) );

	$wp_customize->add_setting( 'theme_customizer_searchheader', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_searchheader', array(
		'label' => __( 'Search header text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_searchbox',
		'settings' => 'theme_customizer_searchheader',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_searchtext', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_searchtext', array(
		'label' => __( 'Search text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_searchbox',
		'settings' => 'theme_customizer_searchtext',
		'priority' => 2
	) ) );


	//portfolio text

	$wp_customize->add_section( 'theme_customizer_portfoliobox', array(
		'title' => __( 'Portfolio Header', 'section' ),
		'priority' => 116,
		'description'    => sprintf( __('This is the intro text for the Portfolio page','playne'))
	) );

	$wp_customize->add_setting( 'theme_customizer_portfoliotextheader', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_portfoliotextheader', array(
		'label' => __( 'Portfolio intro header', 'section' ),
		'section' => 'theme_customizer_portfoliobox',
		'settings' => 'theme_customizer_portfoliotextheader',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_portfoliotext', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_portfoliotext', array(
		'label' => __( 'Portfolio intro text', 'section' ),
		'section' => 'theme_customizer_portfoliobox',
		'settings' => 'theme_customizer_portfoliotext',
		'priority' => 2
	) ) );

	//Header box text

	$wp_customize->add_section( 'theme_customizer_boxtext', array(
		'title' => __( 'Intro Header', 'section' ),
		'priority' => 115,
		'description'    => sprintf( __('If the homepage is not the blog page these are the controls for the intro header.','playne'))
	) );

	$wp_customize->add_setting( 'theme_customizer_headertextline', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headertextline', array(
		'label' => __( 'Intro header', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtext',
		'settings' => 'theme_customizer_headertextline',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_movingtextone', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_movingtextone', array(
		'label' => __( 'Detailed text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtext',
		'settings' => 'theme_customizer_movingtextone',
		'priority' => 2
	) ) );
	
	
	
	$wp_customize->add_setting( 'theme_customizer_buttontext', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttontext', array(
		'label' => __( 'Button text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtext',
		'settings' => 'theme_customizer_buttontext',
		'priority' => 7
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_buttonurl', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttonurl', array(
		'label' => __( 'Button URL (start with http://)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtext',
		'settings' => 'theme_customizer_buttonurl',
		'priority' => 8
	) ) );
	
	// Blog header
	
	$wp_customize->add_section( 'theme_customizer_boxtextblog', array(
		'title' => __( 'Blog Header', 'section' ),
		'priority' => 116,
		'description'    => sprintf( __('If the homepage is set to the latest blog posts these are the controls for the intro header.','playne'))
	) );

	$wp_customize->add_setting( 'theme_customizer_headertextlineblogheader', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headertextlineblogheader', array(
		'label' => __( 'Intro header', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtextblog',
		'settings' => 'theme_customizer_headertextlineblogheader',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headertextlineblogtwo', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_headertextlineblogtwo', array(
		'label' => __( 'Intro text', 'section' ),
		'section' => 'theme_customizer_boxtextblog',
		'settings' => 'theme_customizer_headertextlineblogtwo',
		'priority' => 2
	) ) );

	$wp_customize->add_setting( 'theme_customizer_buttontextblog', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttontextblog', array(
		'label' => __( 'Button text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtextblog',
		'settings' => 'theme_customizer_buttontextblog',
		'priority' => 3
	) ) );

	$wp_customize->add_setting( 'theme_customizer_buttonurlblog', array(
		
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttonurlblog', array(
		'label' => __( 'Button URL (if not filled a scroll to button will be placed instead)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_boxtextblog',
		'settings' => 'theme_customizer_buttonurlblog',
		'priority' => 4
	) ) );
	
	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'accent_color', 'default' => '#7cc576', 'label' => __( 'Accent Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Logo text color
  	$colors = array();
  	$colors[] = array( 'slug'=>'logotext_color', 'default' => '#fff', 'label' => __( 'Logo text Color ', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

   	// Header link color
  	$colors = array();
  	$colors[] = array( 'slug'=>'headerlinked_color', 'default' => '#666', 'label' => __( 'Header icon Color ', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'intro_color', 'default' => '#152126', 'label' => __( 'Header & Footer Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'headerandload_color', 'default' => '#a0cac0', 'label' => __( 'Intro & load Color Homepage', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

   	// Footer header color
  	$colors = array();
  	$colors[] = array( 'slug'=>'footerheader_color', 'default' => '#fff', 'label' => __( 'Footer header text Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

    // Footer text color
  	$colors = array();
  	$colors[] = array( 'slug'=>'footertext_color', 'default' => '#fff', 'label' => __( 'Footer text Color ', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}
	
	//Real Time Settings Preview
	
	$wp_customize->get_setting('blogname')->transport='postMessage';
	
	if ( $wp_customize->is_preview() && ! is_admin() )
	add_filter( 'wp_footer', 'customizer_preview', 21);
	
	function customizer_preview() {
		?>
		<script type="text/javascript">
		( function( $ ){
		
		wp.customize('blogname',function( value ) {
			value.bind(function(to) {
				$('#logo h1 a, #logo h2 a').html(to);
			});
		});
		
		} )( jQuery )
		</script>
		<?php 
	}
	
}