var getPosts = function(account) {
  $.each(account, function(i, item) {
    getPostsFromPage(account[i], showPost);
  });

}
var showPost = function(account, post) {

}
