<?php
   class Usuario{
   private $db;
   
    public function __construct(){
      $this->db = new Base;
   }

   public function obtener(){
       $this->db->query('SELECT * FROM usuario');
       $resultados = $this->db->registros();
       return $resultados;
   }



   public function agregarUsuario($datos){
     $this->db->query('INSERT into usuario(nome, email, numero) values(:nome, :email, :numero)');
     $this->db->bind(':nome', $datos['nome']);
     $this->db->bind(':email', $datos['email']);
     $this->db->bind(':numero', $datos['numero']);
      
     if ($this->db->execute()) {
        return true;
     } else {
        return false;
     }
     
   }


    public function obtenerId($id){
       $this->db->query('SELECT * FROM usuario WHERE id_usuario = :id');
       $this->db->bind(':id', $id);
       $row = $this->db->registro();
       return $row;
    }
 
    public function actualizarUsuario($datos){
      $this->db->query('UPDATE usuario SET nome = :nome, email = :email , numero = :numero WHERE id_usuario = :id');
      $this->db->bind(':id', $datos['id_usuario']);
      $this->db->bind('nome', $datos['nome']);
      $this->db->bind('email',$datos['email']);
      $this->db->bind('numero', $datos['numero']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
      
    }


    public function borrarUsuario($datos){
      $this->db->query('DELETE FROM usuario  WHERE id_usuario = :id');
      $this->db->bind(':id', $datos['id_usuario']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
      
    }



}