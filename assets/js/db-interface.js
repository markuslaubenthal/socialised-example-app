function createUser(data, callback) {
  console.log(data);
  $.ajax({
    url: 'index.php?route=createUser',
    type: 'POST',
    data: {data: data},
    success: function(data) {
      if(data.success == 1)
        callback();
    }
  });
}

function createPage(data, callback) {

    $.ajax({
      url: 'index.php?route=createuser',
      type: 'POST',
      data: {data: data},
      success: function(data) {
        if(data.success == 1)
          callback();
      }
    });
}
