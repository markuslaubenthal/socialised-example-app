<?php
class ControllerPages{

    private $request = null;
    private $template = '';
    private $view = null;
    private $user = null;
    /**
     * Konstruktor, erstellet den Controller.
     *
     * @param Array $request Array aus $_GET & $_POST.
     */
    public function __construct($request){

        global $logged;

        if(!$logged) {
          header('Location: index.php');
        }

        $this->view = new View();
        $this->request = $request;
        $this->template = '';

        $this->user = ModelApplicationUserRepository::find($_SESSION['id']);

    }

    /**
     * Methode zum anzeigen des Contents.
     *
     * @return String Content der Applikation.
     */
    public function display(){
        $innerView = new View();
        $innerView->setTemplate('pages');
        $this->view->setTemplate('application');
        $this->view->assign('title', 'Socialised Test App - Your managed pages');
        $this->view->assign('outlet', $innerView->loadTemplate());
        $this->view->assign('user', $this->user);
        return $this->view->loadTemplate();
    }
}

?>
