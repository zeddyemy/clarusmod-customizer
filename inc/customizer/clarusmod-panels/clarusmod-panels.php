<?php

/**
 * Clarusmod Custom Child Panel
 */
$childPanel = new Clarusmod_Customize_Panel($wp_customize, 'child_panel_id', array(
    'title' => 'Child Panel',
    'priority' => 10,
    'panel' => 'clarusmod_panel_id',
));
$wp_customize->add_panel($childPanel);

// child panels, sections, settings, and controls for The Header Panel above */
include_once dirname(__FILE__) . '/1-child-panel/child-panels.php';


/**
 * Clarusmod Custom controls Section
 */
$wp_customize->add_section(
    'custom_controls_section_id',
    array(
        'title'    => __("Custom Controls", "clarusmod"),
        'description' => esc_html__(''),
        'priority' => 20,
        'panel' => 'clarusmod_panel_id',
    )
);
// settings, and controls for The Header Panel above
include_once dirname(__FILE__) . '/2-custom-controls-section/custom-controls-settings.php';


/**
 * Clarusmod WP controls Section
 */
$wp_customize->add_section(
    'default_controls_section_id',
    array(
        'title'    => __("Default Controls", "clarusmod"),
        'description' => esc_html__(''),
        'priority' => 30,
        'panel' => 'clarusmod_panel_id',
    )
);
// settings, and controls for The Header Panel above
include_once dirname(__FILE__) . '/3-default-controls-section/default-controls-section.php';