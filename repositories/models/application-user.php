<?php

class ModelApplicationUser {

  /**
  * stores the users full name
  *
  */
  public $name;

  /**
  * stores users Facebook-accessToken
  *
  */
  public $accessToken;

  /**
  * hasMany Relation
  * stores the managed pages
  */
  public $pages;
}

?>
