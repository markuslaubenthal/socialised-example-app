<?php
class ControllerUser{

    private $request = null;
    private $template = '';
    private $view = null;
    private $output = '';

    /**
     * Konstruktor, erstellet den Controller.
     *
     * @param Array $request Array aus $_GET & $_POST.
     */
    public function __construct($request) {
        $this->view = new View();
        $this->request = $request;
        $this->template = '';

        if($request['route'] === 'createUser') {
          if(($code = ModelApplicationUserRepository::create($request['data'])) !== 200) {
            // Error
            $outputArray = array(
              'error' => $code
            );
          }
          else {
            // Success
            $outputArray = array(
              'success' => $code
            );
          }
          $this->output = json_encode($outputArray);
        }
    }

    /**
     * Methode zum anzeigen des Contents.
     *
     * @return String Content der Applikation.
     */
    public function display(){
        header('Content-Type: application/json');
        $this->view->setTemplate('json');
        $this->view->assign('outlet', $this->output);
        return $this->view->loadTemplate();
    }
}

?>
