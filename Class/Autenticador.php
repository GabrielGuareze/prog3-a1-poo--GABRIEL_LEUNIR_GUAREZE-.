<?php 
require_once 'USUARIO.php';

class Autenticador{
    private static $usuarios = [];
    
    public static function registrar($usuario) {
        self::$usuarios[$usuario->getemail()] = $usuario;
    }
    
    public static function login($email, $senha) {
        if(isset(self::$usuarios[$email])){
            $usuario = self:: $usuarios[$email];
            if($usuario->verificarsenha($senha)){
                return $usuario;
        }
     }
     return null;  
 }
}

?>
