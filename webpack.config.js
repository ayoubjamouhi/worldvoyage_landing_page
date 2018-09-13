const path = require('path');

module.exports = {
  	entry: {
    	// 'index': './src/index.scss',
  	},
  	output: {
    	filename: '[name].js',
    	path: path.resolve(__dirname, './js/')
  	},
  	mode: 'production',
  	devtool: 'inline-source-map',
	module: {
	    rules: [
	      {
	        test: /\.scss$/,
	        use: [
	          "style-loader", // creates style nodes from JS strings
	            "css-loader", // translates CSS into CommonJS
	                         "sass-loader" // compiles Sass to CSS, using Node Sass by default
	        ]
	      }
	    ]
	  }
};