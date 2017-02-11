<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
	return NULL;

class Zerif_General_Repeater extends WP_Customize_Control {

	private $options = array();

	/*Class constructor*/
	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		/*Get options from customizer.php*/
		$this->options = $args;
	}

	public function render_content() {

		/*Counter that helps checking if the box is first and should have the delete button disabled*/
		$it = 0;

		/*Get default options*/
		$this_default = json_decode( $this->setting->default );

		/*Get values (json format)*/
		$values = $this->value();

		/*Decode values*/
		$json = json_decode( $values );

		if( !is_array( $json ) ){
			$json = array($values);
		}

		/*This stores what kind of controls should the repeater have in it*/
		$options = $this->options;


		if( !empty( $options['zerif_title_control'] ) ){
			$zerif_title_control = $options['zerif_title_control'];
		} else {
			$zerif_title_control = false;
		}

		if( !empty( $options['zerif_subtitle_control'] ) ){
			$zerif_subtitle_control = $options['zerif_subtitle_control'];
		} else {
			$zerif_subtitle_control = false;
		}


		if( !empty( $options['zerif_shortcode_control'] ) ){
			$zerif_shortcode_control = $options['zerif_shortcode_control'];
		} else {
			$zerif_shortcode_control = false;
		}

		if( !empty( $options['zerif_text_color_control'] ) ){
			$zerif_text_color_control = $options['zerif_text_color_control'];
		} else {
			$zerif_text_color_control = false;
		}

		if( !empty( $options['zerif_color_control'] ) ){
			$zerif_color_control = $options['zerif_color_control'];
		} else {
			$zerif_color_control = false;
		}

		if( !empty( $options['zerif_opacity_control'] ) ){
			$zerif_opacity_control = $options['zerif_opacity_control'];
		} else {
			$zerif_opacity_control = false;
		}
		?>

		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<div class="zerif_general_control_repeater zerif_general_control_droppable">
		<?php
		/* If there are no values*/
		if( empty( $json ) ) { ?>
			<div class="zerif_general_control_repeater_container">
				<div class="zerif-customize-control-title"><?php esc_html_e('Zerif','zerif')?></div>
				<div class="zerif-box-content-hidden">
					<?php

					if($zerif_text_color_control==true){?>
						<span class="customize-control-title"><?php esc_html_e('Text color','zerif')?></span>
						<input type="color" class="zerif_text_color_control" value="#000000" />
						<?php
					}

					if($zerif_color_control==true){?>
						<span class="customize-control-title"><?php esc_html_e('Background color','zerif')?></span>
						<input type="color" class="zerif_color_control" value="#ffffff" />
						<?php
					}

					if($zerif_opacity_control==true){?>
						<span class="customize-control-title"><?php esc_html_e('Background opacity','zerif')?></span>
						<input type="number" class="zerif_opacity_control" min="0" max="1" step="0.1" />
						<?php
					}

					if($zerif_title_control==true){ ?>
						<span class="customize-control-title"><?php esc_html_e('Title','zerif')?></span>
						<input type="text" class="zerif_title_control" placeholder="<?php esc_html_e('Title','zerif'); ?>"/>
						<?php
					}

					if($zerif_subtitle_control==true){ ?>
						<span class="customize-control-title"><?php esc_html_e('Subtitle','zerif')?></span>
						<input type="text" class="zerif_subtitle_control" placeholder="<?php esc_html_e('Subtitle','zerif'); ?>"/>
						<?php
					}

					if($zerif_shortcode_control==true){ ?>
						<span class="customize-control-title"><?php esc_html_e('Shortcode','zerif')?></span>
						<input type="text" class="zerif_shortcode_control" placeholder="<?php esc_html_e('Shortcode','zerif'); ?>"/>
						<?php
					} ?>

					<input type="hidden" class="zerif_box_id">
					<button type="button" class="zerif_general_control_remove_field button" style="display:none;"><?php esc_html_e('Delete field','zerif'); ?></button>
				</div> <!-- end .zerif-box-content-hidden -->
			</div> <!-- end .zerif_general_control_repeater_container -->
			<?php
		} else {
			/*There are no values set but there are default values*/
			if ( !empty( $this_default ) && empty( $json ) ) {
				foreach($this_default as $icon){ ?>
					<div class="zerif_general_control_repeater_container zerif_draggable">
						<div class="zerif-customize-control-title"><?php esc_html_e('Zerif','zerif')?></div>
						<div class="zerif-box-content-hidden">
							<?php

							if($zerif_text_color_control==true){?>
								<span class="customize-control-title"><?php esc_html_e('Text color','zerif')?></span>
								<input type="color" class="zerif_text_color_control" value="<?php if(!empty($icon->text_color)) {echo esc_attr($icon->text_color);} else { echo '#404040'; } ?>" />
								<?php
							}

							if($zerif_color_control==true){?>
								<span class="customize-control-title"><?php esc_html_e('Background color','zerif')?></span>
								<input type="color" class="zerif_color_control" value="<?php if(!empty($icon->color)) { echo esc_attr($icon->color); } else { echo '#ffffff';} ?>"/>
								<?php
							}

							if($zerif_opacity_control==true){?>
								<span class="customize-control-title"><?php esc_html_e('Background opacity','zerif')?></span>
								<input type="number" class="zerif_opacity_control" min="0" max="1" step="0.1" value="<?php if(!empty($icon->opacity)) echo esc_attr($icon->opacity); ?>" />
								<?php
							}


							if( $zerif_title_control == true ){ ?>
								<span class="customize-control-title"><?php esc_html_e('Title','zerif')?></span>
								<input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="zerif_title_control" placeholder="<?php esc_html_e('Title','zerif'); ?>"/>
								<?php
							}

							if( $zerif_subtitle_control == true ){ ?>
								<span class="customize-control-title"><?php esc_html_e('Subtitle','zerif')?></span>
								<input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="zerif_subtitle_control" placeholder="<?php esc_html_e('Subtitle','zerif'); ?>"/>
								<?php
							}

							if($zerif_shortcode_control==true){ ?>
								<span class="customize-control-title"><?php esc_html_e('Shortcode','zerif')?></span>
								<input type="text" value='<?php if(!empty($icon->shortcode)) echo $icon->shortcode; ?>' class="zerif_shortcode_control" placeholder="<?php esc_html_e('Shortcode','zerif'); ?>"/>
								<?php
							} ?>

						<input type="hidden" class="zerif_box_id" value="<?php if(!empty($icon->id)) echo esc_attr($icon->id); ?>">
						<button type="button" class="zerif_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:none;"'; ?>><?php esc_html_e('Delete field','zerif'); ?></button>
					</div> <!-- end .zerif-box-content-hidden -->
					</div> <!-- end .zerif_general_control_repeater_container -->
					<?php
					$it++;
				}
			} else {

				foreach($json as $icon){ ?>
					<div class="zerif_general_control_repeater_container zerif_draggable">
						<div class="zerif-customize-control-title"><?php esc_html_e('Zerif','zerif')?></div>
						<div class="zerif-box-content-hidden">
							<?php

							if($zerif_text_color_control==true){?>
								<span class="customize-control-title"><?php esc_html_e('Text color','zerif')?></span>
								<input type="color" class="zerif_text_color_control" value="<?php if(!empty($icon->text_color)) {echo esc_attr($icon->text_color);} else { echo '#404040'; } ?>" />
								<?php
							}

							if($zerif_color_control==true){?>
								<span class="customize-control-title"><?php esc_html_e('Background color','zerif')?></span>
								<input type="color" class="zerif_color_control" value="<?php if(!empty($icon->color)) { echo esc_attr($icon->color); } else { echo '#ffffff';} ?>"/>
								<?php
							}


							if($zerif_opacity_control==true){?>
								<span class="customize-control-title"><?php esc_html_e('Background opacity','zerif')?></span>
								<input type="number" class="zerif_opacity_control" min="0" max="1" step="0.1" value="<?php if(!empty($icon->opacity)) echo esc_attr($icon->opacity); ?>" />
								<?php
							}

							if($zerif_title_control==true){ ?>
								<span class="customize-control-title"><?php esc_html_e('Title','zerif')?></span>
								<input type="text" value="<?php if(!empty($icon->title)) echo esc_attr($icon->title); ?>" class="zerif_title_control" placeholder="<?php esc_html_e('Title','zerif'); ?>"/>
								<?php
							}

							if($zerif_subtitle_control==true){ ?>
								<span class="customize-control-title"><?php esc_html_e('Subtitle','zerif')?></span>
								<input type="text" value="<?php if(!empty($icon->subtitle)) echo esc_attr($icon->subtitle); ?>" class="zerif_subtitle_control" placeholder="<?php esc_html_e('Subtitle','zerif'); ?>"/>
								<?php
							}

							if($zerif_shortcode_control==true){ ?>
								<span class="customize-control-title"><?php esc_html_e('Shortcode','zerif')?></span>
								<input type="text" value='<?php if(!empty($icon->shortcode)) echo $icon->shortcode; ?>' class="zerif_shortcode_control" placeholder="<?php esc_html_e('Shortcode','zerif'); ?>"/>
								<?php
							} ?>

						<input type="hidden" class="zerif_box_id" value="<?php if(!empty($icon->id)) echo esc_attr($icon->id); ?>">
						<button type="button" class="zerif_general_control_remove_field button" <?php if ($it == 0) echo 'style="display:none;"'; ?>><?php esc_html_e('Delete field','zerif'); ?></button>
					</div><!-- end .zerif-box-content-hidden -->
					</div><!-- end .zerif_general_control_repeater_container -->
					<?php
					$it++;
				}
			}
		}

		if ( !empty( $this_default ) && empty( $json ) ) { ?>
			<input type="hidden" id="zerif_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="zerif_repeater_colector" value="<?php  echo esc_textarea( json_encode($this_default )); ?>" />
			<?php
		} else { ?>
			<input type="hidden" id="zerif_<?php echo $options['section']; ?>_repeater_colector" <?php $this->link(); ?> class="zerif_repeater_colector" value="<?php echo esc_textarea( $this->value() ); ?>" />
			<?php
		} ?>
		</div>
		<button type="button"   class="button add_field zerif_general_control_new_field"><?php esc_html_e('Add new field','zerif'); ?></button>
		<?php
	}
}