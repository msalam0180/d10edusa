(function (Drupal) {

  /**
   * Get EBT Counter options.
   */
  function getEbtCounterOptions(id) {
    if (drupalSettings.ebtCounter[id] == 'undefined' ||
      drupalSettings.ebtCounter[id]['options'] == 'undefined') {
      return [];
    }
    var options = drupalSettings.ebtCounter[id]['options'];
    delete options['design_options'];
    delete options['pass_options_to_javascript'];
    if (options['separator'] != 'undefined') {
      options['separator'] = options['separator']
        .replace('comma', ',')
        .replace('dot', '.')
        .replace('dash', '-');
    }

    options['decimalPlaces'] = parseInt(options['decimalPlaces']);
    options['duration'] = parseInt(options['duration']);
    options['enableScrollSpy'] = options['enableScrollSpy'] ? true : false;
    options['prefix'] = Drupal.checkPlain(options['prefix']);
    options['suffix'] = Drupal.checkPlain(options['suffix']);
    options['scrollSpyDelay'] = parseInt(options['scrollSpyDelay']);
    options['scrollSpyOnce'] = options['scrollSpyOnce'] ? true : false;
    options['smartEasingAmount'] = Drupal.checkPlain(options['smartEasingAmount']);
    options['smartEasingThreshold'] = Drupal.checkPlain(options['smartEasingThreshold']);
    options['startVal'] = Drupal.checkPlain(options['startVal']);
    options['useEasing'] = options['useEasing'] ? true : false;
    options['useGrouping'] = options['useGrouping'] ? true : false;
    return drupalSettings.ebtCounter[id]['options'];
  }

  /**
   * EBT Core Countup plugin.
   */
  Drupal.behaviors.ebtCounter = {
    attach: function (context, settings) {
      var ebtCounters = once('counter-block', '.ebt-block-counter', context);

      ebtCounters.forEach(blockWrapper => {
        var options = getEbtCounterOptions(blockWrapper.id);
        const counters = once('countup', '#' + blockWrapper.id + ' .ebt-counter-number', context);
        counters.forEach(div => {
          var numAnim = new countUp.CountUp(div.id, div.textContent, options);
          numAnim.start()
        });
      });
    }
  };

})(Drupal);



