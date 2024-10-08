<?php
/*-----------------------------------------------------------------------------------*/
/*  OnePress Customizer Controls
/*-----------------------------------------------------------------------------------*/

class OnePress_Misc_Control extends WP_Customize_Control {


	public $settings = 'blogname';
	public $description = '';
	public $group = '';


	/**
	 * Render the description and title for the sections
	 */
	public function render_content() {
		switch ( $this->type ) {
			default:

			case 'heading':
				echo '<span class="customize-control-title">' . wp_kses($this->label, onepress_allowed_tags() ) . '</span>';
				break;

			case 'custom_message' :
				echo '<p class="description">' . wp_kses_post($this->description) . '</p>';
				break;

			case 'hr' :
				echo '<hr />';
				break;
		}
	}
}