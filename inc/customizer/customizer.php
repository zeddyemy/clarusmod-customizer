<?php

/**
 * Clarusmod Customizer
 *
 * @author Emmanuel Zeddy <http://zeddyemy.github.io>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

class initialize_clarusmod_customizer_settings {

    private $defaults;

    public function __construct() {
        // Get our Customizer defaults
		$this->defaults = clarusmod_customizer_default_vals();

        add_action('customize_register', array($this, 'clarusmod_register_customizer'));
    }
    
    // register Customizer
    function clarusmod_register_customizer($wp_customize) {
        // Has to be at the top //
        $wp_customize->register_panel_type('Clarusmod_Customize_Panel');
        $wp_customize->register_section_type('Clarusmod_Customize_Section');

        // Clarusmod Settings panel
        $clarusmodPanel = new Clarusmod_Customize_Panel($wp_customize, 'clarusmod_panel_id', array(
            'title' => 'Clarusmod Settings',
            'priority' => 10,
        ));
        $wp_customize->add_panel($clarusmodPanel);

        /* #1.1 child panels, sections, settings, and controls for The Clarusmod Panel above */
        include_once trailingslashit(dirname(__FILE__)) . 'clarusmod-panels/clarusmod-panels.php';
    }
}

include_once trailingslashit(dirname(__FILE__)) . 'customizer-extensions/customizer_functions.php';
include_once trailingslashit(dirname(__FILE__)) . 'customizer-extensions/custom-panels-sections.php';
include_once trailingslashit(dirname(__FILE__)) . 'customizer-extensions/custom-controls.php';

// Initialize Customizer settings
$clarusmod_settings = new initialize_clarusmod_customizer_settings();