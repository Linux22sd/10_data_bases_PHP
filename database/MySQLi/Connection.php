<?php

namespace Database\MySQLi;

use Database\MySQLi\Host_data;

class Connection extends Host_data{

    private static $instance;
    private $connection;

    // 2 - Al crear la instancia se ejecutara el constructor
    private function __construct(){
        $this->make_connection(); 
    }

    // 1 - Este metodo crea la instancia si no existe
    public static function get_instance(){
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    // 3 - El constructor manda a este metodo primero que crea las variables
    private function make_connection(){
        $mysqli = new \mysqli($this->server, $this->username, $this->password, $this->database);
        $this->validation($mysqli);
        $this->set_names($mysqli);
        $this->connection = $mysqli;
    }

    // 
    private function set_names (&$mysqli){
        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();
    }

    // 
    private function validation($mysqli){
        if ($mysqli->connect_errno)
            die("Algo salio mal {$mysqli->connect_error}" );
    }

    // 
    public function get_connection(){
        return $this->connection;
    }
   
};

Connection::get_instance();

// NOTAS -----------------------------------------------------------------

// $server = "localhost";
// $username = "alex";
// $password = "linux";
// $database = "finazas_personales";


// Forma procedural ------------------------------------------------------
// $mysqli = mysqli_connect($server, $username, $password, $database);
// Comprobar conexion de manera procedural -------------------------------
// if (!$mysqli) 
//    die("Algo salio mal" . mysqli_connect_error());


// Forma orientada a objetos --------------------------------------------
// $mysqli = new mysqli($server, $username, $password, $database);
// Comprobar conexion forma orientada a objetos -------------------------
// if ($mysqli->connect_errno)
//     die("Algo salio mal {$mysqli->connect_error}" );


// Esto nos ayuda a poder usar cualquier caracter en nuestras consultas
// $setnames = $mysqli->prepare("SET NAMES 'utf8'");
// $setnames->execute();

// echo "<pre>";
// print_r($setnames);
// echo "</pre>";
?>