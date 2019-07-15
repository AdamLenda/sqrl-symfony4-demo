/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');

// loads the jquery package from node_modules
import $ from 'jquery';

// Import bootstrap
import 'bootstrap';

// Import Moment
import 'moment';

// import the function from greet.js (the .js extension is optional)
// ./ (or ../) means to look for a local file

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
