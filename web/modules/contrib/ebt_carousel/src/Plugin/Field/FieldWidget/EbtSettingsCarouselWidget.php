<?php

namespace Drupal\ebt_carousel\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ebt_core\Plugin\Field\FieldWidget\EbtSettingsDefaultWidget;

/**
 * Plugin implementation of the 'ebt_settings_carousel' widget.
 *
 * @FieldWidget(
 *   id = "ebt_settings_carousel",
 *   label = @Translation("EBT Carousel settings"),
 *   field_types = {
 *     "ebt_settings"
 *   }
 * )
 */
class EbtSettingsCarouselWidget extends EbtSettingsDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['ebt_settings']['pass_options_to_javascript'] = [
      '#type' => 'hidden',
      '#value' => TRUE,
    ];

    $element['ebt_settings']['styles'] = [
      '#title' => $this->t('Styles'),
      '#type' => 'radios',
      '#options' => [
        'basic' => $this->t('Basic'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['styles'] ?? 'basic',
      '#description' => $this->t('Select predefined styles for carousel.'),
      // Settings the field as "disabled" since we have one 1 option for now.
      '#disabled' => TRUE,
    ];

    $element['ebt_settings']['mode'] = [
      '#title' => $this->t('Mode'),
      '#type' => 'radios',
      '#options' => [
        'carousel' => $this->t('Carousel'),
        'gallery' => $this->t('Gallery'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['mode'] ?? 'carousel',
      '#description' => $this->t('With carousel everything slides to the side, while gallery uses fade animations and changes all slides at once.'),
    ];

    $element['ebt_settings']['axis'] = [
      '#title' => $this->t('Axis'),
      '#type' => 'radios',
      '#options' => [
        'horizontal' => $this->t('Horizontal'),
        'vertical' => $this->t('Vertical'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['axis'] ?? 'horizontal',
      '#description' => $this->t('The axis of the slider.'),
    ];

    $element['ebt_settings']['items'] = [
      '#title' => $this->t('Slides to Show'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['items'] ?? 3,
      '#description' => $this->t("Number of slides being displayed in the viewport. If slides less or equal than items, the slider won't be initialized."),
    ];

    $element['ebt_settings']['gutter'] = [
      '#title' => $this->t('Gutter'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['gutter'] ?? 0,
      '#description' => $this->t('Space between slides (in "px").'),
    ];

    $element['ebt_settings']['edgePadding'] = [
      '#title' => $this->t('Edge padding'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['edgePadding'] ?? 0,
      '#description' => $this->t('Space on the outside (in "px").'),
    ];

    $element['ebt_settings']['autoWidth'] = [
      '#title' => $this->t('Auto width'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['autoWidth'] ?? NULL,
      '#description' => $this->t('If checked, the width of each slide will be its natural width as a inline-block box.'),
      '#attributes' => [
        'class' => ['ebt-autowidth-field'],
      ],
    ];

    $element['ebt_settings']['fixedWidth'] = [
      '#title' => $this->t('Fixed width'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['fixedWidth'] ?? '',
      '#description' => $this->t('Controls width attribute of the slides.'),
       // Set the "Fixed width" as "disabled" when the "Auto width" is checked.
      '#states' => [
        'disabled' => [
          ':input.ebt-autowidth-field' => ['checked' => TRUE],
        ],
      ],
    ];

    $element['ebt_settings']['slideBy'] = [
      '#title' => $this->t('Slides to Scroll'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['slideBy'] ?? '1',
      '#description' => $this->t('Number of slides going on one "click".'),
    ];

    $element['ebt_settings']['center'] = [
      '#title' => $this->t('Center'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['center'] ?? NULL,
      '#description' => $this->t('Center the active slide in the viewport.'),
    ];

    $element['ebt_settings']['arrowKeys'] = [
      '#title' => $this->t('Arrow keys'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['arrowKeys'] ?? NULL,
      '#description' => $this->t('Allows using arrow keys to switch slides.'),
    ];

    $element['ebt_settings']['speed'] = [
      '#title' => $this->t('Speed'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['speed'] ?? '300',
      '#description' => $this->t('Speed of the slide animation (in "ms").'),
    ];

    $element['ebt_settings']['loop'] = [
      '#title' => $this->t('Loop'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['loop'] ?? 1,
      '#description' => $this->t('Moves throughout all the slides seamlessly.'),
    ];

    $element['ebt_settings']['autoHeight'] = [
      '#title' => $this->t('Auto height'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['autoHeight'] ?? NULL,
      '#description' => $this->t("Height of slider container changes according to each slide's height."),
    ];

    // Additional settings.
    $element['ebt_settings']['additional'] = [
      '#type' => 'details',
      '#title' => $this->t('Additional settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['additional']['viewportMax'] = [
      '#title' => $this->t('Viewport max'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['additional']['viewportMax'] ?? '',
      '#description' => $this->t('Maximum viewport width for Fixed width/Auto width.'),
    ];

    $element['ebt_settings']['additional']['rewind'] = [
      '#title' => $this->t('Rewind'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['additional']['rewind'] ?? NULL,
      '#description' => $this->t('Moves to the opposite edge when reaching the first or last slide.'),
    ];

    $element['ebt_settings']['additional']['touch'] = [
      '#title' => $this->t('Touch'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['touch'] ?? 1,
      '#description' => $this->t('Activates input detection for touch devices.'),
    ];

    $element['ebt_settings']['additional']['mouseDrag'] = [
      '#title' => $this->t('Mouse drag'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['additional']['mouseDrag'] ?? NULL,
      '#description' => $this->t('Changing slides by dragging them.'),
    ];

    $element['ebt_settings']['additional']['swipeAngle'] = [
      '#title' => $this->t('Swipe angle'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['additional']['swipeAngle'] ?? 15,
      '#description' => $this->t('Swipe or drag will not be triggered if the angle is not inside the range when set.'),
    ];

    $element['ebt_settings']['additional']['preventActionWhenRunning'] = [
      '#title' => $this->t('Prevent action when running'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['additional']['preventActionWhenRunning'] ?? NULL,
      '#description' => $this->t('Prevent next transition while slider is transforming.'),
    ];

    $element['ebt_settings']['additional']['preventScrollOnTouch'] = [
      '#title' => $this->t('Prevent scroll on touch'),
      '#type' => 'radios',
      '#options' => [
        'none' => $this->t('None'),
        'auto' => $this->t('Auto'),
        'force' => $this->t('Force'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['additional']['preventScrollOnTouch'] ?? 'none',
      '#description' => $this->t('Prevent page from scrolling on touchmove. If set to "auto", the slider will first check if the touch direction matches the slider axis, then decide whether prevent the page scrolling or not. If set to "force", the slider will always prevent the page scrolling.'),
    ];

    $element['ebt_settings']['additional']['nested'] = [
      '#title' => $this->t('Nested'),
      '#type' => 'radios',
      '#options' => [
        'none' => $this->t('None'),
        'inner' => $this->t('Inner'),
        'outer' => $this->t('Outer'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['additional']['nested'] ?? 'none',
      '#description' => $this->t('Define the relationship between nested sliders. @demo Make sure you run the inner slider first, otherwise the height of the inner slider container will be wrong.', ['@demo' => '<a href="http://ganlanyuan.github.io/tiny-slider/demo/#nested_wrapper">(Demo)</a>']),
    ];

    $element['ebt_settings']['additional']['freezable'] = [
      '#title' => $this->t('Freezable'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['additional']['freezable'] ?? NULL,
      '#description' => $this->t('Indicate whether the slider will be frozen (controls, nav, autoplay and other functions will stop work) when all slides can be displayed in one page.'),
    ];

    $element['ebt_settings']['additional']['disable'] = [
      '#title' => $this->t('Disable'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['additional']['disable'] ?? NULL,
      '#description' => $this->t('Disable slider.'),
    ];

    $element['ebt_settings']['additional']['startIndex'] = [
      '#title' => $this->t('Start index'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['additional']['startIndex'] ?? 0,
      '#description' => $this->t('The initial index of the slider.'),
    ];

    $element['ebt_settings']['additional']['useLocalStorage'] = [
      '#title' => $this->t('Use local storage'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['additional']['useLocalStorage'] ?? NULL,
      '#description' => $this->t('Save browser capability variables to localStorage and without detecting them everytime the slider runs if set to true.'),
    ];

    $element['ebt_settings']['additional']['nonce'] = [
      '#title' => $this->t('Nonce'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['additional']['nonce'] ?? '',
      '#description' => $this->t('Optional Nonce attribute for inline style tag to allow slider usage without `unsafe-inline Content Security Policy source.'),
    ];

    // Responsive settings.
    $element['ebt_settings']['responsive'] = [
      '#type' => 'details',
      '#title' => $this->t('Responsive settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['responsive']['mobile'] = [
      '#type' => 'details',
      '#title' => $this->t('Mobile'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['responsive']['mobile']['breakpoint'] = [
      '#title' => $this->t('Breakpoint'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['mobile']['breakpoint'] ?? '576',
      '#description' => $this->t('The breakpoints behave like (min-width: breakpoint) in CSS, so an undefined option will be inherited from previous small breakpoints.'),
    ];

    $element['ebt_settings']['responsive']['mobile']['items'] = [
      '#title' => $this->t('Slides to show'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['mobile']['items'] ?? '',
      '#description' => $this->t("Number of slides being displayed in the viewport. If slides less or equal than items, the slider won't be initialized."),
    ];

    $element['ebt_settings']['responsive']['mobile']['slideBy'] = [
      '#title' => $this->t('Slides to scroll'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['mobile']['slideBy'] ?? '',
      '#description' => $this->t('Number of slides going on one "click".'),
    ];

    $element['ebt_settings']['responsive']['mobile']['gutter'] = [
      '#title' => $this->t('Gutter'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['mobile']['gutter'] ?? '',
      '#description' => $this->t('Space between slides (in "px").'),
    ];

    $element['ebt_settings']['responsive']['mobile']['edgePadding'] = [
      '#title' => $this->t('Edge padding'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['mobile']['edgePadding'] ?? '',
      '#description' => $this->t('Space on the outside (in "px").'),
    ];

    $element['ebt_settings']['responsive']['tablet'] = [
      '#type' => 'details',
      '#title' => $this->t('Tablet'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['responsive']['tablet']['breakpoint'] = [
      '#title' => $this->t('Breakpoint'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['tablet']['breakpoint'] ?? '992',
      '#description' => $this->t('The breakpoints behave like (min-width: breakpoint) in CSS, so an undefined option will be inherited from previous small breakpoints.'),
    ];

    $element['ebt_settings']['responsive']['tablet']['items'] = [
      '#title' => $this->t('Slides to show'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['tablet']['items'] ?? '',
      '#description' => $this->t("Number of slides being displayed in the viewport. If slides less or equal than items, the slider won't be initialized."),
    ];

    $element['ebt_settings']['responsive']['tablet']['slideBy'] = [
      '#title' => $this->t('Slides to scroll'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['tablet']['slideBy'] ?? '',
      '#description' => $this->t('Number of slides going on one "click".'),
    ];

    $element['ebt_settings']['responsive']['tablet']['gutter'] = [
      '#title' => $this->t('Gutter'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['tablet']['gutter'] ?? '',
      '#description' => $this->t('Space between slides (in "px").'),
    ];

    $element['ebt_settings']['responsive']['tablet']['edgePadding'] = [
      '#title' => $this->t('Edge padding'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['tablet']['edgePadding'] ?? '',
      '#description' => $this->t('Space on the outside (in "px").'),
    ];

    $element['ebt_settings']['responsive']['desktop'] = [
      '#type' => 'details',
      '#title' => $this->t('Desktop'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['responsive']['desktop']['breakpoint'] = [
      '#title' => $this->t('Breakpoint'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['desktop']['breakpoint'] ?? '1200',
      '#description' => $this->t('The breakpoints behave like (min-width: breakpoint) in CSS, so an undefined option will be inherited from previous small breakpoints.'),
    ];

    $element['ebt_settings']['responsive']['desktop']['items'] = [
      '#title' => $this->t('Slides to show'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['desktop']['items'] ?? '',
      '#description' => $this->t("Number of slides being displayed in the viewport. If slides less or equal than items, the slider won't be initialized."),
    ];

    $element['ebt_settings']['responsive']['desktop']['slideBy'] = [
      '#title' => $this->t('Slides to scroll'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['desktop']['slideBy'] ?? '',
      '#description' => $this->t('Number of slides going on one "click".'),
    ];

    $element['ebt_settings']['responsive']['desktop']['gutter'] = [
      '#title' => $this->t('Gutter'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['desktop']['gutter'] ?? '',
      '#description' => $this->t('Space between slides (in "px").'),
    ];

    $element['ebt_settings']['responsive']['desktop']['edgePadding'] = [
      '#title' => $this->t('Edge padding'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['responsive']['desktop']['edgePadding'] ?? '',
      '#description' => $this->t('Space on the outside (in "px").'),
    ];

    // Controls.
    $element['ebt_settings']['controls'] = [
      '#type' => 'details',
      '#title' => $this->t('Controls settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['controls']['controls'] = [
      '#title' => $this->t('Controls'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['controls']['controls'] ?? 1,
      '#description' => $this->t('Controls the display and functionalities of controls components (prev/next buttons). If true, display the controls and add all functionalities. For better accessibility, when a prev/next button is focused, user will be able to control the slider using left/right arrow keys.'),
    ];

    $element['ebt_settings']['controls']['controlsPosition'] = [
      '#title' => $this->t('Controls Position'),
      '#type' => 'radios',
      '#options' => [
        'top' => $this->t('Top'),
        'bottom' => $this->t('Bottom'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['controls']['controlsPosition'] ?? 'top',
      '#description' => $this->t('Select the controls position.'),
    ];

    $element['ebt_settings']['controls']['controlsTextPrev'] = [
      '#title' => $this->t('Controls previous text'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['controls']['controlsTextPrev'] ?? 'prev',
      '#description' => $this->t('Text or markup in the previous button.'),
    ];

    $element['ebt_settings']['controls']['controlsTextNext'] = [
      '#title' => $this->t('Controls next text'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['controls']['controlsTextNext'] ?? 'next',
      '#description' => $this->t('Text or markup in the next button.'),
    ];

    $element['ebt_settings']['controls']['nav'] = [
      '#title' => $this->t('Navigation'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['controls']['nav'] ?? 1,
      '#description' => $this->t('Controls the display and functionalities of nav components (dots). If true, display the nav and add all functionalities.'),
    ];

    $element['ebt_settings']['controls']['navPosition'] = [
      '#title' => $this->t('Navigation position'),
      '#type' => 'radios',
      '#options' => [
        'top' => $this->t('Top'),
        'bottom' => $this->t('Bottom'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['controls']['navPosition'] ?? 'bottom',
      '#description' => $this->t('Controls nav position.'),
    ];

    $element['ebt_settings']['controls']['navAsThumbnails'] = [
      '#title' => $this->t('Navigation as thumbnails'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['controls']['navAsThumbnails'] ?? NULL,
      '#description' => $this->t('Indicate if the dots are thumbnails. If checked, they will always be visible even when more than 1 slides displayed in the viewport.'),
    ];

    // Autoplay settings.
    $element['ebt_settings']['autoplay'] = [
      '#type' => 'details',
      '#title' => $this->t('Autoplay settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['autoplay']['autoplay'] = [
      '#title' => $this->t('Autoplay'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplay'] ?? NULL,
      '#description' => $this->t('Toggles the automatic change of slides.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayPosition'] = [
      '#title' => $this->t('Autoplay position'),
      '#type' => 'radios',
      '#options' => [
        'top' => $this->t('Top'),
        'bottom' => $this->t('Bottom'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayPosition'] ?? 'top',
      '#description' => $this->t('Controls autoplay position.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayTimeout'] = [
      '#title' => $this->t('Autoplay timeout'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayTimeout'] ?? '5000',
      '#description' => $this->t('Time between 2 autoplay slides change (in "ms").'),
    ];

    $element['ebt_settings']['autoplay']['autoplayDirection'] = [
      '#title' => $this->t('Autoplay direction'),
      '#type' => 'radios',
      '#options' => [
        'forward' => $this->t('Forward'),
        'backward' => $this->t('backward'),
      ],
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayDirection'] ?? 'forward',
      '#description' => $this->t('Direction of slide movement (ascending/descending the slide index).'),
    ];

    $element['ebt_settings']['autoplay']['autoplayTextStart'] = [
      '#title' => $this->t('Autoplay start text'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayTextStart'] ?? 'start',
      '#description' => $this->t('Text or markup in the autoplay start button.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayTextStop'] = [
      '#title' => $this->t('Autoplay stop text'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayTextStop'] ?? 'stop',
      '#description' => $this->t('Text or markup in the autoplay stop button.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayHoverPause'] = [
      '#title' => $this->t('Autoplay hover pause'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayHoverPause'] ?? NULL,
      '#description' => $this->t('Stops sliding on mouseover.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayButton'] = [
      '#title' => $this->t('autoplayButton'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayButton'] ?? '',
      '#description' => $this->t('The customized autoplay start/stop button or selector.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayButtonOutput'] = [
      '#title' => $this->t('autoplayButtonOutput'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayButtonOutput'] ?? 1,
      '#description' => $this->t('Output Autoplay button markup when autoplay is true but a customized Autoplay button is not provided.'),
    ];

    $element['ebt_settings']['autoplay']['autoplayResetOnVisibility'] = [
      '#title' => $this->t('autoplayResetOnVisibility'),
      '#type' => 'checkbox',
      '#default_value' => $items[$delta]->ebt_settings['autoplay']['autoplayResetOnVisibility'] ?? 1,
      '#description' => $this->t('Pauses the sliding when the page is invisible and resumes it when the page become visiable again.'),
    ];

    // Animate settings.
    $element['ebt_settings']['animate'] = [
      '#type' => 'details',
      '#title' => $this->t('Animate settings'),
      '#open' => FALSE,
    ];

    $element['ebt_settings']['animate']['animateIn'] = [
      '#title' => $this->t('Animate in'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['animate']['animateIn'] ?? 'tns-fadeIn',
      '#description' => $this->t('Default: "tns-fadeIn". Name of intro animation class.'),
    ];

    $element['ebt_settings']['animate']['animateOut'] = [
      '#title' => $this->t('Animate out'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['animate']['animateOut'] ?? 'tns-fadeOut',
      '#description' => $this->t('Default: "tns-fadeOut". Name of outro animation class.'),
    ];

    $element['ebt_settings']['animate']['animateNormal'] = [
      '#title' => $this->t('Animate normal'),
      '#type' => 'textfield',
      '#default_value' => $items[$delta]->ebt_settings['animate']['animateNormal'] ?? 'tns-fadeOut',
      '#description' => $this->t('Default: "tns-normal". Name of default animation class.'),
    ];

    $element['ebt_settings']['animate']['animateDelay'] = [
      '#title' => $this->t('Animate delay'),
      '#type' => 'number',
      '#default_value' => $items[$delta]->ebt_settings['animate']['animateDelay'] ?? '',
      '#description' => $this->t('Time between each gallery animation (in "ms").'),
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
