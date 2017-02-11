<?php
$zerif_shortcodes_show  =   get_theme_mod('zerif_shortcodes_show');
$zerif_shortcodes_section   =   get_theme_mod( 'zerif_shortcodes_settings' );
if(!empty($zerif_shortcodes_section)) {
	$zerif_shortcodes_section_decoded   = json_decode( $zerif_shortcodes_section, 'true' );
}

if( isset($zerif_shortcodes_show) && $zerif_shortcodes_show != 1 ) { ?>
	<div class="zerif_shortcodes">
<?php
} else {
	if( is_customize_preview() ) { ?>
		<div class="zerif_shortcodes zerif_hidden_if_not_customizer">
		<?php
	}
}
		
if(( isset($zerif_shortcodes_show) && $zerif_shortcodes_show != 1 ) || is_customize_preview() ) {
	if ( ! empty( $zerif_shortcodes_section_decoded ) ) {
		foreach ( $zerif_shortcodes_section_decoded as $zerif_shortcode_box ) { ?>
			<section class="shortcodes" id="<?php echo ( !empty($zerif_shortcode_box['id']) ? esc_html( $zerif_shortcode_box['id'] ) : '' ); ?>">
				<div class="container">
					<div class="section-header">
						<h2 class="dark-text"><?php echo (!empty($zerif_shortcode_box['title']) ? wp_kses_post( $zerif_shortcode_box['title'] ) : ''); ?></h2>
						<h6><?php echo (!empty($zerif_shortcode_box['subtitle']) ? wp_kses_post( $zerif_shortcode_box['subtitle'] ) : ''); ?></h6>
					</div>

					<div class="row" data-scrollreveal="enter left after 0s over 2s">
						<?php
						if( !empty($zerif_shortcode_box['shortcode']) ) {
							$scd = html_entity_decode($zerif_shortcode_box['shortcode']);
							if( !empty($scd) ) {
								echo do_shortcode ( $scd ); 
							}	
						}	
						?>
					</div>
				</div>
			</section>

			<?php
		} ?>
		</div>
		<?php
	}
} ?>

