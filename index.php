<?php

session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Credentials
require_once 'restricted/mysql_credentials.php';

// Connection
require_once 'classes/pdo_connection.php';

// Router
require_once 'router.php';

// Controller
require_once 'controller/default.php';
require_once 'controller/user.php';
// API
require_once 'classes/facebook-api.php';

// Repositories
require_once 'repositories/application-user-repository.php';

// View
require_once 'classes/view.php';

// $_GET und $_POST zusammenfasen
$request = array_merge($_GET, $_POST);
// Controller erstellen
//$controller = new Controller($request);
$controller = Router::getController($request);
// Inhalt der Webanwendung ausgeben.
echo $controller->display();




?>
