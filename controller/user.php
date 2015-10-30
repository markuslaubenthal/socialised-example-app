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

        print_r($request);

        if($request['route'] === 'createUser') {
          if(ModelApplicationUserRepository::create($request['data']) !== 200) {
            // Error

          }
          else {
            // Success
            $outputArray = array(
              'success' => 'true'
            );
            $this->output = json_encode($outputArray);
            print_r($outputArray);
          }
        }
    }

    /**
     * Methode zum anzeigen des Contents.
     *
     * @return String Content der Applikation.
     */
    public function display(){
        $this->view->setTemplate('json');
        $this->view->assign('outlet', $this->output);
        return $this->view->loadTemplate();
    }
}

?>
