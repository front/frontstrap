<?php

function frontstrap_preprocess_html(&$vars) {
  //var_dump($vars['attributes_array']);
  $vars['attributes_array']['data-spy'] = 'scroll';
  $vars['attributes_array']['data-target'] = '.subnav';
  $vars['attributes_array']['data-offset'] = '50';
}

function frontstrap_preprocess_page(&$vars) {
  // $vars['theme_hook_suggestions'][] = 'page__testing';
}

/**
 * Implements hook_js_alter().
 */
function frontstrap_js_alter(&$javascript) {
  // Swap out jQuery to use an updated version of the library.
  $javascript['misc/jquery.js']['data'] = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
}


/**
 * Return a themed breadcrumb trail
 */
function frontstrap_breadcrumb($vars) {
  $breadcrumb = isset($vars['breadcrumb']) ? $vars['breadcrumb'] : array();

  if (theme_get_setting('sasson_breadcrumb_hideonlyfront')) {
    $condition = count($breadcrumb) > 1;
  }
  else {
    $condition = !empty($breadcrumb);
  }

  if(theme_get_setting('sasson_breadcrumb_showtitle')) {
    $title = drupal_get_title();
    if(!empty($title)) {
      $condition = true;
      $breadcrumb[] = $title;
    }
  }

  $separator = theme_get_setting('sasson_breadcrumb_separator');

  if (!$separator) {
    $separator = '<span class="divider">»</span>';
  }
  else {
    $separator = '<span class="divider">' . $separator . '</span>';
  }

  if ($condition) {
    return implode(" {$separator} ", $breadcrumb);
  }
}
