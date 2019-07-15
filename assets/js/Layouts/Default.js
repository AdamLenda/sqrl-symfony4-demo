require('../../css/Layouts/Default.scss');
import $ from 'jquery';
import clock from '../Libraries/Clock'

$(document).ready(function() {
  console.log("Starting Clock");
  clock('#clock');
  console.log("Clock Running..");
});