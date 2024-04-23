<?php
namespace Drupal\cl_bootstrap_ui_kit\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Component Libraries: Bootstrap - UI Kit Controller.
 */
class ClBootstrapUiKitController extends ControllerBase {

  /**
   * Returns the user interface kit with bootstrap components.
   *
   * @return array
   *   A simple renderable array.
   */
  public function content() {
    return array (
      '#theme' => [
        'cl_bootstrap_ui_kit',
      ],
    );
  }
}
