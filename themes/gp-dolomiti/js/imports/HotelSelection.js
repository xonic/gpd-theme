
define(["jquery"], function($)
{
	var HotelSelection =
	{
		// The master dropdown which controls
		// the visibility of the hotel dropdowns
		$packageSelect:undefined, //"#price_option-1",

		// The parent element of all hotel dropdowns. 
		// Must be hidden if user selects basic
		// premium package.
		$hotelGroup:undefined,

		// All the dropdown elements that should
		// be shown/hidden dynamically.
		$hotelDropdowns:undefined,

		// The base class selector for the numerous
		// hotel dropdown elements. Must be combined
		// with an index number.
		hotelDropdownBaseSel:undefined,

		// Keep track of the first time the onchange
		// function gets called (on page load)
		firstLoad:true,

		init: function()
		{
			this.$packageSelect = $("[name='price_option']");
			this.$hotelGroup = $(".js-hotel-group");
			this.$hotelDropdowns = $("[class*='js-hotel-suite-']");

			// Quit if there is no package dropdown
			if(this.$packageSelect.length === 0) return;

			// Check if there is a pre-selected package
			// passed as URL parameter and set as selected
			var packageParam = this.getURLParameter("package");
			if(packageParam)
			{
				this.$packageSelect.find("[value*='" + packageParam + "']").attr("selected", true);
			}

			this.onchange();
			this.listen();
		},

		listen: function()
		{
			var that = this;

			this.$packageSelect.on("change", function(e) { that.onchange.call(that, e); });
		},

		onchange: function(e)
		{
			var selectedIndex = this.$packageSelect[0].selectedIndex;

			// Only reset Dropdowns if it's not
			// the first time onchange gets called
			if(!this.firstLoad)	this.resetSelection();

			this.firstLoad = false;

			// Basic premium package selected, 
			// hide the whole dropdown group
			if(selectedIndex === 0)
			{
				this.hideGroup();
			}
			else
			{
				this.showGroup();
				this.hideAllDropdowns();
				this.showDropdown(selectedIndex-1);
			}
		},

		getURLParameter:function(name)
		{
			return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
		},

		hideGroup: function()
		{
			this.$hotelGroup.addClass("is-hidden");
		},

		showGroup: function()
		{
			this.$hotelGroup.removeClass("is-hidden");
		},

		hideAllDropdowns: function()
		{
			this.$hotelDropdowns.addClass("is-hidden");
		},

		showDropdown: function(index)
		{
			$(this.$hotelDropdowns.get(index)).removeClass("is-hidden");
		},

		resetSelection: function()
		{
			$.each(this.$hotelDropdowns, function(i, dropdown)
			{
				$(dropdown).find("select")[0].selectedIndex = 0;
			});
		}
	};

	return HotelSelection;
});