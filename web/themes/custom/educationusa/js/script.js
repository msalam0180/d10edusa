!function(){function t(n,e,o){function a(s,r){if(!e[s]){if(!n[s]){var l="function"==typeof require&&require;if(!r&&l)return l(s,!0);if(i)return i(s,!0);var c=new Error("Cannot find module '"+s+"'");throw c.code="MODULE_NOT_FOUND",c}var u=e[s]={exports:{}};n[s][0].call(u.exports,function(t){return a(n[s][1][t]||t)},u,u.exports,t,n,e,o)}return e[s].exports}for(var i="function"==typeof require&&require,s=0;s<o.length;s++)a(o[s]);return a}return t}()({1:[function(t,n,e){"use strict";window.onload=function(){!function(t,n){n.behaviors.menuDropdownBehavior={attach:function(n,e){t("#menu-dropdown-button",n).once("menuDropdownBehavior").on("click",".dropdown-item",function(n){var e=t(this).text();t("#menu-dropdown-button").text(e)})}}}(jQuery,Drupal),window.jQuery&&function(t){if(t("#views-exposed-form-find-programs-non-us-find-programs-block, #views-exposed-form-find-programs-us-find-programs-block").length>0){var n,e,o=window.location.pathname,a=window.location.hostname,i="exchangealumni.lndo.site",s=o.split("/");a==i?(n=s[1],e=""):(n=s[3],e="/alumni/web"),t("#views-exposed-form-find-programs-non-us-find-programs-block, #views-exposed-form-find-programs-us-find-programs-block").attr("action",e+"/"+n+"/find-programs-results")}if(t(".image-9").on("click",function(){t(".block-search-form-block").toggleClass("active")}),t("#search-icon").click(function(n){n.preventDefault(),t("#search-bar").toggle()}),t(".menu-button").click(function(n){n.preventDefault(),t(".nav-menu").slideToggle("w--open")}),t("#mobile-menu-icon").click(function(){t("#menu-dropdown").toggleClass("show")}),t(".fpp-buttons-list-drop-down").length>0&&(t(".fpp-buttons-list-drop-down").on("click",function(){t(".fpp-buttons-list").toggleClass("active"),t(this).toggleClass("active")}),t(".fpp-buttons").on("click",function(){var n=t(this).attr("href"),e=t("#find-programs, #list-programs, #special-focus-areas, #open-app-non-us, #nav5, #nav6, #nav7, #nav8 .fpp-buttons");t(e).removeClass("active"),t(this).toggleClass("active"),t(n).addClass("active")})),t("#views-exposed-form-tla-resources-tla-getting-there-block").length>0&&t("#views-exposed-form-tla-resources-tla-getting-there-block").attr("action","/tla-resources"),t(".tla-buttons-list").length>0&&(t(".tla-buttons-list-drop-down").on("click",function(){t(".tla-buttons-list").toggleClass("active"),t(this).toggleClass("active")}),t(".tla-buttons").on("click",function(){var n=t(this).attr("href"),e=t("#find-programs, #list-programs, #special-focus-areas, #open-app-non-us, .tla-buttons");t(e).removeClass("active"),t(this).toggleClass("active"),t(n).addClass("active")})),t(".eca-us-non-cta, .eca-us-cta").length>0){var r,o=window.location.pathname,a=window.location.hostname,i="eca-exchanges.lndo.site",s=o.split("/"),l=t(".eca-us-non-cta"),c=t(".eca-us-cta"),u=t(".eca-us-non-cta-span"),d=t(".eca-us-cta-span");r=a==i?s[1].length:s[3].length,"15"==r||"14"==r?(l.removeClass("bg-light"),l.addClass("bg-active"),u.addClass("text-white"),c.removeClass("bg-active"),d.removeClass("text-white"),c.addClass("bg-light")):"11"==r&&(c.addClass("bg-active"),d.addClass("text-white"))}t(document).ready(function(){t("#menu-dropdown").on("change",function(){var n=t(this).val();n&&(window.location.href=n)})}),t(document).ready(function(){var n=t(window).width()<=991;t(".w-nav-link").attr("aria-expanded",n?"false":"true"),t(window).resize(function(){n=t(window).width()<=991,t(".w-nav-link").attr("aria-expanded",n?"false":"true")}),t(".w-nav-link").click(function(){if(n){var e=t(this).next(".w-dropdown-list"),o="true"===e.attr("aria-expanded");e.toggleClass("w--nav-dropdown-list-open"),e.attr("aria-expanded",o?"false":"true")}})})}(jQuery)}},{}]},{},[1]);
//# sourceMappingURL=script.js.map
