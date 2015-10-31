<?php
class ControllerPage{

    private $request = null;
    private $template = '';
    private $view = null;
    private $output = '';
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

        if($request['route'] === 'createPage' && isset($request['data'])) {
          if(($code = FacebookPageRepository::create($request['data'])) !== 200) {
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
        $this->view->setTemplate('json');
        $this->view->assign('outlet', $this->output);
        return $this->view->loadTemplate();
    }
}

?>
