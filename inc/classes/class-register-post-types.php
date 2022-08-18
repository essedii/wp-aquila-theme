<?php

/**
 * Register Post Types
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Register_Post_Types
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('init', [$this, 'create_photo_cpt'], 0);
        add_action('init', [$this, 'create_video_cpt'], 0);
    }
    // Register Custom Post Type Photo
    public function create_photo_cpt()
    {

        $labels = array(
            'name' => _x('Photos', 'Post Type General Name', 'aquila'),
            'singular_name' => _x('Photo', 'Post Type Singular Name', 'aquila'),
            'menu_name' => _x('Photos', 'Admin Menu text', 'aquila'),
            'name_admin_bar' => _x('Photo', 'Add New on Toolbar', 'aquila'),
            'archives' => __('Photo Archives', 'aquila'),
            'attributes' => __('Photo Attributes', 'aquila'),
            'parent_item_colon' => __('Parent Photo:', 'aquila'),
            'all_items' => __('All Photos', 'aquila'),
            'add_new_item' => __('Add New Photo', 'aquila'),
            'add_new' => __('Add New', 'aquila'),
            'new_item' => __('New Photo', 'aquila'),
            'edit_item' => __('Edit Photo', 'aquila'),
            'update_item' => __('Update Photo', 'aquila'),
            'view_item' => __('View Photo', 'aquila'),
            'view_items' => __('View Photos', 'aquila'),
            'search_items' => __('Search Photo', 'aquila'),
            'not_found' => __('Not found', 'aquila'),
            'not_found_in_trash' => __('Not found in Trash', 'aquila'),
            'featured_image' => __('Featured Image', 'aquila'),
            'set_featured_image' => __('Set featured image', 'aquila'),
            'remove_featured_image' => __('Remove featured image', 'aquila'),
            'use_featured_image' => __('Use as featured image', 'aquila'),
            'insert_into_item' => __('Insert into Photo', 'aquila'),
            'uploaded_to_this_item' => __('Uploaded to this Photo', 'aquila'),
            'items_list' => __('Photos list', 'aquila'),
            'items_list_navigation' => __('Photos list navigation', 'aquila'),
            'filter_items_list' => __('Filter Photos list', 'aquila'),
        );
        $args = array(
            'label' => __('Photo', 'aquila'),
            'description' => __('', 'aquila'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-camera',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('photo', $args);
    }
    public function create_video_cpt()
    {
        // Register Custom Post Type Video
       
        {

            $labels = array(
                'name' => _x('Videos', 'Post Type General Name', 'aquila'),
                'singular_name' => _x('Video', 'Post Type Singular Name', 'aquila'),
                'menu_name' => _x('Videos', 'Admin Menu text', 'aquila'),
                'name_admin_bar' => _x('Video', 'Add New on Toolbar', 'aquila'),
                'archives' => __('Video Archives', 'aquila'),
                'attributes' => __('Video Attributes', 'aquila'),
                'parent_item_colon' => __('Parent Video:', 'aquila'),
                'all_items' => __('All Videos', 'aquila'),
                'add_new_item' => __('Add New Video', 'aquila'),
                'add_new' => __('Add New', 'aquila'),
                'new_item' => __('New Video', 'aquila'),
                'edit_item' => __('Edit Video', 'aquila'),
                'update_item' => __('Update Video', 'aquila'),
                'view_item' => __('View Video', 'aquila'),
                'view_items' => __('View Videos', 'aquila'),
                'search_items' => __('Search Video', 'aquila'),
                'not_found' => __('Not found', 'aquila'),
                'not_found_in_trash' => __('Not found in Trash', 'aquila'),
                'featured_image' => __('Featured Image', 'aquila'),
                'set_featured_image' => __('Set featured image', 'aquila'),
                'remove_featured_image' => __('Remove featured image', 'aquila'),
                'use_featured_image' => __('Use as featured image', 'aquila'),
                'insert_into_item' => __('Insert into Video', 'aquila'),
                'uploaded_to_this_item' => __('Uploaded to this Video', 'aquila'),
                'items_list' => __('Videos list', 'aquila'),
                'items_list_navigation' => __('Videos list navigation', 'aquila'),
                'filter_items_list' => __('Filter Videos list', 'aquila'),
            );
            $args = array(
                'label' => __('Video', 'aquila'),
                'description' => __('', 'aquila'),
                'labels' => $labels,
                'menu_icon' => 'dashicons-format-video',
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'menu_position' => 5,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'can_export' => true,
                'has_archive' => false,
                'hierarchical' => false,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
            );
            register_post_type('video', $args);
        }
    }
    
}
