var route = '';

$(document).ready(function() {
	var url = window.location.href;
  var matches = url.match(/route=(.*)/);
  if(matches)
    route = matches[1];
});
