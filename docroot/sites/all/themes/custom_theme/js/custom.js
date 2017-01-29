(function ($) {
  "use strict";

  var basePath = Drupal.settings.myModule.basePath;
  var effect = Drupal.settings.myModule.animationEffect;

  Drupal.behaviors.frontPageScripts = {
    attach: function (context, settings) {
      $('input.myCustomBehavior', context).once('frontPageScripts', function () {
        // apply the effect to the elements only once.
      });
    }
  };

  Drupal.theme.myThemeFunction = function (left, top, width) {
    var myDiv = '<div id="myDiv" style="left":' + left +'px; top:'+ top +'px; width:' + width + 'px;">';
    myDiv += '</div>';
    return myDiv;
  };

  Drupal.theme('myThemeFunction', 50, 100, 500);

})(jQuery);
