import $ from 'jquery';
import moment from 'moment'

function myTimer(elementSelector) {
  const now = moment().format('HH:mm:ss');
  $(elementSelector).html(now);
}

export default function(elementSelector) {
  var myVar = setInterval(function() {
    myTimer(elementSelector);
  }, 1000);
};