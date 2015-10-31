var sectionCounter = true;

var getPosts = function(account) {
  $.each(account.data, function(i, item) {
    account.data[i].user_id = userid;
    createPage(account.data[i]);
    getPostsFromPage(account.data[i], showPost);
  });

}
var showPost = function(account, post) {
  $template = (sectionCounter ? $(myTemplate.templates.page01) : $(myTemplate.templates.page02));
  sectionCounter = (sectionCounter ? false : true);
  if(post.data.length > 0) {
    $template.find('p').text(post.data[0].message);
  }
  $template.find('h2').text(account.name + ' : Last Post');
  $('#wrapper').append($template);
}
