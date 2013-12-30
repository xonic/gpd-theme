//  ---------------------------------------------------------------------------
//
//  Flyout Controller
//
//  ---------------------------------------------------------------------------

	
	
// Module definition
define(["jquery"], function($)
{
	var FlyoutController = {

		toggle: {},

		container:{},

		init:function()
		{
			this.toggle = $("[data-flyout-toggle]");
			this.container = $("[data-flyout-container]");
			this.listen();
		},

		listen: function()
		{
			var that = this;

			this.toggle.click(function(oArgs){that.onclick.call(that, oArgs);});
			$(window).resize(function(oArgs){that.onresize.call(that, oArgs);});
		},

		onclick: function(e)
		{
			e.preventDefault();
			e.stopPropagation();

			this.container.toggleClass("flyout--is-open");
		},

		onresize: function()
		{
			if(this.container.hasClass("flyout--is-open"))
			{
				this.container.removeClass("flyout--is-open");
			}
		}
		
	};

	return FlyoutController;			
});























