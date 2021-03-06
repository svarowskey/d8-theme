<?php

/**
 * @file
 * Contains component file.
 */

/**
 * Implements hook_atomium_theme_hook().
 */
function atomium_atomium_theme_menu_local_task() {
  return array(
    'menu_local_task' => array(
      'template' => 'menu-local-task',
      'variables' => array(
        'link' => NULL,
        'menu_link' => NULL,
        'active' => FALSE,
      ),
    ),
  );
}

/**
 * Implements hook_preprocess_hook().
 */
function atomium_preprocess_menu_local_task(&$variables, $hook) {
  $link = $variables['link'];
  $link_text = $link['title'];
  $active = NULL;

  if (!empty($variables['active']) && TRUE == $variables['active']) {
    // Add text to indicate active tab for non-visual users.
    $active = array(
      '#markup' => t('(active tab)'),
      '#theme_wrappers' => _atomium_extend_theme_hook('html_tag', $variables['theme_hook_original']),
      '#tag' => 'span',
      '#attributes' => array(
        'class' => array(
          'element-invisible',
        ),
      ),
    );

    // If the link does not contain HTML already, check_plain() it now.
    // After we set 'html'=TRUE the link will not be sanitized by l().
    if (empty($link['localized_options']['html'])) {
      $link['title'] = check_plain($link['title']);
    }
    $link['localized_options']['html'] = TRUE;
  }

  $variables[$hook] = $link_text;
  if (isset($link['href'])) {
    $variables[$hook] = array(
      $hook => array(
        '#theme' => _atomium_extend_theme_hook('link', $variables['theme_hook_original']),
        '#text' => array(
          array('#markup' => $link['title']),
          $active,
        ),
        '#path' => $link['href'],
        '#options' => array(
          'attributes' => array('title' => $link['title']),
          'html' => TRUE,
        ),
      ),
    );
  }

  $variables['atomium']['attributes']['wrapper']->append('class', !empty($variables['active']) ? 'active' : '');
}
