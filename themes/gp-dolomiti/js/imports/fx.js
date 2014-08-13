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

		$scrollLink: null,

		$window: null,

		thresholdLogo: 300,

		thresholdLink: 300,

		thresholdBackground: 700,

		init: function()
		{
			this.$branding = $("#js-branding");
			this.$logo = $("#js-logo");
			this.$scrollLink = $(".js-scrollto");
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
			var opacityLogo = this.thresholdLogo - this.$window.scrollTop(),
				opacityLink = this.thresholdLink - this.$window.scrollTop(),
				scrollPosY = this.$window.scrollTop();


			if(scrollPosY > this.thresholdBackground) return;

			if(scrollPosY >= 0 && scrollPosY <= this.thresholdLogo)
			{
				this.$logo.css(
				{
					"transform":  "translateX(" + scrollPosY / this.thresholdLogo * 100 + "px)",
					"opacity": opacityLogo / this.thresholdLogo
				});

			}

			if(scrollPosY >= 0 && scrollPosY <= this.thresholdLink)
			{
				this.$scrollLink.css(
				{
					"transform":  "translateX(" + -scrollPosY / this.thresholdLink * 300 + "px)",
					"opacity": opacityLink / this.thresholdLink
				});

			}

			if(scrollPosY >= 0 && scrollPosY <= this.thresholdBackground)
			{
				this.$branding.css(
				{
					"transform":  "translateX(-" + scrollPosY / this.thresholdBackground * 100 + "px)"
				});
			}
		}
	};

	return fx;
});
