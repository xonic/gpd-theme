//  ---------------------------------------------------------------------------
//
//  Collapse plugin
//
//  ---------------------------------------------------------------------------

	
	
// Module definition
define(["jquery"], function($)
{
	var CollapseController =
	{
		listen: function()
		{
			var that = this;
			$(".js-collapsible__toggle").on("click", function(oArgs){that.onclick.call(that, oArgs);});
			
		},

		onclick: function(e)
		{
			e.preventDefault();
			
			var $target;

			// If clicked element is 
			// inside toggle element
			if(!$(e.target).hasClass("js-collapsible__toggle"))
			{
				// Get the href attribute 
				// of the parent toggle
				$target = $($(e.target).closest(".js-collapsible__toggle").attr("href"));
			}
			else
			{
				// Get the href attribute 
				// of the clicked element
				$target = $($(e.target).attr("href"));
			}

			var $targetInner = $target.children(".js-collapsible__inner");

			// Check if element is expanded or
			// collapsed and call according function
			$target.height() !== 0 ? this.collapse($target, $targetInner) : this.expand($target, $targetInner);
		},

		collapse: function($target, $targetInner)
		{
			var height = $targetInner.outerHeight(true);

			$target.css("height", height + "px");
			$("body").removeClass("flyout--is-shown");

			// CSS transitions available
			if(Modernizr.csstransitions)
			{
				$target.addClass("collapsible--is-animating");

				// Allow some time to set the transition class
				setTimeout(
					function()
					{
						// Add transition class and collapse to 0
						$target.removeClass("collapsible--is-expanded").css("height", "0");
					},
					50);

				// Attach a one time event listener to CSS transition end events
				$target.one("transitionEnd webkitTransitionEnd transitionend oTransitionEnd msTransitionEnd", function()
					{
						// Remove transition class when done
						$target.removeClass("collapsible--is-animating");
					}
				);
			}

			// Only JS animations available
			else
			{
				// Close body
				$target.animate({"height": "0"}, 300, function(e)
				{
					$(this).removeClass("collapsible--is-expanded");
				});
			}
		},

		expand: function($target, $targetInner)
		{
			var height = $targetInner.outerHeight(true);
			$("body").addClass("flyout--is-shown");

			// CSS transitions available
			if(Modernizr.csstransitions)
			{
				$target.addClass("collapsible--is-animating");

				// Allow some time to set the transition class
				setTimeout(
					function()
					{
						// Add transition class and collapse to 0
						$target.addClass("collapsible--is-expanded").css("height", height + "px");
					},
					50);

				// Attach a one time event listener to CSS transition end events
				$target.one("transitionEnd webkitTransitionEnd transitionend oTransitionEnd msTransitionEnd", function()
					{
						// Remove the transition class when done and set height to auto to allow resizing, orientation change etc.
						$target.removeClass("collapsible--is-animating").css("height", "auto");
					}
				);
			}

			// Only JS animations available
			else
			{
				// Open body
				$target.addClass("collapsible--is-expanded").animate({"height": height + "px"}, 300, function()
					{
						// Set height to auto to allow resizing, orientation change etc.
						$target.css("height", "auto");
					});
			}
		}
	};

	return CollapseController;

});
