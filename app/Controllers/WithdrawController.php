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

        /*
        // Usando fechAll para imprimir en pantalla
        $stmt = $this->connection->prepare("SELECT * FROM withdraw");
        $stmt->execute();

        $results = $stmt->fetchAll();

        foreach($results as $result){
            echo "Gastaste {$result['amount']} Pesos en la {$result['description']} <br>";
        }
        */
        
         //===========================================================================
         /*

         // Usando FETCH_COLUM para imprimir en pantalla
         $stmt = $this->connection->prepare("SELECT * FROM withdraw");
         $stmt->execute();
 
         $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

         echo "<pre>";
         print_r($results);
         echo "</pre>";

        //  foreach($results as $result){
        //     echo "Gastaste $result Pesos <br>";
        //}

        */

        /*
        //=================================================================================
        // Usando solo fetch para listar todo
        
        $stmt = $this->connection->prepare("SELECT * FROM withdraw");
        $stmt->execute();

        while($row = $stmt->fetch()){
            echo "{$row['amount']}<br>";
        }

        */

        /*
        //=================================================================================
        // Usando bindColumn
        
        $stmt = $this->connection->prepare("SELECT * FROM withdraw");
        $stmt->execute();
        $stmt->bindColumn("amount",$amount);
        $stmt->bindColumn("description",$description);

        while($stmt->fetch()){
            echo "$amount $description<br>";
        }
        */
    }
    

    //--------------------------------------------------------------------------------------------------------------------
    // create - Show the form for creating a new resource.
    public function create(){
        
    }

    //--------------------------------------------------------------------------------------------------------------------
    // store - Store a newly created resource in storage.
    public function store($datos){

        /*
        // Usando exec no muy seguro ya que puede ser inyectado 
        $afected_rows = $this->connection->exec("INSERT INTO withdraw (payment_method, type, date, amount, description)VALUES(
            {$datos['payment_method']},
            {$datos['type']},
            '{$datos['date']}',
            {$datos['amount']},
            '{$datos['description']}'
            )");
            
        echo "Se han insertado $afected_rows fila en la base de datos";
        */
        //=====================================================================
        
        /*
        // Usuando prepare mas seguro
        $stmt = $this->connection->prepare("INSERT INTO withdraw (payment_method, type, date, amount, description)
            VALUES(:payment_method, :type, :date, :amount, :description)");

        $stmt->execute($datos);
        */

        //===================================================================
        //Ligando parametros
        /*
        // Usuando bindParam
        $stmt = $this->connection->prepare("INSERT INTO withdraw (payment_method, type, date, amount, description)
            VALUES(:payment_method, :type, :date, :amount, :description)");

        $stmt->bindParam(":payment_method", $datos["payment_method"]);
        $stmt->bindParam(":type", $datos["type"]);
        $stmt->bindParam(":date", $datos["date"]);
        $stmt->bindParam(":amount", $datos["amount"]);
        $stmt->bindParam(":description", $datos["description"]);
        
        // Usando bindParam se cambiara el valor de descripcion
        $datos["description"] = "se ha combiado el mensaje";

        $stmt->execute();
        */
        
        // ============================================================================
        /*
        // Usuando bindValue
        $stmt = $this->connection->prepare("INSERT INTO withdraw (payment_method, type, date, amount, description)
            VALUES(:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $datos["payment_method"]);
        $stmt->bindValue(":type", $datos["type"]);
        $stmt->bindValue(":date", $datos["date"]);
        $stmt->bindValue(":amount", $datos["amount"]);
        $stmt->bindValue(":description", $datos["description"]);

        // Usando bindValue no se cambiara el valor de descripcion
        $datos["description"] = "se ha combiado lel mensaje";

        $stmt->execute();

        */

        //==============================================================================
    
    }
    //--------------------------------------------------------------------------------------------------------------------
    // show - Display the specified resource.
    public function show($id){
        $stmt = $this->connection->prepare("SELECT * FROM withdraw WHERE costumer_id = :id");

        $stmt->execute([
            ":id" => $id
        ]);
   

        $result = $stmt->fetch();
        echo "El registro del id $id muestra que gastaste {$result["amount"]} pesos en {$result["description"]}";
     
        // $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        // echo "<pre>";
        // echo print_r($result);
        // echo "</pre>";


    }

    //--------------------------------------------------------------------------------------------------------------------
    // edit - Show the form for editing the specified resource.
    public function edit(){
        
    }

    //--------------------------------------------------------------------------------------------------------------------
    // update - Update the specified resource in storage.
    public function update(){
        
    }

    //--------------------------------------------------------------------------------------------------------------------
    // destroy - Remove the specified resource from storage.
    public function destroy($id){
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare("DELETE FROM withdraw WHERE costumer_id = :id");

        $stmt->execute([
            ":id" => $id
        ]);

        $sure = readline("Estas seguro de eliminar este dato SI para continuar NO para cancelar    ");

        if($sure == "no"){
            $this->connection->rollBack();
            echo "Operacion Cancelada \n";
        }
        elseif($sure == "si"){
            $this->connection->commit();
            echo "La fila con el id numero $id ha sido eliminada \n";
        };

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