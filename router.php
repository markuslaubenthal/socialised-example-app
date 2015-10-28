<?php

class Router {

  public static function getController($request) {

    if(!isset($request['route'])) {

      return new ControllerDefault($request);
    }
  }
}

?>
