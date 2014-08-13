//  ---------------------------------------------------------------------------
//
//  Scrolling Controller
//
//  ---------------------------------------------------------------------------

	
	
// Module definition
define(["jquery"], function($)
{
	var ScrollController = {

		init: function()
		{
			var that = this;

			// Bind the click event listener
			$(".js-scrollto").click(function(oArgs){that.onclick.call(that, oArgs);});
			
		},

		onclick: function(e)
		{
			e.preventDefault();

			var newPos = $($(e.target).attr("href")).offset().top;

			$('html, body').stop().animate({ scrollTop: newPos }, { duration: 800 });
		}
	};

	return ScrollController;			
});
