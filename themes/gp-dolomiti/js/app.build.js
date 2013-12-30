({
    appDir: "../",
    baseUrl: "js/",
    dir: "../../the-build",
    mainConfigFile: 'main.js',
    //Comment out the optimize line if you want
    //the code minified by UglifyJS
    //optimize: "none",

    modules: [
        //Optimize the application files. jQuery is not 
        //included since it is already in require-jquery.js
        {
            name: "main"
        }
    ]
})
