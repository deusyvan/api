<?php 
namespace Core;

class Controller {
    //Para pegar os metodos
    public function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
    //Pegar dados da requisição
    public function getRequestData() {
        switch ($this->getMethod()){
            case 'GET':
                return $_GET;
                break;
            case 'PUT':
            case 'DELETE':
                $input = file_get_contents('php://input');
                parse_str($input,$data);
                
                break;
            case 'POST':
                
                break;
        }
    }
    //Fazer o retorno em json
    public function returnJson($array) {
        ;
    }
}
