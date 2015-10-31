<?php
class ControllerDefault{

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
        $this->view = new View();
        $this->request = $request;
        $this->template = 'default';
        if($logged)
          $this->user = ModelApplicationUserRepository::find($_SESSION['id']);
    }

    /**
     * Methode zum anzeigen des Contents.
     *
     * @return String Content der Applikation.
     */
    public function display(){
        $innerView = new View();
        $innerView->setTemplate('posts');
        $this->view->setTemplate('application');
        $this->view->assign('title', 'Socialised Test App - Default Page');
        $this->view->assign('outlet', $innerView->loadTemplate());
        $this->view->assign('user', $this->user);
        return $this->view->loadTemplate();
    }
}

?>
