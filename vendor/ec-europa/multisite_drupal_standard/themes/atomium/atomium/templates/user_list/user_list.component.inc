<?php

/**
 * @file
 * Contains component file.
 */

/**
 * Implements hook_preprocess_hook().
 */
function atomium_preprocess_user_list(&$variables, $hook) {
  $users = $variables['users'];
  $variables[$hook] = '';

  if (!empty($users)) {
    $variables[$hook] = array(
      $hook => array(
        '#theme' => _atomium_extend_theme_hook('item_list', $variables['theme_hook_original']),
        '#items' => array_map(function ($user) use ($variables) {
          return array(
            'data' => array(
              '#theme' => _atomium_extend_theme_hook('username', $variables['theme_hook_original']),
              '#account' => $user,
            ),
          );
        }, $users),
        '#title' => $variables['title'],
      ),
    );
  }
}
