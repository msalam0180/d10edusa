<?php

namespace Drupal\glightbox;

use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Installer\InstallerKernel;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * An implementation of PageAttachmentInterface for the glightbox library.
 */
class GLightboxAttachment implements ElementAttachmentInterface {

  use StringTranslationTrait;

  /**
   * The service to determine if glightbox should be activated.
   *
   * @var \Drupal\glightbox\ActivationCheckInterface
   */
  protected $activation;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * The glightbox settings.
   *
   * @var \Drupal\Core\Config\ImmutableConfig
   */
  protected $settings;

  /**
   * Create an instance of GLightboxAttachment.
   */
  public function __construct(ActivationCheckInterface $activation, ModuleHandlerInterface $module_handler, ConfigFactoryInterface $config) {
    $this->activation = $activation;
    $this->moduleHandler = $module_handler;
    $this->settings = $config->get('glightbox.settings');
  }

  /**
   * {@inheritdoc}
   */
  public function isApplicable() {
    return !InstallerKernel::installationAttempted() && $this->activation->isActive();
  }

  /**
   * {@inheritdoc}
   */
  public function attach(array &$page) {
    if ($this->settings->get('custom.activate')) {
      $js_settings = [
        'openEffect' => $this->settings->get('custom.open_effect'),
        'closeEffect' => $this->settings->get('custom.close_effect'),
        'slideEffect' => $this->settings->get('custom.slide_effect'),
        'closeOnOutsideClick' => $this->settings->get('custom.close_on_outside_click') ? TRUE : FALSE,
        'width' => $this->settings->get('custom.width'),
        'height' => $this->settings->get('custom.height'),
        'videosWidth' => $this->settings->get('custom.videos_width'),
        'moreText' => $this->settings->get('custom.more_text'),
        'descPosition' => $this->settings->get('custom.desc_position'),
        'loop' => $this->settings->get('custom.loop') ? TRUE : FALSE,
        'zoomable' => $this->settings->get('custom.zoomable') ? TRUE : FALSE,
        'draggable' => $this->settings->get('custom.draggable') ? TRUE : FALSE,
        'preload' => $this->settings->get('custom.preload') ? TRUE : FALSE,
        'autoplayVideos' => $this->settings->get('custom.autoplay_videos') ? TRUE : FALSE,
        'autofocusVideos' => $this->settings->get('custom.autofocus_videos') ? TRUE : FALSE,
      ];
    }
    else {
      $js_settings = [
        'width' => '98%',
        'height' => '98%',
      ];
    }

    // Give other modules the possibility to override GLightbox settings.
    $this->moduleHandler->alter('glightbox_settings', $js_settings);

    // Add glightbox js settings.
    $page['#attached']['drupalSettings']['glightbox'] = $js_settings;

    // Add and initialise the GLightbox plugin.
    if ($this->settings->get('advanced.compression_type') == 'minified') {
      $page['#attached']['library'][] = 'glightbox/glightbox';
    }
    else {
      $page['#attached']['library'][] = 'glightbox/glightbox-dev';
    }

    $page['#attached']['library'][] = "glightbox/init";
  }

}
