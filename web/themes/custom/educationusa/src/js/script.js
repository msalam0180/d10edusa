window.onload = function() {

  // menu
  (function ($, Drupal) {
    Drupal.behaviors.menuDropdownBehavior = {
      attach: function (context, settings) {
        $('#menu-dropdown-button', context).once('menuDropdownBehavior').on('click', '.dropdown-item', function (e) {
          var selectedItemText = $(this).text();
          $('#menu-dropdown-button').text(selectedItemText);
        });
      }
    };
  })(jQuery, Drupal);
  
  if (window.jQuery) {
    ("use strict");
    (function($) {
      //var slick = require("./vendor/slick.min.js");

    if($("#views-exposed-form-find-programs-non-us-find-programs-block, #views-exposed-form-find-programs-us-find-programs-block").length > 0){

      var pathSet = window.location.pathname;
      var hostSet = window.location.hostname;
      var devHost = 'exchangealumni.lndo.site';
      var spliter = pathSet.split("/");
      var pathGet;
      var pathSeverSet;

      if (hostSet == devHost) {
          pathGet = spliter[1];
          pathSeverSet = '';
      }
      else {
         pathGet = spliter[3];
         pathSeverSet = '/alumni/web';
      }

      $("#views-exposed-form-find-programs-non-us-find-programs-block, #views-exposed-form-find-programs-us-find-programs-block").attr('action', pathSeverSet + '/' + pathGet + '/find-programs-results');
    }

    $('.image-9').on( "click", function() {
      $('.block-search-form-block').toggleClass('active');
    } );

    $('#search-icon').click(function(e) {
      e.preventDefault();
      $('#search-bar').toggle();
    } );

      $('.menu-button').click(function(e) {
        e.preventDefault();
        $('.nav-menu').slideToggle('w--open');
      });


    $('#mobile-menu-icon').click(function() {
      $('#menu-dropdown').toggleClass('show');
    });

    if($(".fpp-buttons-list-drop-down").length > 0){
      $('.fpp-buttons-list-drop-down').on( "click", function() {
        $('.fpp-buttons-list').toggleClass('active');
        $(this).toggleClass('active');
      } );

      $('.fpp-buttons').on( "click", function() {
        let btn_id =  $(this).attr('href');
        let sections__btns = $('#find-programs, #list-programs, #special-focus-areas, #open-app-non-us, #nav5, #nav6, #nav7, #nav8 .fpp-buttons');

        // Reset
        $(sections__btns).removeClass('active');

        // Current button active upon clicked
        $(this).toggleClass('active');

        // Current section active upon clicked
        $(btn_id).addClass('active');

      } );
    }
// start coding for Travel & Living Arrangements pages.
    if($("#views-exposed-form-tla-resources-tla-getting-there-block").length > 0){
      $("#views-exposed-form-tla-resources-tla-getting-there-block").attr('action', '/tla-resources');
    }

    if($(".tla-buttons-list").length > 0){
      $('.tla-buttons-list-drop-down').on( "click", function() {
        $('.tla-buttons-list').toggleClass('active');
        $(this).toggleClass('active');
      } );

      $('.tla-buttons').on( "click", function() {
        let btn_id =  $(this).attr('href');
        let sections__btns = $('#find-programs, #list-programs, #special-focus-areas, #open-app-non-us, .tla-buttons');

        // Reset
        $(sections__btns).removeClass('active');

        // Current button active upon clicked
        $(this).toggleClass('active');

        // Current section active upon clicked
        $(btn_id).addClass('active');

      } );
    }
// End coding for Travel & Living Arrangements pages.

 // Start of Citizens CTAs
if($(".eca-us-non-cta, .eca-us-cta").length > 0){

  var pathSet = window.location.pathname;
  var hostSet = window.location.hostname;
  var devHost = 'eca-exchanges.lndo.site';
  var spliter = pathSet.split("/");
  var us_non_cta =  $('.eca-us-non-cta');
  var us_cta =  $('.eca-us-cta');
  var us_non_cta_span =  $('.eca-us-non-cta-span');
  var us_cta_span =  $('.eca-us-cta-span');

  var splitSet;

  if (hostSet == devHost) {
      splitSet =  spliter[1].length;
  }
  else {
     splitSet =  spliter[3].length;
  }




  if(splitSet == '15' || splitSet == '14') {
     // Non US Citizens Header Button
     us_non_cta.removeClass('bg-light');
     us_non_cta.addClass('bg-active');
     us_non_cta_span.addClass('text-white');
     us_cta.removeClass('bg-active');
     us_cta_span.removeClass('text-white');
     us_cta.addClass('bg-light');
  }
  else if(splitSet == '11') {
     // US Citizens Header Button
     us_cta.addClass('bg-active');
     us_cta_span.addClass('text-white');
  }
}
 // End of Citizens CTAs

    $(document).ready(function() {
      $('#menu-dropdown').on('change', function() {
          var url = $(this).val();
          if (url) {
              window.location.href = url;
          }
      });
    });


    //  Start
    $(document).ready(function() {
        // Check screen width on page load
        var isMobile = $(window).width() <= 991;

        // Toggle ARIA attributes on page load
        $('.w-nav-link').attr('aria-expanded', isMobile ? 'false' : 'true');

        // Toggle ARIA attributes on window resize
        $(window).resize(function() {
        isMobile = $(window).width() <= 991;
        $('.w-nav-link').attr('aria-expanded', isMobile ? 'false' : 'true');
        });

        // Click event listener for menu items
        $('.w-nav-link').click(function() {
        if (isMobile) {
            var $submenu = $(this).next('.w-dropdown-list');
            var isExpanded = $submenu.attr('aria-expanded') === 'true';

            // Toggle submenu visibility
            $submenu.toggleClass('w--nav-dropdown-list-open');

            // Toggle ARIA attribute
            $submenu.attr('aria-expanded', isExpanded ? 'false' : 'true');
        }
        });
    });
    // End

    })(jQuery);
    // jQuery is loaded
  } else {
    // jQuery is not loaded
  }
};
