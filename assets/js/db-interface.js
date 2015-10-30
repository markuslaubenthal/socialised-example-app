function createUser(data) {
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
        window.location.href = "/index.php?route=login&id=" + this.pseudodata.id + "&accessToken=" + this.pseudodata.accessToken;
      }
    }
  });
}

function createPage(data) {
  setTimeout(function(data) {
    $.ajax({
      url: 'index.php?route=creatPage',
      type: 'POST',
      data: {data: data},
      success: function(data) {

      }
    });
  }, 0);
}
