function createUser(data, redirect) {
  console.log(data);
  $.ajax({
    url: 'index.php?route=createUser',
    type: 'POST',
    pseudodata: data,
    data: {data: data},
    dataType: 'json',
    success: function(data) {
      // Wenn Datensatz angelegt, oder bereits existiert
      if(data.success == 1 || data.error == 23000) {
        var url = 'index.php?route=login&id=' + this.pseudodata.id;
        $.ajax({
          url: url
        });
      }
    }
  });
}

function createPage(data) {
  console.log(data);
  $.ajax({
    url: 'index.php?route=createPage',
    type: 'POST',
    data: {data: data},
    dataType: 'json',
    success: function(data) {

    }
  });
}
