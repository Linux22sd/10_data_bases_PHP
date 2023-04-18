<?php
namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController{

    //------------------------------------------------------------------------------------------------------------
    // index - Display a listing of the resource.
    public function index(){

    }

    //------------------------------------------------------------------------------------------------------------
    // create - Show the form for creating a new resource.
    public function create(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // store - Store a newly created resource in storage.
    public function store($datos){
        $connection = Connection::get_instance()->get_connection();

        
        //Usando query no muy seguro
        $connection->query("INSERT INTO incomes(payment_method, type, date, amount, description)VALUES(
            {$datos['payment_method']},
            {$datos['type']},
            '{$datos['date']}',
            {$datos['amount']},
            '{$datos['description']}'
            )");

        echo "Se han insertado una fila en la base de datos";



        /*
        // Usando PREPARE mas seguro
        $stmt= $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES(?,?,?,?,?);");

        $stmt->bind_param("iisds", $payment_method, $type, $date, $amount, $description);

        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];

        $stmt->execute();

        echo "Se han insertado {$stmt->affected_rows} fila en la base de datos";
        */

    }
    //------------------------------------------------------------------------------------------------------------
    // show - Display the specified resource.
    public function show(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // edit - Show the form for editing the specified resource.
    public function edit(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // update - Update the specified resource in storage.
    public function update(){
        
    }

    //------------------------------------------------------------------------------------------------------------
    // destroy - Remove the specified resource from storage.
    public function destroy(){
        
    }
    //------------------------------------------------------------------------------------------------------------
}

/*

index - Display a listing of the resource.
create - Show the form for creating a new resource.
store - Store a newly created resource in storage.
show - Display the specified resource.
edit - Show the form for editing the specified resource.
update - Update the specified resource in storage.
destroy - Remove the specified resource from storage.

*/
?>