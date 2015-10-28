<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Credentials
require_once 'restricted/mysql_credentials.php';

// Router
require_once 'router.php';

// Controller
require_once 'controller/default.php';

// API
require_once 'classes/facebook-api.php';

// Models
require_once 'models/default.php';
require_once 'models/application-user.php';
require_once 'models/facebook-administrated-page.php';
require_once 'models/facebook-post.php';

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
