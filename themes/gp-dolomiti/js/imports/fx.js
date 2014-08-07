//  ---------------------------------------------------------------------------
//
//  Page effects
//
//  ---------------------------------------------------------------------------



// Module definition
define(function()
{
	var fx =
	{
		// The minimum screen size
		// required for the effects
		mq: "min-width:48em",

		$branding: null,

		$logo: null,

		$window: null,

		thresholdLogo: 300,

		thresholdBackground: 600,

		init: function()
		{
			this.$branding = $("#js-branding");
			this.$logo = $("#js-logo");
			this.$window = $(window);
			this.bindScrollListener();
			this.onscroll();
		},

		bindScrollListener: function()
		{
			var self = this;

			this.$window.on("scroll", function(e){ self.onscroll.call(self); });
		},

		onscroll: function()
		{
			var opacityValue = this.thresholdLogo - this.$window.scrollTop(),
				scrollPosY = this.$window.scrollTop();

			if(scrollPosY >= 0 && scrollPosY <= this.thresholdLogo)
			{
				this.$logo.css(
				{
					"-webkit-transform":  "translateX(" + scrollPosY / this.thresholdLogo * 100 + "px)",
					"opacity": opacityValue / this.thresholdLogo
				});

			}

			if(scrollPosY >= 0 && scrollPosY <= this.thresholdBackground)
			{
				this.$branding.css(
				{
					"-webkit-transform":  "translateX(-" + scrollPosY / this.thresholdBackground * 100 + "px)"
				});
			}
		}
	};

	return fx;
});
