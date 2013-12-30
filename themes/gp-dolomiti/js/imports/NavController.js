//  ---------------------------------------------------------------------------
//
//  Main page navigation
//
//  ---------------------------------------------------------------------------



// Module definition
define(function()
{
	var NavController =
	{
		body:undefined,
		toggle:undefined,

		init:function()
		{
			this.body = document.querySelector("body");
			this.toggle = document.querySelector(".js-flyout__toggle");

			if(this.body && this.toggle)
			{
				this.bindEventListeners();
			}
		},

		bindEventListeners:function()
		{
			var self = this;

			if(!this.toggle.addEventListener)
				this.toggle.attachEvent("onclick", function(e){ self.toggleMenu.call(self); });

			else
				this.toggle.addEventListener("click", function(e){ self.toggleMenu.call(self); });
		},

		toggleMenu:function()
		{
			if(!this.body.classList)
			{
				var classes = this.body.className.split(" "),
					found = false,
					index = 0;

				for(var i=0, l=classes.length; i<l; i++)
				{
					if(classes[i] === "nav-is-shown")
					{
						found = true;
						index = i;
						break;
					}
				}

				if(found)
					classes.splice(index, 1);

				else
					classes.push("nav-is-shown");

				this.body.className = classes.join(" ");
			}
			else
			{

				this.body.classList.toggle("nav-is-shown");
			}
		}
	};

	return NavController;
});
