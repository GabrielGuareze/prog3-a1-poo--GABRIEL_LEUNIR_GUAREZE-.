<?php

class Usuario{
    private $nome;
    private $email;
    private $senha;
    
    public function _construct($nome, $email, $senha){
        $this->nome =  $nome;
        $this->email = $email;
        $this->senha = $senha;
     }
     
     public function getnome(){
         return $this->nome;
     }
     
     public function getemail(){
         return $this->email;
     }
     
     public function verificarsenha ($senha){
         return password_verify($senha,$this->senha);
     }   
}
?>
