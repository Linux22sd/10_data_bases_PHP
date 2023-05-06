<?php
namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController{
    private $connection;
    public function __construct(){
        $this->connection = Connection::get_instance()->get_database_instance();
    }

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // index   - Muestra la lista de este recurso (el recurso puede ser una tabla).
    public function index(){
        $stmt = $this->connection->prepare("SELECT * FROM incomes");
        $stmt->execute();

        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        require("../resouces/views/incomes/index.php");
    }
    //------------------------------------------------------------------------------------------------------------

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // create  - Muestra un formularioa para poder crear un recurso.
    public function create(){
        require("../resouces/views/incomes/create.php");
    }
    //------------------------------------------------------------------------------------------------------------

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // store   - Guarda un nuevo recurso en base de datos.
    public function store($datos){
        //Usando prepare
        $stmt = $this->connection->prepare("INSERT INTO incomes(payment_method, type, date, amount, description)
            VALUES(:payment_method, :type, :date, :amount, :description)");

            $stmt->bindParam( ":payment_method", $datos['payment_method'] );
            $stmt->bindParam( ":type", $datos['type'] );
            $stmt->bindParam( ":date", $datos['date'] );
            $stmt->bindParam( ":amount", $datos['amount'] );
            $stmt->bindParam( ":description", $datos['description'] );

        $stmt->execute();

        header("location: /incomes");
    }
    //------------------------------------------------------------------------------------------------------------

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // show    - Muestra un  recurso especifico.
    public function show($id){

        $stmt = $this->connection->prepare("SELECT * FROM incomes WHERE customer_id = :id");

        $stmt->execute([
            ":id" => $id
        ]);

        $results = $stmt->fetch();
        require("../resouces/views/incomes/index_id.php");
        
    }
    //------------------------------------------------------------------------------------------------------------

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // edit    - Mostrar un formulario grfico para editar un recurso o registro.
    public function edit($id2){
        $stmt = $this->connection->prepare("SELECT * FROM incomes WHERE customer_id = :id");
        $stmt->execute([
            ":id"=> $id2
        ]);

        $results = $stmt->fetch();

        require("../resouces/views/incomes/edit.php");
    }
    //------------------------------------------------------------------------------------------------------------

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // update  - Actualizar el registro pero ya dentro de la base de datos.
    public function update($data, $id){

        $stmt = $this->connection->prepare("UPDATE incomes SET 
            payment_method = :payment_method,
            type = :type,
            date = :date,
            amount = :amount,
            description = :description
            WHERE customer_id = :id");

        $stmt->execute([
            ':id' => $id,
            ':payment_method' => $data['payment_method'],
            ':type' => $data['type'],
            ':date' => $data['date'],
            ':amount' => $data['amount'],
            ':description' => $data['description']
        ]);

        header("location: /incomes");
    }
    //------------------------------------------------------------------------------------------------------------

    //                              =======================================

    //------------------------------------------------------------------------------------------------------------
    // destroy - Eliminar registro.
    public function destroy($id3){

        //$this->connection->beginTransaction();
        $stmt = $this->connection->prepare("DELETE FROM incomes WHERE customer_id = :id");

        //$results = $stmt->fetch();

        $stmt->execute([
            ":id" => $id3
        ]);
      
        header("location: /incomes");
        
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