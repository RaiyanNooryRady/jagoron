<?php
/**
 * Register metaboxes
 * @package Jagoron
 */

namespace JAGORON_THEME\Inc;

use JAGORON_THEME\Inc\Traits\Singleton;

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
        //actions and filters
        /**
         * Actions
         */
        add_action("add_meta_boxes", [$this, 'add_custom_meta_box']);
        add_action("save_post",[$this,"save_post_meta_data"]);

    }
    public function add_custom_meta_box()
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title', // Unique ID
                __('Hide Page Title', 'jagoron'), // Box title
                [$this, 'custom_meta_box_html'], // Content callback, must be of type callable
                $screen, // Post type
                'side'
            );
        }
    }
    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);
        ?>
        <label for="jagoron-field"><?php esc_html_e('Hide the page title', 'jagoron'); ?></label>
        <select name="jagoron_hide_title_field" id="jagoron-field" class="postbox">
            <option value=""><?php esc_html_e('Select', 'jagoron'); ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>><?php esc_html_e('yes', 'jagoron'); ?></option>
            <option value="no" <?php selected($value, 'no'); ?>><?php esc_html_e('no', 'jagoron'); ?></option>
        </select>
        <?php
    }
    public function save_post_meta_data($post_id){
        if ( array_key_exists( 'jagoron_hide_title_field', $_POST ) ) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['jagoron_hide_title_field']
            );
        }
    }
}