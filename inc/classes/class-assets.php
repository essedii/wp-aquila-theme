<?php

/**
 * Enqueue Theme Assets.
 *
 * @package Aquila
 */

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //Register Styles.
        wp_register_style('bootstrap-css', AQUILA_BUILD_LIB_URI . '/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('main-css', AQUILA_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/main.css'), 'all');
        wp_register_style('frontpage-css', AQUILA_BUILD_CSS_URI . '/frontpage.css', ['bootstrap-css'], filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/frontpage.css'), 'all');

        //Enqueue Styles.
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('frontpage-css');
        wp_enqueue_style('main-css');
    }

    public function register_scripts()
    {
        //Register Scripts.
        wp_register_script('main-js', AQUILA_BUILD_JS_URI . '/main.js', ['jquery'], filemtime(AQUILA_BUILD_JS_DIR_PATH . '/main.js'), true);
        wp_register_script('frontpage-js', AQUILA_BUILD_JS_URI . '/frontpage.js', ['jquery'], filemtime(AQUILA_BUILD_JS_DIR_PATH . 'frontpage.js'), true);
        wp_register_script('bootstrap-js', AQUILA_BUILD_LIB_URI . '/js/bootstrap.bundle.min.js', ['jquery'], false, true);

        //Enqueue Scripts.
        wp_enqueue_script('main-js');
        wp_enqueue_script('frontpage-js');
        wp_enqueue_script('bootstrap-js');
    }
}
