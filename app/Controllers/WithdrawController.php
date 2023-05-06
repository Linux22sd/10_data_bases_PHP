<?php
namespace App\Controllers;

use Database\PDO\Connection;


class WithdrawController{
    private $connection;
    public function __construct(){
        $this->connection = Connection::get_instance()->get_database_instance();
    }


    //-------------------------------------------------------------------------------------------------------------------
    // index - Display a listing of the resource.
    public function index(){
        // Usando fechAll para imprimir en pantalla
        $stmt = $this->connection->prepare("SELECT * FROM withdraw");
        $stmt->execute();

        // $stmt->fetch();

        // while($result = $stmt->fetch()){
        //     echo "Gastaste {$result['amount']} Pesos en {$result['description']} <br>";
        // }

        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        foreach($results as $result){
            echo "Gastaste {$result['amount']} Pesos en {$result['description']} <br>";
        }
    }
    

    //--------------------------------------------------------------------------------------------------------------------
    // create - Show the form for creating a new resource.
    public function create(){
        
    }

    //--------------------------------------------------------------------------------------------------------------------
    // store - Store a newly created resource in storage.
    public function store($datos){
        
        $stmt = $this->connection->prepare("INSERT INTO withdraw (payment_method, type, date, amount, description)
            VALUES(:payment_method, :type, :date, :amount, :description)");

        $stmt->execute([
            ':payment_method' => $datos['payment_method'],
            ':type' => $datos['type'],
            ':date' => $datos['date'],
            ':amount' => $datos['amount'],
            ':description' => $datos['description']
        ]);
        echo "Compra agregada";

    }
    //--------------------------------------------------------------------------------------------------------------------
    // show - Display the specified resource.
    public function show($id){
        $stmt = $this->connection->prepare("SELECT * FROM withdraw WHERE customer_id = :id");

        $stmt->execute([
            ":id" => $id
        ]);

        $results = $stmt->fetch();
        
        echo "El customer con el id numero $id gasto {$results['amount']} pesos en {$results['description']}";

    }

    //--------------------------------------------------------------------------------------------------------------------
    // edit - Show the form for editing the specified resource.
    public function edit(){
        
    }

    //--------------------------------------------------------------------------------------------------------------------
    // update - Update the specified resource in storage.
    public function update($data, $id){
        $stmt = $this->connection->prepare("UPDATE withdraw 
            SET 
                payment_method = :payment_method,
                type = :type,
                date = :date,
                amount = :amount,
                description = :description
            WHERE customer_id = :customer_id ");

            $stmt->execute([
                ":customer_id" => $id,
                ":payment_method" => $data['payment_method'],
                ":type" => $data['type'],
                ":date" => $data['date'],
                ":amount" => $data['amount'],
                ":description" => $data['description']
            ]);

            echo "update efectudo con exito";
    }

    //--------------------------------------------------------------------------------------------------------------------
    // destroy - Remove the specified resource from storage.
    public function destroy($id){
        //$this->connection->beginTransaction();
        $stmt = $this->connection->prepare("DELETE FROM withdraw WHERE customer_id = :id");

        $stmt->execute([
            ":id" => $id
        ]);

        echo "Informacion de id numero $id borrada con exito";
        // $sure = readline("Estas seguro de eliminar este dato SI para continuar NO para cancelar    ");

        // if($sure == "no"){
        //     $this->connection->rollBack();
        //     echo "Operacion Cancelada \n";
        // }
        // elseif($sure == "si"){
        //     $this->connection->commit();
        //     echo "La fila con el id numero $id ha sido eliminada \n";
        // };

        //
        
    }
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