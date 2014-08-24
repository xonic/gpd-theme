
require(["nav", "translator", "collapse", "fx", "scrollcontroller", "modernizr"], function(NavController, Translator, CollapseController, FX, ScrollController)
{
	// Add this event listener to prevent mobile safari 
	// from disabling the ::active pseudo class
	if (document.addEventListener)
		document.addEventListener("touchstart", function() {});

	NavController.init();
	Translator.init();
	CollapseController.listen();
	FX.init();
	ScrollController.init();
});