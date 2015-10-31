var TEMPLATES = [];

var oTemplate = function() {
  this.templates = {};
}

oTemplate.prototype.addTemplate = function(data, name) {
  this.templates[name] = data;
}

var myTemplate = new oTemplate();

$(document).ready(function() {
  $.get('public/templates/page_01.html', function(data, textStatus, XMLHttpRequest) {
    myTemplate.addTemplate(data, 'page01');
  });
});
