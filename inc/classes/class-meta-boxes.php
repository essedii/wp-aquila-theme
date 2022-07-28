<?php
//Register meta boxes. 

// @package Aquila.

namespace Aquila_Theme\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Meta_Boxes
{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions

        add_action('add_meta_boxes', [$this, 'add_custom_meta_boxes']);
        add_action('save_post', [$this, 'save_post_meta_data']);
    }

    public function add_custom_meta_boxes($post)
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title',                  // Unique ID
                __('Hide page title', 'aquila'),    // Box title
                [$this, 'custom_meta_box_html'],    // Content callback, must be of type callable
                $screen,                            // Post type
                'side',                             // Context
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);
?>
        <label for="aquila-field"><?php esc_html_e('Hide the page title', 'aquila'); ?></label>
        <select name="aquila_hide_title_field" id="wporg_field" class="postbox">
            <option value="no" <?php selected($value, 'no'); ?>>
                <?php esc_html_e('No'); ?>
            </option>
            <option value="yes" <?php selected($value, 'yes'); ?>>
                <?php esc_html_e('Yes'); ?>
            </option>

        </select>
<?php
    }

    public function save_post_meta_data($post_id) {
        if (array_key_exists('aquila_hide_title_field', $_POST)) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['aquila_hide_title_field']
            );
        }
    }
}


