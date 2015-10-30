<?php
class ControllerLogin{

    private $request = null;
    private $template = '';
    private $view = null;

    /**
     * Konstruktor, erstellt den Controller.
     *
     * @param Array $request Array aus $_GET & $_POST.
     */
    public function __construct($request) {
        $this->request = $request;
        $this->template = '';

        //Login Template

        $user = ModelApplicationUserRepository::find($request['id']);

        if($user->id === $request['id']) {
          $_SESSION['id'] = $request['id'];

          header('Location: index.php?route=pages');
        }
        else {
          header('Location: index.php');
        }
    }

    /**
     * Methode zum anzeigen des Contents.
     *
     * @return String Content der Applikation.
     */
    public function display(){

    }
}

?>
