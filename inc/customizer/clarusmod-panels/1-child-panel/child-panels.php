<?php

// You can also add a Section using Wordpress default "add_section()"

// Child2 Section 1
$wp_customize->add_section(
    'child_Sec1',
    array(
        'title'    => __("Child Section 1", "clarusmod"),
        'description' => esc_html__('This is a child Section.'),
        'priority' => 10,
        'panel' => 'child_panel_id',
    )
);
// settings, and controls for The Section above
include_once dirname(__FILE__) . '/child-sec1/child-sec1-settings.php';


// Child Section 2
$wp_customize->add_section(
    'child_Sec2',
    array(
        'title'    => __("Child Section 2", "clarusmod"),
        'description' => esc_html__('This is a child Section.'),
        'priority' => 10,
        'panel' => 'child_panel_id',
    )
);
// settings, and controls for The about Panel above
include_once dirname(__FILE__) . '/child-sec2/child-sec2-settings.php';