<?php
namespace Controllers;

use Core\Controller;

class NotFoundController extends Controller {
    public function index(){
        $this->returnJson(array());
        //Views
        //$this->loadView('404', array());
    }
}