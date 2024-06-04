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
        $value = get_post_meta($post->ID, 'hide_page_title', true);
        ?>
        <label for="jagoron-field"><?php esc_html_e('Hide the page title', 'jagoron'); ?></label>
        <select name="jagoron_field" id="jagoron-field" class="postbox">
            <option value=""><?php esc_html_e('Select', 'jagoron'); ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>><?php esc_html_e('yes', 'jagoron'); ?></option>
            <option value="no" <?php selected($value, 'no'); ?>><?php esc_html_e('no', 'jagoron'); ?></option>
        </select>
        <?php
    }
}