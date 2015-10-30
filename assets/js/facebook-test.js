var accessToken = '';

function facebookLogin() {
  console.log('Welcome!  Fetching your information.... ');
  FB.api('/me', function(userdata) {
    console.log('Successful login for: ' + userdata.name);
    // if standard route, create the User
    if(route === '') {
      userdata.accessToken = accessToken;
      createUser(userdata);
    }
  });
}

var getManagedPages = function () {
  FB.api('/me/accounts', function(accounts) {
    //foreach page
    console.log(accounts);
  });
}

window.fbAsyncInit = function() {
  FB.init({
    appId      : '583689518450260',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use version 2.5
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
};

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

/**
* callback function for checkLoginState
*/
function statusChangeCallback(response) {
  console.log('statusChangeCallback');
  console.log(response);
  accessToken = response.authResponse.accessToken;
  // The response object is returned with a status field that lets the
  // app know the current login status of the person.
  // Full docs on the response object can be found in the documentation
  // for FB.getLoginStatus().
  if (response.status === 'connected') {
    // Logged into your app and Facebook.
    facebookLogin();
  } else if (response.status === 'not_authorized') {

    console.log('Please log into this app');
  } else {
    // The person is not logged into Facebook, so we're not sure if
    // they are logged into this app or not.
    console.log('Please log into Facebook');
  }
}


(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
