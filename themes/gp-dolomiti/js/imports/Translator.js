
define(["jquery"], function($)
{
	var Translator =
	{
		currentLang: undefined,

		languages:
		{
			"en-US":0,

			"de-DE":1,

			"it-IT":2,

			"fr-FR":3
		},

		splitChar:"/",

		init: function()
		{
			this.currentLang = $('html').attr("lang");
			this.translate();
		},

		translate: function()
		{
			var that = this;

			$.each($(".js-translate"), function(i, el)
			{
				var $el = $(el),
					required = false,
					requiredEl = $('<em>').text('*');

				if($el.text().indexOf('*') !== -1)
				{
					$el.text($el.text().substr(0, $el.text().indexOf('*')));
					required = true;
				}

				$el.text($el.text().split(that.splitChar)[that.languages[that.currentLang]]);

				if(required)
				{
					$el.append(requiredEl);
				}

			});
		}
	};

	return Translator;
});