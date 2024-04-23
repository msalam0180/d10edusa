(function ($, Drupal) {

  /**
   * EBT Slideshow behavior.
   */
  Drupal.behaviors.ebtSlideshow = {
    attach: function (context, settings) {
      $.each(drupalSettings.ebtSlideshow, function(i, value){
        // Initialize FlexSlider.
        var blockClass = drupalSettings.ebtSlideshow[i].blockClass;
        if ($('.' + blockClass).length == 0) {
          return;
        }
        var $blockSlideshow = $('.' + blockClass);
        if ($blockSlideshow.hasClass('flexslider-added')) {
          return;
        }

        var options = {};

        drupalBlockSettings = drupalSettings.ebtSlideshow[i].options;
        options['selector'] = '.slides > .slide';
        if (drupalBlockSettings.animationSpeed != undefined && drupalBlockSettings.animationSpeed != '') {
          options['animationSpeed'] = parseInt(drupalBlockSettings.animationSpeed);
        }

        if (drupalBlockSettings.animation != undefined && drupalBlockSettings.animation != '') {
          options['animation'] = Drupal.checkPlain(drupalBlockSettings.animation);
        }

        if (drupalBlockSettings.direction != undefined && drupalBlockSettings.direction != '') {
          options['direction'] = Drupal.checkPlain(drupalBlockSettings.direction);
        }

        if (drupalBlockSettings.reverse != undefined) {
          if (drupalBlockSettings.reverse == 1) {
            options['reverse'] = true;
          }
          else {
            options['reverse'] = false;
          }
        }

        if (drupalBlockSettings.animationLoop != undefined) {
          if (drupalBlockSettings.animationLoop == 1) {
            options['animationLoop'] = true;
          }
          else {
            options['animationLoop'] = false;
          }
        }

        if (drupalBlockSettings.smoothHeight != undefined) {
          if (drupalBlockSettings.smoothHeight == 1) {
            options['smoothHeight'] = true;
          }
          else {
            options['smoothHeight'] = false;
          }
        }

        if (drupalBlockSettings.startAt != undefined && drupalBlockSettings.startAt != '') {
          options['startAt'] = Drupal.checkPlain(drupalBlockSettings.startAt);
        }

        if (drupalBlockSettings.slideshow != undefined) {
          if (drupalBlockSettings.slideshow == 1) {
            options['slideshow'] = true;
          }
          else {
            options['slideshow'] = false;
          }
        }

        if (drupalBlockSettings.animationSpeed != undefined && drupalBlockSettings.animationSpeed != '') {
          options['animationSpeed'] = parseInt(drupalBlockSettings.animationSpeed);
        }

        if (drupalBlockSettings.slideshowSpeed != undefined && drupalBlockSettings.slideshowSpeed != '') {
          options['slideshowSpeed'] = parseInt(drupalBlockSettings.slideshowSpeed);
        }

        if (drupalBlockSettings.initDelay != undefined && drupalBlockSettings.initDelay != '') {
          options['initDelay'] = parseInt(drupalBlockSettings.initDelay);
        }

        if (drupalBlockSettings.randomize != undefined) {
          if (drupalBlockSettings.randomize == 1) {
            options['randomize'] = true;
          }
          else {
            options['randomize'] = false;
          }
        }

        if (drupalBlockSettings.fadeFirstSlide != undefined) {
          if (drupalBlockSettings.fadeFirstSlide == 1) {
            options['fadeFirstSlide'] = true;
          }
          else {
            options['fadeFirstSlide'] = false;
          }
        }

        if (drupalBlockSettings.thumbCaptions != undefined) {
          if (drupalBlockSettings.thumbCaptions == 1) {
            options['thumbCaptions'] = true;
          }
          else {
            options['thumbCaptions'] = false;
          }
        }

        if (drupalBlockSettings.usability.pauseOnHover != undefined) {
          if (drupalBlockSettings.usability.pauseOnHover == 1) {
            options['pauseOnHover'] = true;
          }
          else {
            options['pauseOnHover'] = false;
          }
        }

        if (drupalBlockSettings.usability.controlNav != undefined) {
          if (drupalBlockSettings.usability.controlNav == 1) {
            options['controlNav'] = true;
          }
          else {
            options['controlNav'] = false;
          }
        }

        if (drupalBlockSettings.usability.directionNav != undefined) {
          if (drupalBlockSettings.usability.directionNav == 1) {
            options['directionNav'] = true;
          }
          else {
            options['directionNav'] = false;
          }
        }

        if (drupalBlockSettings.usability.prevText != undefined && drupalBlockSettings.usability.prevText != '') {
          options['prevText'] = Drupal.checkPlain(drupalBlockSettings.usability.prevText);
        }

        if (drupalBlockSettings.usability.nextText != undefined && drupalBlockSettings.usability.nextText != '') {
          options['nextText'] = Drupal.checkPlain(drupalBlockSettings.usability.nextText);
        }

        if (drupalBlockSettings.usability.pausePlay != undefined) {
          if (drupalBlockSettings.usability.pausePlay == 1) {
            options['pausePlay'] = true;
          }
          else {
            options['pausePlay'] = false;
          }
        }

        if (drupalBlockSettings.usability.pauseText != undefined && drupalBlockSettings.usability.pauseText != '') {
          options['pauseText'] = Drupal.checkPlain(drupalBlockSettings.usability.pauseText);
        }

        if (drupalBlockSettings.usability.playText != undefined && drupalBlockSettings.usability.playText != '') {
          options['playText'] = Drupal.checkPlain(drupalBlockSettings.usability.playText);
        }

        if (drupalBlockSettings.carousel.itemWidth != undefined && drupalBlockSettings.carousel.itemWidth != '') {
          options['itemWidth'] = parseInt(drupalBlockSettings.carousel.itemWidth);
        }

        if (drupalBlockSettings.carousel.itemMargin != undefined && drupalBlockSettings.carousel.itemMargin != '') {
          options['itemMargin'] = parseInt(drupalBlockSettings.carousel.itemMargin);
        }

        if (drupalBlockSettings.carousel.minItems != undefined && drupalBlockSettings.carousel.minItems != '') {
          options['minItems'] = parseInt(drupalBlockSettings.carousel.minItems);
        }

        if (drupalBlockSettings.carousel.maxItems != undefined && drupalBlockSettings.carousel.maxItems != '') {
          options['maxItems'] = parseInt(drupalBlockSettings.carousel.maxItems);
        }

        if (drupalBlockSettings.carousel.move != undefined && drupalBlockSettings.carousel.move != '') {
          options['move'] = parseInt(drupalBlockSettings.carousel.move);
        }

        if (drupalBlockSettings.carousel.allowOneSlide != undefined) {
          if (drupalBlockSettings.carousel.allowOneSlide == 1) {
            options['allowOneSlide'] = true;
          }
          else {
            options['allowOneSlide'] = false;
          }
        }

        $blockSlideshow.find('.ebt-slideshow-wrapper').flexslider(options);
        $blockSlideshow.addClass('flexslider-added');
      });
    }
  };

})(jQuery, Drupal);
