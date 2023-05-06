<?php
namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController{
    public $connection;

    public function __construct(){
        $this->connection = Connection::get_instance()->get_connection();
    }

    //------------------------------------------------------------------------------------------------------------
    // index   - Muestra la lista de este recurso (el recurso puede ser una tabla).
    public function index(){

    }

    //------------------------------------------------------------------------------------------------------------
    // create  - Muestra un formularioa para poder crear un recurso.
    public function create(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // store   - Guarda un nuevo recurso en base de datos.
    public function store($datos){
        $connection = Connection::get_instance()->get_connection();
        
        //Usando query no muy seguro ya que puede ser inyectado
        $connection->query("INSERT INTO incomes(payment_method, type, date, amount, description)VALUES(
            {$datos['payment_method']},
            {$datos['type']},
            '{$datos['date']}',
            {$datos['amount']},
            '{$datos['description']}'
            )");

        echo "Se han insertado una fila en la base de datos";

        /*
        // Usando prepare mas seguro
        $stmt= $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) 
            VALUES(?,?,?,?,?);");

        $stmt->bind_param("iisds", $payment_method, $type, $date, $amount, $description);

        $payment_method = $datos['payment_method'];
        $type = $datos['type'];
        $date = $datos['date'];
        $amount = $datos['amount'];
        $description = $datos['description'];

        $stmt->execute();

        echo "Se han insertado {$stmt->affected_rows} fila en la base de datos";
        */

    }

    //------------------------------------------------------------------------------------------------------------
    // show    - Muestra un  recurso especifico.
    public function show(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // edit    - Mostrar un formulario grfico para editar un recurso o registro.
    public function edit(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // update  - Actualizar el registro pero ya dentro de la base de datos.
    public function update(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // destroy - Eliminar registro.
    public function destroy(){
        
    }
    //------------------------------------------------------------------------------------------------------------
}

/*

index   - Muestra la lista de este recurso (el recurso puede ser una tabla).
create  - Muestra un formularioa para poder crear un recurso.
store   - Guarda un nuevo recurso en base de datos.
show    - Muestra un  recurso especifico.
edit    - Mostrar un formulario grfico para editar un recurso o registro.
update  - Actualizar el registro pero ya dentro de la base de datos.
destroy - Eliminar registro.

*/
?>