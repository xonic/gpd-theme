
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
			this.fixForms();
			$("body").addClass($('.spco-ticket-info-dv > table > tbody > tr:nth-child(2) > td:first-child').clone().children().remove().end().text().toLowerCase());
		},

		translate: function()
		{
			var that = this;

			$.each($(".espresso-question-group-wrap label, .espresso-question-group-wrap .section-title"), function(i, el)
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
		},

		getBaseURL: function()
		{
			return $("body").data("base-url");
		},

		getLangURL: function()
		{
			return $("body").data("lang-url");
		},

		fixNonTranslatedURL: function($el, attribute)
		{
			if($el.length > 0)
			{
				// console.log("before: " + $el.attr(attribute));
				$el.attr(attribute, $el.attr(attribute).replace(this.getBaseURL(), this.getLangURL()));
				// console.log("after: " + $el.attr(attribute));
			}
		},

		fixForms: function()
		{
			this.fixNonTranslatedURL($("form"), "action");
		}
	};

	return Translator;
});

// http://localhost:8888/gp-dolomiti-new/veranstaltungen/gpd2015/?ee=process_ticket_selections
// http://localhost:8888/gp-dolomiti-new/registration/?ee=_register&step=process_payment_options