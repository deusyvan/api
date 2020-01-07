<?php 
namespace Controllers;

use \Core\Controller;
use Models\Usuarios;

class HomeController extends Controller{
    //
    public function index(){
        print_r($this->getRequestData());
    }
}
