<?php

// toggle Switch Custom Control
$wp_customize->add_setting(
    'toggle_switch',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_switch',
    array(
        'label' => __('A toggle Switch', 'clarusmod'),
        'description' => esc_html__('Use The Toggle Button to Disable or Enable anything you want in your theme'),
        'section' => 'custom_controls_section_id',
        'settings'   => 'toggle_switch',
        'capability' => 'edit_theme_options',
    )
));


// URL Custom Control
$wp_customize->add_setting(
    'url_control',
    array(
        'capability' => 'edit_theme_options',
        'default' => 'myUrl.com',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(new Clarusmod_Url_Custom_Control(
    $wp_customize,
    'url_control',
    array(
        'label' => __('URL Input', 'clarusmod'),
        'description' => esc_html__("An Input field to add url. User will be warned when an invalid URL is typed in."),
        'section' => 'custom_controls_section_id',
        'settings'   => 'url_control',
    )
));


// Raw Text Custom Control
$wp_customize->add_setting(
    'raw_text_control',
    array(
        'default' => '',
    )
);
$wp_customize->add_control(new Clarusmod_Raw_Text_Custom_Control(
    $wp_customize,
    'raw_text_control',
    array(
        'label' => __('Plain Text', 'clarusmod'),
        'description' => esc_html__("This is just to display a plain text. It does not affect or change anything on the site. This is can be used to display extra info."),
        'section' => 'custom_controls_section_id',
        'settings'   => 'raw_text_control',
    )
));


// TinyMCE Custom Control
$wp_customize->add_setting(
    'tinymce_control',
    array(
        'capability' => 'edit_theme_options',
        'default' => 'You can use this editor to add more rich text to your theme',
        'sanitize_callback' => 'wp_kses_post',
        'type'       => 'theme_mod',
    )
);
$wp_customize->add_control(new Clarusmod_TinyMCE_Custom_control(
    $wp_customize,
    'tinymce_control',
    array(
        'label' => "TinyMCE Control",
        'description' => __('Type in your Rich Text Here.'),
        'settings' => 'tinymce_control',
        'section' => 'custom_controls_section_id',
        'input_attrs' => array(
            'toolbar1' => 'undo redo blocks bold italic bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )
));


// Select category Custom Control
$wp_customize->add_setting(
    'select_category_control',
    array(
        'default' => '0',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(new Clarusmod_Category_Select_Custom_Control(
    $wp_customize,
    'select_category_control',
    array(
        'label'         => esc_html__('Select category', 'clarusmod'),
        'description'   => esc_html__('Select the category from the dropdown.', 'clarusmod'),
        'section'       => 'custom_controls_section_id',
        'settings'   => 'select_category_control',
    )
));


// Select Boxicon Custom Control
$wp_customize->add_setting(
    'select_boxicon_control',
    array(
        'default' => 'none',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(new Clarusmod_Boxicon_Select_Custom_Control(
    $wp_customize,
    'select_boxicon_control',
    array(
        'label'         => esc_html__('Select Icon', 'clarusmod'),
        'description'   => esc_html__('Select an icon from the boxicon library', 'clarusmod'),
        'section'       => 'custom_controls_section_id',
        'settings'   => 'select_boxicon_control',
    )
));


// Select Boxicon Custom Control
$wp_customize->add_setting(
    'searchable_select_control',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(new Searchable_Select_Custom_Control(
    $wp_customize,
    'searchable_select_control',
    array(
        'label'         => esc_html__('Searchable Select Option', 'clarusmod'),
        'description'   => esc_html__('This select field allows users to search through the options by typing in the input field', 'clarusmod'),
        'section'       => 'custom_controls_section_id',
        'settings'      => 'searchable_select_control',
        'input_attrs' => array(
            'placeholder' => esc_html__('&mdash; Select &mdash;', 'clarusmod'),
            'multiselect' => false,
        ),
        'choices'       => array(
            'option1' => 'Option 1',
            'option2' => 'Option 2',
            'option3' => 'Option 3',
            // Add more options ass needed
        ),
    )
));