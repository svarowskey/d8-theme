<?php

/**
 * @file
 * Contains component file.
 */

/**
 * Implements hook_atomium_theme_hook().
 */
function atomium_atomium_theme_more_help_link() {
  return array(
    'more_help_link' => array(
      'template' => 'more-help-link',
      'variables' => array('url' => NULL),
    ),
  );
}

/**
 * Implements hook_preprocess_hook().
 */
function atomium_preprocess_more_help_link(&$variables, $hook) {
  $variables['atomium']['attributes']['wrapper']->append('class', 'more-help-link');

  $variables[$hook] = array(
    $hook => array(
      '#theme' => _atomium_extend_theme_hook('link', $variables['theme_hook_original']),
      '#text' => t('More help'),
      '#path' => $variables['url'],
      '#options' => array('attributes' => array('title' => t('More help'))),
    ),
  );
}
