//  ---------------------------------------------------------------------------
//
//  Content Shifter
//
//  ---------------------------------------------------------------------------

	
	
// Module definition
define(["jquery"], function($)
{
	var ContentShifter = {

		shifters: {},

		init: function()
		{
			// this.shifters = $("[data-shifter]");

			var that = this;

			$.each($("[data-shifter]"), function(i, shifter)
			{
				that.shifters[i] 	    = {};
				that.shifters[i]["el"]  = $(shifter);
				that.shifters[i]["toggle"] = $(shifter).find("[data-shifter-toggle]");
				that.shifters[i]["children"] = $(shifter).find("[data-shifter-children]");

				that.shifters[i]["tallestChild"] = undefined;

				var self = that;

				$.each(that.shifters[i]["children"].children(), function(j, child)
				{
					if(self.shifters[i]["tallestChild"] === undefined || $(child).height() > $(self.shifters[i]["tallestChild"]).height())
					{
						self.shifters[i]["tallestChild"] = $(child);
					}
				});

				that.shifters[i]["children"].height(that.shifters[i]["tallestChild"].height());
			});

			this.listen();
		},

		listen: function()
		{
			var that = this;

			$.each(this.shifters, function(i, shifter)
			{
				shifter["el"].on("click", "[data-shifter-toggle]", that.shift);
			});


			// $("[data-shifter-toggle]").on("click", this.shift);
		},

		shift: function(e)
		{
			var left = $(e.delegateTarget).find("[data-shifter-left]"),
				right = $(e.delegateTarget).find("[data-shifter-right]");

				left.toggleClass("shifter--left");
				right.toggleClass("shifter--right");
		}
		
	};

	return ContentShifter;			
});























