<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package zerif

 */

?>

<?php zerif_before_footer_trigger(); ?>

<footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">



<?php 
	if(is_active_sidebar( 'zerif-sidebar-footer' ) || is_active_sidebar( 'zerif-sidebar-footer-2' ) || is_active_sidebar( 'zerif-sidebar-footer-3' )):
		echo '<div class="footer-widget-wrap"><div class="container">';

		if(is_active_sidebar( 'zerif-sidebar-footer' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'zerif-sidebar-footer' );
			echo '</div>';
		endif;

		if(is_active_sidebar( 'zerif-sidebar-footer-2' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'zerif-sidebar-footer-2' );
			echo '</div>';
		endif;

		if(is_active_sidebar( 'zerif-sidebar-footer-3' )):
			echo '<div class="footer-widget col-xs-12 col-sm-4">';
			dynamic_sidebar( 'zerif-sidebar-footer-3' );
			echo '</div>';
		endif;

		echo '</div></div>';
	endif;
?>	



<div class="container">
	<?php zerif_top_footer_trigger(); ?>
	

	<?php
		
		$footer_sections = 0;
	
		$zerif_address = get_theme_mod('zerif_address',__('Company address','zerif'));
		$zerif_address_icon = get_theme_mod('zerif_address_icon',get_template_directory_uri().'/images/map25-redish.png');
		
		$zerif_email = get_theme_mod('zerif_email','<a href="mailto:contact@site.com">contact@site.com</a>');
		$zerif_email_icon = get_theme_mod('zerif_email_icon',get_template_directory_uri().'/images/envelope4-green.png');
		
		$zerif_phone = get_theme_mod('zerif_phone','<a href="tel:0 332 548 954">0 332 548 954</a>');
		$zerif_phone_icon = get_theme_mod('zerif_phone_icon',get_template_directory_uri().'/images/telephone65-blue.png');
		
		$zerif_socials_facebook = get_theme_mod('zerif_socials_facebook','#');

		$zerif_socials_twitter = get_theme_mod('zerif_socials_twitter','#');

		$zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin','#');

		$zerif_socials_behance = get_theme_mod('zerif_socials_behance','#');

		$zerif_socials_dribbble = get_theme_mod('zerif_socials_dribbble','#');
		
		$zerif_socials_reddit = get_theme_mod('zerif_socials_reddit');
		
		$zerif_socials_tumblr = get_theme_mod('zerif_socials_tumblr');
		
		$zerif_socials_pinterest = get_theme_mod('zerif_socials_pinterest');
		
		$zerif_socials_googleplus = get_theme_mod('zerif_socials_googleplus');
		
		$zerif_socials_youtube = get_theme_mod('zerif_socials_youtube');
		
		$zerif_socials_instagram = get_theme_mod('zerif_socials_instagram');
			
		$zerif_copyright = get_theme_mod('zerif_copyright');
		
		
		if(!empty($zerif_address) || !empty($zerif_address_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_email) || !empty($zerif_email_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_phone) || !empty($zerif_phone_icon)):
			$footer_sections++;
		endif;

		if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_youtube) || !empty($zerif_socials_dribbble) || !empty($zerif_socials_reddit) || !empty($zerif_socials_tumblr) || !empty($zerif_socials_pinterest) || !empty($zerif_socials_googleplus) || !empty($zerif_socials_instagram) || !empty($zerif_copyright)):
			$footer_sections++;
		endif;
		
		if( $footer_sections == 1 ):
			$footer_class = 'col-md-12 footer-box one-cell';
		elseif( $footer_sections == 2 ):
			$footer_class = 'col-md-6 footer-box two-cell';
		elseif( $footer_sections == 3 ):
			$footer_class = 'col-md-4 footer-box three-cell';
		elseif( $footer_sections == 4 ):
			$footer_class = 'col-md-3 footer-box four-cell';
		else:
			$footer_class = 'col-md-3 footer-box four-cell';
		endif;
		
		global $wp_customize;
		
		echo '<div class="footer-box-wrap">';
		
		if( !empty($footer_class) ) {
			
			/* COMPANY ADDRESS */
			if( !empty($zerif_address_icon) || !empty($zerif_address) ) { 

				echo '<div class="'.esc_html($footer_class).' company-details">';
					
					if( !empty($zerif_address_icon) ) { 
						echo '<div class="icon-top red-text">';
							 echo '<img src="'.esc_url($zerif_address_icon).'" alt="" />';
						echo '</div>';
					}
					
					if( !empty($zerif_address) ) {
						echo '<div class="zerif-footer-address">';
							echo wp_kses_post( $zerif_address );
						echo '</div>';
					} else if( isset( $wp_customize ) ) {
						echo '<div class="zerif-footer-address zerif_hidden_if_not_customizer"></div>';
					}
					
				echo '</div>';

			}
			
			/* COMPANY EMAIL */
			if( !empty($zerif_email_icon) || !empty($zerif_email) ) {

				echo '<div class="'.esc_html($footer_class).' company-details">';
				
					if( !empty($zerif_email_icon) ) {
						echo '<div class="icon-top green-text">';
							echo '<img src="'.esc_url($zerif_email_icon).'" alt="" />';
						echo '</div>';
					}
					if( !empty($zerif_email) ) {
						echo '<div class="zerif-footer-email">';	
							echo wp_kses_post( $zerif_email );
						echo '</div>';
					} else if( isset( $wp_customize ) ) {
						echo '<div class="zerif-footer-email zerif_hidden_if_not_customizer"></div>';
					}	
				
				echo '</div>';

			}
			
			/* COMPANY PHONE NUMBER */
			if( !empty($zerif_phone_icon) || !empty($zerif_phone) ) {

				echo '<div class="'.esc_html($footer_class).' company-details">';
				
					if( !empty($zerif_phone_icon) ) {
						echo '<div class="icon-top blue-text">';
							echo '<img src="'.esc_url($zerif_phone_icon).'" alt="" />';
						echo '</div>';
					}
					if( !empty($zerif_phone) ) {
						echo '<div class="zerif-footer-phone">';
							echo wp_kses_post( $zerif_phone );
						echo '</div>';	
					} else if( isset( $wp_customize ) ) {
						echo '<div class="zerif-footer-phone zerif_hidden_if_not_customizer"></div>';
					}
					
				echo '</div>';

			}
		}

			if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || !empty($zerif_socials_reddit) || !empty($zerif_socials_tumblr) || !empty($zerif_socials_pinterest) || !empty($zerif_socials_googleplus) || !empty($zerif_copyright) || !empty($zerif_socials_youtube) || !empty($zerif_socials_instagram) ):
			
					$zerif_accessibility = get_theme_mod('zerif_accessibility');
					$zerif_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? 'target="_blank"' : '');
					echo '<div class="'.esc_html($footer_class).' copyright">';
					if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || !empty($zerif_socials_reddit) || !empty($zerif_socials_tumblr) || !empty($zerif_socials_pinterest) || !empty($zerif_socials_googleplus) || !empty($zerif_socials_youtube) || !empty($zerif_socials_instagram) ):
						$zerif_accessibility = get_theme_mod( 'zerif_accessibility' );
						echo '<ul class="social">';
	

						/* facebook */

						if( !empty($zerif_socials_facebook) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Facebook link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Facebook', 'zerif' ) .'" href="'.esc_url($zerif_socials_facebook).'">'.$screen_reader_text.'<i class="fa fa-facebook"></i></a></li>';

						endif;

						/* twitter */

						if( !empty($zerif_socials_twitter) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Twitter link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Twitter', 'zerif' ) .'" href="'.esc_url($zerif_socials_twitter).'">'.$screen_reader_text.'<i class="fa fa-twitter"></i></a></li>';

						endif;

						/* linkedin */

						if( !empty($zerif_socials_linkedin) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Linkedin link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'LinkedIn', 'zerif' ) .'" href="'.esc_url($zerif_socials_linkedin).'">'.$screen_reader_text.'<i class="fa fa-linkedin"></i></a></li>';

						endif;

						/* behance */

						if( !empty($zerif_socials_behance) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Behance link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Behance', 'zerif' ) .'" href="'.esc_url($zerif_socials_behance).'">'.$screen_reader_text.'<i class="fa fa-behance"></i></a></li>';

						endif;

						/* dribbble */

						if( !empty($zerif_socials_dribbble) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Dribbble link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Dribbble', 'zerif' ) .'" href="'.esc_url($zerif_socials_dribbble).'">'.$screen_reader_text.'<i class="fa fa-dribbble"></i></a></li>';

						endif;
						
						/* googleplus */
						
						if( !empty($zerif_socials_googleplus) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Google Plus link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Google Plus', 'zerif' ) .'" href="'.esc_url($zerif_socials_googleplus).'">'.$screen_reader_text.'<i class="fa fa-google"></i></a></li>';

						endif;
						
						/* pinterest */
						
						if( !empty($zerif_socials_pinterest) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Pinterest link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Pinterest', 'zerif' ) .'" href="'.esc_url($zerif_socials_pinterest).'">'.$screen_reader_text.'<i class="fa fa-pinterest"></i></a></li>';
							
							
						endif;
						
						/* tumblr */
						
						if( !empty($zerif_socials_tumblr) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Tumblr link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Tumblr', 'zerif' ) .'" href="'.esc_url($zerif_socials_tumblr).'">'.$screen_reader_text.'<i class="fa fa-tumblr"></i></a></li>';

						endif;
						
						/* reddit */
						
						if( !empty($zerif_socials_reddit) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Reddit link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Reddit', 'zerif' ) .'" href="'.esc_url($zerif_socials_reddit).'">'.$screen_reader_text.'<i class="fa fa-reddit"></i></a></li>';

						endif;
						
						/* youtube */
						
						if( !empty($zerif_socials_youtube) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Youtube link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'YouTube', 'zerif' ) .'" href="'.esc_url($zerif_socials_youtube).'">'.$screen_reader_text.'<i class="fa fa-youtube"></i></a></li>';

						endif;
						
						/* instagram */
						
						if( !empty($zerif_socials_instagram) ):
							if(isset($zerif_accessibility) && $zerif_accessibility ==1 ){
								$screen_reader_text =  '<span class="screen-reader-text">'.esc_html__('Instagram link','zerif').'</span>';
							} else {
								$screen_reader_text = '';
							}
							echo '<li><a '.$zerif_new_tab.' title="'. __( 'Instagram', 'zerif' ) .'" href="'.esc_url($zerif_socials_instagram).'">'.$screen_reader_text.'<i class="fa fa-instagram"></i></a></li>';

						endif;

						echo '</ul>';

					endif;	


					if( !empty($zerif_copyright) ):

						echo '<p id="zerif-copyright">'.wp_kses_post($zerif_copyright).'</p>';
						
					elseif( isset( $wp_customize ) ):

						echo '<p id="zerif-copyright" class="zerif_hidden_if_not_customizer"></p>';

					endif;
					
					echo '</div>';
			
			endif;

			echo '</div>';

			?>
	<?php zerif_bottom_footer_trigger(); ?>
</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->

<?php zerif_after_footer_trigger(); ?>

<?php if ( wp_is_mobile() ) : ?>

	<!-- reduce heigt of the google maps on mobile -->
	<style type="text/css">
		#map,
		.zerif_google_map {
			height: 300px !important;
		}
	</style>

<?php endif;

	/*************************************************/
	/**************  Background settings *************/
	/*************************************************/

	$zerif_background_settings = get_theme_mod('zerif_background_settings');

	/* Default case when no setting is checked or Slider is selected */
	if( empty($zerif_background_settings) || ($zerif_background_settings == 'zerif-background-slider') ):

		/* Background slider */
		$zerif_slides_array = array();

		for ($i=1; $i<=3; $i++){
			$zerif_bgslider = get_theme_mod('zerif_bgslider_'.$i);
			array_push($zerif_slides_array, $zerif_bgslider);
		}

		if( !empty($zerif_slides_array) && is_home() ):

			echo '</div><!-- .zerif_full_site -->';

			echo '</div><!-- .zerif_full_site_wrap -->';

		endif;

	elseif( $zerif_background_settings == 'zerif-background-video' ):

		/* Video background */
		$zerif_background_video = get_theme_mod('zerif_background_video');

		if( !empty($zerif_background_video) && is_home() ):

			$zerif_background_video_thumbnail = get_theme_mod('zerif_background_video_thumbnail');

			if( wp_is_mobile() ) {

				echo '</div><!-- .zerif_full_site -->';

				echo '</div><!-- .zerif_full_site_wrap -->';

			}
		endif;

	else:
	
		if( is_home() ):
		
			echo '</div><!-- .zerif-mobile-bg-helper-content -->';

			echo '</div><!-- .zerif-mobile-bg-helper-wrap-all -->';
	
		endif;
		
	endif;
	
	wp_footer();
	
	zerif_bottom_body_trigger();

?>

</body>

</html>