<?php

namespace Drupal\ebt_slideshow\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget;

/**
 * Plugin implementation of the 'ebt_settings_slideshow' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_slideshow",
 *   label = @Translation("EBT Slideshow settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsSlideshowWidget extends EbtSettingsDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['ebt_settings']['pass_options_to_javascript'] = [
      '#type' => 'hidden',
      '#value' => TRUE,
    ];

    $element['ebt_settings']['animation'] = [
      '#title' => $this->t('Animation'),
      '#type' => 'radios',
      '#options' => [
        'fade' => $this->t('Fade'),
        'slide' => $this->t('Slide'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['animation'] ?? 'fade',
      '#description' => $this->t('Select your animation type. Carousel displaying require "Slide" option is selected.'),
    ];

    $element['ebt_settings']['direction'] = [
      '#title' => $this->t('Direction'),
      '#type' => 'radios',
      '#options' => [
        'horizontal' => $this->t('Horizontal'),
        'vertical' => $this->t('Vertical'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['direction'] ?? 'horizontal',
      '#description' => $this->t('Select your animation type.'),
    ];

    $element['ebt_settings']['reverse'] = [
      '#title' => $this->t('Reverse'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['reverse'] ?? NULL,
      '#description' => $this->t('Reverse the animation direction.'),
    ];

    $element['ebt_settings']['animationLoop'] = [
      '#title' => $this->t('Animation loop'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['animationLoop'] ?? 1,
      '#description' => $this->t('Should the animation loop? If false, directionNav will received "disable" classes at either end.'),
    ];

    $element['ebt_settings']['smoothHeight'] = [
      '#title' => $this->t('Smooth height'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['smoothHeight'] ?? NULL,
      '#description' => $this->t('Allow height of the slider to animate smoothly in horizontal mode.'),
    ];

    $element['ebt_settings']['startAt'] = [
      '#title' => $this->t('Start at'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['startAt'] ?? 0,
      '#description' => $this->t('Integer: The slide that the slider should start on. Array notation (0 = first slide)'),
    ];

    $element['ebt_settings']['slideshow'] = [
      '#title' => $this->t('Slideshow'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['slideshow'] ?? NULL,
      '#description' => $this->t('Animate slider automatically.'),
    ];

    $element['ebt_settings']['animationSpeed'] = [
      '#title' => $this->t('Animation speed'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['animationSpeed'] ?? 600,
      '#description' => $this->t('Integer: Set the speed of animations, in milliseconds'),
    ];

    $element['ebt_settings']['slideshowSpeed'] = [
      '#title' => $this->t('Slideshow speed'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['slideshowSpeed'] ?? 7000,
      '#description' => $this->t('Integer: Set the speed of the slideshow cycling, in milliseconds'),
    ];

    $element['ebt_settings']['initDelay'] = [
      '#title' => $this->t('Init delay'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['initDelay'] ?? 0,
      '#description' => $this->t('Integer: Set an initialization delay, in milliseconds'),
    ];

    $element['ebt_settings']['randomize'] = [
      '#title' => $this->t('Randomize'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['randomize'] ?? NULL,
      '#description' => $this->t('Randomize slide order.'),
    ];

    $element['ebt_settings']['fadeFirstSlide'] = [
      '#title' => $this->t('Fade first slide'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['fadeFirstSlide'] ?? 1,
      '#description' => $this->t('Fade in the first slide when animation type is "fade".'),
    ];

    $element['ebt_settings']['thumbCaptions'] = [
      '#title' => $this->t('Thumb captions'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['thumbCaptions'] ?? NULL,
      '#description' => $this->t('Whether or not to put captions on thumbnails when using the "thumbnails" controlNav.'),
    ];

    $element['ebt_settings']['usability'] = [
      '#type' => 'details',
      '#title' => $this->t('Navigation settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['usability']['pauseOnHover'] = [
      '#title' => $this->t('Pause on hover'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['usability']['pauseOnHover'] ?? NULL,
      '#description' => $this->t('Pause the slideshow when hovering over slider, then resume when no longer hovering.'),
    ];

    $element['ebt_settings']['usability']['controlNav'] = [
      '#title' => $this->t('Control navigation'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['usability']['controlNav'] ?? 1,
      '#description' => $this->t('Create navigation for paging control of each slide? Note: Leave true for manualControls usage.'),
    ];

    $element['ebt_settings']['usability']['directionNav'] = [
      '#title' => $this->t('Direction navigation'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['usability']['directionNav'] ?? 1,
      '#description' => $this->t('Create navigation for previous/next navigation?.'),
    ];

    $element['ebt_settings']['usability']['prevText'] = [
      '#title' => $this->t('Previous text'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['usability']['prevText'] ?? 'Previous',
      '#description' => $this->t('Set the text for the "previous" directionNav item'),
    ];

    $element['ebt_settings']['usability']['nextText'] = [
      '#title' => $this->t('Next text'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['usability']['nextText'] ?? 'Next',
      '#description' => $this->t('Set the text for the "next" directionNav item'),
    ];

    $element['ebt_settings']['usability']['pausePlay'] = [
      '#title' => $this->t('Pause play'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['usability']['pausePlay'] ?? NULL,
      '#description' => $this->t('Create pause/play dynamic element'),
    ];

    $element['ebt_settings']['usability']['pauseText'] = [
      '#title' => $this->t('Pause'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['usability']['pauseText'] ?? 'Pause',
      '#description' => $this->t('Set the text for the "pause" pausePlay item'),
    ];

    $element['ebt_settings']['usability']['playText'] = [
      '#title' => $this->t('Play text'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['usability']['playText'] ?? 'Play',
      '#description' => $this->t('Set the text for the "play" pausePlay item'),
    ];

    $element['ebt_settings']['carousel'] = [
      '#type' => 'details',
      '#title' => $this->t('Carousel settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['carousel']['itemWidth'] = [
      '#title' => $this->t('Item width'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['carousel']['itemWidth'] ?? 0,
      '#description' => $this->t('Integer: Box-model width of individual carousel items, including horizontal borders and padding.'),
    ];

    $element['ebt_settings']['carousel']['itemMargin'] = [
      '#title' => $this->t('Item margin'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['carousel']['itemMargin'] ?? 0,
      '#description' => $this->t('Integer: Margin between carousel items.'),
    ];

    $element['ebt_settings']['carousel']['minItems'] = [
      '#title' => $this->t('Min items'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['carousel']['minItems'] ?? 1,
      '#description' => $this->t('Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.'),
    ];

    $element['ebt_settings']['carousel']['maxItems'] = [
      '#title' => $this->t('Max items'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['carousel']['maxItems'] ?? 0,
      '#description' => $this->t('Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.'),
    ];

    $element['ebt_settings']['carousel']['move'] = [
      '#title' => $this->t('Move'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['carousel']['move'] ?? 0,
      '#description' => $this->t('Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.'),
    ];

    $element['ebt_settings']['carousel']['allowOneSlide'] = [
      '#title' => $this->t('Allow one slide'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['carousel']['allowOneSlide'] ?? 1,
      '#description' => $this->t('Whether or not to allow a slider comprised of a single slide'),
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
