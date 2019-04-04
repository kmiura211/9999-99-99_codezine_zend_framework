<?php
require_once 'Zend/Controller/Action.php';

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
    }

    public function helloAction()
    {
      $req = $this->getRequest();
      $this->view->assign('name', $req->getPost('yourname'));
    }

}
