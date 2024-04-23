(function ($, Drupal) {

  /**
   * EBT Accordion behavior.
   */
  Drupal.behaviors.ebtAccordion = {
    attach: function (context, settings) {
      $.each(drupalSettings.ebtAccordion, function(i, value){
        // Initialize jQuery UI Accordion.
        var blockClass = drupalSettings.ebtAccordion[i].blockClass;
        if ($('.' + blockClass).length == 0) {
          return;
        }
        var $blockAccordion = $('.' + blockClass);
        if ($blockAccordion.hasClass('accordion-added')) {
          return;
        }

        var options = {};
        drupalBlockSettings = drupalSettings.ebtAccordion[i].options;
        if (drupalBlockSettings.active != undefined && drupalBlockSettings.active != '') {
          options['active'] = parseInt(drupalBlockSettings.active);
        }

        if (drupalBlockSettings.collapsible != undefined) {
          if (drupalBlockSettings.collapsible == 1) {
            options['collapsible'] = true;
          }
          else {
            options['collapsible'] = false;
          }
        }

        if (drupalBlockSettings.closed != undefined && drupalBlockSettings.closed == 1) {
          options['active'] = false;
        }

        if (drupalBlockSettings.disable != undefined) {
          if (drupalBlockSettings.disable == 1) {
            options['disable'] = true;
          }
          else {
            options['disable'] = false;
          }
        }

        if (drupalBlockSettings.heightStyle != undefined) {
          options['heightStyle'] = drupalBlockSettings.heightStyle;
        }
        $blockAccordion.find('.ebt-accordion-wrapper').accordion(options);

        if (drupalBlockSettings.opened != undefined && drupalBlockSettings.opened == 1) {
          $blockAccordion.find('.ui-accordion-header:not(.ui-state-active)').next().slideToggle();
          $blockAccordion.find('.ui-icon').removeClass('ui-icon-triangle-1-e').addClass('ui-icon-triangle-1-s');
        }

        $blockAccordion.addClass('accordion-added');
      });
    }
  };

})(jQuery, Drupal);
