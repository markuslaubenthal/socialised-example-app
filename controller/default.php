<?php
class ControllerDefault{

    private $request = null;
    private $template = '';
    private $view = null;

    /**
     * Konstruktor, erstellet den Controller.
     *
     * @param Array $request Array aus $_GET & $_POST.
     */
    public function __construct($request){
        $this->view = new View();
        $this->request = $request;
        $this->template = !empty($request['view']) ? $request['view'] : 'default';
    }

    /**
     * Methode zum anzeigen des Contents.
     *
     * @return String Content der Applikation.
     */
    public function display(){
        $innerView = new View();
        switch($this->template){
            case 'entry':
                $innerView->setTemplate('posts');
                $entryid = $this->request['id'];
                $entry = ModelDefault::find($entryid);
                $innerView->assign('title', $entry['title']);
                $innerView->assign('content', $entry['content']);
                break;

            case 'default':
            default:
                $innerView->setTemplate('posts');
                $result = ModelDefault::findAll();
                $innerView->assign('modeldata', $result);
        }
        $this->view->setTemplate('application');
        $this->view->assign('title', 'The Title');
        $this->view->assign('content', $innerView->loadTemplate());
        return $this->view->loadTemplate();
    }
}

?>
