(function($){
	
/*
 * Simple blink plugin
 *
 * @author Ivijan-Stefan Stipic
 * @url https://www.youtube.com/c/CreativformPage/live
 * @version 0.0.1 ALPHA
*/
$.fn.blinkText = function(options){
	// Global plugin setup
	var option=$.extend({
		interval	: 300,
		fadeOut		: 300,
		fadeIn		: 100,
		loop		: false,
	},options),
	// Get main element
	$this = this,
	// Set blinking mode
	interval = function(){
		// Wait some time
		setTimeout(function(){
			// Do fade out
			$this.fadeOut(option.fadeOut, function(){
				// Wait some time
				setTimeout(function(){
					// Do fade in
					$this.fadeIn(option.fadeIn, function(){
						// Loop if is enabled
						if(option.loop !== false) interval();
					});
				}, option.interval);
			});
		},option.interval)
	};
	
	// Run once
	interval();
	
	// Return for next integrations
	return $this;
}


/*
* RUN SCRIPT!
*/

$('h1').blinkText({
	interval	: 0,
	fadeOut		: 1000,
	fadeIn		: 1000,
	loop		: true
});



// -END
}(window.jQuery || window.Zepto));