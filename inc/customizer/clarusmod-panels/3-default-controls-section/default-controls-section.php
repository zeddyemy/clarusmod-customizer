<?php

// Text Control
$wp_customize->add_setting(
    'text_control',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'text_control',
    array(
        'label'         => __('A Text Control', 'clarusmod'),
        'description'   => esc_html__('Use This Text Field to add or edit text on your site'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'text_control',
    )
);


// Textarea Control
$wp_customize->add_setting(
    'textarea_control',
    array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    )
);
$wp_customize->add_control(
    'textarea_control',
    array(
        'label'         => __('A Textarea Control', 'clarusmod'),
        'description'   => esc_html__('Use This Textaread Field to add or edit more text content on your site'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'textarea_control',
        'type'          => 'textarea',
    )
);


// Checkbox Control
$wp_customize->add_setting(
    'checkbox_control',
    array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_key',
    )
);
$wp_customize->add_control(
    'checkbox_control',
    array(
        'label'         => __('A Checkbox Control', 'clarusmod'),
        'description'   => esc_html__('Use This Checkbox Field to check or uncheck and option'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'checkbox_control',
        'type'          => 'checkbox',
    )
);


// Radio Control
$wp_customize->add_setting(
    'radio_control',
    array(
        'default' => 'option1',
        'sanitize_callback' => 'sanitize_key',
    )
);
$wp_customize->add_control(
    'radio_control',
    array(
        'label'         => __('A Radio Control', 'clarusmod'),
        'description'   => esc_html__('Use This Radio Field to choose one from many options'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'radio_control',
        'type'          => 'radio',
        'choices'       => array(
            'option1' => 'Option 1',
            'option2' => 'Option 2',
            'option3' => 'Option 3',
        ),
    )
);


// Select Control
$wp_customize->add_setting(
    'select_control',
    array(
        'default' => 'option2',
        'sanitize_callback' => 'sanitize_key',
    )
);
$wp_customize->add_control(
    'select_control',
    array(
        'label'         => __('A Radio Control', 'clarusmod'),
        'description'   => esc_html__('Use This Select Field to select one from many options'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'select_control',
        'type'          => 'select',
        'choices'       => array(
            'option1' => 'Option 1',
            'option2' => 'Option 2',
            'option3' => 'Option 3',
        ),
    )
);


// Dropdown Pages Control
$wp_customize->add_setting(
    'dropdown_pages_control',
    array(
        'default' => '0',
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'dropdown_pages_control',
    array(
        'label'         => __('A Dropdown Pages Control', 'clarusmod'),
        'description'   => esc_html__('Use This Select Field to select one from available pages one site'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'dropdown_pages_control',
        'type'          => 'dropdown-pages',
    )
);


// Color Control
$wp_customize->add_setting(
    'color_control',
    array(
        'default' => '#68d6dd',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'color_control',
    array(
        'label'         => __('Color Control', 'clarusmod'),
        'description'   => esc_html__('Use This Control to pick color'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'color_control',
    )
));


// Image Control
$wp_customize->add_setting(
    'image_control',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'image_control',
    array(
        'label'         => __('Image Control', 'clarusmod'),
        'description'   => esc_html__('Use This Control to Upload Image'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'image_control',
    )
));


// Upload Control
$wp_customize->add_setting(
    'upload_control',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new WP_Customize_Upload_Control(
    $wp_customize,
    'upload_control',
    array(
        'label'         => __('Upload Control', 'clarusmod'),
        'description'   => esc_html__('Use This Control to Upload Files'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'upload_control',
    )
));


// Site Icon Control (Favicon)
$wp_customize->add_setting(
    'site_icon_control',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
    $wp_customize,
    'site_icon_control',
    array(
        'label'         => __('Site Icon Control', 'clarusmod'),
        'description'   => esc_html__('Use This Control to Upload Site Icon (Favicon)'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'site_icon_control',
        'width'         => '512',
        'height'        => '512',
    )
));


// Background Image Control (Favicon)
$wp_customize->add_setting(
    'background_image_control',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'background_image_control',
    array(
        'label'         => __('Background Image Control', 'clarusmod'),
        'description'   => esc_html__('Use This Control to Set A background Image'),
        'section'       => 'default_controls_section_id',
        'settings'      => 'background_image_control',
    )
));