var route = '';

/**
* Emulates route from get Parameter
*/

$(document).ready(function() {
	var url = window.location.href;
  var matches = url.match(/route=(.*)/);
  if(matches)
    route = matches[1];
});

function init() {
	if(route === '' || route === 'pages') {
		getManagedPages(getPosts);
	}
}
