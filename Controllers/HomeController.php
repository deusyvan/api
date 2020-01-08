<?php 
namespace Controllers;

use \Core\Controller;
use Models\Usuarios;

class HomeController extends Controller{
    //
    public function index(){
        //echo "METODO: ".$this->getMethod();
        //print_r($this->getRequestData());
        $array = array(
            'nome' => 'Antonio',
            'idade' => '10'
        );
        $this->returnJson($array);
        
        //Para views
        $array = array();
        $usuarios = new Usuarios();
        $array['lista'] = $usuarios->getAll();
        
        $this->loadTemplate('home', $array);
    }
    
    public function testando() {
        echo "FUNCIONOU";
    }
    
    public function visualizar_usuarios($id) {
        echo "ID: ".$id;
    }
}
