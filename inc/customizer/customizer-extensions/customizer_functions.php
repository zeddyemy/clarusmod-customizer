<?php

// Set the Customizer default values
if (!function_exists('clarusmod_get_default_vals')) :
    function clarusmod_get_default_vals() {
        $default_vals = array(
            'social_newtab' => 0,
            'social_urls' => '',
        );

        return apply_filters('clarusmod_customizer_default_vals', $default_vals);
    }
endif;

// customizer assets url
if (!function_exists('clarusmod_customizer_assets')) :
    function clarusmod_customizer_assets($type = '') {
        $assetsPath = !empty($type) ? 'inc/customizer/assets/' . $type : 'inc/customizer/assets';

        $dirPath = wp_normalize_path(__DIR__);
        $pluginsDir = wp_normalize_path(WP_PLUGIN_DIR);

        if (strpos($dirPath, $pluginsDir) === 0) :
            // We're in a plugin directory and need to determine the url accordingly.
            $url = plugin_dir_url(__DIR__) . $assetsPath;
        else:
            $url = trailingslashit(get_template_directory_uri()) . $assetsPath;
        endif;

        return trailingslashit($url);
    }
endif;
