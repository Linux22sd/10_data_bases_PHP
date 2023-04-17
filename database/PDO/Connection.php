<?php

namespace Dtabase\PDO;

class Connection {

    private static $instance;
    private $connection;

    private function __construct(){
        $this->make_connection();
    }

    public static function get_instance(){
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function get_database_instance(){
        return $this->connection;
    }

    private function make_connection(){
        $server = "localhost";
        $username = "alex";
        $password = "linux";
        $database = "finazas_personales";

        $connections = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

        $setnames = $connections->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $connections;
    }
}

?>