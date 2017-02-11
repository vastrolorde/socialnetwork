var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scripts(
    	[
	    	'vue/dist/vue.min.js',
			'axios/dist/axios.min.js'
		],
		'public/js/app.js',
		'node_modules'
	);
});