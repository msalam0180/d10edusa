/**
 * @file
 * GLightbox JS.
 */

(function (Drupal, drupalSettings, once) {
  'use strict';

  Drupal.behaviors.initGLightbox = {
    attach: function (context, settings) {
      const options = settings.glightbox || {};
      const lightbox = GLightbox(options);
    },
  };

  // Create glightbox namespace if it doesn't exist.
  if (!Drupal.hasOwnProperty('glightbox')) {
    Drupal.glightbox = {};
  }
})(Drupal, drupalSettings, once);
