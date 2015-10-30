<?php

class ModelApplicationUser {

  /**
  * stores users id (Facebook UserID)
  *
  */
  public $id;

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
