<?php

namespace Drupal\ebt_bootstrap_button\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget;

/**
 * Plugin implementation of the 'ebt_settings_bootstrap_button' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_bootstrap_button",
 *   label = @Translation("EBT Bootstrap Button settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsBootstrapButtonWidget extends EbtSettingsDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['ebt_settings']['open_in_new_tab'] = [
      '#title' => $this->t('Open the link in a new tab'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['open_in_new_tab'] ?? NULL,
    ];

    $element['ebt_settings']['add_nofollow'] = [
      '#title' => $this->t('Add "nofollow" option to the link'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['add_nofollow'] ?? NULL,
      '#description' => $this->t('The nofollow attribute is an HTML attribute in the link tag to tell search engines not to follow the link when crawling the web page'),
    ];

    $element['ebt_settings']['alignment'] = [
      '#title' => $this->t('Alignment'),
      '#type' => 'radios',
      '#options' => [
        'left' => $this->t('Left'),
        'center' => $this->t('Center'),
        'right' => $this->t('Right'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['alignment'] ?? 'left',
    ];

    $element['ebt_settings']['button_type'] = [
      '#title' => $this->t('Button Type'),
      '#type' => 'radios',
      '#options' => [
        'primary' => $this->t('Primary'),
        'secondary' => $this->t('Secondary'),
        'success' => $this->t('Success'),
        'danger' => $this->t('Danger'),
        'warning' => $this->t('Warning'),
        'info' => $this->t('Info'),
        'light' => $this->t('Light'),
        'dark' => $this->t('Dark'),
        'link' => $this->t('Link'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['button_type'] ?? 'primary',
      '#required' => TRUE,
      '#description' => $this->t('Bootstrap includes several predefined button types, each serving its own semantic purpose. Full details are available from the <a href="@bootstrap_online_documentation_url@">Bootstrap online documentation</a>', [
        '@bootstrap_online_documentation_url@' => 'https://getbootstrap.com/docs/5.3/components/buttons/',
      ]),
    ];

    $element['ebt_settings']['outline_button'] = [
      '#title' => $this->t('Outline Button'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['outline_button'] ?? NULL,
      '#description' => $this->t('In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the .btn-outline-* ones to remove all background images and colors on any button. Read more and see examples about "Outline buttons" at <a href="@bootstrap_online_documentation_url@">Bootstrap online documentation</a>', [
        '@bootstrap_online_documentation_url@' => 'https://getbootstrap.com/docs/5.3/components/buttons/#outline-buttons',
      ]),
    ];

    $element['ebt_settings']['active_button'] = [
      '#title' => $this->t('Active Button'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['active_button'] ?? NULL,
    ];

    $element['ebt_settings']['disable_button'] = [
      '#title' => $this->t('Disable Button'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['disable_button'] ?? NULL,
      '#description' => $this->t("Links don’t support the disabled attribute, it will add the .disabled class to make it visually appear disabled."),
    ];

    $element['ebt_settings']['size'] = [
      '#title' => $this->t('Size'),
      '#type' => 'radios',
      '#options' => [
        'size-default' => $this->t('Default'),
        'btn-sm' => $this->t('Small'),
        'btn-lg' => $this->t('Large'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['size'] ?? 'size-default',
    ];

    $element['ebt_settings']['stetched'] = [
      '#title' => $this->t('Stretched'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['stetched'] ?? NULL,
      '#description' => $this->t('Check if you want to stretch the width of the button'),
    ];

    $element['ebt_settings']['custom_class_name'] = [
      '#type' => 'textfield',
      '#element_validate' => [
        [
          '\Drupal\ebt_core\Helper\EbtGenericValidator', 'validateClassElement',
        ],
      ],
      '#title' => $this->t('Custom class name'),
      '#default_value' => $items[$delta]->ebt_settings['custom_class_name'] ?? '',
      '#description' => $this->t('Customize the styling of this block by adding CSS classes. Separate multiple classes by spaces'),
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    foreach ($values as &$value) {
      $value += ['ebt_settings' => []];
    }
    return $values;
  }

}
