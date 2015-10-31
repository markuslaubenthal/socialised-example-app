var sectionCounter = true;

var getPosts = function(account) {
  $.each(account.data, function(i, item) {
    getPostsFromPage(account.data[i], showPost);
  });

}
var showPost = function(account, post) {
  console.log(account);
  console.log(post);

  $template = (sectionCounter ? $(myTemplate.templates.page01) : $(myTemplate.templates.page02));
  console.log(myTemplate);
  sectionCounter = (sectionCounter ? false : true);
  if(post.data.length > 0) {
    $template.find('p').text(post.data[0].message);
  }
  $template.find('h2').text(account.name + ' : Last Post');
  $('#wrapper').append($template);
}
