<?php 
namespace Core;

class Controller {
    //Para pegar os metodos
    public function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
    //Pegar dados da requisição
    public function getRequestData() {
        ;
    }
    //Fazer o retorno em json
    public function returnJson($array) {
        ;
    }
}
