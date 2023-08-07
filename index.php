<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Clarusmod
 */

$toggle_switch = get_theme_mod('toggle_switch', 'true');
$url_control = clarusmod_format_url(get_theme_mod('url_control', 'myUrl.com'));
$tinymce_control = get_theme_mod('tinymce_control', 'Clarusmod is theme used to showcase custom Controls');
$select_category_control = get_theme_mod('select_category_control', '0');
$select_boxicon_control = get_theme_mod('select_boxicon_control', 'none');
$searchable_select_control = get_theme_mod('searchable_select_control', '');
$btn_style_control = get_theme_mod('btn_style_control');

get_header(); ?>

<section class="wrapper">
    <h1>CLARUSMOD</h1>
    <?php echo author_url('https://zeddyemy.github.io', 'Zeddy Emmanuel'); ?>
    <p> <?php echo clarusmod_copyright() ?> </p>
</section>

<section class="custom-controls">
    <div class="card control-reflect" id="toggle-switch-control">
        <label>Toggle Switch Custom Control</label>
        <div class="control">
            <p>Use the toggle switch to remove the box below</p>
            <?php if ($toggle_switch == true) : ?>
                <div class="control-box"> Clarusmod </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="card control-reflect" id="url-control">
        <label>URL Custom Control</label>
        <div class="control">
            <p>The URL you input in the customizer will reflect here.</p>
            <?php if ($url_control) : ?>
                <div class="control-box">
                    Clarusmod <a href="<?php echo $url_control; ?>"> <?php echo $url_control; ?> </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="card control-reflect" id="tinyMCE-control">
        <label>TinyMCE Custom Control</label>
        <div class="control">
            <p>The Content you type into the editor in the customizer will reflect here.</p>
            <?php if ($tinymce_control) : ?>
                <div class="control-box">
                    <?php echo $tinymce_control; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="card control-reflect" id="select-category-control">
        <label>Select Category Custom Control</label>
        <div class="control">
            <p>The Selected Category Will be displayed here</p>
            <div class="control-box">
                <?php echo $select_category_control; ?>
            </div>
        </div>
    </div>

    <div class="card control-reflect" id="select-icon-control">
        <label>Select Boxicons Custom Control</label>
        <div class="control">
            <p>The Selected Icon Will be displayed here</p>
            <?php if ($select_boxicon_control == 'none') : ?>
                <div class="control-box">
                    No icons selected
                </div>
            <?php else : ?>
                <div class="control-box">
                    <i class="<?php echo $select_boxicon_control; ?>"></i>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="card control-reflect" id="searchable-select-control">
        <label>Searchable Select Custom Control</label>
        <div class="control">
            <p>The Selected option from the Searchable Select control Will be displayed here</p>
            <div class="control-box">
                <?php if ($searchable_select_control == '') : ?>
                    <?php echo 'No option Selected Yet'; ?>
                <?php else : ?>
                    <?php echo $searchable_select_control; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="card control-reflect" id="btn-style-control">
        <label>Button Style Custom Control</label>
        <div class="control">
            <p>The Style of button that is chosen Will be reflect here</p>
            <div class="control-box">
                <span class="btn <?php echo esc_attr($btn_style_control); ?>">Button</span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>