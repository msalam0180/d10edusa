(function ($) {
  "use strict";
  /**
   * Enable the GLightbox inline functionality.
   */
  Drupal.behaviors.glightboxInline = {
    attach: function (context, drupalSettings) {
      $(once('glightbox-inline-processed', '.glightbox-inline', context)).each(function () {
        var lightboxInlineIframe = GLightbox({
          selector: '.glightbox-inline'
        });
      });
    }
  };
})(jQuery);
