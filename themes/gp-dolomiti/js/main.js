requirejs.config(
{
	paths:
	{
		// 'jquery'			: 'imports/jquery-1.9.1',
		'modernizr'			: 'imports/modernizr',
		'selectivizr'		: 'imports/selectivizr', 
		'maps'				: 'imports/MapController'
	},

	shim:
	{
		'modernizr': {
			exports: 'Modernizr'
		}
	}
});

require(["modernizr", "maps"], function(Modernizr, MapController)
{
	MapController.init();

});
