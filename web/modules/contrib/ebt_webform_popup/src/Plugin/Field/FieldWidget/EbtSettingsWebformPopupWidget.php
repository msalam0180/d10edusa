<?php

namespace Drupal\ebt_webform_popup\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_basic_button\Plugin\Field\FieldWidget\EbtSettingsBasicButtonWidget;

/**
 * Plugin implementation of the 'ebt_settings_webform_popup' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_webform_popup",
 *   label = @Translation("EBT Webform Popup settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsWebformPopupWidget extends EbtSettingsBasicButtonWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);
    unset($element['ebt_settings']['add_nofollow']);
    unset($element['ebt_settings']['open_in_new_tab']);

    $element['ebt_settings']['pass_options_to_javascript'] = [
      '#type' => 'hidden',
      '#value' => TRUE,
    ];

    $element['ebt_settings']['button_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Button Text'),
      '#default_value' => $items[$delta]->ebt_settings['button_text'] ?? $this->t('Contact Us'),
      '#attributes' => [
        'placeholder' => $this->t('Button Text'),
      ],
      '#weight' => -10,
      '#required' => TRUE,
    ];

    $element['ebt_settings']['popup_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Popup settings'),
      '#open' => FALSE,
      '#weight' => -9,
    ];

    $element['ebt_settings']['popup_settings']['popup_width'] = [
      '#type' => 'number',
      '#title' => $this->t('Popup Width'),
      '#default_value' => $items[$delta]->ebt_settings['popup_settings']['popup_width'] ?? '400',
      '#attributes' => [
        'placeholder' => $this->t('Popup Width'),
      ],
      '#required' => TRUE,
      '#weight' => -9,
    ];

    $element['ebt_settings']['popup_settings']['form_height'] = [
      '#type' => 'number',
      '#title' => $this->t('Form Height'),
      '#default_value' => $items[$delta]->ebt_settings['popup_settings']['form_height'] ?? '',
      '#attributes' => [
        'placeholder' => $this->t('Enter Form Height'),
      ],
      '#description' => $this->t('Leave empty for height "auto"'),
      '#weight' => -8,
    ];

    $element['ebt_settings']['popup_settings']['popup_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Popup Title'),
      '#default_value' => $items[$delta]->ebt_settings['popup_settings']['popup_title'] ?? '',
      '#attributes' => [
        'placeholder' => $this->t('Enter Popup Title'),
      ],
      '#description' => $this->t('Leave empty to use Webform name'),
      '#weight' => -7,
    ];

    $element['ebt_settings']['popup_settings']['popup_type'] = [
      '#title' => $this->t('Popup Type'),
      '#type' => 'radios',
      '#options' => [
        'modal' => $this->t('Modal'),
        'dialog' => $this->t('Dialog'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['popup_settings']['popup_type'] ?? 'modal',
      '#weight' => -6,
    ];

    $element['ebt_settings']['popup_settings']['popup_styles'] = [
      '#title' => $this->t('Popup Styles'),
      '#type' => 'radios',
      '#options' => [
        'default' => $this->t('Default'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['popup_settings']['popup_styles'] ?? 'default',
      '#weight' => -6,
    ];

    $element['ebt_settings']['button_styles'] = [
      '#type' => 'html_tag',
      '#tag' => 'h3',
      '#value' => $this->t('Button Styles:'),
      '#weight' => -1,
    ];

    $element['ebt_settings']['design_options']['#weight'] = -12;

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    foreach ($values as &$value) {
      $value += ['ebt_settings' => []];
    }
    foreach ($values[0]['ebt_settings']['link_options'] as $key => $option) {
      $values[0]['ebt_settings'][$key] = $option;
    }
    return $values;
  }

}
