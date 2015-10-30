<?php

class Router {

  public static function getController($request) {

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
        default:
          return new ControllerDefault($request);
      }
    }
  }
}

?>
