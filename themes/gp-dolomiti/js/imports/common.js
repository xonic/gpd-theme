define(["modernizr", "selectivizr", "prism", "collapse", "tabcontroller", "scrollcontroller", "stickycontroller", "contentshifter", "flyoutcontroller", "dropdown"], function(Modernizr, Selectivizr, Prism, Collapse, TabController, ScrollController, StickyController, ContentShifter, FlyoutController)
{
	var common = {

		constructor : function(){
			$(function() {

				
				Collapse.listen();

				TabController.listen();

				ScrollController.listen();

				StickyController.init(600);

				ContentShifter.init();

				Prism.highlightAll();

				FlyoutController.init();
				
				
				// test for mq support
				if (!Modernizr.mq('only all'))
				{
					$("html").addClass("no-mq");
					
					var slvzr = new Selectivizr();
					slvzr.startup();	
				}
				
				// test for boxsizing
				// developer.mozilla.org/en/CSS/box-sizing
				// github.com/Modernizr/Modernizr/issues/248
				Modernizr.addTest("boxsizing", Modernizr.testAllProps("boxSizing") && (document.documentMode === undefined || document.documentMode > 7));
				

			});
		}

	};

	return common;
});