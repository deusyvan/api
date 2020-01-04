<?php 
class Tarefas extends model{
    
    public function listar(){
        $array = array();
        
        $sql = "SELECT * FROM tarefas";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
            return $array;
    }
    
    public function addTarefa($titulo) {
        $this->db->query("INSERT INTO tarefas SET titulo = '$titulo'");
    }
    
    
}