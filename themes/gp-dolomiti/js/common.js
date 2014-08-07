
require(["nav", "translator", "hotelselection", "collapse", "fx", "modernizr"], function(NavController, Translator, HotelSelection, Collapse, FX)
{
	// Add this event listener to prevent mobile safari 
	// from disabling the ::active pseudo class
	if (document.addEventListener)
		document.addEventListener("touchstart", function() {});

	NavController.init();
	Translator.init();
	HotelSelection.init();
	Collapse.listen();
	FX.init();
});