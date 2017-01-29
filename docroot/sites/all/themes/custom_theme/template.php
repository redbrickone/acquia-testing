<?php 

function custom_theme_preprocess_page(&$variables) {
  $front_style = path_to_theme() . '/css/front-page.css';
  $path_style = path_to_theme() .'/css/path-' . arg(0) .'.css';

  if (file_exists($front_style) && $variables['is_front']) {
    $include_style = $front_style;
  }
  elseif (file_exists($path_style)) {
    $include_style = $path_style;
  }

  if (isset($include_style)) {
    drupal_add_css($include_style, 'theme', 'all', FALSE);
    $variables['styles'] = drupal_get_css();
  }

  unset($page['footer']['system_powered-by']);
}

function custom_theme_preprocess_html(&$variables) {
}

function custom_theme_preprocess_node(&$variables) {
  if ($variables['type'] == ('profile' || 'landing_page')) {
    drupal_add_js('/sites/all/libraries/slick/slick/slick.min.js');
  }

  if ($variables['field_wp_background_color'][0]['value'] == 'Blue Background') {
    $variables['classes_array'][] = 'bg-blue';
  }
  if ($variables['field_wp_background_color'][0]['value'] == 'Orange Background') {
    $variables['classes_array'][] = 'bg-orange';
  }

  if ($variables['type'] == ('news_and_events')) {

    if (isset($variables['field_event_price']) && is_array($variables['field_event_price']) ) {
      $value = reset($variables['field_event_price']);
      $price = $value['value'];

      if ($price == 0 || $price == '0' || $price == 0.00) {
        $variables['content']['field_event_price'][0]['#markup'] = 'FREE';
      }   
    }

  }
}
