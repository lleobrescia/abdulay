<?php

/**
 * Custom options page for admin menu
 *
 * Use Advanced Custom Fields Plugin
 *
 * @link https://www.advancedcustomfields.com/resources/options-page/
 *
 * @package abdulay
 */

function abdulay_acf_init()
{
  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' => __('Informações do Site', 'abdulay'),
      'menu_title' => __('Informações do Site', 'abdulay'),
      'menu_slug' => 'information',
      'capability' => 'edit_posts'
    ));
  }
}


add_action('acf/init', 'abdulay_acf_init');
