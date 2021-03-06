<?php

/**
 * @file
 * Contains component file.
 */

/**
 * Implements hook_atomium_theme_hook().
 */
function atomium_atomium_theme_textfield() {
  return array(
    'textfield' => array(
      'render element' => 'element',
      'template' => 'textfield',
    ),
  );
}

/**
 * Implements hook_preprocess_hook().
 */
function atomium_preprocess_textfield(&$variables, $hook) {
  _form_set_class($variables['element'], array('form-text'));
  element_set_attributes(
    $variables['element'],
    array(
      0 => 'id',
      1 => 'name',
      2 => 'value',
      3 => 'size',
      4 => 'maxlength',
      '#title' => 'placeholder',
    )
  );
  $attributes = _atomium_get_attributes($variables['element']);
  $attributes['type'] = 'text';

  if ($variables['element']['#autocomplete_path'] &&
    !empty($variables['element']['#autocomplete_input'])) {
    drupal_add_library('system', 'drupal.autocomplete');
    $attributes['class'][] = 'form-autocomplete';

    $variables['suffix'] = array(
      '#type' => 'hidden',
      '#id' => $variables['element']['#autocomplete_input']['#id'],
      '#value' => $variables['element']['#autocomplete_input']['#url_value'],
      '#disabled' => 'disabled',
      '#atomium' => array(
        'attributes' => array(
          'element' => array(
            'class' => array(
              'autocomplete',
            ),
          ),
        ),
      ),
    );
  }

  if (isset($variables['element']['#field_name'])) {
    $variables['theme_hook_suggestions'][] = 'textfield__' . $variables['element']['#field_name'];
  }
  if (isset($variables['element']['#entity_type'])) {
    $variables['theme_hook_suggestions'][] = 'textfield__' . $variables['element']['#entity_type'];
    if (isset($variables['element']['#field_name'])) {
      $variables['theme_hook_suggestions'][] = 'textfield__' . $variables['element']['#entity_type'] . '__' . $variables['element']['#field_name'];
    }
    if (isset($variables['element']['#bundle'])) {
      $variables['theme_hook_suggestions'][] = 'textfield__' . $variables['element']['#entity_type'] . '__' . $variables['element']['#bundle'];
    }
  }

  if (isset($variables['element']['#atomium']['attributes']['element'])) {
    $variables['atomium']['attributes']['element']
      ->merge($variables['element']['#atomium']['attributes']['element']);
  }

  $variables['atomium']['attributes']['element']->merge($attributes);
}
