<?php
    
    namespace gayosso;
 

    /**
     * Class Persona
     */
    
    class Login extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["usuario","contrasena"];
        protected $table = "usuarios";
        public $usuario = "";
        public $contrasena = "";
    }

$stmt = $dbh->prepare("INSERT INTO usuarios (usuario, contrasena) VALUES (:usuario, :contrasena)");
$usuario = "Harry";
$contraseña = "123";
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':contrasena', $contrasena);
$stmt->execute();

?>
