
require(["nav", "translator", "hotelselection", "collapse", "fx", "scrollcontroller", "modernizr"], function(NavController, Translator, HotelSelection, CollapseController, FX, ScrollController)
{
	// Add this event listener to prevent mobile safari 
	// from disabling the ::active pseudo class
	if (document.addEventListener)
		document.addEventListener("touchstart", function() {});

	NavController.init();
	Translator.init();
	HotelSelection.init();
	CollapseController.listen();
	FX.init();
	ScrollController.init();
});