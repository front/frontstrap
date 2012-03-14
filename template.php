<?php

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
