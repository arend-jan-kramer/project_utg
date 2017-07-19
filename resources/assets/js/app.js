
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./components/animate');
// require('./components/greensocks');
require('./components/bootstrap');
require('./components/greensocks');
require('./components/modal');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

(function($) {

	// var completeFunction = function() {
	// 	TweenMax.to( $('#vlag'), 2, { x: 0, y: 0, rotation: 0, height: 200, width: 300,
	// 		onComplete: startFunction
	// 	});
	// }
  //
	// var startFunction = function () {
	// 	TweenMax.to( $('#vlag'), 2, { x: 90, y: 100, rotation: 90, height: 200, width: 300,
	// 		onComplete: completeFunction
	// 	});
	// }

  var startFunction = function () {
    $name = $('.left');

    var tl = new TimelineLite();

    tl.to( $name, 14, { x: -750, repeat: -1, ease:Linear.easeNone});

  }

	startFunction();

})(jQuery);
