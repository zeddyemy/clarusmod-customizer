<?php

// Raw Text Custom Control
$wp_customize->add_setting(
    'child_Sec1_raw_text_control',
    array(
        'default' => '',
    )
);
$wp_customize->add_control(new Clarusmod_Raw_Text_Custom_Control(
    $wp_customize,
    'child_Sec1_raw_text_control',
    array(
        'label' => __('Plain Text', 'clarusmod'),
        'description' => esc_html__("So you can put more settings within child sections which could also be in a child Panel."),
        'section' => 'child_Sec1',
        'settings'   => 'child_Sec1_raw_text_control',
    )
));


// Raw Text Custom Control
$wp_customize->add_setting(
    'child_Sec1_raw_text_control2',
    array(
        'default' => '',
    )
);
$wp_customize->add_control(new Clarusmod_Raw_Text_Custom_Control(
    $wp_customize,
    'child_Sec1_raw_text_control2',
    array(
        'label' => __('Plain Text', 'clarusmod'),
        'description' => esc_html__("So you can put more settings within child sections which could also be in a child Panel."),
        'section' => 'child_Sec1',
        'settings'   => 'child_Sec1_raw_text_control2',
    )
));