
// Use WP jQuery
// if (typeof jQuery === 'function')
// {
//   define('jquery', function () { return jQuery; });
// }


require(["nav", "translator", "hotelselection", "modernizr"], function(NavController, Translator, HotelSelection)
{
	// Add this event listener to prevent mobile safari 
	// from disabling the ::active pseudo class
	if (document.addEventListener)
		document.addEventListener("touchstart", function() {});

	NavController.init();
	Translator.init();
	HotelSelection.init();
});