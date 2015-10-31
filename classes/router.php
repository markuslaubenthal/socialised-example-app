<?php

/**
* class Router
* Emuliert Routen durch /GET index.php?route=:route
*/

class Router {

  public static function getController($request) {

    // Default Route, if no route specified

    if(!isset($request['route'])) {

      return new ControllerDefault($request);
    }
    else {

      // Emulated routes

      switch($request['route']) {
        case 'createUser':
        case 'deleteUser':
          return new ControllerUser($request);
        break;
        case 'createPage':
          return new ControllerPage($request);
        break;
        case 'login':
          return new ControllerLogin($request);
        break;
        /*case 'page':
          return new ControllerPages($request);
        default:*/
          return new ControllerDefault($request);
      }
    }
  }
}

?>
